<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\CheckInRoom;
use App\Room;
use App\Child;
use App\CheckIn;

class RoomController extends Controller
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

        $room = Room::create([
            "name"      => $request->name,
        ]);

        $result = $room->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $room
        ),200);
    }

    public function read(Request $request){
        if($request->id == null){
            return response()->json(array(
                "data" => Room::get()
            ),200);
        }
        else{
            //Get all rooms with the names of the occupied names
            $room = Room::find($request->id);
            if ($room == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                return response()->json(array("data" => $room),200);
            }
        }
    }

    public function update(Request $request){
        /* 
        return response()->json(array(
            "hola" => $request->toArray()
        ));
        */
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }

        $room = Room::find($request->id);
        if ($room == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }

        $validator = Validator::make($request->all(), [
            "name" => "required|string",
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $room->name = $request->name;
        $result = $room->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        return response()->json(array(
            "data" => $room
        ),200);
    }

    public function delete(Request $request){
        if($request->id == null){
            return response()->json(array(
                "error"=>"id absent from request"
            ),400);
        }
        $room = Room::find($request->id);
        if ($room == null) {
            return response()->json(array(
                "error" => "id ".$request->id." not found"
            ),404);
        }
        $result = $room->delete();
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

    public function kids(Request $request){
        $rooms = Room::get();
        foreach($rooms as $room){
            $checkInRoom = CheckInRoom::get()->where('room_id','=',$room->id)->first();
            if ($checkInRoom != null){
                $checkIn = CheckIn::get()->where('id','=',$checkInRoom->check_in_id)->first();
                if($checkIn != null){
                    $child = Child::get()->where('id','=',$checkIn->child_id)->first();
                    if($child != null){
                        $room->child_name = $child->names . " " .$child->flast_name . " " . $child->mlast_name;
                    }
                }
            }
        }

        return response()->json(array(
            "data" => array(
                "rooms" => $rooms
            )
        ),200);
    }


}
