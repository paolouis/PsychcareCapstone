<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'categories_id',
        'category_name',
        'category_type'
    ];

    public $primaryKey = 'categories_id';
}
