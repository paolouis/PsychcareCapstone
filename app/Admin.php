<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'admin_id',
        'admin_pos'    
    ];

    public $primaryKey= 'admin_id';
}
