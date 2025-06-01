<?php

namespace App\Http\Controllers\Asesi;

use App\Models\Regency;
use App\Models\Village;
use App\Models\District;
use App\Models\Province;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Convert jenis kelamin dari form ke database format
     */
    private function convertJenisKelamin($jenisKelamin)
    {
        $mapping = [
            'Laki-laki' => 'L',
            'Perempuan' => 'P',
            'L' => 'L',
            'P' => 'P'
        ];

        return $mapping[$jenisKelamin] ?? null;
    }

    public function index()
    {
        $user = Auth::user();

        // Jika belum ada profil, buat baru
        if (!$user->userProfile) {
            UserProfile::create([
                'user_id' => $user->id,
                'nama_depan' => $user->name,
            ]);
            $user->refresh();
        }

        return view('dashboard.asesi.profile', compact('user'));
    }

    public function update(Request $request)
{
    $user = Auth::user();

    $validator = Validator::make($request->all(), [
        // Data Pribadi
        'nama_depan' => 'required|string|max:30',
        'nik' => 'nullable|string|max:16|unique:user_profiles,nik,' . ($user->userProfile->id ?? 'NULL') . ',id',
        'tempat_lahir' => 'nullable|string|max:25',
        'tanggal_lahir' => 'nullable|date|before:today',
        'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
        'no_wa' => 'nullable|string|max:20|regex:/^[0-9+\-\s()]+$/',

        // Data Pekerjaan
        'instansi' => 'nullable|in:Pemerintah,Swasta,BUMN,Lainnya',
        'custom_instansi' => 'nullable|string|max:40|required_if:instansi,Lainnya',
        'profesi' => 'nullable|string|max:50',
        'lama_masa_kerja' => 'nullable|in:< 1 tahun,1-2 tahun,3-5 tahun,6-10 tahun,11-15 tahun,> 15 tahun',

        // Data Pendidikan
        'latar_belakang_pendidikan' => 'nullable|in:SMA/SMK,D1,D2,D3,D4/S1,S2,S3',
        'nama_universitas' => 'nullable|string|max:50',
        'program_studi' => 'nullable|string|max:50',
        'tahun_studi' => 'nullable|integer|min:1970|max:' . date('Y'),

        // Data Alamat - Cascade validation
        'province_id' => 'nullable|exists:provinces,id',
        'regency_id' => 'nullable|exists:regencies,id|required_with:province_id',
        'district_id' => 'nullable|exists:districts,id|required_with:regency_id',
        'village_id' => 'nullable|exists:villages,id|required_with:district_id',
    ], [
        // Custom error messages
        'nik.unique' => 'NIK sudah terdaftar pada akun lain.',
        'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
        'no_wa.regex' => 'Format nomor WhatsApp tidak valid.',
        'custom_instansi.required_if' => 'Nama instansi harus diisi jika memilih "Lainnya".',
        'regency_id.required_with' => 'Kabupaten/Kota harus dipilih jika provinsi sudah dipilih.',
        'district_id.required_with' => 'Kecamatan harus dipilih jika kabupaten sudah dipilih.',
        'village_id.required_with' => 'Kelurahan/Desa harus dipilih jika kecamatan sudah dipilih.',
    ]);

    // Additional custom validation for location cascade
    $validator->after(function ($validator) use ($request) {
        if ($request->regency_id && $request->province_id) {
            $regency = Regency::where('id', $request->regency_id)
                             ->where('province_id', $request->province_id)
                             ->first();
            if (!$regency) {
                $validator->errors()->add('regency_id', 'Kabupaten/Kota tidak valid untuk provinsi yang dipilih.');
            }
        }

        if ($request->district_id && $request->regency_id) {
            $district = District::where('id', $request->district_id)
                              ->where('regency_id', $request->regency_id)
                              ->first();
            if (!$district) {
                $validator->errors()->add('district_id', 'Kecamatan tidak valid untuk kabupaten yang dipilih.');
            }
        }

        if ($request->village_id && $request->district_id) {
            $village = Village::where('id', $request->village_id)
                             ->where('district_id', $request->district_id)
                             ->first();
            if (!$village) {
                $validator->errors()->add('village_id', 'Kelurahan/Desa tidak valid untuk kecamatan yang dipilih.');
            }
        }
    });

    if ($validator->fails()) {
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
    }

    try {
        DB::beginTransaction();

        // Update user name
        $user->update(['name' => $request->nama_depan]);

        // Get location names efficiently using single queries with null checks
        $locationData = $this->getLocationNames($request);

        // Convert jenis kelamin sebelum simpan ke database
        $jenisKelaminConverted = $this->convertJenisKelamin($request->jenis_kelamin);

        $profileData = [
            // Data Pribadi
            'nama_depan' => $request->nama_depan,
            'nik' => $request->nik,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $jenisKelaminConverted,
            'no_wa' => $request->no_wa,

            // Data Pekerjaan
            'instansi' => $request->instansi,
            'custom_instansi' => $request->instansi === 'Lainnya' ? $request->custom_instansi : null,
            'profesi' => $request->profesi,
            'lama_masa_kerja' => $request->lama_masa_kerja,

            // Data Pendidikan
            'latar_belakang_pendidikan' => $request->latar_belakang_pendidikan,
            'nama_universitas' => $request->nama_universitas,
            'program_studi' => $request->program_studi,
            'tahun_studi' => $request->tahun_studi,

            // Data Alamat
            'province_id' => $request->province_id,
            'regency_id' => $request->regency_id,
            'district_id' => $request->district_id,
            'village_id' => $request->village_id,
            'provinsi' => $locationData['province_name'],
            'kabupaten' => $locationData['regency_name'],
            'kecamatan' => $locationData['district_name'],
            'kelurahan' => $locationData['village_name'],
        ];

        // Update or create user profile
        $user->userProfile()->updateOrCreate(
            ['user_id' => $user->id],
            $profileData
        );

        DB::commit();

        return redirect()->back()->with('success', 'Profile berhasil diperbarui!');

    } catch (\Exception $e) {
        DB::rollBack();

        // Log error for debugging
        Log::error('Profile update failed: ' . $e->getMessage(), [
            'user_id' => $user->id,
            'request_data' => $request->except(['_token', '_method'])
        ]);

        return redirect()->back()
            ->with('error', 'Terjadi kesalahan saat memperbarui profile. Silakan coba lagi.')
            ->withInput();
    }
}

/**
 * Get location names efficiently
 */
private function getLocationNames(Request $request): array
{
    $locationData = [
        'province_name' => null,
        'regency_name' => null,
        'district_name' => null,
        'village_name' => null,
    ];

    // Use single query to get all location data if IDs are provided
    if ($request->province_id) {
        $province = Province::find($request->province_id);
        $locationData['province_name'] = $province?->name;
    }

    if ($request->regency_id) {
        $regency = Regency::find($request->regency_id);
        $locationData['regency_name'] = $regency?->name;
    }

    if ($request->district_id) {
        $district = District::find($request->district_id);
        $locationData['district_name'] = $district?->name;
    }

    if ($request->village_id) {
        $village = Village::find($request->village_id);
        $locationData['village_name'] = $village?->name;
    }

    return $locationData;
}

/**
 * Alternative: Get all location data in single query (more efficient for large datasets)
 */
private function getLocationNamesOptimized(Request $request): array
{
    $locationData = [
        'province_name' => null,
        'regency_name' => null,
        'district_name' => null,
        'village_name' => null,
    ];

    if ($request->village_id) {
        // Single query to get all location hierarchy
        $village = Village::with(['district.regency.province'])
                         ->find($request->village_id);

        if ($village) {
            $locationData['village_name'] = $village->name;
            $locationData['district_name'] = $village->district?->name;
            $locationData['regency_name'] = $village->district?->regency?->name;
            $locationData['province_name'] = $village->district?->regency?->province?->name;
        }
    } elseif ($request->district_id) {
        $district = District::with(['regency.province'])->find($request->district_id);
        if ($district) {
            $locationData['district_name'] = $district->name;
            $locationData['regency_name'] = $district->regency?->name;
            $locationData['province_name'] = $district->regency?->province?->name;
        }
    } elseif ($request->regency_id) {
        $regency = Regency::with('province')->find($request->regency_id);
        if ($regency) {
            $locationData['regency_name'] = $regency->name;
            $locationData['province_name'] = $regency->province?->name;
        }
    } elseif ($request->province_id) {
        $province = Province::find($request->province_id);
        if ($province) {
            $locationData['province_name'] = $province->name;
        }
    }

    return $locationData;
}
    public function uploadPhoto(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'File harus berupa gambar dengan format jpeg, png, jpg, atau gif dan maksimal 2MB.'
            ]);
        }

        try {
            $user = Auth::user();

            if ($user->userProfile && $user->userProfile->profile_image) {
                Storage::disk('public')->delete($user->userProfile->profile_image);
            }

            $imagePath = $request->file('profile_image')->store('profile_images', 'public');

            if ($user->userProfile) {
                $user->userProfile->update(['profile_image' => $imagePath]);
            } else {
                UserProfile::create([
                    'user_id' => $user->id,
                    'nama_depan' => $user->name,
                    'profile_image' => $imagePath
                ]);
            }

            return response()->json([
                'success' => true,
                'message' => 'Foto profile berhasil diperbarui!',
                'image_url' => asset('storage/' . $imagePath)
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Terjadi kesalahan saat mengupload foto.'
            ]);
        }
    }
}
