<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CheckInCompanion extends Pivot
{   
    protected $fillable = [
        'companion_id',
        'check_in_id',
        'relationship_id'
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
    
   // public function relationship(){
   //     return $this->hasOne('App\Relationship','id','relationship_id');
   // }

   public function hola(){
       return 1;
   }
}
