<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrivatePrice;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class PrivatePriceController extends Controller
{
    public function index()
    {
        $data = User::where('id','=',Session::get('loginId'))->first();
        return view('admin.private_data',compact('data'));
    }

    public function getData(Request $request)
    {
        try {
            $filter = $request->input('keyword', ''); // Retrieve keyword from request
          

            $DataQuery = PrivatePrice::query(); // Start querying the Shift model

            // Apply filter if keyword is provided
            if (!empty($filter)) {
                $DataQuery->where('destination', 'like', '%' . $filter . '%');
            }


            $data = $DataQuery->orderBy('id', 'asc')
                               ->get();


            // Prepare table data for HTML
            $table_data = '<thead>
                            <tr class="stickey_head">
                                <th>#</th>
                                <th>Pickup</th>
                                <th>Destination</th>
                                <th>Type</th>
                                <th>Ammount</th>
                                <th>Return Trip</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';

            foreach ($data as $row) {
                $table_data .= '<tr>';
                $table_data .= '<td>' . $row->id . '</td>';
                $table_data .= '<td style="font-size: 13px">' . $row->pickup . '</td>';
                $table_data .= '<td style="font-size: 13px">' . $row->destination . '</td>';
                $table_data .= '<td style="font-size: 13px">' . $row->type . '</td>';
                $table_data .= '<td style="font-size: 13px">' . $row->amount . '</td>';
                $table_data .= '<td style="font-size: 13px">' . $row->return_trip . '</td>';
                $table_data .= '<td>
                                    <button style="width:66px;height:30px" onclick="edit_data(' . $row->id . ',\''. $row->pickup . '\',\''  . $row->destination . '\',\''  . $row->type . '\',\'' . $row->amount . '\',\'' . $row->return_trip . '\')" class="btn btn-info btn-sm btn-round">Edit</button>
                                    <button style="width:66px;height:30px" onclick="delete_data(' . $row->id . ')" class="btn btn-danger btn-sm btn-round">Delete</button>
                                </td>';
                $table_data .= '</tr>';
            }

            $table_data .= '</tbody>';

            // Return JSON response with table data and pagination links
            return response()->json([
                'table_data' => $table_data
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
            'pickup' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'return_trip' => 'required|numeric',
            'type' => 'required|string|max:255',
        ]);
        try {
            PrivatePrice::create($request->all());
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

    public function destroy(PrivatePrice $PrivatePrice)
    {
       
        try {
            $PrivatePrice->delete();
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
    
  

    public function update(Request $request, PrivatePrice $PrivatePrice)
    {
        $request->validate([
            'pickup' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'return_trip' => 'required|numeric',
            'type' => 'required|string|max:255',
        ]);

        try {
             $PrivatePrice->update($request->all());
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
