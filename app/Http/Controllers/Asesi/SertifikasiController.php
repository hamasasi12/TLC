<?php

namespace App\Http\Controllers\Asesi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SertifikasiController extends Controller
{
    public function index()
    {
        return view('dashboard.asesi.sertifikasi');
    }
}
