<?php

namespace App\Http\Controllers;

use App\Companion;
use Illuminate\Http\Request;

class CompanionController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            "names" => "required|string",
            "flast_name" => "required|string",
            "mlast_name" => "string",
            "age" => "required|integer",
            "sex" => "required",
            "scholarship_id" => "required|integer",
            "identification" => "string",
            "health_status" => "required",
            "working" => "required|boolean",
            "occupation_id" => "required|integer",
            "paid_leave" => "required|boolean",
            "healthcare" => "required|boolean",
            "economic_dependencies" => "required|integer",
            "home_owner" => "required|boolean",
            "rent" => "required|numeric",
            "financial_aid" => "required|boolean",
            "monthly_income" => "required|numeric",
            "remarks" => "string"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $companion = Companion::create($request->all());

        $result = $companion->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $companion
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Companion::get()
            ),200);
        }
        else{
            $companion = Companion::find($request->id);
            if ($companion == null) {
                return response()->json(array(
                    "error" => "id ".$companion->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $companion),200);
            }
        }
    }

    public function update(Request $request){
        $validator = Validator::make($request->all(), [
            "names" => "required|string",
            "flast_name" => "required|string",
            "mlast_name" => "string",
            "age" => "required|integer",
            "sex" => "required",
            "scholarship_id" => "required|integer",
            "identification" => "string",
            "health_status" => "required",
            "working" => "required|boolean",
            "occupation_id" => "required|integer",
            "paid_leave" => "required|boolean",
            "healthcare" => "required|boolean",
            "economic_dependencies" => "required|integer",
            "home_owner" => "required|boolean",
            "rent" => "required|numeric",
            "financial_aid" => "required|boolean",
            "monthly_income" => "required|numeric",
            "remarks" => "string"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $companion = Companion::findOrFail($request->id);
  
        if ($companion->update($request->all())) {
            return response()->json(array("data" => $companion),200);
        } else {
            return response()->json(array("error"=>"could not store data"),500);
        }
    }

    public function delete(Request $request){
        $companion = Companion::findOrFail($request->id);
        
        if(!$companion->delete()){
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
