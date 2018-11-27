<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransportController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            "child_id" => "required|integer",
            "transport_count" => "required|integer",
            "transport_date" => "required|date"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $transport = Transport::create([
            "child_id" => $request->child_id,
            "transport_count" => $request->transport_count,
            "transport_date" => $request->transport_date
        ]);

        $result = $transport->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $transport
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Transport::get()
            ),200);
        }
        else{
            $transport = Transport::find($request->id);
            if ($transport == null) {
                return response()->json(array(
                    "error" => "id ".$transport->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $transport),200);
            }
        }
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            "child_id" => "required|integer",
            "transport_count" => "required|integer",
            "transport_date" => "required|date"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $transport = Transport::findOrFail($request->id);
  
        if ($transport->update($request->all())) {
            return response()->json(array("data" => $transport),200);
        } else {
            return response()->json(array("error"=>"could not store data"),500);
        }
    }

    public function delete(Request $request){
        $transport = Transport::findOrFail($request->id);
        
        if(!$transport->delete()){
            return response()->json(array(
                "error"=>"could not delete data"
            ),500);
        }

        return response()->json(array(
            "data" => array(
                "message" => "ok"
            )
        ),200);
    }
}
