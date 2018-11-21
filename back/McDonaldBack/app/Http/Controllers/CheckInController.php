<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Child;
use App\Hospital;
use App\Doctor;
use App\Diagnosis;
use App\Treatment;
use App\Diet;
use App\SocialWorker;

class CheckInController extends Controller
{
    public function create(Request $request){
        /* Closed temporarily
        
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "child_id" => "required|integer",
            //"check_in_date" => "required|", <- ño
            "hospital_id" => "required|integer",
            "child_status" => "required|string",
            "doctor_id" => "required|integer",
            "diagnosis_id" => "required|integer",
            "treatment_id" => "required|integer",
            "diet_id" => "required|integer",
            "social_worker_id" => "required|integer",
            "re_entry" => "required|boolean",
            //"check_out_date" => "required|", <--null
            "additional_children" => "required|integer",
            "remarks" => "required|string",
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $child = Child::find($request->child_id);
        if($child == null){
            return response()->json(array(
                "error"=>"child not found with specified id"
            ),404);
        }

        $hospital = Hospital::find($request->hospital_id);
        if($hospital == null){
            return response()->json(array(
                "error"=>"hospital not found with specified id"
            ),404);
        }

        $doctor = Doctor::find($request->doctor_id);
        if($doctor == null){
            return response()->json(array(
                "error"=>"doctor not found with specified id"
            ),404);
        }

        $diagnosis = Diagnosis::find($request->diagnosis_id);
        if($diagnosis == null){
            return response()->json(array(
                "error"=>"diagnosis not found with specified id"
            ),404);
        }

        $treatment = Treatment::find($request->treatment_id);
        if($treatment == null){
            return response()->json(array(
                "error"=>"treatment not found with specified id"
            ),404);
        }

        $diet = Diet::find($request->diet_id);
        if($diet == null){
            return response()->json(array(
                "error"=>"diet not found with specified id"
            ),404);
        }

        $socialWorker = SocialWorker::find($request->social_worker_id);
        if($socialWorker == null){
            return response()->json(array(
                "error"=>"social worker not found with specified id"
            ),404);
        }

        */

    }

    public function read(Request $request){
        
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }

    public function dashboard(Request $request){
        /**
         * lista de niños con check in activo (fecha de salida nula) <- sacar de check in
         *   lista de niños en hospital 
         *   lista de niños en casa 
         * cuantos niños hay en la casa 
         * cuantos hay en el hospital 
         * numero de habitaciones libres 
         * numero total de niños registrados en la pataforma 
         */

         
    }
}