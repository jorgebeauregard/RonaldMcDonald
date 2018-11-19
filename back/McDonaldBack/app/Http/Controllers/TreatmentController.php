<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Treatment;

class TreatmentController extends Controller
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

        $treatment = Treatment::create([
            "name"      => $request->name
        ]);

        $result = $treatment->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $treatment
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Treatment::get()
            ),200);
        }
        else{
            $treatment = Treatment::find($request->id);
            if ($treatment == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $treatment),200);
            }
        }
    }

    public function update(Request $request){
        /* 
        return response()->json(array(
            "hola" => $request->toArray()
        ));
        */
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $treatment = Treatment::find($request->id);
        if ($treatment == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }

        $validator = Validator::make($request->all(), [
            "name" => "required|string"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $treatment->name = $request->name;
        $result = $treatment->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $treatment
        ),200);
        

    }

    public function delete(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $treatment = Treatment::find($request->id);
        if ($treatment == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }

        $result = $treatment->delete();

        if(!$result){
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
