<?php

namespace App\Http\Controllers\Asesor;

use App\Models\LevelBSubmission;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AsesorDashboardController extends Controller
{
    public function index()
    {
        $users = User::role('asesi')->get();
        $levelBPendingCount = LevelBSubmission::where('status', 'pending')->count();
        $levelBReviewedCount = LevelBSubmission::where('status', 'reviewed')->count();

        $asesiEligibleCount = $users->filter(function ($user) {
            return $user->hasPermissionTo('access_level_A') && $user->hasPermissionTo('access_level_B');
        })->count();

        return view('dashboard.asesor.dashboard', [
            'asesiEligible' => $asesiEligibleCount ?: 'Belum Ada',
            'levelBPending' => $levelBPendingCount ?: 'Belum Ada',
            'levelBReviewed' => $levelBReviewedCount ?: 'Belum Ada',
        ]);
    }


    public function listAsesi()
    {
        $levelB = LevelBSubmission::with('user')->paginate(10);
        return view('dashboard.asesor.listasesi', [
            'levelB' => $levelB,
        ]);
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