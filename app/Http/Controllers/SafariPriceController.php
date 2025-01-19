<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SafariPrice;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class SafariPriceController extends Controller
{
    public function index()
    {
        $data = User::where('id','=',Session::get('loginId'))->first();
        return view('admin.safari_data',compact('data'));
    }

    public function getData(Request $request)
    {
        try {
            $filter = $request->input('keyword', ''); 

            $DataQuery = SafariPrice::query(); // Start querying the Shift model

            // Apply filter if keyword is provided
            if (!empty($filter)) {
                $DataQuery->where('destination', 'like', '%' . $filter . '%');
            }


            // Fetch data with pagination and order by date descending
            $data = $DataQuery->orderBy('id', 'asc')
                               ->get();

            // Pagination links
            // $links = $data->links();

            // Prepare table data for HTML
            $table_data = '<thead>
                            <tr class="stickey_head">
                                <th>#</th>
                                <th>Destination</th>
                                <th>Ammount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>';

            foreach ($data as $row) {
                $table_data .= '<tr>';
                $table_data .= '<td>' . $row->id . '</td>';
                $table_data .= '<td style="font-size: 13px">' . $row->destination . '</td>';
                $table_data .= '<td style="font-size: 13px">' . $row->amount . '</td>';
                $table_data .= '<td>
                                    <button style="width:66px;height:30px" onclick="edit_data(' . $row->id . ',\'' . $row->destination . '\',\'' . $row->amount . '\')" class="btn btn-info btn-sm btn-round">Edit</button>
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
                'error' => 'Error fetching safari.',
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
            SafariPrice::create($request->all());
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

    public function destroy(SafariPrice $SafariPrice)
    {
       
        try {
            $SafariPrice->delete();
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
    
  

    public function update(Request $request, SafariPrice $SafariPrice)
    {
        $request->validate([
            'destination' => 'required|string|max:255',
            'amount' => 'required|numeric',
        ]);

        try {
             $SafariPrice->update($request->all());
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
