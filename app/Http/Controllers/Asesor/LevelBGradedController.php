<?php

namespace App\Http\Controllers\Asesor;

use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Models\LevelBSubmission;
use Illuminate\Support\Facades\Log;
use Vinkla\Hashids\Facades\Hashids;
use App\Http\Controllers\Controller;

class LevelBGradedController extends Controller
{
    public function showGradingPage(string $id)
    {
        $decoded = Hashids::decode($id);

        if (empty($decoded)) {
            Log::channel('grading')->warning('Gagal decode ID Hashids pada halaman grading.', [
                'encoded_id' => $id,
                'reason' => 'ID tidak valid atau tidak dapat didecode',
                'ip_address' => request()->ip(),
                'user_id' => auth()->id(),
                'timestamp' => now()->toDateTimeString(),
            ]);
            abort(404, 'ID Tidak Valid');
        }

        $id = $decoded[0];
        $asesi = LevelBSubmission::with('user')->find($id);
        $userProfile = UserProfile::where('user_id', $id)->first();

        if ($asesi->modul_ajar) {
            return view('dashboard.asesor.Grading.modulAjar', [
                'asesi' => $asesi,
                'userProfile' => $userProfile,
            ]);
        } else {
            return view('dashboard.asesor.Grading.ppt', [
                'asesi' => $asesi,
                'userProfile' => $userProfile,
            ]);
        }
    }

}
