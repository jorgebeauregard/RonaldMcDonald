<?php

namespace App\Http\Controllers;

use App\Child;
use App\Hospital;
use App\Doctor;
use App\Diagnosis;
use App\Treatment;
use App\Diet;
use App\SocialWorker;
use App\CheckIn;
use App\CheckInRoom;
use App\Room;
use App\ChildCompanion;
use App\Relationship;

use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function create(Request $request){

    }

    public function read(Request $request){
        if($request->id == null){
            $childs =  Child::get();
            foreach($childs as $child){
                $transport = $child->transport()->get();
                $ration = $child->ration()->get();
                $scholarship = $child->scholarship()->get();
                $state = $child->state()->get();

                if($state != null){
                    $state = $state[0]->name;
                }

                if($scholarship != null){
                    $scholarship = $scholarship[0]->name;
                }
                $child->scholarship = $scholarship;
                $child->state = $state;
                $child->transport = $transport;
                $child->ration = $ration;
                
            }
            return $childs;
        }
        else{
            $child = Child::find($request->id);
            if ($child == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                $transport = $child->transport()->get();
                $ration = $child->ration()->get();
                $scholarship = $child->scholarship()->get();
                $state = $child->state()->get();

                if($state != null){
                    $state = $state[0]->name;
                }
                if($scholarship != null){
                    $scholarship = $scholarship[0]->name;
                }
                $child->scholarship = $scholarship;
                $child->state = $state;
                $child->transport = $transport;
                $child->ration = $ration;

                return $child;
            }
        }
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }

    public function getCompanions(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }
        else{
            $child = Child::find($request->id);
            if ($child == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                $companions = $child->companions()->get();
                foreach($companions as $companion) {

                    $rel = ChildCompanion::get()->where('companion_id','=',$companion->id)->where('child_id','=',$child->id);
                    if($rel != null){
                        $rel_name = "";
                        foreach($rel as $rel1){
                            $id = $rel1->relationship_id;
                            $relation = Relationship::find($id);
                            $rel_name = $relation->name;
                        }
                        $companion->relationship_name = $rel_name;
                    }
                }

                return response()->json($companions,200);
            }
        }
    }

    public function getCurrentCheckIn(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }
        else{
            $child = Child::find($request->id);
            if ($child == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                $checkin = CheckIn::where('child_id','=',$child->id)->whereNull('check_out_date')->get()->first();
                if($checkin != null){
                    $hospital = Hospital::find($checkin->hospital_id);
                    if($hospital != null){
                        $checkin->hospital = $hospital->name;
                    }

                    $doctor = Doctor::find($checkin->doctor_id);
                    if($doctor != null){
                        $checkin->doctor = $doctor->names . " " . $doctor->flast_name . " " . $doctor->mlast_name;
                    }

                    $diagnosis = Diagnosis::find($checkin->diagnosis_id);
                    if($diagnosis != null){
                        $checkin->diagnosis = $diagnosis->name;
                    }

                    $treatment = Treatment::find($checkin->treatment_id);
                    if($treatment != null){
                        $checkin->treatment = $treatment->name;
                    }

                    $diet = Diet::find($checkin->diet_id);
                    if($diet != null){
                        $checkin->diet = $diet->name;
                    }

                    $social_worker = SocialWorker::find($checkin->social_worker_id);
                    if($social_worker != null){
                        $checkin->social_worker = $social_worker->names . " " . $social_worker->flast_name . " " . $social_worker->mlast_name;
                    }


                    return response()->json(array(
                        "data" => $checkin
                    ),200);
                }
                else{
                    return response()->json(array(
                        "error" => "Child not currently registered"
                    ),404);
                }
                ////en donde se encuentra(hospital), fecha de ingreso, doctor, diagnostico, tratamiento y boton de checkout

            }
        }
    }

    public function getCheckinHistorial(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }
        else{
            $child = Child::find($request->id);
            if ($child == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                $checkins = CheckIn::where('child_id','=',$child->id)->whereNotNull('check_out_date')->get();

                foreach($checkins as $checkin){
                    $hospital = Hospital::find($checkin->hospital_id);
                    if($hospital != null){
                        $checkin->hospital = $hospital->name;
                    }

                    $doctor = Doctor::find($checkin->doctor_id);
                    if($doctor != null){
                        $checkin->doctor = $doctor->names . " " . $doctor->flast_name . " " . $doctor->mlast_name;
                    }

                    $diagnosis = Diagnosis::find($checkin->diagnosis_id);
                    if($diagnosis != null){
                        $checkin->diagnosis = $diagnosis->name;
                    }

                    $treatment = Treatment::find($checkin->treatment_id);
                    if($treatment != null){
                        $checkin->treatment = $treatment->name;
                    }

                    $diet = Diet::find($checkin->diet_id);
                    if($diet != null){
                        $checkin->diet = $diet->name;
                    }

                    $social_worker = SocialWorker::find($checkin->social_worker_id);
                    if($social_worker != null){
                        $checkin->social_worker = $social_worker->names . " " . $social_worker->flast_name . " " . $social_worker->mlast_name;
                    }
                }
                return response()->json($checkins,200);
            }
        }
    }
}
