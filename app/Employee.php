<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'emp_id',
        'access_level',    
    ];

    public $primaryKey = 'emp_id';
}
