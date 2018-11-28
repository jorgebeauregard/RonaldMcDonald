<?php

namespace App\Http\Controllers;

use App\Ration;
use Illuminate\Http\Request;
use Validator;

class RationController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            "child_id" => "required|integer",
            "ration_count" => "required|integer",
            "delivery_date" => "required|date"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $ration = Ration::create([
            "child_id" => $request->child_id,
            "ration_count" => $request->ration_count,
            "delivery_date" => $request->delivery_date
        ]);

        $result = $ration->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $ration
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Ration::get()
            ),200);
        }
        else{
            $ration = Ration::find($request->id);
            if ($ration == null) {
                return response()->json(array(
                    "error" => "id ".$ration->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $ration),200);
            }
        }
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            "child_id" => "required|integer",
            "ration_count" => "required|integer",
            "delivery_date" => "required|date"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $ration = Ration::findOrFail($request->id);
  
        if ($ration->update($request->all())) {
            return response()->json(array("data" => $ration),200);
        } else {
            return response()->json(array("error"=>"could not store data"),500);
        }
    }

    public function delete(Request $request){
        $ration = Ration::findOrFail($request->id);
        
        if(!$ration->delete()){
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
