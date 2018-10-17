<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Relationship extends Model
{
    protected $fillable = [
        'name'
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
    
    public function child_companion(){
        return $this->belongsTo('App\ChildCompanion','id','relationship_id');
    }
}
