<?php

namespace App\Http\Controllers;

use App\Companion;
use Illuminate\Http\Request;

class CompanionController extends Controller
{
    public function create(Request $request){

    }

    public function read(Request $request){
        if($request->id == null){
            return Companion::get();
        }
        else{
            return Companion::find($request->id);
        }
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }
}
