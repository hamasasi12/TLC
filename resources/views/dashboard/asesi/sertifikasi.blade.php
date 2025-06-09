@extends('layouts.asesiDashboard')

@section('content')
    {{-- Halaman Sertifikasi Asesi --}}

    {{-- Overview Sertifikasi --}}
    <section class="max-w-7xl mx-auto px-4 py-8 ">
        <!-- Dashboard Header -->
        {{-- <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Dashboard Overview</h1>
            <p class="text-gray-600">Selamat datang di Teaching & Learning Certification Program</p>
        </div> --}}

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1: Peserta Telah Tersertifikasi -->
            <div class="bg-white rounded-xl shadow-sm p-6 relative overflow-hidden">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Peserta Telah Tersertifikasi</p>
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">1,243</h3>
                        <div class="flex items-center text-green-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">+15%</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-orange-400 to-red-500 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 2: Tingkat Kepuasan Peserta -->
            <div class="bg-white rounded-xl shadow-sm p-6 relative overflow-hidden">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Tingkat Kepuasan Peserta</p>
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">97%</h3>
                        <div class="flex items-center text-green-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">+3%</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Card 3: Level Sertifikasi -->
            <div class="bg-white rounded-xl shadow-sm p-6 relative overflow-hidden">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Level Sertifikasi</p>
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">3</h3>
                        <div class="text-gray-400 text-sm">
                            Level tersedia
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-red-400 to-pink-500 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <!-- Add some interactive animations -->
        <script>
            // Add hover animations to cards
            document.querySelectorAll('.bg-white').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-4px)';
                    this.style.transition = 'transform 0.3s ease';
                    this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 1px 3px rgba(0, 0, 0, 0.1)';
                });
            });

            // Add pulse animation to gradient icons
            document.querySelectorAll('.bg-gradient-to-r').forEach(icon => {
                setInterval(() => {
                    icon.style.animation = 'pulse 2s ease-in-out';
                    setTimeout(() => {
                        icon.style.animation = '';
                    }, 2000);
                }, 5000);
            });

            // Add CSS animations
            const style = document.createElement('style');
            style.textContent = `
                    @keyframes pulse {
                        0%, 100% { transform: scale(1); }
                        50% { transform: scale(1.05); }
                    }
                    
                    .bg-white {
                        transition: all 0.3s ease;
                    }
                `;
            document.head.appendChild(style);
        </script>
    </section>
    {{-- End Overview --}}

    {{-- Status Sertifikasi --}}
    <section class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header dengan gradient yang menarik -->
        <div class="mb-8 relative overflow-hidden animate-fadeIn">
            <div class="bg-gradient-to-r from-[#1D4E89] via-[#2A5AAF] to-[#E76F51] rounded-2xl p-8 text-white relative">
                <div class="absolute inset-0 bg-black opacity-10"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-2">
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2L3 7v11a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V7l-7-5z"
                                clip-rule="evenodd" />
                        </svg>
                        <h1 class="text-3xl font-bold">Status Sertifikasi Anda</h1>
                    </div>
                    <p class="text-white/90 text-lg">Pantau progres pembelajaran dan sertifikasi Anda dalam
                        Teaching
                        & Learning Certification</p>
                </div>
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
            </div>
        </div>

        <!-- Certification Cards -->
        <livewire:asesi.certification-card />
        <!-- Certification Cards -->

    </section>
    {{-- End Status Sertifikasi --}}

    {{-- Kategori Level --}}
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
    {{-- <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 shadow-xl rounded-3xl border border-blue-100 p-8 mb-10">
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
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 shadow-xl rounded-3xl border border-orange-100 p-8 mb-10 bg-gradient-to-br from-blue-50 via-white to-orange-50">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 space-y-4 sm:space-y-0">
            <div class="flex items-center space-x-3">
                <div class="bg-gradient-to-r from-[#1D4E89] to-[#E76F51] text-white p-3 rounded-xl shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2
                    class="text-3xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-[#1D4E89] to-[#E76F51]">
                    KATEGORI LEVEL</h2>
            </div>
            <div class="flex items-center space-x-4">
                {{-- <span
                    class="px-4 py-2 bg-orange-100 text-[#E76F51] font-medium rounded-full border border-orange-200 shadow-sm flex items-center">
                    <span class="inline-block w-2 h-2 bg-[#E76F51] rounded-full mr-2 animate-pulse"></span>
                    Dalam Progres
                </span> --}}
                {{-- TAMPILAN SELESAI --}}
                {{-- <span class="px-4 py-2 bg-green-100 text-green-700 font-medium rounded-full border border-green-200 shadow-sm flex items-center w-fit">
                    <span class="inline-block w-2 h-2 bg-green-600 rounded-full mr-2"></span>
                    Selesai
                </span> --}}

                {{-- TAMPILAN BELUM DIMULAI --}}
                {{-- <span class="px-4 py-2 bg-gray-100 text-gray-600 font-medium rounded-full border border-gray-200 shadow-sm flex items-center w-fit">
                    <span class="inline-block w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                    Belum Dimulai
                </span> --}}
                <button
                    class="px-6 py-2 bg-gradient-to-r from-[#1D4E89] to-[#14406B] text-white rounded-xl font-medium shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-200">
                    Lihat Nilai
                </button>
            </div>
        </div>

        <p class="text-gray-600 text-base mb-10 text-center sm:text-left max-w-2xl">
            Daftar kategori kuis yang akan anda kerjakan. Selesaikan setiap kategori untuk membuka level berikutnya!
        </p>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center sm:justify-start gap-3 mb-10">
            <button onclick="showLevel('A')"
                class="px-6 py-3 bg-gradient-to-r from-[#1D4E89] to-[#14406B] text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
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
                        button.classList.add('bg-gradient-to-r', 'from-[#1D4E89]', 'to-[#14406B]', 'text-white');
                    } else {
                        button.classList.add('bg-white', 'text-gray-700');
                        button.classList.remove('bg-gradient-to-r', 'from-[#1D4E89]', 'to-[#14406B]', 'text-white');
                    }
                });
            }
        </script>
    </section>
    {{-- End Kategori level --}}

    {{-- <section class="w-full px-6 py-12">
        <div class="container mx-auto max-w-7xl">
            <!-- Enhanced Header -->
            <div class="gradient-bg text-white p-8 rounded-3xl shadow-2xl mb-8 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-black/10 to-transparent"></div>
                <div class="relative z-10">
                    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="glass-effect p-4 rounded-2xl">
                                <i class="fas fa-trophy text-3xl text-yellow-300 drop-shadow-lg"></i>
                            </div>
                            <div>
                                <h1 class="text-3xl lg:text-4xl font-bold mb-2 tracking-tight">Hasil Test Sertifikasi</h1>
                                <p class="text-lg opacity-90 font-medium">Detail hasil test dan performa peserta</p>
                            </div>
                        </div>
                        <button
                            class="glass-effect hover:bg-white/25 px-6 py-3 rounded-xl flex items-center gap-3 transition-all duration-300 font-semibold">
                            <i class="fas fa-download text-lg"></i>
                            Export Data
                        </button>
                    </div>
                </div>
            </div>

            <!-- Enhanced Search and Filters -->
            <div class="bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-6 mb-8 border border-white/20">
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="flex-1 relative">
                        <i
                            class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400 text-lg"></i>
                        <input type="text" placeholder="Cari nama peserta..."
                            class="w-full pl-12 pr-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-400 transition-all duration-300 text-gray-700 font-medium search-focus">
                    </div>
                    <select
                        class="px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-400 transition-all duration-300 font-medium text-gray-700 min-w-[150px]">
                        <option>Semua Status</option>
                        <option>Lulus</option>
                        <option>Gagal</option>
                        <option>Berlangsung</option>
                    </select>
                    <select
                        class="px-4 py-4 border-2 border-gray-200 rounded-xl focus:ring-4 focus:ring-indigo-100 focus:border-indigo-400 transition-all duration-300 font-medium text-gray-700 min-w-[150px]">
                        <option>Semua Kategori</option>
                        <option>HOTS</option>
                        <option>PCK</option>
                        <option>Literasi</option>
                        <option>Numerasi</option>
                    </select>
                </div>
            </div>

            <!-- Enhanced Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Total Lulus -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-green-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide mb-2">Total Lulus</p>
                            <p class="text-4xl font-bold text-green-600 mb-1">4</p>
                            <p class="text-green-500 text-sm font-medium">+2 dari bulan lalu</p>
                        </div>
                        <div class="bg-gradient-to-br from-green-400 to-green-600 p-4 rounded-2xl shadow-lg">
                            <i class="fas fa-check text-white text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Gagal -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-red-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-600 text-sm font-semibold uppercase tracking-wide mb-2">Total Gagal</p>
                            <p class="text-4xl font-bold text-red-600 mb-1">2</p>
                            <p class="text-red-500 text-sm font-medium">Perlu perhatian</p>
                        </div>
                        <div class="bg-gradient-to-br from-red-400 to-red-600 p-4 rounded-2xl shadow-lg">
                            <i class="fas fa-times text-white text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Results Table -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-white/20">
                <div class="bg-gradient-to-r from-gray-50 to-gray-100 px-8 py-6 border-b border-gray-200">
                    <h3 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                        <i class="fas fa-table text-indigo-600"></i>
                        Data Hasil Test Peserta
                    </h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-gray-100 to-gray-50">
                            <tr>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">No
                                </th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Nama Peserta</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Kategori</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Status</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Skor</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Total Soal</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Tidak Dijawab</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Benar</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Salah</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Kelulusan</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-gray-600 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-100">
                            <!-- Row 1 - Ahmad Rizki HOTS -->
                            <tr class="table-row">
                                <td class="px-8 py-6 text-sm font-semibold text-gray-900">1</td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm font-semibold text-gray-900">Ahmad Rizki</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-lightbulb text-orange-600 text-sm"></i>
                                        </div>
                                        <span class="text-sm font-medium text-gray-900">HOTS</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="status-completed px-4 py-2 text-xs font-bold rounded-full shadow-sm">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg font-bold text-gray-900">85</span>

                                    </div>
                                </td>
                                <td class="px-8 py-6 text-sm font-medium text-gray-700">20</td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded-full">0</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">17</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">3</span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center text-green-600 font-semibold">
                                        <i class="fas fa-medal mr-2 text-lg"></i>
                                        <span class="text-sm">LULUS</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <button
                                        class="bg-indigo-50 hover:bg-indigo-100 text-indigo-600 px-4 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 font-medium">
                                        <i class="fas fa-eye"></i>
                                        Detail
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 2 - Ahmad Rizki PCK -->
                            <tr class="table-row">
                                <td class="px-8 py-6 text-sm font-semibold text-gray-900">2</td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm font-semibold text-gray-900">Ahmad Rizki</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-book text-blue-600 text-sm"></i>
                                        </div>
                                        <span class="text-sm font-medium text-gray-900">PCK</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="status-completed px-4 py-2 text-xs font-bold rounded-full shadow-sm">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg font-bold text-gray-900">92</span>

                                    </div>
                                </td>
                                <td class="px-8 py-6 text-sm font-medium text-gray-700">25</td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded-full">0</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">23</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">2</span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center text-green-600 font-semibold">
                                        <i class="fas fa-medal mr-2 text-lg"></i>
                                        <span class="text-sm">LULUS</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <button
                                        class="bg-indigo-50 hover:bg-indigo-100 text-indigo-600 px-4 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 font-medium">
                                        <i class="fas fa-eye"></i>
                                        Detail
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 3 - Ahmad Rizki Literasi (Berlangsung) -->
                            <tr class="table-row">
                                <td class="px-8 py-6 text-sm font-semibold text-gray-900">3</td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm font-semibold text-gray-900">Ahmad Rizki</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-green-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-book-open text-green-600 text-sm"></i>
                                        </div>
                                        <span class="text-sm font-medium text-gray-900">Literasi</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="status-ongoing px-4 py-2 text-xs font-bold rounded-full shadow-sm pulse-animation">
                                        Berlangsung
                                    </span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg font-bold text-gray-400">0</span>

                                    </div>
                                </td>
                                <td class="px-8 py-6 text-sm font-medium text-gray-700">30</td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">15</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">10</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">5</span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center text-red-600 font-semibold">
                                        <i class="fas fa-exclamation-triangle mr-2 text-lg"></i>
                                        <span class="text-sm">TIDAK LULUS</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <button
                                        class="bg-yellow-50 hover:bg-yellow-100 text-yellow-600 px-4 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 font-medium">
                                        <i class="fas fa-eye"></i>
                                        Monitor
                                    </button>
                                </td>
                            </tr>

                            <!-- Row 4 - Ahmad Rizki Numerasi -->
                            <tr class="table-row">
                                <td class="px-8 py-6 text-sm font-semibold text-gray-900">4</td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-3">
                                        <span class="text-sm font-semibold text-gray-900">Ahmad Rizki</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <div class="w-8 h-8 bg-purple-100 rounded-lg flex items-center justify-center">
                                            <i class="fas fa-calculator text-purple-600 text-sm"></i>
                                        </div>
                                        <span class="text-sm font-medium text-gray-900">Numerasi</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <span class="status-completed px-4 py-2 text-xs font-bold rounded-full shadow-sm">
                                        Selesai
                                    </span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg font-bold text-gray-900">78</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6 text-sm font-medium text-gray-700">20</td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded-full">0</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-green-100 text-green-800 rounded-full">16</span>
                                </td>
                                <td class="px-8 py-6">
                                    <span
                                        class="px-3 py-1 text-xs font-semibold bg-red-100 text-red-800 rounded-full">4</span>
                                </td>
                                <td class="px-8 py-6">
                                    <div class="flex items-center text-green-600 font-semibold">
                                        <i class="fas fa-medal mr-2 text-lg"></i>
                                        <span class="text-sm">LULUS</span>
                                    </div>
                                </td>
                                <td class="px-8 py-6">
                                    <button
                                        class="bg-indigo-50 hover:bg-indigo-100 text-indigo-600 px-4 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 font-medium">
                                        <i class="fas fa-eye"></i>
                                        Detail
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            .gradient-bg {
                background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 50%, #ec4899 100%);
            }

            .glass-effect {
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .card-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            }

            .table-row {
                transition: all 0.2s ease;
            }

            .table-row:hover {
                background: linear-gradient(90deg, rgba(99, 102, 241, 0.05) 0%, rgba(168, 85, 247, 0.05) 100%);
                transform: translateX(4px);
            }

            .search-focus:focus {
                box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
            }

            .status-completed {
                background: linear-gradient(135deg, #10b981, #059669);
                color: white;
            }

            .status-ongoing {
                background: linear-gradient(135deg, #f59e0b, #d97706);
                color: white;
            }

            .pulse-animation {
                animation: pulse 2s infinite;
            }

            @keyframes pulse {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.7;
                }
            }
        </style>
    </section> --}}
    <section class="w-full px-6 py-12">
        <div class="container mx-auto max-w-7xl">
            <!-- Enhanced Header -->
            <div class="gradient-bg text-white p-8 rounded-3xl shadow-2xl mb-8 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-black/10 to-transparent"></div>
                <div class="relative z-10">
                    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="glass-effect p-4 rounded-2xl">
                                <i class="fas fa-trophy text-3xl text-yellow-300 drop-shadow-lg"></i>
                            </div>
                            <div>
                                <h1 class="text-3xl lg:text-4xl font-bold mb-2 tracking-tight">Hasil Test Sertifikasi</h1>
                                <p class="text-lg opacity-90 font-medium">Detail hasil test dan performa peserta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Total Lulus -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-teal-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#1D4E89] text-sm font-semibold uppercase tracking-wide mb-2">Total Lulus</p>
                            <p class="text-4xl font-bold text-teal-600 mb-1">4</p>
                            <p class="text-teal-500 text-sm font-medium">+2 dari bulan lalu</p>
                        </div>
                        <div class="bg-gradient-to-br from-teal-400 to-teal-600 p-4 rounded-2xl shadow-lg">
                            <i class="fas fa-check text-white text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Gagal -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-pink-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#1D4E89] text-sm font-semibold uppercase tracking-wide mb-2">Total Gagal</p>
                            <p class="text-4xl font-bold text-pink-600 mb-1">2</p>
                            <p class="text-pink-500 text-sm font-medium">Perlu perhatian</p>
                        </div>
                        <div class="bg-gradient-to-br from-pink-400 to-pink-600 p-4 rounded-2xl shadow-lg">
                            <i class="fas fa-times text-white text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Results Table -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-orange-200/30">
                <div class="bg-gradient-to-r from-orange-50 to-blue-50 px-8 py-6 border-b border-orange-200">
                    <h3 class="text-xl font-bold text-[#1D4E89] flex items-center gap-3">
                        <i class="fas fa-table text-[#E76F51]"></i>
                        Data Hasil Test
                    </h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-blue-50 to-orange-50">
                            <tr>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    No</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Nama Peserta</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Kategori</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Status</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Skor</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Total Soal</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Tidak Dijawab</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Benar</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Salah</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Kelulusan</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-orange-100">
                            <!-- Row 1 - Ahmad Rizki HOTS -->
                            @foreach ($exams as $data)
                                <tr class="table-row">
                                    <td class="px-8 py-6 text-sm font-semibold text-[#1D4E89]">{{ $loop->iteration }}</td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-3">
                                            <span
                                                class="text-sm font-semibold text-[#1D4E89]">{{ $data->user?->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-lightbulb text-[#E76F51] text-sm"></i>
                                            </div>
                                            <span
                                                class="text-sm font-medium text-[#1D4E89]">{{ $data->categoryA?->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="status-completed px-4 py-2 text-xs font-bold rounded-full shadow-sm">
                                            {{ $data->status }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <span class="text-lg font-bold text-[#1D4E89]">{{ $data->score }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-sm font-medium text-gray-700">{{ $data->total_questions }}
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded-full">{{ $data->unanswered_questions }}</span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="px-3 py-1 text-xs font-semibold bg-teal-100 text-teal-800 rounded-full">{{ $data->correct_answers }}</span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="px-3 py-1 text-xs font-semibold bg-pink-100 text-pink-800 rounded-full">{{ $data->wrong_answers }}</span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center text-teal-600 font-semibold">
                                            <i class="fas fa-medal mr-2 text-lg"></i>
                                            <span class="text-sm">{{ $data->is_passed ? 'Lulus' : 'Tidak Lulus' }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <button
                                            class="bg-blue-50 hover:bg-blue-100 text-[#1D4E89] px-4 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 font-medium hover-lift">
                                            <i class="fas fa-eye"></i>
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            .gradient-bg {
                background: linear-gradient(135deg, #1D4E89 0%, #E76F51 50%, #F4A261 100%);
            }

            .glass-effect {
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .card-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px -12px rgba(231, 111, 81, 0.25);
            }

            .hover-lift {
                transition: all 0.3s ease-in-out;
            }

            .hover-lift:hover {
                transform: translateY(-2px) scale(1.02);
                box-shadow: 0 10px 25px -5px rgba(231, 111, 81, 0.2);
            }

            .table-row {
                transition: all 0.2s ease;
            }

            .table-row:hover {
                background: linear-gradient(90deg, rgba(231, 111, 81, 0.05) 0%, rgba(29, 78, 137, 0.05) 100%);
                transform: translateX(4px);
            }

            .search-focus:focus {
                box-shadow: 0 0 0 3px rgba(231, 111, 81, 0.1);
            }

            .status-completed {
                background: linear-gradient(135deg, #14b8a6, #0d9488);
                color: white;
            }

            .status-ongoing {
                background: linear-gradient(135deg, #E76F51, #d97706);
                color: white;
            }

            .pulse-animation {
                animation: pulse 2s infinite;
            }

            @keyframes pulse {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.7;
                }
            }
        </style>
    </section>



    {{-- Awal Status Sertifikasi --}}
    {{-- <section class="w-full py-16 px-4 sm:px-6 bg-white">
        <div class="max-w-7xl mx-auto space-y-16">
            
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

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
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
            </section>
        </div>
    </section> --}}
    {{-- End Awal Status Sertifikasi --}}
@endsection
