<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryC extends Model
{
    use HasFactory;
    protected $table = 'categories_c'; 

    protected $fillable = [
        'name',
        'description',
        'status',
        'image_url'
    ];
}