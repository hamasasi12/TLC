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
            {{-- <section
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
            </section> --}}
            {{-- End A --}}

            {{-- <section
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
                    <button id="btn-level-a"
                        class="level-btn px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level A
                    </button>
                    <button id="btn-level-b"
                        class="level-btn px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level B
                    </button>
                    <button id="btn-level-c"
                        class="level-btn px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level C
                    </button>
                </div>

                <!-- Level Contents -->
                <div id="level-contents">
                    <!-- Level A  -->
                    <div id="level-a" class="level-content">
                        <livewire:categories-a />
                    </div>

                    <!-- Level B  -->
                    <div id="level-b" class="level-content hidden">
                        <livewire:categories-b />
                    </div>

                    <!-- Level C -->
                    <div id="level-c" class="level-content hidden">
                        <livewire:categories-c />
                    </div>
                </div>

                <!-- JavaScript for toggling level content -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Get all buttons
                        const buttons = {
                            a: document.getElementById('btn-level-a'),
                            b: document.getElementById('btn-level-b'),
                            c: document.getElementById('btn-level-c')
                        };

                        // Get all level contents
                        const contents = {
                            a: document.getElementById('level-a'),
                            b: document.getElementById('level-b'),
                            c: document.getElementById('level-c')
                        };

                        // Function to show specific level and update button styles
                        function showLevel(level) {
                            // Hide all contents first
                            Object.values(contents).forEach(content => {
                                content.classList.add('hidden');
                            });

                            // Show the selected content
                            contents[level].classList.remove('hidden');

                            // Update button styles - reset all buttons
                            Object.values(buttons).forEach(btn => {
                                btn.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                                btn.classList.add('bg-white', 'text-gray-700');
                            });

                            // Set active button style
                            buttons[level].classList.remove('bg-white', 'text-gray-700');
                            buttons[level].classList.add('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                        }

                        // Add click event listeners to buttons
                        buttons.a.addEventListener('click', () => showLevel('a'));
                        buttons.b.addEventListener('click', () => showLevel('b'));
                        buttons.c.addEventListener('click', () => showLevel('c'));

                        // Check if user has permission to access locked levels
                        buttons.b.addEventListener('click', function(e) {
                            @if (!Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                                e.preventDefault();
                                alert('Anda perlu menyelesaikan Level A terlebih dahulu');
                                return false;
                            @endif
                        });

                        buttons.c.addEventListener('click', function(e) {
                            @if (!Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                                e.preventDefault();
                                alert('Anda perlu menyelesaikan Level B terlebih dahulu');
                                return false;
                            @endif
                        });
                    });
                </script>
            </section> --}}

            {{-- <section
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
                    <button id="btn-level-a"
                        class="level-btn px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level A
                    </button>
                    <button id="btn-level-b"
                        class="level-btn px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level B
                    </button>
                    <button id="btn-level-c"
                        class="level-btn px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level C
                    </button>
                </div>

                <!-- Level Contents -->
                <div id="level-contents">
                    <!-- Level A  -->
                    <div id="level-a" class="level-content">
                        <livewire:categories-a />
                    </div>

                    <!-- Level B  -->
                    <div id="level-b" class="level-content hidden">
                        <livewire:categories-b />
                    </div>

                    <!-- Level C -->
                    <div id="level-c" class="level-content hidden">
                        <livewire:categories-c />
                    </div>
                </div>

                <!-- JavaScript for toggling level content -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Get all buttons
                        const buttons = {
                            a: document.getElementById('btn-level-a'),
                            b: document.getElementById('btn-level-b'),
                            c: document.getElementById('btn-level-c')
                        };

                        // Get all level contents
                        const contents = {
                            a: document.getElementById('level-a'),
                            b: document.getElementById('level-b'),
                            c: document.getElementById('level-c')
                        };

                        // Function to show specific level and update button styles
                        function showLevel(level) {
                            // Hide all contents first
                            Object.values(contents).forEach(content => {
                                content.classList.add('hidden');
                            });

                            // Show the selected content
                            contents[level].classList.remove('hidden');

                            // Update button styles - reset all buttons
                            Object.values(buttons).forEach(btn => {
                                btn.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                                btn.classList.add('bg-white', 'text-gray-700');
                            });

                            // Set active button style
                            buttons[level].classList.remove('bg-white', 'text-gray-700');
                            buttons[level].classList.add('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                        }

                        // Add click event listeners to buttons
                        buttons.a.addEventListener('click', function(e) {
                            @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                                showLevel('a');
                            @else
                                e.preventDefault();
                                alert('Anda perlu akses untuk Level A');
                                return false;
                            @endif
                        });
                        
                        buttons.b.addEventListener('click', function(e) {
                            @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                                showLevel('b');
                            @else
                                e.preventDefault();
                                alert('Anda perlu menyelesaikan Level A terlebih dahulu');
                                return false;
                            @endif
                        });

                        buttons.c.addEventListener('click', function(e) {
                            @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                                showLevel('c');
                            @else
                                e.preventDefault();
                                alert('Anda perlu menyelesaikan Level B terlebih dahulu');
                                return false;
                            @endif
                        });
                    });
                </script>
            </section> --}}

            {{-- <section
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
                    <button id="levelA-btn"
                        class="level-btn px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        <span class="lock-icon mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                        </span>
                        <span class="unlock-icon mr-2 hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                        </span>
                        Level A
                    </button>
                    <button id="levelB-btn"
                        class="level-btn px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        <span class="lock-icon mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <span class="unlock-icon mr-2 hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                        </span>
                        Level B
                    </button>
                    <button id="levelC-btn"
                        class="level-btn px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center">
                        <span class="lock-icon mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                        <span class="unlock-icon mr-2 hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                            </svg>
                        </span>
                        Level C
                    </button>
                </div>

                <!-- Content Sections -->
                <div id="levelA-content" class="level-content">
                    <!-- Level A Content: Similar to original design with 4 cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Card 1 -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-blue-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Kategori 1</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Kuis tentang pengetahuan umum dan dasar-dasar materi</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-blue-600">10 Soal</span>
                                    <button class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-xl hover:bg-blue-700 transition">Mulai</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-green-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Kategori 2</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Kuis tentang penerapan konsep dalam situasi nyata</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-green-600">8 Soal</span>
                                    <button class="px-4 py-2 bg-green-600 text-white text-sm font-medium rounded-xl hover:bg-green-700 transition">Mulai</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-purple-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Kategori 3</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Kuis tentang pemecahan masalah dan analisis kritis</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-purple-600">12 Soal</span>
                                    <button class="px-4 py-2 bg-purple-600 text-white text-sm font-medium rounded-xl hover:bg-purple-700 transition">Mulai</button>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-yellow-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Kategori 4</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Kuis tentang aplikasi lanjutan dan studi kasus</p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium text-yellow-600">15 Soal</span>
                                    <button class="px-4 py-2 bg-yellow-600 text-white text-sm font-medium rounded-xl hover:bg-yellow-700 transition">Mulai</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="levelB-content" class="level-content hidden">
                    <!-- Level B Content: 2 cards (PPT and Yes/No questions) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- PPT Card -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-orange-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Input PPT</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Unggah presentasi PPT untuk ditinjau dan dinilai</p>
                                <div class="mb-4">
                                    <label class="flex items-center justify-center w-full px-4 py-2 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer hover:border-blue-500 hover:bg-blue-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                        <span class="text-sm font-medium text-gray-600">Pilih file atau seret ke sini</span>
                                        <input type="file" class="hidden" accept=".ppt,.pptx" />
                                    </label>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button class="px-4 py-2 bg-orange-600 text-white text-sm font-medium rounded-xl hover:bg-orange-700 transition">Unggah</button>
                                </div>
                            </div>
                        </div>

                        <!-- Yes/No Questions Card -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-teal-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Soal Ya/Tidak</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Jawab pertanyaan dengan opsi Ya atau Tidak</p>
                                <div class="space-y-4 mb-6">
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Apakah metode presentasi yang digunakan sudah sesuai dengan topik?</p>
                                        <div class="flex space-x-3">
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q1" class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Ya</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q1" class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Tidak</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Apakah visualisasi data dalam presentasi mudah dipahami?</p>
                                        <div class="flex space-x-3">
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q2" class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Ya</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q2" class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Tidak</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-xl hover:bg-teal-700 transition">Kumpulkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="levelC-content" class="level-content hidden">
                    <!-- Level C Content: 2 cards (Essay and Video input) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Essay Card -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-indigo-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Soal Essay</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Jawab pertanyaan dengan esai singkat dan padat</p>
                                <div class="space-y-4 mb-6">
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Jelaskan bagaimana konsep utama dapat diterapkan dalam konteks industri saat ini.</p>
                                        <textarea rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tulis jawaban Anda di sini..."></textarea>
                                    </div>
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Analisis kelebihan dan kekurangan dari pendekatan yang dibahas dalam materi.</p>
                                        <textarea rows="4" class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Tulis jawaban Anda di sini..."></textarea>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-xl hover:bg-indigo-700 transition">Kumpulkan</button>
                                </div>
                            </div>
                        </div>

                        <!-- Video Input Card -->
                        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-red-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Input Video</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Unggah video presentasi atau demo Anda</p>
                                <div class="mb-6">
                                    <div class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer hover:border-red-500 hover:bg-red-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                        </svg>
                                        <p class="text-sm font-medium text-gray-600 mb-1">Seret file video ke sini atau klik untuk memilih</p>
                                        <p class="text-xs text-gray-500">Format yang didukung: MP4, MOV, AVI (Maks. 100MB)</p>
                                        <input type="file" class="hidden" accept="video/*" />
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-500">0 file dipilih</span>
                                    <button class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-xl hover:bg-red-700 transition">Unggah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- JavaScript untuk Tab Switching -->
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        // Get all buttons and content elements
                        const levelBtns = document.querySelectorAll('.level-btn');
                        const levelContents = document.querySelectorAll('.level-content');

                        // Add click event to each button
                        levelBtns.forEach(btn => {
                            btn.addEventListener('click', function() {
                                // Get the target content ID
                                const targetId = this.id.replace('-btn', '-content');
                                
                                // Reset all buttons to inactive state
                                levelBtns.forEach(b => {
                                    b.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                                    b.classList.add('bg-white', 'text-gray-700');
                                });
                                
                                // Set this button to active state
                                this.classList.remove('bg-white', 'text-gray-700');
                                this.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                                
                                // Hide all content
                                levelContents.forEach(content => {
                                    content.classList.add('hidden');
                                });
                                
                                // Show target content
                                document.getElementById(targetId).classList.remove('hidden');
                            });
                        });

                        // Toggle lock/unlock icons based on permissions (For demo purposes, just show unlock icon when active)
                        levelBtns.forEach(btn => {
                            const lockIcon = btn.querySelector('.lock-icon');
                            const unlockIcon = btn.querySelector('.unlock-icon');
                            
                            btn.addEventListener('click', function() {
                                // Hide all unlock icons first
                                document.querySelectorAll('.unlock-icon').forEach(icon => {
                                    icon.classList.add('hidden');
                                });
                                document.querySelectorAll('.lock-icon').forEach(icon => {
                                    icon.classList.remove('hidden');
                                });
                                
                                // Show unlock icon for active button
                                if (btn.classList.contains('bg-gradient-to-r')) {
                                    lockIcon.classList.add('hidden');
                                    unlockIcon.classList.remove('hidden');
                                }
                            });
                        });
                    });
                </script>
            </section> --}}

            {{-- <section
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
                    <button onclick="showLevel('A')"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelAButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level A
                    </button>
                    <button onclick="showLevel('B')"
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelBButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level B
                    </button>
                    <button onclick="showLevel('C')"
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelCButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level C
                    </button>
                </div>

                <!-- Categories A -->
                <div id="levelA" class="level-content">
                    <livewire:categories-a />
                </div>

                <!-- Categories B -->
                <div id="levelB" class="level-content hidden">
                    <div class="space-y-6">
                        <!-- Literasi Section -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Literasi</h3>
                                <p class="text-gray-600 mb-4">Tekunei</p>
                            </div>
                        </div>

                        <!-- Kategori: HOTS -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-semibold text-gray-800">Kategori: HOTS</h3>
                                    <div class="flex items-center">
                                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                                        <span class="text-gray-600 ml-2">0 Soal</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">30 Menit</p>
                                <div class="flex justify-between items-center">
                                    <!-- Input PPT -->
                                    <div class="w-1/2 pr-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Upload PPT</label>
                                        <input type="file"
                                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                    </div>
                                    <!-- Soal Ya/Tidak -->
                                    <div class="w-1/2 pl-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Pilihan Ya/Tidak</label>
                                        <select
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                            <option>Pilih Jawaban</option>
                                            <option>Ya</option>
                                            <option>Tidak</option>
                                        </select>
                                    </div>
                                </div>
                                <button
                                    class="mt-4 px-6 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-medium shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                                    Mulai →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Categories C -->
                <div id="levelC" class="level-content hidden">
                    <div class="space-y-6">
                        <!-- Literasi Section -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-gray-800 mb-2">Literasi</h3>
                                <p class="text-gray-600 mb-4">Tekunei</p>
                            </div>
                        </div>

                        <!-- Kategori: HOTS -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden border border-gray-200">
                            <div class="p-6">
                                <div class="flex justify-between items-center mb-4">
                                    <h3 class="text-xl font-semibold text-gray-800">Kategori: HOTS</h3>
                                    <div class="flex items-center">
                                        <span class="text-yellow-400">⭐⭐⭐⭐⭐</span>
                                        <span class="text-gray-600 ml-2">0 Soal</span>
                                    </div>
                                </div>
                                <p class="text-gray-600 mb-4">30 Menit</p>
                                <div class="flex justify-between items-center">
                                    <!-- Soal Essay -->
                                    <div class="w-1/2 pr-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Soal Essay</label>
                                        <textarea rows="3"
                                            class="block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                            placeholder="Tulis jawaban essay disini..."></textarea>
                                    </div>
                                    <!-- Input Video -->
                                    <div class="w-1/2 pl-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Upload Video</label>
                                        <input type="file" accept="video/*"
                                            class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                                    </div>
                                </div>
                                <button
                                    class="mt-4 px-6 py-2 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl font-medium shadow-md hover:shadow-lg transition transform hover:-translate-y-0.5">
                                    Mulai →
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function showLevel(level) {
                        // Hide all level contents
                        document.querySelectorAll('.level-content').forEach(content => {
                            content.classList.add('hidden');
                        });

                        // Show selected level content
                        document.getElementById(`level${level}`).classList.remove('hidden');

                        // Update button styles
                        document.querySelectorAll('.level-button').forEach(button => {
                            if (button.id === `level${level}Button`) {
                                button.classList.remove('bg-white', 'text-gray-700');
                                button.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                            } else {
                                button.classList.add('bg-white', 'text-gray-700');
                                button.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                            }
                        });
                    }
                </script>
            </section> --}}

            {{-- <section
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
                    <button onclick="showLevel('A')"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelAButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level A
                    </button>
                    <button onclick="showLevel('B')"
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelBButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level B
                    </button>
                    <button onclick="showLevel('C')"
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelCButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level C
                    </button>
                </div>

                <!-- Categories A -->
                <div id="levelA" class="level-content">
                    <livewire:categories-a />
                </div>

                <!-- Categories B -->
                <div id="levelB" class="level-content hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Kategori: HOTS -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                            <div class="relative">
                                <img src="#" alt="Literasi" class="w-full h-48 object-cover">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-3 py-1 rounded-bl-lg font-medium">
                                    Terkunci
                                </div>
                                <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-black to-transparent"></div>
                            </div>
                            <div class="p-6 relative">
                                <div class="bg-blue-600 text-white p-3 rounded-xl absolute -top-8 left-4 shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mt-2 mb-2">Kategori: HOTS</h3>
                                <div class="flex text-yellow-400 mb-2">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span class="text-gray-300">★</span>
                                    <span class="text-gray-600 ml-2">0 Soal</span>
                                </div>
                                <div class="flex items-center text-gray-600 mb-4">
                                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    30 Menit
                                </div>
                                <div class="flex justify-end">
                                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium flex items-center space-x-1 hover:bg-blue-700 transition">
                                        <span>Mulai</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Kategori: PCK -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                            <div class="relative">
                                <img src="#" alt="Literasi" class="w-full h-48 object-cover">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-3 py-1 rounded-bl-lg font-medium">
                                    Terkunci
                                </div>
                                <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-black to-transparent"></div>
                            </div>
                            <div class="p-6 relative">
                                <div class="bg-blue-600 text-white p-3 rounded-xl absolute -top-8 left-4 shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mt-2 mb-2">Kategori: PCK</h3>
                                <div class="flex text-yellow-400 mb-2">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span class="text-gray-300">★</span>
                                    <span class="text-gray-600 ml-2">0 Soal</span>
                                </div>
                                <div class="flex items-center text-gray-600 mb-4">
                                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    30 Menit
                                </div>
                                <div class="flex justify-end">
                                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium flex items-center space-x-1 hover:bg-blue-700 transition">
                                        <span>Mulai</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Categories C -->
                <div id="levelC" class="level-content hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Kategori: HOTS -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                            <div class="relative">
                                <img src="#" alt="Literasi" class="w-full h-48 object-cover">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-3 py-1 rounded-bl-lg font-medium">
                                    Terkunci
                                </div>
                                <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-black to-transparent"></div>
                            </div>
                            <div class="p-6 relative">
                                <div class="bg-blue-600 text-white p-3 rounded-xl absolute -top-8 left-4 shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mt-2 mb-2">Kategori: HOTS</h3>
                                <div class="flex text-yellow-400 mb-2">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span class="text-gray-300">★</span>
                                    <span class="text-gray-600 ml-2">0 Soal</span>
                                </div>
                                <div class="flex items-center text-gray-600 mb-4">
                                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    30 Menit
                                </div>
                                <div class="flex justify-end">
                                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium flex items-center space-x-1 hover:bg-blue-700 transition">
                                        <span>Mulai</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Kategori: PCK -->
                        <div class="bg-white rounded-xl shadow-md overflow-hidden relative">
                            <div class="relative">
                                <img src="#" alt="Literasi" class="w-full h-48 object-cover">
                                <div class="absolute top-0 right-0 bg-red-500 text-white px-3 py-1 rounded-bl-lg font-medium">
                                    Terkunci
                                </div>
                                <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-black to-transparent"></div>
                            </div>
                            <div class="p-6 relative">
                                <div class="bg-blue-600 text-white p-3 rounded-xl absolute -top-8 left-4 shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-800 mt-2 mb-2">Kategori: PCK</h3>
                                <div class="flex text-yellow-400 mb-2">
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span>★</span>
                                    <span class="text-gray-300">★</span>
                                    <span class="text-gray-600 ml-2">0 Soal</span>
                                </div>
                                <div class="flex items-center text-gray-600 mb-4">
                                    <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                    30 Menit
                                </div>
                                <div class="flex justify-end">
                                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg font-medium flex items-center space-x-1 hover:bg-blue-700 transition">
                                        <span>Mulai</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>
                    function showLevel(level) {
                        // Hide all level contents
                        document.querySelectorAll('.level-content').forEach(content => {
                            content.classList.add('hidden');
                        });

                        // Show selected level content
                        document.getElementById(`level${level}`).classList.remove('hidden');

                        // Update button styles
                        document.querySelectorAll('.level-button').forEach(button => {
                            if (button.id === `level${level}Button`) {
                                button.classList.remove('bg-white', 'text-gray-700');
                                button.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                            } else {
                                button.classList.add('bg-white', 'text-gray-700');
                                button.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                            }
                        });
                    }
                </script>
            </section> --}}


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
                    <button onclick="showLevel('A')"
                        class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelAButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level A
                    </button>
                    <button onclick="showLevel('B')"
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelBButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level B
                    </button>
                    <button onclick="showLevel('C')"
                        class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                        id="levelCButton">
                        @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                            <livewire:level-unlock-icon />
                        @else
                            <livewire:level-lock-icon />
                        @endif
                        Level C
                    </button>
                </div>

                <!-- Categories A -->
                <div id="levelA" class="level-content">
                    <livewire:categories-a />
                </div>

                <!-- Categories B -->
                <div id="levelB" class="level-content hidden">
                    <livewire:categories-b />
                </div>

                <!-- Categories C -->
                <div id="levelC" class="level-content hidden">
                    <livewire:categories-c />
                </div>

                <!-- Categories B -->
                {{-- <div id="levelB" class="level-content hidden">
                    <!-- Level B Content: 2 cards (PPT and Yes/No questions) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- PPT Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-orange-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Input PPT</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Unggah presentasi PPT untuk ditinjau dan dinilai</p>
                                <div class="mb-4">
                                    <label
                                        class="flex items-center justify-center w-full px-4 py-2 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer hover:border-blue-500 hover:bg-blue-50">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mr-2"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                                        </svg>
                                        <span class="text-sm font-medium text-gray-600">Pilih file atau seret ke
                                            sini</span>
                                        <input type="file" class="hidden" accept=".ppt,.pptx" />
                                    </label>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button
                                        class="px-4 py-2 bg-orange-600 text-white text-sm font-medium rounded-xl hover:bg-orange-700 transition">Unggah</button>
                                </div>
                            </div>
                        </div>

                        <!-- Yes/No Questions Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-teal-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Soal Ya/Tidak</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Jawab pertanyaan dengan opsi Ya atau Tidak</p>
                                <div class="space-y-4 mb-6">
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Apakah metode presentasi yang digunakan
                                            sudah
                                            sesuai dengan topik?</p>
                                        <div class="flex space-x-3">
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q1"
                                                    class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Ya</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q1"
                                                    class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Tidak</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Apakah visualisasi data dalam presentasi
                                            mudah
                                            dipahami?</p>
                                        <div class="flex space-x-3">
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q2"
                                                    class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Ya</span>
                                            </label>
                                            <label class="flex items-center space-x-2 cursor-pointer">
                                                <input type="radio" name="q2"
                                                    class="form-radio h-4 w-4 text-blue-600">
                                                <span class="text-gray-700">Tidak</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button
                                        class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-xl hover:bg-teal-700 transition">Kumpulkan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Categories C -->
                {{-- <div id="levelC" class="level-content hidden">
                    <!-- Level C Content: 2 cards (Essay and Video input) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Essay Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-indigo-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Soal Essay</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Jawab pertanyaan dengan esai singkat dan padat</p>
                                <div class="space-y-4 mb-6">
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Jelaskan bagaimana konsep utama dapat
                                            diterapkan
                                            dalam konteks industri saat ini.</p>
                                        <textarea rows="4"
                                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            placeholder="Tulis jawaban Anda di sini..."></textarea>
                                    </div>
                                    <div class="p-4 border border-gray-200 rounded-xl">
                                        <p class="font-medium text-gray-800 mb-3">Analisis kelebihan dan kekurangan dari
                                            pendekatan
                                            yang dibahas dalam materi.</p>
                                        <textarea rows="4"
                                            class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                            placeholder="Tulis jawaban Anda di sini..."></textarea>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end">
                                    <button
                                        class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-xl hover:bg-indigo-700 transition">Kumpulkan</button>
                                </div>
                            </div>
                        </div>

                        <!-- Video Input Card -->
                        <div
                            class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
                            <div class="p-6">
                                <div class="flex items-center space-x-3 mb-4">
                                    <div class="bg-red-100 p-3 rounded-xl">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Input Video</h3>
                                </div>
                                <p class="text-gray-600 mb-6">Unggah video presentasi atau demo Anda</p>
                                <div class="mb-6">
                                    <div
                                        class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer hover:border-red-500 hover:bg-red-50">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                        </svg>
                                        <p class="text-sm font-medium text-gray-600 mb-1">Seret file video ke sini atau
                                            klik untuk
                                            memilih</p>
                                        <p class="text-xs text-gray-500">Format yang didukung: MP4, MOV, AVI (Maks. 100MB)
                                        </p>
                                        <input type="file" class="hidden" accept="video/*" />
                                    </div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-xs text-gray-500">0 file dipilih</span>
                                    <button
                                        class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-xl hover:bg-red-700 transition">Unggah</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <script>
                    function showLevel(level) {
                        // Hide all level contents
                        document.querySelectorAll('.level-content').forEach(content => {
                            content.classList.add('hidden');
                        });

                        // Show selected level content
                        document.getElementById(`level${level}`).classList.remove('hidden');

                        // Update button styles
                        document.querySelectorAll('.level-button').forEach(button => {
                            if (button.id === `level${level}Button`) {
                                button.classList.remove('bg-white', 'text-gray-700');
                                button.classList.add('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                            } else {
                                button.classList.add('bg-white', 'text-gray-700');
                                button.classList.remove('bg-gradient-to-r', 'from-blue-600', 'to-blue-700', 'text-white');
                            }
                        });
                    }
                </script>
            </section>










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
