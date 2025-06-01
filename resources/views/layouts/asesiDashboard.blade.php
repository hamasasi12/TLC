<!DOCTYPE html>
<html lang="en" class="scroll-pt-24 scroll-smooth focus:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'TLC')</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="icon" href="{{ asset('assets/img/tlc.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    @stack('scripts')
    @livewireStyles

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="mb-20">
        {{-- <nav class="fixed w-full z-20 top-0 start-0 bg-white shadow-sm border-b border-gray-200"> --}}
        <nav class="fixed w-full z-20 top-0 start-0 bg-white shadow-sm border-b border-gray-200 overflow-visible">

            <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto py-4 px-10">

                <!-- Brand Section -->
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('assets/img/tlc.png') }}" class="h-10 w-10 md:h-14 md:w-14" alt="TLC Logo">
                    <div>
                        <h1 class="text-lg md:text-2xl font-extrabold text-[#1D4E89] tracking-wide capitalize">TLC
                            Program
                        </h1>
                        <p class="text-xs md:text-sm text-gray-500 font-medium capitalize">
                            Teaching & Learning Certification
                        </p>
                    </div>
                </div>

                <!-- Mobile Menu Toggle -->
                <div class="lg:hidden">
                    <button id="mobile-menu-toggle" class="text-gray-700 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>

                <!-- Navigation Menu -->
                <div id="mobile-menu"
                    class="hidden lg:flex fixed lg:static inset-x-0 top-16 lg:top-0 bg-white lg:bg-transparent pb-4 lg:pb-0 border-b lg:border-0">
                    <div
                        class="container mx-auto px-4 lg:px-0 flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-6">
                        <a href="{{ route('asesi.dashboard') }}"
                            class="{{ request()->routeIs('asesi.dashboard') ? 'text-[#1D4E89] font-bold' : 'text-gray-600' }}">
                            Dashboard
                        </a>

                        <a href="{{ route('asesi.sertifikasi') }}"
                            class="{{ request()->routeIs('asesi.sertifikasi') ? 'text-[#1D4E89] font-bold' : 'text-gray-600' }}">
                            Sertifikasi
                        </a>

                        <a href="{{ route('asesi.transaksi') }}"
                            class="{{ request()->routeIs('asesi.transaksi') ? 'text-[#1D4E89] font-bold' : 'text-gray-600' }}">
                            Transaksi
                        </a>

                    </div>
                </div>

                <!-- User Interaction -->
                <div class="hidden lg:flex items-center space-x-4">

                    <!-- Search -->
                    {{-- <div class="relative">
                        <input type="text" placeholder="Cari Data"
                            class="pl-8 pr-2 py-2 w-40 rounded-full bg-gray-100 text-gray-700 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-400 text-sm">
                        <svg class="absolute left-2 top-3 h-4 w-4 text-gray-500" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1010.5 3a7.5 7.5 0 006.15 12.65z"></path>
                        </svg>
                    </div> --}}
                    <div class="relative">
                        <div class="flex items-center space-x-2">
                            <svg class="h-5 w-5 text-indigo-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                </path>
                            </svg>
                            <span class="font-medium text-gray-700">Selamat datang, <span
                                    class="text-indigo-600 font-semibold">{{ Auth::user()->name }}</span></span>
                        </div>
                    </div>

                    <!-- Notification -->
                    <div class="relative">
                        <svg class="h-7 w-7 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14V11a6 6 0 10-12 0v3c0 .386-.149.757-.405 1.035L4 17h5m6 0a3 3 0 11-6 0">
                            </path>
                        </svg>
                        <span
                            class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">3</span>
                    </div>

                    <!-- Profile -->
                    <div class="relative">
                        <button id="profile-button-asesi" class="flex items-center space-x-2">
                            <img src="{{ asset('storage/' . (Auth::user()->userProfile->profile_image ?? 'blankProfile.png')) }}"
                                alt="Profile Image" class="w-12 h-12 rounded-full object-cover">
                            <svg class="h-4 w-4 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div id="profile-menu-asesi"
                            class="absolute right-0 top-16 mt-2 w-48 bg-white rounded-md shadow-lg z-50 hidden">

                            <div class="py-2">
                                <a href="{{ route('asesi.profile') }}"
                                    class="block px-4 py-2 flex items-center space-x-3
          {{ request()->routeIs('asesi.profile') ? 'text-[#1D4E89] font-bold' : 'text-gray-700 hover:bg-gray-100' }}">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="text-blue-500">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="text-gray-700">Lihat Profil</span>
                                </a>
                                <div>
                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit"
                                            class="w-full px-4 py-2 hover:bg-gray-100 flex items-center space-x-3 text-red-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
            </div>
        </nav>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
                    document.getElementById('mobile-menu').classList.toggle('hidden');
                });

                const profileButton = document.getElementById("profile-button-asesi");
                const profileMenu = document.getElementById("profile-menu-asesi");
                profileButton.addEventListener("click", function(event) {
                    event.stopPropagation();
                    profileMenu.classList.toggle("hidden");
                });
                document.addEventListener("click", function(event) {
                    if (!profileMenu.contains(event.target) && !profileButton.contains(event.target)) {
                        profileMenu.classList.add("hidden");
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', function() {
                const profileButton = document.getElementById('profile-button');
                const profileMenu = document.getElementById('profile-menu');

                profileButton.addEventListener('click', function() {
                    profileMenu.classList.toggle('hidden');
                });

                // Optional: klik di luar dropdown untuk nutup menu
                document.addEventListener('click', function(e) {
                    if (!profileButton.contains(e.target) && !profileMenu.contains(e.target)) {
                        profileMenu.classList.add('hidden');
                    }
                });
            });
        </script>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        {{-- @include('components.asesi.footer') --}}
        <section class="bg-[#0D3B66] text-white py-10">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- TLC Program -->
                <div>
                    <h2 class="text-lg font-semibold">TLC Program</h2>
                    <p class="text-sm mt-2">
                        Program sertifikasi untuk memberdayakan pendidik dengan pengetahuan dan keterampilan mengajar
                        yang
                        efektif.
                    </p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="hover:text-gray-300 text-xl"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-gray-300 text-xl"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300 text-xl"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-300 text-xl"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- Tautan Cepat -->
                <div>
                    <h2 class="text-lg font-semibold">Tautan Cepat</h2>
                    <ul class="mt-2 space-y-2 text-sm">
                        <li><a href="#" class="hover:text-gray-300">Tentang TLC</a></li>
                        <li><a href="#" class="hover:text-gray-300">Manfaat</a></li>
                        <li><a href="#" class="hover:text-gray-300">Kurikulum</a></li>
                        <li><a href="#" class="hover:text-gray-300">Paket Harga</a></li>
                        <li><a href="#" class="hover:text-gray-300">Pendaftaran</a></li>
                        <li><a href="#" class="hover:text-gray-300">Galeri</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div class="sm:col-span-2 lg:col-span-1">
                    <h2 class="text-lg font-semibold">Kontak</h2>
                    <ul class="mt-2 space-y-3 text-sm">
                        <li class="flex items-start gap-2">
                            <i class="fas fa-map-marker-alt text-yellow-400 mt-1"></i>
                            <span>Jl. Pendidikan No. 123, Jakarta Pusat, Indonesia</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-phone-alt text-yellow-400"></i>
                            <span>+62 21 1234 5678</span>
                        </li>
                        <li class="flex items-center gap-2">
                            <i class="fas fa-envelope text-yellow-400"></i>
                            <span>info@tlcprogram.id</span>
                        </li>
                    </ul>
                </div>
            </div>

            <hr class="border-gray-500 my-6 mx-4 sm:mx-6 lg:mx-8">

            <div class="text-center text-xs sm:text-sm px-4">
                © 2025 Teaching and Learning Certification Program. All rights reserved.
            </div>
        </section>

    </footer>

    <style>
        #profile-menu-asesi {
            position: absolute;
            z-index: 999;
            top: 100%;
            right: 0;
            will-change: transform;
        }
    </style>
@livewireScripts
</body>

</html>
