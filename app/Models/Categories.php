<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'image_categori',
        'level_id',
        'is_locked'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
