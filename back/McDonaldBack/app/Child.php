<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    //Sorry not sorry
    protected $fillable = [
        'names',
        'flast_name',
        'mlast_name',
        'birthday',
        'sex',
        'scholarship_id',
        'address_street',
        'address_number',
        'neighborhood',
        'locality',
        'municipality',
        'zip_code',
        'state_id',
        'phone_1',
        'phone_2',
        'social',
        'zone_type',
        'min_wage'
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
        //Child has one scholarship, its attribute id is referenced by scholarship_id
        return $this->hasOne('App\Scholarship','id','scholarship_id');
    }

    //A child has a state that references him by the state_id foreighn key in the Direction table

    //Child has one 'App\State' that references states.id with children.state_id
    //return->this->hasSomething('Model referenced','key of the referenced model','my attribute that references it')
    public function state(){
              //hasSomething('App\Model','his_key','my_key')
        return $this->hasOne('App\State','id','state_id');
    }

}
