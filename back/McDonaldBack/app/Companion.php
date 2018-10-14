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
        return $this->belongsToMany('App\CheckIn')->using('App\CompanionCheckIn');
    }
}
