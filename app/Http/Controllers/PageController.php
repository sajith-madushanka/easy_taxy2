<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MinibusPrice;
use App\Models\MinibusBook;
use App\Models\AvailableSeats;
use Carbon\Carbon;

class PageController extends Controller
{
    public function landing()
    {
        return view('landing');
    }
    public function minibus()
    {
        return view('minibusservice');
    }

    public function private()
    {
        return view('privatevehicle');
    }

    public function safari()
    {
        return view('safari');
    }

    public function minibusDestination(Request $request)
    {
        try {

            $dataQuery = MinibusPrice::query();
            $minibusPrices = $dataQuery->orderBy('destination', 'desc')->get();

            $options = '<option>Select the destination</option>';
            foreach ($minibusPrices as $price) {
                $options .= '<option value="' . $price->id . '">' . $price->destination . '</option>';
            }

            $Booked_seats = [];
            $today = Carbon::today();

            $available_seat = AvailableSeats::whereDate('date', $today)
                ->orderBy('id', 'desc')
                ->first();

            if ($available_seat) {
                $Booked_seats = json_decode($available_seat->seats, true);
            }

            return response()->json([
                'data' => $options,
                'booked_seats' => $Booked_seats
            ]);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function minibusDateSeats(Request $request)
    {
        try {
            $Booked_seats = [];

            $available_seat = AvailableSeats::whereDate('date', $request->date)
                ->orderBy('id', 'desc')
                ->first();

            if ($available_seat) {
                $Booked_seats = json_decode($available_seat->seats, true);
            }

            return response()->json([
                'booked_seats' => $Booked_seats
            ]);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function minibusGetPrice(Request $request)
    {
        try {

            $selected_seats = request()->selected_seats;
            $destination = request()->destination;
            $date = request()->date;

            $dataQuery = MinibusPrice::query();
            $minibusPrices = $dataQuery->select('amount')->where('id', $destination)->first();


            return response()->json([
                'price' => $minibusPrices->amount * count($selected_seats)
            ]);
        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function minibusBook(Request $request)
    {
        try {

            $selected_seats = request()->selected_seats;
            $destination = request()->destination;
            $date = request()->date;
            $name = request()->name;
            $phone = request()->phone;
            $note = request()->note;
            $dataQuery = MinibusPrice::query();
            $minibusPrices = $dataQuery->select('amount')->where('id', $destination)->first();
            $price = $minibusPrices->amount * count($selected_seats);

            $minibusBooking = MinibusBook::create([
                'destination' => $destination,
                'seats' => json_encode($selected_seats), // Store the selected seats as JSON
                'date' => $date,
                'name' => $name,
                'phone' => $phone,
                'note' => $note,
                'price' => $price
            ]);

            $this->updateAvailableSeats($date, $selected_seats);

            // Send a confirmation SMS
            $this->sendBookingConfirmation($phone, $selected_seats, $date);

            // Return a success response or redirect, depending on your needs
            return response()->json([
                'message' => 'Booking successfully created and confirmation sent!',
                'data' => $minibusBooking
            ]);




        } catch (\Exception $e) {
            // Handle exceptions
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    private function updateAvailableSeats($date, $selectedSeats)
    {
        // Find the AvailableSeats record for the given date
        $availableSeats = AvailableSeats::where('date', $date)->first();

        // If the record exists, update it
        if ($availableSeats) {
            $currentSeats = json_decode($availableSeats->seats, true);
            // Merge the new selected seats with the existing ones
            $updatedSeats = array_merge($currentSeats, $selectedSeats);
            $availableSeats->seats = json_encode(array_unique($updatedSeats));  // Remove duplicates, if any
            $availableSeats->save();
        } else {
            // If no record exists for the given date, create a new one
            AvailableSeats::create([
                'date' => $date,
                'seats' => json_encode($selectedSeats)
            ]);
        }
    }

    private function sendBookingConfirmation($phone, $selectedSeats, $date)
    {
        // Prepare the message content
        $seats = implode(", ", $selectedSeats);
        $message = "Your booking is confirmed! Seats: $seats on $date.";
        $phone = '94' . substr($phone, 1);
        // Send the SMS using notify.lk API
        $this->sendSMS($phone, $message);
    }

    function sendSMS($phone, $message) {
        // Your API credentials
        $user_id = '28770';  // Replace with your actual User ID
        $api_key = 'x9XWASFaqrr1o9b9qYnn';  // Replace with your actual API Key
        $sender_id = 'Eztaxi';  // Replace with your approved Sender ID, or use "NotifyDEMO" for testing
        
        // Build the URL with query parameters
        $url = "https://app.notify.lk/api/v1/send?user_id=" . urlencode($user_id) .
               "&api_key=" . urlencode($api_key) .
               "&sender_id=" . urlencode($sender_id) .
               "&to=" . urlencode($phone) .
               "&message=" . urlencode($message);
    
        // Initialize cURL session
        $ch = curl_init();
        
        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $url);  // Use the URL with parameters
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Return the response as a string
        
        // Execute the cURL request and store the response
        $response = curl_exec($ch);
    
        // Check for errors
        if (curl_errno($ch)) {
            // If there's an error, log the error message
            \Log::error("SMS sending failed: " . curl_error($ch));
            return "Error: " . curl_error($ch);
        } else {
            // Log the response from the API (successful or failure)
            \Log::info("SMS response: " . $response);
            return $response;  // Return the API response (success/failure)
        }
    
        // Close the cURL session
        curl_close($ch);
    }



    public function store(Request $request)
    {
        $request->validate([
            'destination' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);
        try {
            MinibusPrice::create($request->all());
            $data  = [
                "ok" => 1,
                "msg" => "Successfully created",
            ];
        } catch (\Exception $e) {
            $data  = [
                "ok" => 0,
                "msg" => "Invalid data",
            ];
        }



        return response()->json($data);
    }

    public function destroy(MinibusPrice $MinibusPrice)
    {

        try {
            $MinibusPrice->delete();
            $data  = [
                "ok" => 1,
                "msg" => "Successfully Deleted",
            ];
        } catch (\Exception $e) {
            $data  = [
                "ok" => 0,
                "msg" => "Cant Delete",
            ];
        }
        return response()->json($data);
    }



    public function update(Request $request, MinibusPrice $MinibusPrice)
    {
        $request->validate([
            'destination' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        try {
            $MinibusPrice->update($request->all());
            $data  = [
                "ok" => 1,
                "msg" => "Successfully updated",
            ];
        } catch (\Exception $e) {
            $data  = [
                "ok" => 0,
                "msg" => "Invalid data",
            ];
        }
        return response()->json($data);
    }
}
