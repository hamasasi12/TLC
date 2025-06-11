<?php

namespace App\Http\Controllers\Asesor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsesorDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.asesor.dashboard');
    }

    public function listAsesi()
    {
        return view('dashboard.asesor.listasesi');
    }

    public function notifikasi()
    {
        return view('dashboard.asesor.notifikasi');
    }

    public function formPenilaian()
    {
        return view('dashboard.asesor.formpenilaian');
    }

    public function riwayatPenilaian()
    {
        return view('dashboard.asesor.riwayatpenilaian');
    }

    public function riwayatAktifitas()
    {
        return view('dashboard.asesor.riwayataktifitas');
    }

    public function downloadNilai()
    {
        return view('dashboard.asesor.downloadnilai');
    }

    public function profileSetting()
    {
        return view('dashboard.asesor.profilesetting');
    }
}