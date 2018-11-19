<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialWorker;
use Validator;
class SocialWorkerController extends Controller
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

        $worker = SocialWorker::create([
            "names" => $request->names,
            "flast_name" => $request->flast_name,
            "mlast_name" => $request->mlast_name
        ]);

        $result = $worker->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $worker
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => SocialWorker::get()
            ),200);
        }
        else{
            $worker = SocialWorker::find($request->id);
            if ($worker == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $worker),200);
            }
        }
    }

    public function update(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $worker = SocialWorker::find($request->id);
        if ($worker == null) {
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

        $worker->names = $request->names;
        $worker->flast_name = $request->flast_name;
        $worker->mlast_name = $request->mlast_name;
        $result = $worker->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $worker
        ),200);
    }

    public function delete(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $worker = SocialWorker::find($request->id);
        if ($worker == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }

        $result = $worker->delete();

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
