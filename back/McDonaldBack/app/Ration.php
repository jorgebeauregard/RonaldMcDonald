<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ration extends Model
{
    protected $fillable = [
        'child_id',
        'ration_count'
    ];

    public function child(){
        return $this->belongsTo('App\Child','child_id','id');
    }
}
