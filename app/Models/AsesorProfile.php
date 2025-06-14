<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class AsesorProfile extends Model
{
    use HasFactory;

    protected $table = 'user_asesor';

    protected $fillable = [
        'user_id',
        'berkas_cv',
        'profile_image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
