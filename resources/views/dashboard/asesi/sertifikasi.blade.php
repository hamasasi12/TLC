@extends('layouts.asesiDashboard')

@section('content')
    {{-- Halaman Sertifikasi Asesi --}}
    <section class="w-full py-16 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto space-y-16">

            {{-- Hero Sertifikasi --}}
            {{-- <div class="bg-[#FFF7E1] p-10 rounded-xl shadow-md text-center">
                <h1 class="text-4xl font-bold text-gray-800 mb-4">Tingkatkan Kompetensi Mengajar Anda</h1>
                <p class="text-gray-700 max-w-2xl mx-auto mb-6 text-lg">Mulai dari dasar hingga penguasaan praktik kelas —
                    raih sertifikat pengakuan kompetensi profesional Anda!</p>
                <a href="#level-a"
                    class="inline-block bg-[#F4A261] hover:bg-[#E76F51] text-white px-6 py-3 rounded-lg font-medium text-sm shadow">🚀
                    Mulai Sertifikasi Sekarang</a>
            </div> --}}

            {{-- Statistik Sertifikasi --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 text-center">
                <div class="p-6 bg-white border border-gray-200 rounded-xl shadow">
                    <h4 class="text-2xl font-bold text-[#F4A261]">1.243</h4>
                    <p class="text-sm text-gray-600 mt-1">Peserta Telah Tersertifikasi</p>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-xl shadow">
                    <h4 class="text-2xl font-bold text-[#F4A261]">97%</h4>
                    <p class="text-sm text-gray-600 mt-1">Tingkat Kepuasan Peserta</p>
                </div>
                <div class="p-6 bg-white border border-gray-200 rounded-xl shadow">
                    <h4 class="text-2xl font-bold text-[#F4A261]">3</h4>
                    <p class="text-sm text-gray-600 mt-1">Level Sertifikasi</p>
                </div>
            </div>

            <h3 class="text-2xl font-bold text-gray-800 mb-3">📋 Status Sertifikasi Anda</h3>


            {{-- Grid Paket Sertifikasi --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                {{-- Level A --}}
                <div id="level-a" class="bg-white border border-yellow-200 p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-bold text-[#F4A261] mb-2">Level A: Pengetahuan Mengajar</h3>
                    <p class="text-sm text-gray-700 mb-3">Dasar yang wajib dimiliki untuk mengajar dengan percaya diri.</p>
                    <ul class="text-sm text-gray-600 list-disc pl-5 mb-4">
                        <li>Dasar-dasar mengajar</li>
                        <li>Keterlibatan siswa</li>
                        <li>Penilaian formatif</li>
                    </ul>
                    <div class="text-sm text-red-500 mb-2">⚠️ Deadline: 30 April 2025</div>
                    <div class="flex justify-between items-center">
                        <span class="text-green-600 font-semibold">Status: Lulus</span>
                        <a href="#"
                            class="bg-[#F4A261] hover:bg-[#E76F51] text-white px-4 py-2 rounded-lg text-sm">Lihat Sertifikat</a>
                    </div>
                </div>

                {{-- Level B --}}
                <div id="level-b" class="bg-white border border-yellow-200 p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-bold text-[#F4A261] mb-2">Level B: Aktivasi Mengajar</h3>
                    <p class="text-sm text-gray-700 mb-3">Pengajaran aktif melalui proyek dan tugas nyata di kelas.</p>
                    <ul class="text-sm text-gray-600 list-disc pl-5 mb-4">
                        <li>Modul ajar</li>
                        <li>Skala literasi</li>
                        <li>Observasi praktik</li>
                    </ul>
                    <div class="text-sm text-gray-500 italic mb-2">Unggah modul & isi kuisioner</div>
                    <div class="flex justify-between items-center">
                        <span class="text-yellow-600 font-semibold">Status: Menunggu Penilaian</span>
                        <a href="#"
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg text-sm">Lihat
                            Jawaban</a>
                    </div>
                </div>

                {{-- Level C --}}
                <div id="level-c" class="bg-white border border-yellow-200 p-6 rounded-xl shadow-md">
                    <h3 class="text-xl font-bold text-[#F4A261] mb-2">Level C: Penguasaan Mengajar</h3>
                    <p class="text-sm text-gray-700 mb-3">Tunjukkan video praktik dan refleksi mendalam untuk sertifikasi
                        akhir.</p>
                    <ul class="text-sm text-gray-600 list-disc pl-5 mb-4">
                        <li>Video mengajar (YouTube)</li>
                        <li>Refleksi tertulis</li>
                        <li>Umpan balik asesor</li>
                    </ul>
                    <div class="text-sm text-gray-500 italic mb-2">Belum dibuka - menunggu Level B selesai</div>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 font-semibold">Status: Terkunci</span>
                        <button disabled
                            class="bg-gray-300 text-gray-600 px-4 py-2 rounded-lg text-sm cursor-not-allowed">Belum
                            Tersedia</button>
                    </div>
                </div>
            </div>

            {{-- A --}}
            <section
                class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 shadow-xl rounded-3xl border border-blue-100 p-8 mb-10">
                <div class="flex flex-col sm:flex-row justify-between items-center mb-8 space-y-4 sm:space-y-0">
                    <div class="flex items-center space-x-3">
                        <div class="bg-blue-600 text-white p-3 rounded-xl shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h2
                            class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-600">
                            KATEGORI LEVEL</h2>
                    </div>
                    <div class="flex items-center space-x-4">
                        <span
                            class="px-4 py-2 bg-purple-100 text-purple-700 font-medium rounded-full border border-purple-200 shadow-sm flex items-center">
                            <span class="inline-block w-2 h-2 bg-purple-500 rounded-full mr-2 animate-pulse"></span>
                            Dalam Progres
                        </span>
                        <button
                            class="px-6 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-medium shadow-lg hover:shadow-xl transition transform hover:-translate-y-1 focus:ring-4 focus:ring-blue-200">
                            Nilai
                        </button>
                    </div>
                </div>

                <p class="text-gray-600 text-base mb-10 text-center sm:text-left max-w-2xl">
                    Daftar kategori kuis yang akan anda kerjakan. Selesaikan setiap kategori untuk membuka level berikutnya!
                </p>

                <!-- Filter Buttons -->
                <div class="flex flex-wrap justify-center sm:justify-start gap-3 mb-10">
                    <button
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level A
                    </button>
                    <button
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level B
                    </button>
                    <button
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                         @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level C
                    </button>
                </div>



                <!-- Categories A-->
                <livewire:categories-a />
            </section>
            {{-- End A --}}




            {{-- CTA / Ajakan Bergabung --}}
            {{-- <div class="bg-gradient-to-r from-yellow-200 to-yellow-100 p-10 rounded-xl text-center shadow-lg">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Yuk, Mulai Sertifikasi Pertamamu Hari Ini!</h2>
                <p class="text-sm text-gray-600 mb-4">Jadilah bagian dari ribuan guru profesional yang telah
                    tersertifikasi.
                </p>
                <a href="#level-a"
                    class="bg-[#F4A261] hover:bg-[#E76F51] text-white px-6 py-3 rounded-lg font-medium text-sm shadow">Mulai
                    Sekarang</a>
            </div> --}}
        </div>
    </section>
@endsection
