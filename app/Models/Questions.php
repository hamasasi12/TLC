<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    //

    protected $table = 'questions';

    protected $fillable = [
        'question',
        'category_id'
    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }
}
