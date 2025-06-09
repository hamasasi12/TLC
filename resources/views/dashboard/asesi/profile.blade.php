@extends('layouts.asesiDashboard')

@section('content')
<section class="w-full min-h-screen bg-gradient-to-b from-gray-100 to-white py-14 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold text-gray-800 mb-2">👤 Profil Saya</h2>
        <p class="text-gray-500 mb-10">Kelola informasi lengkap akun Anda.</p>

        @if(session()->has('warning'))
    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-6 rounded-lg" role="alert">
        <div class="flex items-center">
            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
            </svg>
            <strong class="font-bold">Perhatian! </strong>
            <span class="block sm:inline">{{ session('warning') }}</span>
        </div>
    </div>
@endif

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-xl mb-6" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-xl mb-6" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <!-- Profile Header Card -->
        <div class="bg-white rounded-3xl shadow-lg p-8 mb-8">
            <div class="flex flex-col md:flex-row items-center md:items-start gap-6">
                <div class="relative w-32 h-32 flex-shrink-0">
                    <img id="profileImage" src="{{ asset('storage/' . (auth()->user()->userProfile->profile_image ?? 'assets/images/default-profile.png')) }}" alt="Foto Profil"
                        class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                </div>
                <div class="text-center md:text-left flex-grow">
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ auth()->user()->name }}</h3>
                    <p class="text-gray-600 mb-4">{{ auth()->user()->email }}</p>
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-sm">
                        <div class="bg-gray-50 rounded-lg p-3">
                            <div class="text-gray-500">Status</div>
                            <div class="font-semibold text-green-600">Aktif</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <div class="text-gray-500">Bergabung</div>
                            <div class="font-semibold">{{ auth()->user()->created_at->format('M Y') }}</div>
                        </div>
                        <div class="bg-gray-50 rounded-lg p-3">
                            <div class="text-gray-500">Profil</div>
                            <div class="font-semibold">{{ auth()->user()->userProfile ? 'Lengkap' : 'Belum Lengkap' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <form method="POST" action="{{ route('asesi.profile.update') }}" id="profileForm">
            @csrf @method('PUT')
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Left Column -->
                <div class="space-y-8">
                    <!-- Data Pribadi -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <h4 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                            <span class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-3">📋</span>
                            Data Pribadi
                        </h4>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap <span class="text-red-500">*</span></label>
                                <input type="text" name="nama_depan" required
                                    value="{{ old('nama_depan', auth()->user()->userProfile->nama_depan ?? auth()->user()->name) }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                @error('nama_depan')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">NIK</label>
                                <input type="text" name="nik" maxlength="16"
                                    value="{{ old('nik', auth()->user()->userProfile->nik ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3"
                                    placeholder="Masukkan 16 digit NIK">
                                @error('nik')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Tempat Lahir</label>
                                    <input type="text" name="tempat_lahir"
                                        value="{{ old('tempat_lahir', auth()->user()->userProfile->tempat_lahir ?? '') }}"
                                        class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir', auth()->user()->userProfile->tanggal_lahir ?? '') }}"
                                        class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Jenis Kelamin</label>
                                    <select name="jenis_kelamin" class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                        <option value="">Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki"
                                            {{ old('jenis_kelamin', (auth()->user()->userProfile->jenis_kelamin ?? '') == 'L' ? 'Laki-laki' : (auth()->user()->userProfile->jenis_kelamin ?? '')) == 'Laki-laki' ? 'selected' : '' }}>
                                            Laki-laki
                                        </option>
                                        <option value="Perempuan"
                                            {{ old('jenis_kelamin', (auth()->user()->userProfile->jenis_kelamin ?? '') == 'P' ? 'Perempuan' : (auth()->user()->userProfile->jenis_kelamin ?? '')) == 'Perempuan' ? 'selected' : '' }}>
                                            Perempuan
                                        </option>
                                    </select>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Nomor WhatsApp</label>
                                    <input type="text" name="no_wa"
                                        value="{{ old('no_wa', auth()->user()->userProfile->no_wa ?? '') }}"
                                        class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3"
                                        placeholder="08xxxxxxxxxx">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Pendidikan -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <h4 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                            <span class="bg-green-100 text-green-600 p-2 rounded-lg mr-3">🎓</span>
                            Data Pendidikan
                        </h4>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Latar Belakang Pendidikan</label>
                                <select name="latar_belakang_pendidikan" class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                    <option value="">Pilih Jenjang Pendidikan</option>
                                    <option value="SMA/SMK" {{ old('latar_belakang_pendidikan', auth()->user()->userProfile->latar_belakang_pendidikan ?? '') == 'SMA/SMK' ? 'selected' : '' }}>SMA/SMK</option>
                                    <option value="D1" {{ old('latar_belakang_pendidikan', auth()->user()->userProfile->latar_belakang_pendidikan ?? '') == 'D1' ? 'selected' : '' }}>D1</option>
                                    <option value="D2" {{ old('latar_belakang_pendidikan', auth()->user()->userProfile->latar_belakang_pendidikan ?? '') == 'D2' ? 'selected' : '' }}>D2</option>
                                    <option value="D3" {{ old('latar_belakang_pendidikan', auth()->user()->userProfile->latar_belakang_pendidikan ?? '') == 'D3' ? 'selected' : '' }}>D3</option>
                                    <option value="D4/S1" {{ old('latar_belakang_pendidikan', auth()->user()->userProfile->latar_belakang_pendidikan ?? '') == 'D4/S1' ? 'selected' : '' }}>D4/S1</option>
                                    <option value="S2" {{ old('latar_belakang_pendidikan', auth()->user()->userProfile->latar_belakang_pendidikan ?? '') == 'S2' ? 'selected' : '' }}>S2</option>
                                    <option value="S3" {{ old('latar_belakang_pendidikan', auth()->user()->userProfile->latar_belakang_pendidikan ?? '') == 'S3' ? 'selected' : '' }}>S3</option>
                                </select>
                                @error('latar_belakang_pendidikan')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Nama Universitas/Institusi</label>
                                <input type="text" name="nama_universitas"
                                    value="{{ old('nama_universitas', auth()->user()->userProfile->nama_universitas ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3"
                                    placeholder="Contoh: Universitas Indonesia">
                                @error('nama_universitas')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Program Studi</label>
                                    <input type="text" name="program_studi"
                                        value="{{ old('program_studi', auth()->user()->userProfile->program_studi ?? '') }}"
                                        class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3"
                                        placeholder="Contoh: Teknik Informatika">
                                    @error('program_studi')
                                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Tahun Lulus</label>
                                    <select name="tahun_studi" class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                        <option value="">Pilih Tahun Lulus</option>
                                        @for($year = date('Y'); $year >= 1970; $year--)
                                            <option value="{{ $year }}" {{ old('tahun_studi', auth()->user()->userProfile->tahun_studi ?? '') == $year ? 'selected' : '' }}>{{ $year }}</option>
                                        @endfor
                                    </select>
                                    @error('tahun_studi')
                                        <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="space-y-8">
                    <!-- Data Pekerjaan -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <h4 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                            <span class="bg-purple-100 text-purple-600 p-2 rounded-lg mr-3">💼</span>
                            Data Pekerjaan
                        </h4>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Instansi</label>
                                <select name="instansi" id="instansiSelect" class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                    <option value="">Pilih Instansi</option>
                                    <option value="Pemerintah" {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'Pemerintah' ? 'selected' : '' }}>Pemerintah</option>
                                    <option value="Swasta" {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'Swasta' ? 'selected' : '' }}>Swasta</option>
                                    <option value="BUMN" {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'BUMN' ? 'selected' : '' }}>BUMN</option>
                                    <option value="Lainnya" {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>

                            <div id="customInstansiDiv" style="display: {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'Lainnya' ? 'block' : 'none' }};">
                                <label class="block text-sm font-medium text-gray-700 mb-2">Instansi (Jika Lainnya)</label>
                                <input type="text" name="custom_instansi"
                                    value="{{ old('custom_instansi', auth()->user()->userProfile->custom_instansi ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3"
                                    placeholder="Masukkan nama instansi">
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Profesi</label>
                                <input type="text" name="profesi"
                                    value="{{ old('profesi', auth()->user()->userProfile->profesi ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3"
                                    placeholder="Contoh: Manager, Staff IT, Dokter, dll">
                                @error('profesi')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Lama Masa Kerja</label>
                                <select name="lama_masa_kerja" class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500 px-4 py-3">
                                    <option value="">Pilih Lama Masa Kerja</option>
                                    <option value="< 1 tahun" {{ old('lama_masa_kerja', auth()->user()->userProfile->lama_masa_kerja ?? '') == '< 1 tahun' ? 'selected' : '' }}>< 1 tahun</option>
                                    <option value="1-2 tahun" {{ old('lama_masa_kerja', auth()->user()->userProfile->lama_masa_kerja ?? '') == '1-2 tahun' ? 'selected' : '' }}>1-2 tahun</option>
                                    <option value="3-5 tahun" {{ old('lama_masa_kerja', auth()->user()->userProfile->lama_masa_kerja ?? '') == '3-5 tahun' ? 'selected' : '' }}>3-5 tahun</option>
                                    <option value="6-10 tahun" {{ old('lama_masa_kerja', auth()->user()->userProfile->lama_masa_kerja ?? '') == '6-10 tahun' ? 'selected' : '' }}>6-10 tahun</option>
                                    <option value="11-15 tahun" {{ old('lama_masa_kerja', auth()->user()->userProfile->lama_masa_kerja ?? '') == '11-15 tahun' ? 'selected' : '' }}>11-15 tahun</option>
                                    <option value="> 15 tahun" {{ old('lama_masa_kerja', auth()->user()->userProfile->lama_masa_kerja ?? '') == '> 15 tahun' ? 'selected' : '' }}>> 15 tahun</option>
                                </select>
                                @error('lama_masa_kerja')
                                    <span class="text-red-500 text-sm mt-1 block">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info Card -->
                    <div class="bg-gradient-to-br from-blue-50 to-indigo-50 border border-blue-200 rounded-3xl p-8">
                        <h4 class="text-xl font-semibold text-blue-800 mb-4 flex items-center">
                            <span class="bg-blue-100 text-blue-600 p-2 rounded-lg mr-3">ℹ️</span>
                            Informasi Penting
                        </h4>
                        <div class="space-y-4 text-sm text-blue-700">
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                                <p>Pastikan semua data yang Anda masukkan akurat dan sesuai dengan dokumen resmi.</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                                <p>Data profil yang lengkap akan membantu proses verifikasi dan sertifikasi.</p>
                            </div>
                            <div class="flex items-start space-x-3">
                                <div class="w-2 h-2 bg-blue-400 rounded-full mt-2 flex-shrink-0"></div>
                                <p>Anda dapat mengubah informasi profil kapan saja melalui halaman ini.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats Card -->
                    <div class="bg-white rounded-3xl shadow-lg p-8">
                        <h4 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                            <span class="bg-orange-100 text-orange-600 p-2 rounded-lg mr-3">📊</span>
                            Status Profil
                        </h4>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl">
                                <span class="text-gray-600">Kelengkapan Data</span>
                                <div class="flex items-center space-x-2">
                                    <div class="w-24 bg-gray-200 rounded-full h-2">
                                        <div class="bg-green-500 h-2 rounded-full" style="width: 75%"></div>
                                    </div>
                                    <span class="text-sm font-semibold text-green-600">75%</span>
                                </div>
                            </div>
                            <div class="flex justify-between items-center p-4 bg-gray-50 rounded-xl">
                                <span class="text-gray-600">Terakhir Diperbarui</span>
                                <span class="text-sm font-semibold">{{ auth()->user()->updated_at->diffForHumans() }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-12 text-center">
                <button type="submit" class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white px-8 py-4 rounded-2xl shadow-lg hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 font-semibold text-lg transform hover:scale-105">
                    <i class="bi bi-save mr-2"></i> Simpan Semua Perubahan
                </button>
            </div>
        </form>

        {{-- Uncomment when ready to use address section
        <div class="mt-8 bg-white rounded-3xl shadow-lg p-8">
            <h4 class="text-xl font-semibold text-gray-800 mb-6 flex items-center">
                <span class="bg-red-100 text-red-600 p-2 rounded-lg mr-3">📍</span>
                Alamat
            </h4>
            @livewire('wilayah-dropdown', [
                'province_id' => old('province_id', auth()->user()->userProfile?->province_id),
                'regency_id' => old('regency_id', auth()->user()->userProfile?->regency_id),
                'district_id' => old('district_id', auth()->user()->userProfile?->district_id),
                'village_id' => old('village_id', auth()->user()->userProfile?->village_id)
            ])
        </div>
        --}}
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const instansiSelect = document.getElementById('instansiSelect');
    const customInstansiDiv = document.getElementById('customInstansiDiv');

    instansiSelect.addEventListener('change', function() {
        if (this.value === 'Lainnya') {
            customInstansiDiv.style.display = 'block';
        } else {
            customInstansiDiv.style.display = 'none';
        }
    });
});

document.addEventListener('livewire:initialized', () => {
    Livewire.on('wilayah-updated', (data) => {
        console.log('Wilayah updated:', data);
    });
});
</script>
@endsection