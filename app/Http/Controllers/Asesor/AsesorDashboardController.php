<?php

namespace App\Http\Controllers\Asesor;

use App\Models\LevelBSubmission;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AsesorDashboardController extends Controller
{
    // Dashboard Methods
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

    public function listAsesi(Request $request)
    {
        $kategori = $request->input('kategori');
        $search = $request->input('search');

        $query = LevelBSubmission::with('user')
            ->when($kategori === 'modul_ajar', function ($q) {
                $q->whereNotNull('modul_ajar')->where('modul_ajar', '!=', '');
            })
            ->when($kategori === 'ppt', function ($q) {
                $q->whereNotNull('file_ppt')->where('file_ppt', '!=', '');
            })
            ->when(!empty($search), function ($q) use ($search) {
                $q->whereHas('user', function ($userQuery) use ($search) {
                    $userQuery->where('name', 'like', '%' . $search . '%');
                });
            });

        $levelB = $query->latest()->paginate(10)->withQueryString();

        return view('dashboard.asesor.listasesi', [
            'levelB' => $levelB,
            'kategori' => $kategori,
            'search' => $search,
        ]);
    }

    // Simple View Methods
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

    // Profile Methods
    public function profileSetting()
    {
        $user = auth()->user()->load(['userProfile', 'asesorProfile']);
        return view('dashboard.asesor.profilesetting', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255'
        ]);

        $user->update([
            'name' => $validated['name'],
            'email' => $validated['email'],
        ]);

        $user->userProfile()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'no_wa' => $validated['phone'],
                'alamat' => $validated['address']
            ]
        );

        return redirect()->back()->with('success', 'Profil berhasil diperbarui');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = auth()->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Password saat ini tidak sesuai']);
        }

        $user->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with('success', 'Password berhasil diubah');
    }

    public function updatePhoto(Request $request)
    {
        $request->validate([
            'profile_photo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $user = auth()->user();
        
        if ($request->hasFile('profile_photo')) {
            if ($user->asesorProfile->profile_image && $user->asesorProfile->profile_image != 'blankProfile.png') {
                Storage::delete('public/profile_images/'.$user->asesorProfile->profile_image);
            }

            $filename = 'profile_'.$user->id.'_'.time().'.'.$request->file('profile_photo')->getClientOriginalExtension();
            $path = $request->file('profile_photo')->storeAs('public/profile_images', $filename);

            $user->asesorProfile()->update([
                'profile_image' => $filename
            ]);

            return back()->with('success', 'Foto profil berhasil diperbarui');
        }

        return back()->withErrors(['profile_photo' => 'Gagal mengupload foto profil']);
    }
}