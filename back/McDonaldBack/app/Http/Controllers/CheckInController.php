<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;
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
use Carbon\Carbon;

//Nota: Cuando borres check in, desactiva room(solo si es el unico activo)
//muchos checkinroom pueden tener ACTIVO haciendo referencia a un room_id
class CheckInController extends Controller
{
    public function create(Request $request){
        $validator = Validator::make($request->all(), [
            "child_id" => "required|integer",
            //"check_in_date" => "required|", <- ño
            "hospital_id" => "required|integer",
            // "child_status" => "required|string", <--- automatico en casa
            "doctor_id" => "required|integer",
            "diagnosis_id" => "required|integer",
            "treatment_id" => "required|integer",
            "diet_id" => "required|integer",
            "social_worker_id" => "required|integer",
            "room_id" => "required|integer",
            // "re_entry" => "required|boolean", <---vacio
            //"check_out_date" => "required|", <--null
            //  "additional_children" => "required|integer", <--- cero
            // "remarks" => "required|string", <---vacio
        ]);
        //"room_id" => "required|integer", <--- meter a rooms

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

        $checkin = CheckIn::create([
            "child_id" => $child->id,
            "check_in_date" => Carbon::now(),
            "hospital_id" => $hospital->id,
            "child_status" => "En casa",
            "doctor_id" => $doctor->id,
            "diagnosis_id" => $diagnosis->id,
            "treatment_id" => $treatment->id,
            "diet_id" => $diet->id,
            "social_worker_id" => $socialWorker->id,
            "re_entry" => false,
            "check_out_date" => null,
            "additional_children" => 0,
            "remarks" => ""
        ]);

        $result = $checkin->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }

        $room = Room::find($request->room_id);

        $room_checkin = CheckInRoom::create([
            "check_in_id" => $checkin->id,
            "room_id" => $room->id,
            "active" => 1
        ]);

        $result = $room_checkin->save();

        if(!$result){
            return response()->json(array(
                "error"=>"could not store data"
            ),500);
        }
        return response()->json(array(
            "room" => $room_checkin,
            "checkin" => $checkin
        ),200);

    }

    public function read(Request $request){
        if($request->id == null){

            //Get all rooms with the names of the occupied names
            $checkins = CheckIn::get();
            foreach($checkins as $checkin){
                $child = Child::find($checkin->child_id);
                if($child != null){
                    $checkin->child = $child; 
                }
                
                $doctor = Doctor::find($checkin->doctor_id);
                if($doctor != null){
                    $checkin->doctor = $doctor; 
                }

                $diagnosis = Diagnosis::find($checkin->diagnosis_id);
                if($diagnosis != null){
                    $checkin->diagnosis = $diagnosis; 
                }

                $treatment = Treatment::find($checkin->treatment_id);
                if($treatment != null){
                    $checkin->treatment = $treatment; 
                }


                $diet = Diet::find($checkin->diet_id);
                if($diet != null){
                    $checkin->diet = $diet; 
                }

                $social_worker = SocialWorker::find($checkin->social_worker_id);
                if($social_worker != null){
                    $checkin->social_worker = $social_worker; 
                }
                $companions = $checkin->companions()->get();
                $checkin->companions = $companions;

                $rooms = [];

                $roomsCheckIn = CheckInRoom::where('check_in_id','=',$checkin->id)->get();
                
                foreach($roomsCheckIn as $rci){
                    $rum = Room::find($rci->room_id);
                    $rooms[] = $rum;
                }
                $checkin->rooms = $rooms;
            }


            return response()->json(array(
                "data" => $checkins
            ),200);
        }
        else{
            $checkin = CheckIn::find($request->id);
            if ($checkin == null) {
                return response()->json(array(
                    "error" => "id ".$request->id." not found"
                ),404);
            }
            else{
                $child = Child::find($checkin->child_id);
                if($child != null){
                    $checkin->child = $child; 
                }
                
                $doctor = Doctor::find($checkin->doctor_id);
                if($doctor != null){
                    $checkin->doctor = $doctor; 
                }

                $diagnosis = Diagnosis::find($checkin->diagnosis_id);
                if($diagnosis != null){
                    $checkin->diagnosis = $diagnosis; 
                }

                $treatment = Treatment::find($checkin->treatment_id);
                if($treatment != null){
                    $checkin->treatment = $treatment; 
                }


                $diet = Diet::find($checkin->diet_id);
                if($diet != null){
                    $checkin->diet = $diet; 
                }

                $social_worker = SocialWorker::find($checkin->social_worker_id);
                if($social_worker != null){
                    $checkin->social_worker = $social_worker; 
                }
                $companions = $checkin->companions()->get();
                $checkin->companions = $companions;

                $rooms = [];

                $roomsCheckIn = CheckInRoom::where('check_in_id','=',$checkin->id)->get();
                
                foreach($roomsCheckIn as $rci){
                    $rum = Room::find($rci->room_id);
                    $rooms[] = $rum;
                }
                $checkin->rooms = $rooms;
                return response()->json(array("data" => $checkin),200);
            }
        }
    }

    public function update(Request $request){

    }

    public function delete(Request $request){

    }

    public function checkout(Request $request){

        $validator = Validator::make($request->all(), [
            "id" => "required|integer",
            "check_out_date" => "required|date"    
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                "error" => $validator->failed()
            ),400);
        }

        $checkin = CheckIn::find($request->id);
        if($checkin == null){
            return "ID: ".$request->id;
        }

        $checkin->check_out_date = $request->check_out_date;
        
        $checkin->save();

        DB::table('check_in_room')
            ->where('check_in_id', $checkin->id)
            ->update(['active' => 0]);
        
        // $checkinRooms = CheckInRoom::where('check_in_id', $request->id)->get();

        // foreach($checkinRooms as $cir){
        //     if($cir->active == 1){
        //         $cir->active = 0;
        //         $cir->save();
        //     }
        // }

        //CheckInRoom::where('check_in_id', $request->id)->update(['active' => 0]);
        
        return response()->json(array("data" => $checkin),200);
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

        //Cuantos niños hay en total en la base
        $totalKids = Child::get()->count();
        //Cuantas habitaciones OCUPADAS
            //Si fuera sacar las libres, hago esto:
                //jalo todos los rooms que esten activos y UNICOS, y nomas jalo(pluck) sus id's...
               // $usedRooms = CheckInRoom::get()->where('active','=','1')->unique('room_id')->pluck('room_id')->all();
                //Ahora, saco todos los rooms, saco solo sus ids(pluck), le resto su arreglo de rooms activos(diff) y vuelvo esa collection un arreglo(all)
               // $res = Room::get()->pluck('id')->diff($usedRooms)->all();
                //El problema es que te retorna un arreglo con elementos en indices vacíos (0 -> null) y asi. Esta cosa los "filtra y reasigna"
               // $freeRooms = array_values(array_filter($res));
        
            $usedRooms = CheckInRoom::get()->where('active','=','1')->unique('room_id')->pluck('room_id')->count();


        //lo demas
        $activeKids = CheckIn::whereNull('check_out_date')->get(); //obtiene los registros activos (solo debe haber uno por morro)
        //Get ids of kids at home and at hospital
        $homeKidsIds = $activeKids->where('child_status','=','En casa')->pluck('child_id');         
        $hospitalKidsIds = $activeKids->where('child_status','=','En hospital')->pluck('child_id');
        
        //lista de niños en hospital
        $homeKidsArr = [];
        foreach($homeKidsIds as $kid_id){
            $kid = Child::find($kid_id);
            $checkIn = CheckIn::where('child_id','=',$kid->id)->whereNull('check_out_date')->first();
            if($checkIn != null){
                $checkInRoom = CheckInRoom::find($checkIn->id);
                if($checkInRoom != null){
                    $room = Room::find($checkInRoom->room_id);
                    if($room != null){
                        $kid->room_name = $room->name;
                    }
                }
            }
            $homeKidsArr[] = $kid;
        }
        //lista de niños en casa
        $hospitalKidsArr = [];
        foreach($hospitalKidsIds as $kid_id){
            $kid = Child::find($kid_id);
            $checkIn = CheckIn::where('child_id','=',$kid->id)->whereNull('check_out_date')->first();
            if($checkIn != null){
                $checkInRoom = CheckInRoom::find($checkIn->id);
                if($checkInRoom != null){
                    $room = Room::find($checkInRoom->room_id);
                    if($room != null){
                        $kid->room_name = $room->name;
                    }
                }
            }
            $hospitalKidsArr[] = $kid;
        }
        //Cuantos niños hay en el hospital
        $hospitalCount =  count($hospitalKidsArr);
        //cuantos niños hay en casa 
        $homeCount = count($homeKidsArr);       

        return response()->json(array(
            "total_kids" => $totalKids,
            "rooms_occupied" => $usedRooms,
            "hospital_kids_count" => $hospitalCount,
            "home_kids_count" => $homeCount,
            "hospital_kids" => $hospitalKidsArr,
            "home_kids" => $homeKidsArr
        ),200);
    }

    public function rooms(Request $request){
        $checkinRooms = CheckInRoom::get();
        foreach($checkinRooms as $cir){
            $room = Room::find($cir->room_id);
            if($room != null){
                $cir->room = $room;
            }
        }
        return response()->json(array(
            "data" => $checkinRooms
        ),200);
    }

    public function showData(Request $request){
         $hospital = Hospital::get();
         $doctor = Doctor::get();
         $diagnosis = Diagnosis::get();
         $treatment = Treatment::get();
         $diet = Diet::get();
         $socialWorker = SocialWorker::get();
        
         $data = array(
            "hospital" => $hospital,
            "doctor" => $doctor,
            "diagnosis" => $diagnosis,
            "treatment" => $treatment,
            "diet" => $diet,
            "socialWorker" => $socialWorker
        );

        return response()->json(array(
            "data" => $data
        ),200);
       
    }

    
}