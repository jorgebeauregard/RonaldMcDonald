<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Companion extends Model
{
    protected $fillable = [
        'names',
        'flast_name',
        'mlast_name',
        'age',
        'sex',
        'scholarship_id',
        'identification',
        'health_status',
        'working',
        'occupation_id',
        'paid_leave',
        'healthcare',
        'economic_dependencies',
        'home_owner',
        'rent',
        'financial_aid',
        'monthly_income',
        'remarks'
    ];

    //This might not be necessary at all
    //Side not: Laravel documentation NEVER SAID ANYTHING ABOUT THIS FUCKING LINES NEEDED TO BE ADDED
    public function newPivot(Model $parent, array $attributes, $table, $exists, $using = null) {
        if ($parent instanceof CheckIn) {
            //For some weird fucking reason both of these work...god save laravel
            return CheckInCompanion::fromRawAttributes($parent,$attributes, $table, $exists);
            //return new CheckInCompanion                       ($attributes, $table, $exists, $using = null);
            
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
    public function scholarship(){
        return $this->hasOne('App\Scholarship','id','scholarship_id');
    }
    public function occupation(){
        return $this->hasOne('App\Occupation','id','occupation_id');
    }
    public function check_ins(){
        return $this->belongsToMany('App\CheckIn')->using('App\CheckInCompanion');
    }

    
}
/*
if ($parent instanceof User){
    return new PlanUserPivot($parent, $attributes, $table, $exists);
}


if ($parent instanceof User) {
    return PlanUserPivot::fromRawAttributes($parent, $attributes, $table, $exists);
}
*/