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
    //Side note: Laravel documentation NEVER SAID ANYTHING ABOUT THIS LINES NEEDED TO BE ADDED
    public function newPivot(Model $parent, array $attributes, $table, $exists, $using = null) {
        if ($parent instanceof Child) {
            //For some weird  reason both of these work...god save laravel
            return ChildCompanion::fromRawAttributes($parent,$attributes, $table, $exists);
            //return new ChildInCompanion                       ($attributes, $table, $exists, $using = null);
            
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
    public function children(){
        return $this->belongsToMany('App\Child')->using('App\ChildCompanion');
    }

    public function check_ins(){
        return $this->belongsToMany('App\CheckIn','check_in_companion','companion_id','check_in_id');
    }

    
}