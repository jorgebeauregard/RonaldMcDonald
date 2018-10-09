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

    public function scholarhip(){
        //Child has one scholarhip, its attribute id is referenced by scholarship_id
        return $this->hasOne('App\Scholarship','id','scholarship_id');
    }

    public function state(){
        return $this->hasOne('App\State','id','state_id');
    }

}
