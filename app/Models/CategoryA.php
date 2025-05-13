<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryA extends Model
{
    protected $table = 'categories_a';
    protected $fillable = [
        'name',
        'description',
        'banner_img',
        'time_limit',
        'is_locked',
    ];

    public function questions(){
        return $this->hasMany(QuestionA::class);
    }
}
