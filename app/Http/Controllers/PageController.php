<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MinibusPrice;
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
