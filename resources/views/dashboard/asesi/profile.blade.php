@extends('layouts.asesiDashboard')

@section('content')
    <section class="w-full min-h-screen bg-gradient-to-b from-gray-100 to-white py-14 px-4 sm:px-6">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl font-bold text-gray-800 mb-2">👤 Profil Saya</h2>
            <p class="text-gray-500 mb-10">Kelola informasi lengkap akun Anda.</p>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">

                <!-- Sidebar -->
                <div class="bg-white rounded-3xl shadow p-6 text-center flex flex-col items-center">
                    <div class="relative w-28 h-28 mb-4">
                        @if (auth()->user()->userProfile && auth()->user()->userProfile->profile_image)
                            <img src="{{ asset('storage/' . auth()->user()->userProfile->profile_image) }}" alt="Foto Profil"
                                class="w-full h-full object-cover rounded-full border-4 border-white shadow-md">
                        @else
                            <img src="{{ asset('assets/images/default-profile.png') }}" alt="Foto Default"
                                class="w-full h-full object-cover rounded-full border-4 border-white shadow-md">
                        @endif

                        <button
                            class="absolute bottom-0 right-0 bg-indigo-600 hover:bg-indigo-700 text-white p-1.5 rounded-full shadow"
                            data-modal-target="#uploadPhotoModal">
                            <i class="bi bi-camera-fill text-sm"></i>
                        </button>
                    </div>

                    <h3 class="text-lg font-semibold text-gray-800">{{ auth()->user()->name }}</h3>
                    <p class="text-sm text-gray-500 mb-4">{{ auth()->user()->email }}</p>

                    <a href="#" class="text-sm text-indigo-600 font-medium hover:underline" data-bs-toggle="modal"
                        data-bs-target="#changePasswordModal">
                        🔐 Ubah Password
                    </a>
                </div>


                <!-- Form -->
                <div class="lg:col-span-2 bg-white rounded-3xl shadow p-8">
                    <form method="POST" action="#">
                        @csrf @method('PUT')
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="nama_depan" class="block text-sm font-medium text-gray-700 mb-1">Nama
                                    Lengkap</label>
                                <input type="text" id="nama_depan" name="nama_depan"
                                    value="{{ old('nama_depan', auth()->user()->userProfile->nama_depan ?? auth()->user()->name) }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div>
                                <label for="nik" class="block text-sm font-medium text-gray-700 mb-1">NIK</label>
                                <input type="text" id="nik" name="nik"
                                    value="{{ old('nik', auth()->user()->userProfile->nik ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div>
                                <label for="tempat_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tempat
                                    Lahir</label>
                                <input type="text" id="tempat_lahir" name="tempat_lahir"
                                    value="{{ old('tempat_lahir', auth()->user()->userProfile->tempat_lahir ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div>
                                <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700 mb-1">Tanggal
                                    Lahir</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir"
                                    value="{{ old('tanggal_lahir', auth()->user()->userProfile->tanggal_lahir ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div>
                                <label for="jenis_kelamin" class="block text-sm font-medium text-gray-700 mb-1">Jenis
                                    Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="" disabled selected>Pilih</option>
                                    <option value="Laki-laki"
                                        {{ old('jenis_kelamin', auth()->user()->userProfile->jenis_kelamin ?? '') == 'Laki-laki' ? 'selected' : '' }}>
                                        Laki-laki</option>
                                    <option value="Perempuan"
                                        {{ old('jenis_kelamin', auth()->user()->userProfile->jenis_kelamin ?? '') == 'Perempuan' ? 'selected' : '' }}>
                                        Perempuan</option>
                                </select>
                            </div>
                            <div>
                                <label for="no_wa" class="block text-sm font-medium text-gray-700 mb-1">Nomor
                                    WhatsApp</label>
                                <input type="text" id="no_wa" name="no_wa"
                                    value="{{ old('no_wa', auth()->user()->userProfile->no_wa ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div>
                                <label for="instansi" class="block text-sm font-medium text-gray-700 mb-1">Instansi</label>
                                <select id="instansi" name="instansi"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                                    <option value="" disabled selected>Pilih Instansi</option>
                                    <option value="Pemerintah"
                                        {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'Pemerintah' ? 'selected' : '' }}>
                                        Pemerintah</option>
                                    <option value="Swasta"
                                        {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'Swasta' ? 'selected' : '' }}>
                                        Swasta</option>
                                    <option value="BUMN"
                                        {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'BUMN' ? 'selected' : '' }}>
                                        BUMN</option>
                                    <option value="Lainnya"
                                        {{ old('instansi', auth()->user()->userProfile->instansi ?? '') == 'Lainnya' ? 'selected' : '' }}>
                                        Lainnya</option>
                                </select>
                            </div>
                            <div>
                                <label for="custom_instansi" class="block text-sm font-medium text-gray-700 mb-1">Instansi
                                    (Jika Lainnya)</label>
                                <input type="text" id="custom_instansi" name="custom_instansi"
                                    value="{{ old('custom_instansi', auth()->user()->userProfile->custom_instansi ?? '') }}"
                                    class="w-full border-gray-300 rounded-xl shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                            <div class="md:col-span-2 grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Provinsi</label>
                                    <div class="text-gray-800 font-medium bg-gray-50 border border-gray-200 rounded-xl p-3">
                                        {{ old('provinsi', auth()->user()->userProfile->provinsi ?? '-') }}</div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Kabupaten/Kota</label>
                                    <div class="text-gray-800 font-medium bg-gray-50 border border-gray-200 rounded-xl p-3">
                                        {{ old('kabupaten', auth()->user()->userProfile->kabupaten ?? '-') }}</div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Kecamatan</label>
                                    <div class="text-gray-800 font-medium bg-gray-50 border border-gray-200 rounded-xl p-3">
                                        {{ old('kecamatan', auth()->user()->userProfile->kecamatan ?? '-') }}</div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Kelurahan/Desa</label>
                                    <div class="text-gray-800 font-medium bg-gray-50 border border-gray-200 rounded-xl p-3">
                                        {{ old('kelurahan', auth()->user()->userProfile->kelurahan ?? '-') }}</div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 text-right">
                            <button type="submit"
                                class="bg-indigo-600 text-white px-6 py-3 rounded-xl shadow hover:bg-indigo-700 transition font-semibold">
                                <i class="bi bi-save mr-2"></i> Simpan Semua Perubahan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
