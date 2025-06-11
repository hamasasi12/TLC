@extends('layouts.asesorDashboard')
@section('title', 'Asesor Dashboard')
@section('content')
    <!-- Main Content -->
    <main class="transition-smooth main-padding" id="main-content">
        <div class="px-4 sm:px-6 lg:px-8" id="main-wrapper">
            <!-- Dashboard Header -->
            <div class="text-center mb-6 sm:mb-8">
                <span
                    class="text-xs sm:text-sm text-white font-semibold inline-block px-3 sm:px-4 py-2 bg-gradient-to-r from-secondary to-primary rounded-full shadow-lg hover:shadow-xl transition-smooth hover:scale-105 mb-3 sm:mb-4">
                    #DASHBOARD STATISTIK
                </span>
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-extrabold leading-tight mb-3 sm:mb-4">
                    <span class="relative inline-block">
                        <span class="relative z-10 text-gradient">Dashboard</span>
                        <span
                            class="absolute -bottom-1 sm:-bottom-2 left-0 w-full h-2 sm:h-3 bg-yellow-300 opacity-50 z-0"></span>
                    </span>
                    <br>
                    <span class="relative inline-block">
                        <span class="relative z-10 text-gradient">Statistik</span>
                        <span
                            class="absolute -bottom-1 sm:-bottom-2 left-0 w-full h-2 sm:h-3 bg-orange-300 opacity-50 z-0"></span>
                    </span>
                </h1>
                <p class="text-sm sm:text-base lg:text-lg text-gray-700 max-w-2xl mx-auto leading-relaxed px-2 sm:px-4">
                    <strong class="text-secondary">Ringkasan aktivitas penilaian terkini</strong> dengan visualisasi
                    data yang
                    <span class="font-semibold text-gradient">interaktif dan modern</span>
                </p>
            </div>

            <!-- Grid Statistik -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 mb-8 sm:mb-12">
                <!-- Card 1: Total Tugas -->
                <div
                    class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-blue-800">
                    <div class="p-4 sm:p-6">
                        <div class="flex justify-between items-start">
                            <div class="flex-1">
                                <p class="text-xs sm:text-sm text-gray-500">Total Tugas</p>
                                <h3 class="text-2xl sm:text-3xl font-bold text-gray-800 mt-1 group-hover:text-blue-800">45
                                </h3>
                            </div>
                            <div
                                class="bg-blue-100 p-2 sm:p-3 rounded-full text-blue-800 group-hover:bg-blue-800 group-hover:text-white transition-colors flex-shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                            </button>

                            <!-- Profile Dropdown -->
                            <div id="profile-menu"
                                class="absolute right-0 mt-2 w-64 bg-white rounded-lg shadow-xl border border-blue-200 z-50 hidden transform transition-all duration-300 origin-top-right scale-0 opacity-0">
                                <div class="p-4 border-b border-blue-200">
                                    <div class="flex items-center space-x-3">
                                        <div class="bg-blue-100 rounded-full p-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="text-blue-600">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                        </div>
                                        <div>
                                            <h4 class="font-bold text-gray-800">Ahmad Asesor</h4>
                                            <p class="text-xs text-gray-500">Senior Assessor</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-blue-50 transition-colors duration-200 flex items-center space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                        <span class="text-gray-700">Lihat Profil</span>
                                    </a>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-blue-50 transition-colors duration-200 flex items-center space-x-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                            <circle cx="12" cy="12" r="3"></circle>
                                            <path
                                                d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z">
                                            </path>
                                        </svg>
                                        <span class="text-gray-700">Pengaturan</span>
                                    </a>
                                    <div class="border-t border-blue-100 my-1"></div>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit"
                                            class="block w-full px-4 py-2 hover:bg-red-50 transition-colors duration-200 flex items-center space-x-3 text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span>Logout</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </nav>
                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        const profileButton = document.getElementById("profile-button");
                        const profileMenu = document.getElementById("profile-menu");

                        if (profileButton && profileMenu) {
                            profileButton.addEventListener("click", function(event) {
                                event.stopPropagation();


                                if (profileMenu.classList.contains("hidden")) {
                                    profileMenu.classList.remove("hidden");
                                    setTimeout(() => {
                                        profileMenu.classList.add("scale-100", "opacity-100");
                                        profileMenu.classList.remove("scale-0", "opacity-0");
                                    }, 10);
                                } else {
                                    profileMenu.classList.remove("scale-100", "opacity-100");
                                    profileMenu.classList.add("scale-0", "opacity-0");
                                    setTimeout(() => {
                                        profileMenu.classList.add("hidden");
                                    }, 300);
                                }
                            });

                            document.addEventListener("click", function(event) {
                                if (!profileMenu.contains(event.target) && !profileButton.contains(event.target)) {
                                    profileMenu.classList.remove("scale-100", "opacity-100");
                                    profileMenu.classList.add("scale-0", "opacity-0");
                                    setTimeout(() => {
                                        profileMenu.classList.add("hidden");
                                    }, 300);
                                }
                            });
                        }


                        window.addEventListener('scroll', function() {
                            const navbar = document.querySelector('nav');
                            if (window.scrollY > 10) {
                                navbar.classList.add('bg-white', 'shadow-lg');
                                navbar.classList.remove('bg-gradient-to-r', 'from-blue-100', 'to-blue-200',
                                    'shadow-md');
                            } else {
                                navbar.classList.remove('bg-white', 'shadow-lg');
                                navbar.classList.add('bg-gradient-to-r', 'from-blue-100', 'to-blue-200', 'shadow-md');
                            }
                        });


                        const buttons = document.querySelectorAll('button');
                        buttons.forEach(button => {
                            button.addEventListener('click', function(e) {
                                const x = e.clientX - e.target.getBoundingClientRect().left;
                                const y = e.clientY - e.target.getBoundingClientRect().top;

                                const ripple = document.createElement('span');
                                ripple.classList.add('ripple');
                                ripple.style.left = `${x}px`;
                                ripple.style.top = `${y}px`;

                                this.appendChild(ripple);

                                setTimeout(() => {
                                    ripple.remove();
                                }, 600);
                            });
                        });
                    });
                </script>
                <style>
                    .ripple {
                        position: absolute;
                        background: rgba(255, 255, 255, 0.5);
                        border-radius: 50%;
                        transform: scale(0);
                        animation: ripple 0.6s linear;
                        pointer-events: none;
                    }

                    @keyframes ripple {
                        to {
                            transform: scale(4);
                            opacity: 0;
                        }
                    }

                    .group:hover #profile-menu {
                        display: block !important;
                        animation: fadeInScale 0.3s forwards;
                    }

                    @keyframes fadeInScale {
                        from {
                            opacity: 0;
                            transform: scale(0.95) translateY(-10px);
                        }

                        to {
                            opacity: 1;
                            transform: scale(1) translateY(0);
                        }
                    }
                </style>
                </header>
                {{-- End Navbar --}}

                {{-- Statistik --}}
                <section class="max-w-7xl mx-auto px-4 py-8">
                    <!-- Header dengan gaya modern -->
                    <div class="mb-10 text-center">
                        <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-3 relative inline-block">
                            <span class="relative z-10">Dashboard Statistik</span>
                            <span class="absolute bottom-0 left-0 w-full h-2 bg-yellow-400 z-0 opacity-30"></span>
                        </h1>
                        <p class="text-gray-600">Ringkasan aktivitas penilaian terkini</p>
                    </div>

                    <!-- Grid Statistik -->
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                        <!-- Card 1: Total Tugas -->
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-blue-800">
                            <div class="p-6">
                                <div class="flex justify-between">
                                    <div>
                                        <p class="text-sm text-gray-500">Total Tugas</p>
                                        <h3 class="text-3xl font-bold text-gray-800 mt-1 group-hover:text-blue-800">45</h3>
                                    </div>
                                    <div
                                        class="bg-blue-100 p-3 rounded-full text-blue-800 group-hover:bg-blue-800 group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500 mt-3">Tugas penilaian yang diberikan</p>
                            </div>
                        </div>

                        <!-- Card 2: Menunggu Dinilai -->
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-yellow-500">
                            <div class="p-6">
                                <div class="flex justify-between">
                                    <div>
                                        <p class="text-sm text-gray-500">Menunggu Dinilai</p>
                                        <h3 class="text-3xl font-bold text-gray-800 mt-1 group-hover:text-yellow-600">12
                                        </h3>
                                    </div>
                                    <div
                                        class="bg-yellow-100 p-3 rounded-full text-yellow-600 group-hover:bg-yellow-500 group-hover:text-white transition-colors animate-pulse">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500 mt-3">Asesi yang belum dinilai</p>
                            </div>
                        </div>

                        <!-- Card 3: Selesai Dinilai -->
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-green-500">
                            <div class="p-6">
                                <div class="flex justify-between">
                                    <div>
                                        <p class="text-sm text-gray-500">Selesai Dinilai</p>
                                        <h3 class="text-3xl font-bold text-gray-800 mt-1 group-hover:text-green-600">33
                                        </h3>
                                    </div>
                                    <div
                                        class="bg-green-100 p-3 rounded-full text-green-600 group-hover:bg-green-500 group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500 mt-3">Asesi yang sudah dinilai</p>
                            </div>
                        </div>

                        <!-- Card 4: Total Asesi -->
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-purple-500">
                            <div class="p-6">
                                <div class="flex justify-between">
                                    <div>
                                        <p class="text-sm text-gray-500">Total Asesi</p>
                                        <h3 class="text-3xl font-bold text-gray-800 mt-1 group-hover:text-purple-600">78
                                        </h3>
                                    </div>
                                    <div
                                        class="bg-purple-100 p-3 rounded-full text-purple-600 group-hover:bg-purple-500 group-hover:text-white transition-colors">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                        </svg>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-500 mt-3">Jumlah asesi yang ditugaskan</p>
                            </div>
                        </div>
                    </div>

                    <!-- Chart Section -->
                    <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                        <div class="p-6 border-b border-gray-100">
                            <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                                <h2 class="text-xl font-bold text-gray-800 mb-2 md:mb-0">Statistik Penilaian Bulanan</h2>
                                <div class="flex space-x-2">
                                    <button
                                        class="px-3 py-1.5 bg-blue-800 text-white text-sm rounded-lg hover:bg-blue-700 transition-colors flex items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Export
                                    </button>
                                    <button
                                        class="px-3 py-1.5 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50 transition-colors">
                                        Filter
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="p-6">
                            <!-- Chart Container -->
                            <div class="relative h-64">
                                <!-- Y-axis -->
                                <div
                                    class="absolute left-0 top-0 h-full flex flex-col justify-between text-xs text-gray-500 font-medium">
                                    <span>60</span>
                                    <span>45</span>
                                    <span>30</span>
                                    <span>15</span>
                                    <span>0</span>
                                </div>

                                <!-- Chart Bars -->
                                <div class="ml-8 h-full flex items-end space-x-6">
                                    <!-- January -->
                                    <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                        <div class="w-full flex flex-col items-center" style="height: 83.33%">
                                            <div class="w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                <div
                                                    class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    40 Lulus
                                                </div>
                                            </div>
                                            <div class="w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/6 relative">
                                                <div
                                                    class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    5 Tidak Lulus
                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Jan</span>
                                    </div>

                                    <!-- February -->
                                    <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                        <div class="w-full flex flex-col items-center" style="height: 75%">
                                            <div class="w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                <div
                                                    class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    35 Lulus
                                                </div>
                                            </div>
                                            <div class="w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/4 relative">
                                                <div
                                                    class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    8 Tidak Lulus
                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Feb</span>
                                    </div>

                                    <!-- March -->
                                    <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                        <div class="w-full flex flex-col items-center" style="height: 91.66%">
                                            <div class="w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                <div
                                                    class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    45 Lulus
                                                </div>
                                            </div>
                                            <div class="w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/5 relative">
                                                <div
                                                    class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    10 Tidak Lulus
                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Mar</span>
                                    </div>

                                    <!-- April -->
                                    <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                        <div class="w-full flex flex-col items-center" style="height: 66.66%">
                                            <div class="w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                <div
                                                    class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    32 Lulus
                                                </div>
                                            </div>
                                            <div class="w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/3 relative">
                                                <div
                                                    class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    12 Tidak Lulus
                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Apr</span>
                                    </div>

                                    <!-- May -->
                                    <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                        <div class="w-full flex flex-col items-center" style="height: 75%">
                                            <div class="w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                <div
                                                    class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    38 Lulus
                                                </div>
                                            </div>
                                            <div class="w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/6 relative">
                                                <div
                                                    class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    7 Tidak Lulus
                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Mei</span>
                                    </div>

                                    <!-- June -->
                                    <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                        <div class="w-full flex flex-col items-center" style="height: 83.33%">
                                            <div class="w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                <div
                                                    class="absolute -top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    42 Lulus
                                                </div>
                                            </div>
                                            <div class="w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/6 relative">
                                                <div
                                                    class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                                    8 Tidak Lulus
                                                </div>
                                            </div>
                                        </div>
                                        <span
                                            class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Jun</span>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-500 mt-2 sm:mt-3">Tugas penilaian yang diberikan
                                    </p>
                                </div>
                            </div>

                            <!-- Card 2: Menunggu Dinilai -->
                            <div
                                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-yellow-500">
                                <div class="p-4 sm:p-6">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <p class="text-xs sm:text-sm text-gray-500">Menunggu Dinilai</p>
                                            <h3
                                                class="text-2xl sm:text-3xl font-bold text-gray-800 mt-1 group-hover:text-yellow-600">
                                                12</h3>
                                        </div>
                                        <div
                                            class="bg-yellow-100 p-2 sm:p-3 rounded-full text-yellow-600 group-hover:bg-yellow-500 group-hover:text-white transition-colors animate-pulse flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-500 mt-2 sm:mt-3">Asesi yang belum dinilai</p>
                                </div>
                            </div>

                            <!-- Card 3: Selesai Dinilai -->
                            <div
                                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-green-500">
                                <div class="p-4 sm:p-6">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <p class="text-xs sm:text-sm text-gray-500">Selesai Dinilai</p>
                                            <h3
                                                class="text-2xl sm:text-3xl font-bold text-gray-800 mt-1 group-hover:text-green-600">
                                                33</h3>
                                        </div>
                                        <div
                                            class="bg-green-100 p-2 sm:p-3 rounded-full text-green-600 group-hover:bg-green-500 group-hover:text-white transition-colors flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 13l4 4L19 7" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-500 mt-2 sm:mt-3">Asesi yang sudah dinilai</p>
                                </div>
                            </div>

                            <!-- Card 4: Total Asesi -->
                            <div
                                class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300 transform hover:-translate-y-1 group border-l-4 border-purple-500">
                                <div class="p-4 sm:p-6">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <p class="text-xs sm:text-sm text-gray-500">Total Asesi</p>
                                            <h3
                                                class="text-2xl sm:text-3xl font-bold text-gray-800 mt-1 group-hover:text-purple-600">
                                                78</h3>
                                        </div>
                                        <div
                                            class="bg-purple-100 p-2 sm:p-3 rounded-full text-purple-600 group-hover:bg-purple-500 group-hover:text-white transition-colors flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 sm:h-6 sm:w-6"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <p class="text-xs sm:text-sm text-gray-500 mt-2 sm:mt-3">Jumlah asesi yang ditugaskan
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Chart Section -->
                        <div
                            class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-all duration-300">
                            <div class="p-4 sm:p-6 border-b border-gray-100">
                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-0">
                                    <h2 class="text-lg sm:text-xl font-bold text-gray-800">Statistik Penilaian Bulanan</h2>
                                    <div class="flex flex-col sm:flex-row gap-2 sm:space-x-2">
                                        <button
                                            class="px-3 py-1.5 bg-blue-800 text-white text-sm rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center sm:justify-start">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                            </svg>
                                            Export
                                        </button>
                                        <button
                                            class="px-3 py-1.5 border border-gray-300 text-gray-700 text-sm rounded-lg hover:bg-gray-50 transition-colors flex items-center justify-center sm:justify-start">
                                            Filter
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="p-4 sm:p-6">
                                <div class="relative h-48 sm:h-56 md:h-64">
                                    <div
                                        class="absolute left-0 top-0 h-full flex flex-col justify-between text-xs text-gray-500 font-medium">
                                        <span>60</span>
                                        <span>45</span>
                                        <span>30</span>
                                        <span>15</span>
                                        <span>0</span>
                                    </div>

                                    <div class="ml-6 sm:ml-8 h-full flex items-end space-x-2 sm:space-x-4 md:space-x-6">
                                        <!-- January -->
                                        <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                            <div class="w-full flex flex-col items-center" style="height: 83.33%">
                                                <div class="w-full sm:w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                    <div
                                                        class="absolute -top-8 sm:-top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        40 Lulus
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full sm:w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/6 relative">
                                                    <div
                                                        class="absolute -bottom-8 sm:-bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        5 Tidak Lulus
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Jan</span>
                                        </div>

                                        <!-- February -->
                                        <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                            <div class="w-full flex flex-col items-center" style="height: 75%">
                                                <div class="w-full sm:w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                    <div
                                                        class="absolute -top-8 sm:-top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        35 Lulus
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full sm:w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/4 relative">
                                                    <div
                                                        class="absolute -bottom-8 sm:-bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        8 Tidak Lulus
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Feb</span>
                                        </div>

                                        <!-- March -->
                                        <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                            <div class="w-full flex flex-col items-center" style="height: 91.66%">
                                                <div class="w-full sm:w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                    <div
                                                        class="absolute -top-8 sm:-top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        45 Lulus
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full sm:w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/5 relative">
                                                    <div
                                                        class="absolute -bottom-8 sm:-bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        10 Tidak Lulus
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Mar</span>
                                        </div>

                                        <!-- April -->
                                        <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                            <div class="w-full flex flex-col items-center" style="height: 66.66%">
                                                <div class="w-full sm:w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                    <div
                                                        class="absolute -top-8 sm:-top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        32 Lulus
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full sm:w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/3 relative">
                                                    <div
                                                        class="absolute -bottom-8 sm:-bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        12 Tidak Lulus
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Apr</span>
                                        </div>

                                        <!-- May -->
                                        <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                            <div class="w-full flex flex-col items-center" style="height: 75%">
                                                <div class="w-full sm:w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                    <div
                                                        class="absolute -top-8 sm:-top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        38 Lulus
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full sm:w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/6 relative">
                                                    <div
                                                        class="absolute -bottom-8 sm:-bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        7 Tidak Lulus
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Mei</span>
                                        </div>

                                        <!-- June -->
                                        <div class="group flex-1 h-full flex flex-col justify-end items-center">
                                            <div class="w-full flex flex-col items-center" style="height: 83.33%">
                                                <div class="w-full sm:w-3/4 bg-blue-800 rounded-t-md h-full relative">
                                                    <div
                                                        class="absolute -top-8 sm:-top-6 left-1/2 transform -translate-x-1/2 bg-blue-800 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        42 Lulus
                                                    </div>
                                                </div>
                                                <div
                                                    class="w-full sm:w-3/4 bg-yellow-500 rounded-t-md mt-1 h-1/6 relative">
                                                    <div
                                                        class="absolute -bottom-8 sm:-bottom-6 left-1/2 transform -translate-x-1/2 bg-yellow-500 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity z-10 whitespace-nowrap">
                                                        8 Tidak Lulus
                                                    </div>
                                                </div>
                                            </div>
                                            <span
                                                class="text-xs text-gray-600 font-medium mt-2 group-hover:text-blue-800 transition-colors">Jun</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Legend -->
                                <div class="flex justify-center space-x-4 sm:space-x-6 mt-6 sm:mt-8">
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-blue-800 rounded-full mr-2"></div>
                                        <span class="text-xs sm:text-sm text-gray-600 font-medium">Lulus</span>
                                    </div>
                                    <div class="flex items-center">
                                        <div class="w-3 h-3 bg-yellow-500 rounded-full mr-2"></div>
                                        <span class="text-xs sm:text-sm text-gray-600 font-medium">Tidak Lulus</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    </main>
@endsection
