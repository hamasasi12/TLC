<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AsesiStoreRequest;
use App\Models\User;
use App\Models\Province;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index() 
    {
        return view('dashboard.admin.dashboard', [
            'title' => 'Dashboard Admin',
            'asesi' => User::role('asesi')->count(),
            'asesor' => User::role('asesor')->count(),
        ]);
    }

    public function asesiIndex() //MENAMPILKAN DATA ASESI KE DASHBOARD ADMIN
    {
        // Mengambil input pencarian
        $search = request()->input('search');

        $userProfiles = UserProfile::with('user')
            ->when($search, function ($query) use ($search) {
                $query->where('fullname', 'LIKE', '%' . $search . '%')
                    ->orWhere('nik', 'LIKE', '%' . $search . '%')
                    ->orWhere('tempat_lahir', 'LIKE', '%' . $search . '%')
                    ->orWhereHas('user', function ($query) use ($search) {
                        $query->where('name', 'LIKE', '%' . $search . '%')
                            ->orWhere('email', 'LIKE', '%' . $search . '%');
                    });
            })
            ->latest()
            ->paginate(10)
            ->withQueryString();

        $users = User::role('asesi')->get();

        $userCountAll = User::role('asesi') ? User::role('asesi')->count() : 0;

        // $userCountLevelA = User::permission(('access_level_A'))->count() ?? 0;
        // $userCountLevelB = User::permission(('access_level_B'))->count() ?? 0;
        // $userCountLevelC = User::permission(('access_level_B'))->count() ?? 0;
        // $userCountAllUnpaid = User::permission('access_level_A_unpaid')->count() ?? 0;

        $userRole = [
            'user' => $userCountAll,
            // 'level_A' => $userCountLevelA,
            // 'level_B' => $userCountLevelB,
            // 'level_C' => $userCountLevelC,
            // 'unpaid' => $userCountAllUnpaid,
        ];

        return view('admin.asesi.index', [
            'title' => 'Asesi Index',
            'users' => $users,
            'userProfile' => $userProfiles,
            'navTitle' => 'Table Asesi',
            'userCount' => $userRole
        ]);
    }

    public function asesiCreate() 
    {
        $provinces = Province::all();
        return view('admin.asesi.create', [
            'title' => 'Create User', //BELUM FIX
            'navTitle' => 'Table Asesi', // BELUM FIX
            'provinces' => $provinces, // BELUM DIBUAT
        ]);
    }

    public function asesiStore(AsesiStoreRequest $request) 
    {   
        $request->validated();
        
    }

    public function asesiEdit() 
    {

    }

    public function asesiUpdate() 
    {

    }

    public function asesiDestroy() 
    {

    }
}
