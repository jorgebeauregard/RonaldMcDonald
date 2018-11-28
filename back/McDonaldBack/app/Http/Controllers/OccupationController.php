<?php

namespace App\Http\Controllers;

use App\Occupation;
use Illuminate\Http\Request;

class OccupationController extends Controller
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

        $occupation = Occupation::create($request->all());

        $result = $occupation->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $occupation
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Occupation::get()
            ),200);
        }
        else{
            $occupation = Occupation::find($request->id);
            if ($occupation == null) {
                return response()->json(array(
                    "error" => "id ".$occupation->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $occupation),200);
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

        $occupation = Occupation::findOrFail($request->id);
  
        if ($occupation->update($request->all())) {
            return response()->json(array("data" => $occupation),200);
        } else {
            return response()->json(array("error"=>"could not store data"),500);
        }
    }

    public function delete(Request $request){
        $occupation = Occupation::findOrFail($request->id);
        
        if(!$occupation->delete()){
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
