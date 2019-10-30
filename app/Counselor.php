<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Counselor extends Model
{
    protected $fillable = [
        'counselor_id',
        'counselor_type'
        
    ];

    protected $table ='counselor';
    public $primaryKey = 'counselor_id';
}
