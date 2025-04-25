<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Province;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AsesiStoreRequest;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\Password;

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
                $query->where('nama_depan', 'LIKE', '%' . $search . '%')
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

        try {
            // Create User
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'status' => 'active',
                'email_verified_at' => now(),
            ]);

            // validasi role ketika create user
            $user->assignRole('asesi');

            // validasi akses level A ketika create user BELUM FIX
            // if($user->hasPermissionTo('acces_level_A')) {
            //     $user->givePermissionTo('acces_level_A');
            // }

            // Create User Profile
            $userProfile = new UserProfile([
                'user_id' => $user->id,
                'nama_depan' => isset($request->nama_depan) ? $request->nama_depan : $request->name,
                'nik' => $request->nik,
                'instansi' => $request->custom_instansi ?? $request->instansi,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'no_wa' => $request->no_wa,
                'provinsi' => $request->provinsi,
                'kabupaten' => $request->kabupaten,
                'kecamatan' => $request->kecamatan,
                'kelurahan' => $request->kelurahan,
                'profile_image' => $request->file('profile_image')
                    ? $request->file('profile_image')->store('asesi_images', 'public')
                    : 'blankProfile.png'
            ]);

            $userProfile->save();
            Alert::success('success', 'Data User Baru Berhasil Ditambahkan!');
            return redirect()->route('admin.asesi.index')->with('success', 'Data berhasil disimpan');

        } catch (\Exception $e) {
            Log::error('User registration failed: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat mendaftar: ' . $e->getMessage()])->withInput();
        }
    }

    public function asesiEdit(string $id)
    {
        $provinces = Province::all();
        $user = UserProfile::with('user')->find($id);
        return view('admin.asesi.edit', [
            'title' => 'Edit Asesi',
            'navTitle' => 'Edit Asesi',
            'user' => $user,
            'provinces' => $provinces,
        ]);
    }

    public function asesiUpdate(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'lowercase', 'max:255'],
            'password' => ['nullable', 'string'],
            'nama_depan' => 'nullable|string|max:255',
            'no_wa' => ['numeric', 'nullable', 'digits_between:1,15'],
            'nik' => ['nullable', 'string'],
            'instansi' => ['nullable', 'string'],
            'tempat_lahir' => ['nullable', 'string'],
            'jenis_kelamin' => ['nullable', 'string'],
            'tanggal_lahir' => ['nullable', 'date'],
            'provinsi' => ['nullable', 'string'],
            'kabupaten' => ['nullable', 'string'],
            'kecamatan' => ['nullable', 'string'],
            'kelurahan' => ['nullable', 'string'],
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'custom_instansi' => ['nullable', 'string'],
            'update_password' => 'nullable'
        ]);

        $userProfile = UserProfile::with('user')->find($id);

        try {
            DB::beginTransaction();
            $userProfile->update([
                'nik' => $validated['nik'] ?? $userProfile->nik,
                'nama_depan' => $validated['nama_depan'] ?? $userProfile->fullname,
                'instansi' => $validated['instansi'] ?? $userProfile->instansi,
                'tempat_lahir' => $validated['tempat_lahir'] ?? $userProfile->tempat_lahir,
                'tanggal_lahir' => $validated['tanggal_lahir'] ?? $userProfile->tanggal_lahir,
                'jenis_kelamin' => $validated['jenis_kelamin'] ?? $userProfile->jenis_kelamin,
                'no_wa' => $validated['no_wa'] ?? $userProfile->no_wa,
                'profile_image' => $validated['profile_image'] ?? $userProfile->profile_image,
                'provinsi' => $validated['provinsi'] ?? $userProfile->provinsi,
                'kabupaten' => $validated['kabupaten'] ?? $userProfile->kabupaten,
                'kecamatan' => $validated['kecamatan'] ?? $userProfile->kecamatan,
                'kelurahan' => $validated['kelurahan'] ?? $userProfile->kelurahan,
            ]);

            $userUpdateData = [];

            if ($request->filled('password')) {
                $userUpdateData['password'] = Hash::make($request->input('password'));
            }
            
            if ($request->filled('email')) {
                $userUpdateData['email'] = $request->input('email');
            }

            if ($request->filled('name')) {
                $userUpdateData['name'] = $request->input('name');
            }
            
            if (!empty($userUpdateData)) {
                $userProfile->user->update($userUpdateData);
            }

            if ($request->hasFile('profile_image')) {
                if ($userProfile->profile_image && $userProfile->profile_image !== 'blankProfile.png') {
                    Storage::delete($userProfile->profile_image);
                }
                $userProfile->update([
                    'profile_image' => $request->file('profile_image')->store('asesi_images', 'public')
                ]);
            }

            DB::commit();
            Alert::success('success', 'Data User Berhasil Diperbarui!');
            return redirect()->route('admin.asesi.index')->with('success', 'Data berhasil diperbarui');

        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Gagal mengupdate data asesi: ' . $e->getMessage());
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan saat memperbarui data: ' . $e->getMessage()])->withInput();
        }
    }

    public function asesiDestroy(string $id)
    {
        try {
            DB::beginTransaction();
            $user = User::find($id);
            $userProfile = UserProfile::where('user_id', $id)->first();

            if ($userProfile->profile_image && $userProfile->profile_image !== 'blankProfile.png') {
                Storage::delete($userProfile->profile_image);
            }

            $userProfile->delete();
            $user->removeRole('asesi');
            $user->delete();
            DB::commit();
            Alert::success('Berhasil', 'Data Berhasil Dihapus!');
            return redirect()->route('admin.asesi.index');

        } catch (\Exception $e) {
            DB::rollBack();
            Alert::success('Gagal', 'Terjadi Error!');
            Log::error('gagal delete akun asesi di admin dashboard: ' . $e->getMessage());
            return redirect()->route('admin.asesi.index')->with('error', 'Error deleting user: ' . $e->getMessage());
        }
    }
}
