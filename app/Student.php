<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'stud_id',
        'course_code',
        'year', 
        'status'
    ];
    public $primaryKey= 'stud_id';
}
