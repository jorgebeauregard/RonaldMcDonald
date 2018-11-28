<?php

namespace App\Http\Controllers;

use App\Relationship;
use Illuminate\Http\Request;

class RelationshipController extends Controller
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

        $relationship = Relationship::create($request->all());

        $result = $relationship->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $relationship
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Relationship::get()
            ),200);
        }
        else{
            $relationship = Relationship::find($request->id);
            if ($relationship == null) {
                return response()->json(array(
                    "error" => "id ".$relationship->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $relationship),200);
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

        $relationship = Relationship::findOrFail($request->id);
  
        if ($relationship->update($request->all())) {
            return response()->json(array("data" => $relationship),200);
        } else {
            return response()->json(array("error"=>"could not store data"),500);
        }
    }

    public function delete(Request $request){
        $relationship = Relationship::findOrFail($request->id);
        
        if(!$relationship->delete()){
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
