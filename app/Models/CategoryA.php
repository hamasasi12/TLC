<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryA extends Model
{
    protected $table = 'categories_a';
    protected $fillable = [
        'name',
        'description',
    ];
}
