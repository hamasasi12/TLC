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
    public function convertJenisKelamin($jenisKelamin)
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
        $provinces = Province::all();
    
        // Jika belum ada profil, buat baru
        if (session()->has('payment_redirect')) {
            $redirectInfo = session('payment_redirect');
            session()->flash('warning', $redirectInfo['message']);
        }
    
        if (!$user->userProfile) {
            UserProfile::create([
                'user_id' => $user->id,
                'nama_depan' => $user->name,
            ]);
            $user->refresh();
        }
    
        return view('dashboard.asesi.profile', compact('user', 'provinces'));
    }

    // public function update(Request $request)
    // {
    //     $user = Auth::user();
    //     // Validation rules (keeping your existing validation)
    //     $validator = Validator::make($request->all(), [
    //         'nama_depan' => 'required|string|max:30',
    //         'nik' => 'nullable|string|max:16|unique:user_profiles,nik,' . ($user->userProfile->id ?? 'NULL') . ',id',
    //         'tempat_lahir' => 'nullable|string|max:25',
    //         'tanggal_lahir' => 'nullable|date|before:today',
    //         'jenis_kelamin' => 'nullable|in:Laki-laki,Perempuan',
    //         'no_wa' => 'nullable|string|max:20|regex:/^[0-9+\-\s()]+$/',
    //         'instansi' => 'nullable|in:Pemerintah,Swasta,BUMN,Lainnya',
    //         'custom_instansi' => 'nullable|string|max:40|required_if:instansi,Lainnya',
    //         'profesi' => 'nullable|string|max:50',
    //         'lama_masa_kerja' => 'nullable|in:< 1 tahun,1-2 tahun,3-5 tahun,6-10 tahun,11-15 tahun,> 15 tahun',
    //         'latar_belakang_pendidikan' => 'nullable|in:SMA/SMK,D1,D2,D3,D4/S1,S2,S3',
    //         'nama_universitas' => 'nullable|string|max:50',
    //         'program_studi' => 'nullable|string|max:50',
    //         'tahun_studi' => 'nullable|integer|min:1970|max:' . date('Y'),
    //         'province_id' => 'nullable|exists:provinces,id',
    //         'regency_id' => 'nullable|exists:regencies,id|required_with:province_id',
    //         'district_id' => 'nullable|exists:districts,id|required_with:regency_id',
    //         'village_id' => 'nullable|exists:villages,id|required_with:district_id',
    //     ], [
    //         'nik.unique' => 'NIK sudah terdaftar pada akun lain.',
    //         'tanggal_lahir.before' => 'Tanggal lahir harus sebelum hari ini.',
    //         'no_wa.regex' => 'Format nomor WhatsApp tidak valid.',
    //         'custom_instansi.required_if' => 'Nama instansi harus diisi jika memilih "Lainnya".',
    //         'regency_id.required_with' => 'Kabupaten/Kota harus dipilih jika provinsi sudah dipilih.',
    //         'district_id.required_with' => 'Kecamatan harus dipilih jika kabupaten sudah dipilih.',
    //         'village_id.required_with' => 'Kelurahan/Desa harus dipilih jika kecamatan sudah dipilih.',
    //     ]);
    
    //     // Your existing cascade location validation
    //     $validator->after(function ($validator) use ($request) {
    //         if ($request->regency_id && $request->province_id) {
    //             $regency = Regency::where('id', $request->regency_id)
    //                             ->where('province_id', $request->province_id)
    //                             ->first();
    //             if (!$regency) {
    //                 $validator->errors()->add('regency_id', 'Kabupaten/Kota tidak valid untuk provinsi yang dipilih.');
    //             }
    //         }
    
    //         if ($request->district_id && $request->regency_id) {
    //             $district = District::where('id', $request->district_id)
    //                             ->where('regency_id', $request->regency_id)
    //                             ->first();
    //             if (!$district) {
    //                 $validator->errors()->add('district_id', 'Kecamatan tidak valid untuk kabupaten yang dipilih.');
    //             }
    //         }
    
    //         if ($request->village_id && $request->district_id) {
    //             $village = Village::where('id', $request->village_id)
    //                             ->where('district_id', $request->district_id)
    //                             ->first();
    //             if (!$village) {
    //                 $validator->errors()->add('village_id', 'Kelurahan/Desa tidak valid untuk kecamatan yang dipilih.');
    //             }
    //         }
    //     });
    
    //     if ($validator->fails()) {
    //         return redirect()->back()
    //             ->withErrors($validator)
    //             ->withInput();
    //     }
    
    //     try {
    //         DB::beginTransaction();
    
    //         // Update user name
    //         $user->update(['name' => $request->nama_depan]);
    
    //         // Get location names (assuming you have this method)
    //         $locationData = $this->getLocationNames($request);
    
    //         // Convert jenis kelamin (assuming you have this method)
    //         $jenisKelaminConverted = $this->convertJenisKelamin($request->jenis_kelamin);
    
    //         $profileData = [
    //             // Data Pribadi
    //             'nama_depan' => $request->nama_depan,
    //             'nik' => $request->nik,
    //             'tempat_lahir' => $request->tempat_lahir,
    //             'tanggal_lahir' => $request->tanggal_lahir,
    //             'jenis_kelamin' => $jenisKelaminConverted,
    //             'no_wa' => $request->no_wa,
    //             // Data Pekerjaan
    //             'instansi' => $request->instansi,
    //             'custom_instansi' => $request->instansi === 'Lainnya' ? $request->custom_instansi : null,
    //             'profesi' => $request->profesi,
    //             'lama_masa_kerja' => $request->lama_masa_kerja,
    //             // Data Pendidikan
    //             'latar_belakang_pendidikan' => $request->latar_belakang_pendidikan,
    //             'nama_universitas' => $request->nama_universitas,
    //             'program_studi' => $request->program_studi,
    //             'tahun_studi' => $request->tahun_studi,
    //             // Data Alamat
    //             'province_id' => $request->province_id,
    //             'regency_id' => $request->regency_id,
    //             'district_id' => $request->district_id,
    //             'village_id' => $request->village_id,
    //             'provinsi' => $locationData['province_name'],
    //             'kabupaten' => $locationData['regency_name'],
    //             'kecamatan' => $locationData['district_name'],
    //             'kelurahan' => $locationData['village_name'],
    //         ];
    
    //         // Update or create user profile
    //         $user->userProfile()->updateOrCreate(
    //             ['user_id' => $user->id],
    //             $profileData
    //         );
    
    //         DB::commit();
    
    //         // Check if profile is now complete and handle redirect
    //         if ($user->fresh()->isProfileComplete()) {
    //             Log::info('Profile is now complete');
                
    //             if (session()->has('payment_redirect')) {
    //                 $redirectInfo = session('payment_redirect');
    //                 Log::info('Redirecting to payment:', $redirectInfo);
            
    //                 session()->forget('payment_redirect');
            
    //                 return redirect($redirectInfo['route'])
    //                     ->with('success', 'Profile berhasil diperbarui!')
    //                     ->with('info', $redirectInfo['message'] ?? null);
    //             }
    //         }
    
    //         return redirect()->back()->with('success', 'Profile berhasil diperbarui!');
    
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    
    //         Log::error('Profile update failed: ' . $e->getMessage(), [
    //             'user_id' => $user->id,
    //             'request_data' => $request->except(['_token', '_method'])
    //         ]);
    
    //         return redirect()->back()
    //             ->with('error', 'Terjadi kesalahan saat memperbarui profile. Silakan coba lagi.')
    //             ->withInput();
    //     }
    // }

    public function update(Request $request)
    {
        $user = Auth::user();
        
        // Check if user comes from payment redirect
        $isFromPayment = session()->has('payment_redirect');
        
        // Different validation rules based on source
        if ($isFromPayment) {
            // Complete profile validation for payment users
            $rules = [
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'nama_depan' => 'required|max:100',
                'nik' => 'required|digits:16|unique:user_profiles,nik,' . optional($user->userProfile)->id,
                'tempat_lahir' => 'required|max:100',
                'tanggal_lahir' => 'required|date',
                'jenis_kelamin' => 'required|in:L,P',
                'no_wa' => 'required|max:20',
                'latar_belakang_pendidikan' => 'required|in:SMA/SMK,D1,D2,D3,D4/S1,S2,S3',
                'nama_universitas' => 'required|max:255',
                'program_studi' => 'required|max:255',
                'tahun_studi' => 'required|integer|min:1970|max:' . date('Y'),
                'instansi' => 'required|in:Pemerintah,Swasta,BUMN,Lainnya',
                'custom_instansi' => 'required_if:instansi,Lainnya|max:255',
                'profesi' => 'required|max:255',
                'lama_masa_kerja' => 'required|in:< 1 tahun,1-2 tahun,3-5 tahun,6-10 tahun,11-15 tahun,> 15 tahun',
                'provinsi' => 'required|max:255',
                'kabupaten' => 'required|max:255',
                'kecamatan' => 'required|max:255',
                'kelurahan' => 'required|max:255',
                'province_id' => 'required',
                'regency_id' => 'required',
                'district_id' => 'required',
                'village_id' => 'required',
            ];
    
            $messages = [
                'profile_image.image' => 'File harus berupa gambar.',
                'profile_image.mimes' => 'Format file harus jpeg, png, atau jpg.',
                'profile_image.max' => 'Ukuran file maksimal 2MB.',
                'nama_depan.required' => 'Nama lengkap wajib diisi.',
                'nik.required' => 'NIK wajib diisi.',
                'nik.digits' => 'NIK harus terdiri dari 16 digit.',
                'tempat_lahir.required' => 'Tempat lahir wajib diisi.',
                'tanggal_lahir.required' => 'Tanggal lahir wajib diisi.',
                'jenis_kelamin.required' => 'Jenis kelamin wajib dipilih.',
                'no_wa.required' => 'Nomor WhatsApp wajib diisi.',
                'latar_belakang_pendidikan.required' => 'Latar belakang pendidikan wajib dipilih.',
                'nama_universitas.required' => 'Nama universitas wajib diisi.',
                'program_studi.required' => 'Program studi wajib diisi.',
                'tahun_studi.required' => 'Tahun studi wajib diisi.',
                'instansi.required' => 'Jenis instansi wajib dipilih.',
                'custom_instansi.required_if' => 'Nama instansi wajib diisi jika memilih "Lainnya".',
                'profesi.required' => 'Profesi wajib diisi.',
                'lama_masa_kerja.required' => 'Lama masa kerja wajib dipilih.',
                'provinsi.required' => 'Provinsi wajib dipilih.',
                'kabupaten.required' => 'Kabupaten/Kota wajib dipilih.',
                'kecamatan.required' => 'Kecamatan wajib dipilih.',
                'kelurahan.required' => 'Kelurahan wajib dipilih.',
            ];
        } else {
            // Flexible validation for regular users
            $rules = [
                'profile_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                'nama_depan' => 'nullable|max:100',
                'nik' => 'nullable|digits:16|unique:user_profiles,nik,' . optional($user->userProfile)->id,
                'tempat_lahir' => 'nullable|max:100',
                'tanggal_lahir' => 'nullable|date',
                'jenis_kelamin' => 'nullable|in:L,P',
                'no_wa' => 'nullable|max:20',
                'latar_belakang_pendidikan' => 'nullable|in:SMA/SMK,D1,D2,D3,D4/S1,S2,S3',
                'nama_universitas' => 'nullable|max:255',
                'program_studi' => 'nullable|max:255',
                'tahun_studi' => 'nullable|integer|min:1970|max:' . date('Y'),
                'instansi' => 'nullable|in:Pemerintah,Swasta,BUMN,Lainnya',
                'custom_instansi' => 'nullable|max:255',
                'profesi' => 'nullable|max:255',
                'lama_masa_kerja' => 'nullable|in:< 1 tahun,1-2 tahun,3-5 tahun,6-10 tahun,11-15 tahun,> 15 tahun',
                'provinsi' => 'nullable|max:255',
                'kabupaten' => 'nullable|max:255',
                'kecamatan' => 'nullable|max:255',
                'kelurahan' => 'nullable|max:255',
                'province_id' => 'nullable',
                'regency_id' => 'nullable',
                'district_id' => 'nullable',
                'village_id' => 'nullable',
            ];
    
            $messages = [
                'profile_image.image' => 'File harus berupa gambar.',
                'profile_image.mimes' => 'Format file harus jpeg, png, atau jpg.',
                'profile_image.max' => 'Ukuran file maksimal 2MB.',
                'nik.digits' => 'NIK harus terdiri dari 16 digit.',
            ];
        }
    
        // Store payment redirect data temporarily before validation
        $paymentRedirectData = null;
        if ($isFromPayment) {
            $paymentRedirectData = session()->get('payment_redirect');
        }
    
        $validator = \Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            // Restore payment redirect session if it was from payment
            if ($paymentRedirectData) {
                session()->put('payment_redirect', $paymentRedirectData);
            }
            
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', $isFromPayment ? 
                    'Mohon lengkapi semua data yang diperlukan untuk melanjutkan pembayaran.' : 
                    'Terjadi kesalahan dalam validasi data.'
                );
        }
    
        try {
            // Handle profile image upload
            if ($request->hasFile('profile_image')) {
                if ($user->userProfile && $user->userProfile->profile_image) {
                    Storage::disk('public')->delete($user->userProfile->profile_image);
                }
    
                $imagePath = $request->file('profile_image')->store('profile_images', 'public');
    
                if ($user->userProfile) {
                    $user->userProfile->update(['profile_image' => $imagePath]);
                } else {
                    UserProfile::create([
                        'user_id' => $user->id,
                        'nama_depan' => $request->nama_depan ?? $user->name,
                        'profile_image' => $imagePath
                    ]);
                }
            }
    
            // Prepare profile data (only include non-null values for regular users)
            $profileData = [];
            $fieldsToUpdate = [
                'nama_depan', 'nik', 'tempat_lahir', 'tanggal_lahir', 'jenis_kelamin', 
                'no_wa', 'latar_belakang_pendidikan', 'nama_universitas', 'program_studi', 
                'tahun_studi', 'instansi', 'custom_instansi', 'profesi', 'lama_masa_kerja',
                'provinsi', 'kabupaten', 'kecamatan', 'kelurahan', 'province_id', 
                'regency_id', 'district_id', 'village_id'
            ];
    
            foreach ($fieldsToUpdate as $field) {
                if ($isFromPayment) {
                    // For payment users, include all fields
                    $profileData[$field] = $request->$field;
                } else {
                    // For regular users, only include fields that are actually being updated
                    if ($request->has($field) && $request->$field !== null) {
                        $profileData[$field] = $request->$field;
                    }
                }
            }
    
            // Update or create user profile
            if ($user->userProfile) {
                $user->userProfile->update($profileData);
            } else {
                $profileData['user_id'] = $user->id;
                UserProfile::create($profileData);
            }
    
            // Update user name if nama_depan is provided and different
            if ($request->has('nama_depan') && $request->nama_depan && $user->name !== $request->nama_depan) {
                $user->update(['name' => $request->nama_depan]);
            }
    
            // Handle payment redirect logic
            if ($isFromPayment) {
                $user->load('userProfile');
                if ($user->isProfileComplete()) {
                    $redirectInfo = session()->get('payment_redirect');
                    session()->forget('payment_redirect');
    
                    // Build redirect URL properly
                    if (isset($redirectInfo['route_name']) && isset($redirectInfo['parameters'])) {
                        $redirectUrl = route($redirectInfo['route_name'], $redirectInfo['parameters']);
                    } else {
                        $redirectUrl = $redirectInfo['route'] ?? route('payments.index');
                    }
    
                    return redirect($redirectUrl)
                        ->with('success', 'Profil berhasil dilengkapi! Silakan lanjutkan pembayaran Anda.')
                        ->with('info', $redirectInfo['message'] ?? null);
                } else {
                    // Profile still incomplete, keep session and show specific message
                    session()->put('payment_redirect', $paymentRedirectData);
                    return redirect()->back()
                        ->with('warning', 'Profil berhasil diperbarui, namun masih ada beberapa data yang perlu dilengkapi untuk melanjutkan pembayaran.');
                }
            }
    
            // Regular update success
            return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    
        } catch (\Exception $e) {
            // Restore payment redirect session on error
            if ($paymentRedirectData) {
                session()->put('payment_redirect', $paymentRedirectData);
            }
            
            \Log::error('Profile Update Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui profil. Silakan coba lagi.');
        }
    }            
    
        public function uploadPhoto(Request $request)
    {
        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ], [
            'profile_image.required' => 'Silakan pilih foto terlebih dahulu.',
            'profile_image.image' => 'File harus berupa gambar.',
            'profile_image.mimes' => 'Format file harus jpeg, png, atau jpg.',
            'profile_image.max' => 'Ukuran file maksimal 2MB.'
        ]);
    
        try {
            $user = Auth::user();
            
            // Hapus foto lama jika ada
            if ($user->userProfile && $user->userProfile->profile_image) {
                Storage::disk('public')->delete($user->userProfile->profile_image);
            }
            
            // Upload foto baru
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            
            // Update atau buat profile
            if ($user->userProfile) {
                $user->userProfile->update(['profile_image' => $imagePath]);
            } else {
                UserProfile::create([
                    'user_id' => $user->id,
                    'nama_depan' => $user->name,
                    'profile_image' => $imagePath
                ]);
            }
            
            return redirect()->back()->with('success', 'Foto profile berhasil diperbarui!');
            
        } catch (\Exception $e) {
            \Log::error('Upload Photo Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Terjadi kesalahan saat mengupload foto.');
        }
    }
    
    protected function getLocationNames($request)
    {
        return [
            'province_name' => $request->province_id ? Province::find($request->province_id)->name : null,
            'regency_name' => $request->regency_id ? Regency::find($request->regency_id)->name : null,
            'district_name' => $request->district_id ? District::find($request->district_id)->name : null,
            'village_name' => $request->village_id ? Village::find($request->village_id)->name : null,
        ];
    }
}
