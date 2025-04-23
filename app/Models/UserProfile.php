<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;
    protected $table = 'user_profiles';

    protected $fillable = [
        'user_id',
        'nik',
        'nama_depan',
        'instansi',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_wa',
        'profile_image',
        'provinsi', 
        'kabupaten',
        'kelurahan',
        'kecamatan',
        'custom_instansi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
