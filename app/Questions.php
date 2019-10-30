<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'id',
        'categories_id',
        'counselor_id',
        'question_type',
        'questions',
    ];
    protected $table = 'questions';
    public $primaryKey = 'questions_id';

    public $timestamps = false;
}
