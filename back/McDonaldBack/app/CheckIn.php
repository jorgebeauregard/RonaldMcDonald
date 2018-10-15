<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Companion;
class CheckIn extends Model
{
    protected $fillable = [
        'child_id',
        'check_in_date',
        'hospital_id',
        'child_status',
        'attending_doctor',
        'diagnosis',
        'treatment_id',
        'diet_id',
        'social_worker_id',
        're_entry',
        'check_out_date',
        'additional_children',
        'remarks',
        'assigned_room'
    ];

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
    
    public function social_worker(){
        return $this->hasOne('App\SocialWorker','id','social_worker_id');
    }

    public function hospital(){
        return $this->hasOne('App\Hospital','id','hospital_id');
    }

    public function diet(){
        return $this->hasOne('App\Diet','id','diet_id');
    }

    public function treatment(){
        return $this->hasOne('App\Treatment','id','treatment_id');
    }


    public function companions(){
        return $this->belongsToMany('App\Companion')->using('App\CheckInCompanion');
    }

    public function newPivot(Model $parent, array $attributes, $table, $exists, $using = null) {
        if ($parent instanceof Companion) {
            return new CheckInCompanion($attributes, $table, $exists,$using = null);
        }
        return parent::newPivot($parent, $attributes, $table, $exists,$using = null);
    }
}
