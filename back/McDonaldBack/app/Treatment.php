<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = [
        'name'
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
    
    public function check_in(){
        return belongsTo('App\CheckIn','id','treatment_id');
    }
}