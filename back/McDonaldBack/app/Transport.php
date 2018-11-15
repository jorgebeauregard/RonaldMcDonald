<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = [
        'child_id',
        'transport_count'
    ];

    public function child(){
        return $this->belongsTo('App\Child','child_id','id');
    }
}
