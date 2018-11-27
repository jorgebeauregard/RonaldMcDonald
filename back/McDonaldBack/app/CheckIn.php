<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model
{
    protected $fillable = [
        'child_id',
        'check_in_date',
        'hospital_id',
        'child_status',
        'doctor_id',
        'diagnosis_id',
        'treatment_id',
        'diet_id',
        'social_worker_id',
        're_entry',
        'check_out_date',
        'additional_children',
        'remarks'
    ];

    //This might not be necessary at all
    //Side note: Laravel documentation NEVER SAID ANYTHING ABOUT THIS LINES NEEDED TO BE ADDED
    public function newPivot(Model $parent, array $attributes, $table, $exists, $using = null) {
        if ($parent instanceof Room) {
            //For some weird  reason both of these work...god save laravel
            return CheckInRoom::fromRawAttributes($parent,$attributes, $table, $exists);
            //return new CheckInRoom      ($attributes, $table, $exists, $using = null);
        }
        return parent::newPivot($parent, $attributes, $table, $exists,$using = null);
    }

    //Relationship
        //One to one
            //hasSomething('App\Model','his_key','my_key');
        //One to many
            //hasMany('App\Model','his_key','my_key');
        //Many to many
            //belongsToMany('App\Model','cross_table','my_key','his_key');
    //Inverse
        //One to one
            //belongsTo('App\Model','my_key','his_key');
        //Many to many
            //belongsToMany('App\Model','cross_table','my_key','his_key');
        //One to many  
            //belongsTo('App\Model','my_key','his_key');
    public function diagnosis(){
        return $this->hasOne('App\Diagnosis','id','diagnosis_id');
    }
    
    public function social_worker(){
        return $this->hasOne('App\SocialWorker','id','social_worker_id');
    }

    public function hospital(){
        return $this->hasOne('App\Hospital','id','hospital_id');
    }

    public function treatment(){
        return $this->hasOne('App\Treatment','id','treatment_id');
    }

    public function doctor(){
        return $this->hasOne('App\Doctor','id','doctor_id');
    }

    public function diet(){
        return $this->hasOne('App\Diet','id','diet_id');
    }

    public function child(){
        return $this->hasOne('App\Child','id','child_id');
    }

    public function rooms(){
        return $this->belongsToMany('App\CheckInRoom','check_in_room','check_in_id','room_id');
    }

    public function companions(){
        return $this->belongsToMany('App\Companion','check_in_companion','check_in_id','companion_id');
    }
}

