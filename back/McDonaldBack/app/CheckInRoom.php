<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CheckInRoom extends Pivot
{
    protected $fillable = [
        'check_in_id',
        'room_id',
        'active',
    ];
}
