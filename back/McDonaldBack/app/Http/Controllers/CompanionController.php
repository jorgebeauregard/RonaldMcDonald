<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Companion;
use Illuminate\Http\Request;
use App\Scholarship;
use App\Occupation;
use Validator;
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
            "remarks" => "string",
            "child_id" => "required|integer",
            "relationship_id" => "required|integer"
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $companion = Companion::create($request->except('child_id'));

        $result = $companion->save();

        DB::table('child_companion')->insert(['child_id' => $request->child_id, 'companion_id' => $companion->id, 'relationship_id' => $request->relationship_id]);

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
            $companions = Companion::get();

            foreach($companions as $companion){
                $scholarship = Scholarship::find($companion->scholarship_id);
                if($scholarship != null){
                    $companion->scholarship = $scholarship->name;
                }

                $occupation = Occupation::find($companion->scholarship_id);
                if($occupation != null){
                    $companion->occupation = $occupation->name;
                }
            }
            return response()->json(array(
                "data" => $companions
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
                /*  
                    "scholarship_id": 6,
                    "occupation_id": 1,
                }
                }
                 */

                $scholarship = Scholarship::find($companion->scholarship_id);
                if($scholarship != null){
                    $companion->scholarship = $scholarship->name;
                }

                $occupation = Occupation::find($companion->scholarship_id);
                if($occupation != null){
                    $companion->occupation = $occupation->name;
                }

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
