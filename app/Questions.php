<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'questions_id',
        'questions_type',
        'questions'
        
    ];
    public $primaryKey = 'questions_id';
}
