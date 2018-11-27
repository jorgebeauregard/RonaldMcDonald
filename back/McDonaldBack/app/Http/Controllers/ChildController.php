<?php

namespace App\Http\Controllers;

use App\Child;
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
                return $companions;
            }
        }
    }
}
