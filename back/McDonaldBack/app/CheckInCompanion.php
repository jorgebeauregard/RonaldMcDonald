<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;

class CheckInCompanion extends Pivot
{   
    /* 
    How to get the info of a pivot table:
    1.- Get the first entity you are trying to get:
    $checkIn = App\CheckIn::find(1)
    2.- Fetch all the second entities that match the first entities in the cross table 
    $comps = $checkIn->companions()->get()
    3.- Select the entity that you desire to obtain the info from:
    $el = $comps[0]->pivot
    4.- Obtain the desired pivot model by using the attributes contained in the pivot table
    $plz = App\CheckInCompanion::get()->where('companion_id','=',$el->companion_id)->where('check_in_id','=',$el->check_in_id);
    5.- This might not be efficient....but laravel made me do it
    */

    protected $fillable = [
        'relationship_id',
        'companion_id',
        'check_in_id',
    ];

    //Relationship
        //One to one
            //hasOne('App\Model','his_key','my_key');
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
    
    public function relationship(){
        return $this->hasOne('App\Relationship','id','relationship_id');
    }
}
