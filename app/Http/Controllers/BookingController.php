<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MinibusPrice;
use App\Models\MinibusBook;
use App\Models\AvailableSeats;


use App\Models\PrivatePrice;
use App\Models\PrivateBook;

use Carbon\Carbon;

class BookingController extends Controller
{
   
    ///////////////////////////////// Minibus Controllers/////////////////////////////////////////////////
    public function minibusDestination(Request $request)
    {
        try {

            $dataQuery = MinibusPrice::query();
            $minibusPrices = $dataQuery->orderBy('destination', 'asc')->get();

            $options = '<option value="" disabled selected>Select the destination</option>';
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
            $this->sendBookingConfirmation($phone, $selected_seats, $date,$name);

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

    private function sendBookingConfirmation($phone, $selectedSeats, $date,$name)
    {
        // Prepare the message content
        $seats = implode(", ", $selectedSeats);
        $message = "Your booking is confirmed for mini bus seats: $seats on $date. Our office will contact you briefly on WhatsApp by this number, +94774373545. With payment information.";
        // Send the SMS using notify.lk API
        $this->sendSMS($phone, $message);

        $adminPhone = "0774373545"; 

        $adminMessage = "$name($phone) booked a share taxi seat  $seats  for $date";
        $adminPhone = '94' . substr($adminPhone, 1); 

        // Send SMS to the admin
        $this->sendSMS($adminPhone, $adminMessage);

        $adminPhone2 = "0742833545"; 
        $adminPhone2 = '94' . substr($adminPhone2, 1); 

        // Send SMS to the admin
        $this->sendSMS($adminPhone2, $adminMessage);
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

    ///////////////////////////////// Private Controllers/////////////////////////////////////////////////

    public function privatePickup(Request $request)
    {
        try {

            $pickups = PrivatePrice::select('pickup')->distinct()->get(); 

            $optionsPickup = '<option value="" disabled selected>Select the pickup location</option>';
            foreach ($pickups as $pickup) {
                $optionsPickup .= '<option value="' . $pickup->pickup . '">' . $pickup->pickup . '</option>';
            }

            return response()->json([
                'data' => $optionsPickup
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function privateDestinations(Request $request)
    {
        try {
            $destinations = PrivatePrice::where('pickup', request()->pickup)->distinct()->get('destination');
    
            $optionsDestination = '<option value="" disabled selected>Select the destination</option>';
            foreach ($destinations as $destination) {
                $optionsDestination .= '<option value="' . $destination->destination . '">' . $destination->destination . '</option>';
            }
    
            return response()->json([
                'data' => $optionsDestination
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function privateGetPrice(Request $request)
    {
        try {

            $pickup = request()->pickup;
            $type = request()->type;
            $destination = request()->destination;
            $return_trip = request()->return_trip;

            $price = PrivatePrice::select('amount','return_trip')->where('type', $type)->where('destination', $destination)->where('pickup', $pickup)->first();
            $privateprice = $price->amount;
            if($return_trip == 'true'){
                $privateprice += $price->return_trip;
            }

            return response()->json([
                'price' => $privateprice
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function privateBook(Request $request)
    {
        try {

            $pickup = request()->pickup;
            $type = request()->type;
            $destination = request()->destination;
            $return_trip = request()->return_trip;
            $date = request()->date;
            $time = request()->time;
            $name = request()->name;
            $phone = request()->telinput;
            $note = request()->note;


            $dataQuery = PrivatePrice::query();
            $privatePrices = $dataQuery->select('id','amount','return_trip')->where('type', $type)->where('destination', $destination)->where('pickup', $pickup)->first();
            $privateprice = $privatePrices->amount;
            if($return_trip == 'true'){
                $privateprice += $privatePrices->return_trip;
            }

            $minibusBooking = PrivateBook::create([
                'private_price' => $privatePrices->id,
                'return_trip' => $return_trip, 
                'date' => $date,
                'time' => $time,
                'name' => $name,
                'phone' => $phone,
                'note' => $note,
                'price' => $privateprice
            ]);


            $this->sendBookingConfirmation2($phone, $type, $date, $time,$name);

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

    private function sendBookingConfirmation2($phone, $vehicleType, $date, $time,$name)
    {
        $message = "Your booking is confirmed for a $vehicleType on $date at $time. Our office will contact you briefly on WhatsApp by this number, +94774373545. With payment information.";
        $this->sendSMS($phone, $message);

        $adminPhone = "0774373545"; 

        // $adminMessage = "New booking notification: $message"; 
        $adminMessage = "$name($phone) booked a private $vehicleType for $date";
        $adminPhone = '94' . substr($adminPhone, 1); 

        // Send SMS to the admin
        $this->sendSMS($adminPhone, $adminMessage);

        $adminPhone2 = "0742833545"; 
        $adminPhone2 = '94' . substr($adminPhone2, 1); 

        // Send SMS to the admin
        $this->sendSMS($adminPhone2, $adminMessage);
    }

    public function bookings(Request $request)
    {
        try {
            $date = $request->query('date');

            $minibus = MinibusBook::where('date', $date)->with('price_row')->get();
            $private = PrivateBook::where('date', $date)->with('price_row')->get();
            // $safari = SafariBook::where('date', $date)->get();
            $safari = [];
            return response()->json([
                'minibus' => $minibus,
                'private' => $private,
                'safari' => $safari
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Error fetching data.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    
}
