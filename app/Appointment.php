<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
    'appointment_id',
    'schedule_time'
];

public $primaryKey = 'appointment_id';
}
