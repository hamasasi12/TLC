<?php

namespace App\Http\Controllers\Asesi;

use App\Models\CategoryA;
use App\Models\QuestionA;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SertifikasiController extends Controller
{
    public function index()
    {
        return view('dashboard.asesi.sertifikasi');
    }
}   
