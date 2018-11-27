<?php

namespace App\Http\Controllers;

use App\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            "name" => "required|string"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $scholarship = Scholarship::create($request->all());

        $result = $scholarship->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $scholarship
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Scholarship::get()
            ),200);
        }
        else{
            $scholarship = Scholarship::find($request->id);
            if ($scholarship == null) {
                return response()->json(array(
                    "error" => "id ".$scholarship->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $scholarship),200);
            }
        }
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            "name" => "required|string"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $scholarship = Scholarship::findOrFail($request->id);
  
        if ($scholarship->update($request->all())) {
            return response()->json(array("data" => $scholarship),200);
        } else {
            return response()->json(array("error"=>"could not store data"),500);
        }
    }

    public function delete(Request $request){
        $scholarship = Scholarship::findOrFail($request->id);
        
        if(!$scholarship->delete()){
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
