<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;
use Validator;

class DoctorController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(),[
            "names" => "required|string",
            "flast_name" => "required|string",
            "mlast_name" => "required|string"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $doctor = Doctor::create([
            "names" => $request->names,
            "flast_name" => $request->flast_name,
            "mlast_name" => $request->mlast_name
        ]);

        $result = $doctor->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $doctor
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Doctor::get()
            ),200);
        }
        else{
            $doctor = Doctor::find($request->id);
            if ($doctor == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $doctor),200);
            }
        }
    }

    public function update(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $doctor = Doctor::find($request->id);
        if ($doctor == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }

        $validator = Validator::make($request->all(), [
            "names" => "required|string",
            "flast_name" => "required|string",
            "mlast_name" => "required|string"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $doctor->names = $request->names;
        $doctor->flast_name = $request->flast_name;
        $doctor->mlast_name = $request->mlast_name;
        $result = $doctor->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $doctor
        ),200);
    }

    public function delete(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $doctor = Doctor::find($request->id);
        if ($doctor == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }

        $result = $doctor->delete();

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
