<?php

namespace App\Http\Controllers;

use App\Hospital;
use Illuminate\Http\Request;
use Validator;

class HospitalController extends Controller
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

        $hospital = Hospital::create([
            "name"      => $request->name
        ]);

        $result = $hospital->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $hospital
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Hospital::get()
            ),200);
        }
        else{
            $hospital = Hospital::find($request->id);
            if ($hospital == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $hospital),200);
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

        $hospital = Hospital::find($request->id);
        if ($hospital == null) {
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

        $hospital->name = $request->name;
        $result = $hospital->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $hospital
        ),200);
        

    }

    public function delete(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $hospital = Hospital::find($request->id);
        if ($hospital == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }

        $result = $hospital->delete();

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
