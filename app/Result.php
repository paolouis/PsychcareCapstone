<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'result_id',
        'result'
        
    ];
    public $primaryKey = 'result_id';
}
