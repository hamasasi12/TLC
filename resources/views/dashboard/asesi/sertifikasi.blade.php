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
                            class="bg-[#F4A261] hover:bg-[#E76F51] text-white px-4 py-2 rounded-lg text-sm">Lihat Nilai</a>
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
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg hover:-translate-y-1 active:translate-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        Level A
                    </button>
                    <button
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg hover:-translate-y-1 active:translate-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-green-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                        </svg>
                        Level B
                    </button>
                    <button
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg hover:-translate-y-1 active:translate-y-0 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2 text-red-500" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        Level C
                    </button>
                </div>

                <!-- Categories -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Literasi -->
                    <div
                        class="bg-white rounded-3xl shadow-lg overflow-hidden border border-blue-100 transform transition duration-500 hover:scale-105 hover:shadow-xl group">
                        <div class="relative">
                            <img src="{{ asset('images/levela.png') }}" alt="Literasi"
                                class="w-full h-48 object-cover group-hover:opacity-90 transition">
                            <div
                                class="absolute top-4 right-4 bg-green-500 text-white rounded-full px-3 py-1 text-xs font-medium shadow">
                                Tersedia
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent">
                            </div>
                        </div>
                        <div class="p-6 relative">
                            <div class="absolute -top-10 left-6 bg-blue-600 text-white p-3 rounded-xl shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-2 mb-2">Kategori: Literasi</h3>
                            <div class="flex items-center text-yellow-500 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <span class="ml-2 text-sm text-gray-600">25 soal</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-gray-500">
                                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-1"></span>
                                    10 menit
                                </div>
                                <button
                                    class="px-5 py-2 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-xl hover:-translate-y-1 flex items-center">
                                    Mulai
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Numerasi -->
                    <div
                        class="bg-white rounded-3xl shadow-lg overflow-hidden border border-blue-100 transform transition duration-500 hover:scale-105 hover:shadow-xl group">
                        <div class="relative">
                            <img src="{{ asset('images/levelb.png') }}" alt="Numerasi"
                                class="w-full h-48 object-cover group-hover:opacity-90 transition filter grayscale">
                            <div
                                class="absolute top-4 right-4 bg-red-500 text-white rounded-full px-3 py-1 text-xs font-medium shadow">
                                Terkunci
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent">
                            </div>
                        </div>
                        <div class="p-6 relative">
                            <div class="absolute -top-10 left-6 bg-gray-500 text-white p-3 rounded-xl shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-2 mb-2">Kategori: Numerasi</h3>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <span class="ml-2 text-sm text-gray-600">30 soal</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-gray-500">
                                    <span class="inline-block w-2 h-2 bg-gray-500 rounded-full mr-1"></span>
                                    15 menit
                                </div>
                                <div class="relative group">
                                    <button
                                        class="px-5 py-2 bg-gray-400 text-gray-700 rounded-xl text-sm font-medium shadow-sm flex items-center cursor-not-allowed">
                                        Terkunci
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </button>
                                    <div
                                        class="absolute bottom-full left-0 mb-2 w-48 bg-gray-800 text-white text-xs rounded-lg py-2 px-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                                        Selesaikan kategori Literasi terlebih dahulu
                                        <div
                                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 rotate-45 w-2 h-2 bg-gray-800">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PCK -->
                    <div
                        class="bg-white rounded-3xl shadow-lg overflow-hidden border border-blue-100 transform transition duration-500 hover:scale-105 hover:shadow-xl group">
                        <div class="relative">
                            <img src="{{ asset('images/levelc.png') }}" alt="PCK"
                                class="w-full h-48 object-cover group-hover:opacity-90 transition filter grayscale">
                            <div
                                class="absolute top-4 right-4 bg-red-500 text-white rounded-full px-3 py-1 text-xs font-medium shadow">
                                Terkunci
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent">
                            </div>
                        </div>
                        <div class="p-6 relative">
                            <div class="absolute -top-10 left-6 bg-gray-500 text-white p-3 rounded-xl shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-2 mb-2">Kategori: PCK</h3>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <span class="ml-2 text-sm text-gray-600">20 soal</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-gray-500">
                                    <span class="inline-block w-2 h-2 bg-gray-500 rounded-full mr-1"></span>
                                    20 menit
                                </div>
                                <div class="relative group">
                                    <button
                                        class="px-5 py-2 bg-gray-400 text-gray-700 rounded-xl text-sm font-medium shadow-sm flex items-center cursor-not-allowed">
                                        Terkunci
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </button>
                                    <div
                                        class="absolute bottom-full left-0 mb-2 w-48 bg-gray-800 text-white text-xs rounded-lg py-2 px-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                                        Selesaikan kategori sebelumnya terlebih dahulu
                                        <div
                                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 rotate-45 w-2 h-2 bg-gray-800">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- HOTS -->
                    <div
                        class="bg-white rounded-3xl shadow-lg overflow-hidden border border-blue-100 transform transition duration-500 hover:scale-105 hover:shadow-xl group">
                        <div class="relative">
                            <img src="{{ asset('images/buku1.png') }}" alt="HOTS"
                                class="w-full h-48 object-cover group-hover:opacity-90 transition filter grayscale">
                            <div
                                class="absolute top-4 right-4 bg-red-500 text-white rounded-full px-3 py-1 text-xs font-medium shadow">
                                Terkunci
                            </div>
                            <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent">
                            </div>
                        </div>
                        <div class="p-6 relative">
                            <div class="absolute -top-10 left-6 bg-gray-500 text-white p-3 rounded-xl shadow-lg">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-gray-800 mt-2 mb-2">Kategori: HOTS</h3>
                            <div class="flex items-center text-gray-400 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                                </svg>
                                <span class="ml-2 text-sm text-gray-600">15 soal</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="text-sm text-gray-500">
                                    <span class="inline-block w-2 h-2 bg-gray-500 rounded-full mr-1"></span>
                                    25 menit
                                </div>
                                <div class="relative group">
                                    <button
                                        class="px-5 py-2 bg-gray-400 text-gray-700 rounded-xl text-sm font-medium shadow-sm flex items-center cursor-not-allowed">
                                        Terkunci
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </button>
                                    <div
                                        class="absolute bottom-full left-0 mb-2 w-48 bg-gray-800 text-white text-xs rounded-lg py-2 px-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
                                        Selesaikan kategori sebelumnya terlebih dahulu
                                        <div
                                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2 rotate-45 w-2 h-2 bg-gray-800">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
