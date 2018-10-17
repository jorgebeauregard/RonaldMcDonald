<?php

namespace App\Http\Controllers;

use App\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function create(Request $request){

    }

    public function read(Request $request){
        if($request->id == null){
            return Child::get();
        }
        else{
            $id = ((int)($request->id));
            return Child::find($id);
        }
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
