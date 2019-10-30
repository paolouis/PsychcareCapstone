<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $fillable = [
        'category_name',
        'category_type'
    ];

    protected $table = 'categories';
    public $primaryKey = 'categories_id';
}
