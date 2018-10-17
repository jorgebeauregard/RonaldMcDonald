<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name'
    ];

     //This might not be necessary at all
    //Side note: Laravel documentation NEVER SAID ANYTHING ABOUT THIS LINES NEEDED TO BE ADDED
    public function newPivot(Model $parent, array $attributes, $table, $exists, $using = null) {
        if ($parent instanceof CheckIn) {
            //For some weird  reason both of these work...god save laravel
            return CheckInRoom::fromRawAttributes($parent,$attributes, $table, $exists);
            //return new CheckInRoom                       ($attributes, $table, $exists, $using = null);
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

    public function check_ins(){
        return $this->belongsToMany('App\CheckIn')->using('App\CheckInRoom');
    }
}
