<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'sched_id',
        'schedule'
    ];

    public $primaryKey = 'sched_id';
}
