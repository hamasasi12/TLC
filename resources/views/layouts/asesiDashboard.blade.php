<!DOCTYPE html>
<html lang="en" class="scroll-pt-24 scroll-smooth focus:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Teaching and Learning Certification')</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="icon" href="{{ asset('assets/img/tlc.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    @stack('scripts')

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="mb-16">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');

            * {
                font-family: 'Inter', sans-serif;
            }

            .glass-effect {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                -webkit-backdrop-filter: blur(20px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .nav-link {
                position: relative;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .nav-link::before {
                content: '';
                position: absolute;
                bottom: -6px;
                left: 50%;
                width: 0;
                height: 2px;
                background: linear-gradient(90deg, #1D4E89 0%, #667eea 100%);
                border-radius: 2px;
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                transform: translateX(-50%);
            }

            .nav-link.active::before,
            .nav-link:hover::before {
                width: 100%;
            }

            .nav-link:hover {
                transform: translateY(-1px);
                color: #1D4E89;
            }

            .logo-glow {
                filter: drop-shadow(0 0 15px rgba(29, 78, 137, 0.2));
                transition: all 0.3s ease;
            }

            .logo-glow:hover {
                filter: drop-shadow(0 0 20px rgba(29, 78, 137, 0.4));
                transform: scale(1.03);
            }

            .notification-pulse {
                animation: pulse 2s infinite;
            }

            @keyframes pulse {

                0%,
                100% {
                    transform: scale(1);
                    opacity: 1;
                }

                50% {
                    transform: scale(1.1);
                    opacity: 0.8;
                }
            }

            .dropdown-enter {
                animation: dropdownEnter 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            @keyframes dropdownEnter {
                0% {
                    opacity: 0;
                    transform: translateY(-10px) scale(0.95);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0) scale(1);
                }
            }

            .mobile-menu-enter {
                animation: mobileMenuSlide 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            @keyframes mobileMenuSlide {
                0% {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                100% {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .gradient-text {
                background: linear-gradient(135deg, #1D4E89 0%, #667eea 100%);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .hover-glow:hover {
                box-shadow: 0 6px 20px rgba(29, 78, 137, 0.12);
                transform: translateY(-1px);
            }

            .profile-ring {
                background: linear-gradient(135deg, #1D4E89, #667eea);
                padding: 2px;
                border-radius: 50%;
                transition: all 0.3s ease;
            }

            .profile-ring:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 15px rgba(29, 78, 137, 0.2);
            }

            .welcome-card {
                background: linear-gradient(135deg, rgba(29, 78, 137, 0.1) 0%, rgba(102, 126, 234, 0.1) 100%);
                border: 1px solid rgba(29, 78, 137, 0.2);
                transition: all 0.3s ease;
            }

            .welcome-card:hover {
                background: linear-gradient(135deg, rgba(29, 78, 137, 0.15) 0%, rgba(102, 126, 234, 0.15) 100%);
                transform: translateY(-1px);
                box-shadow: 0 4px 15px rgba(29, 78, 137, 0.08);
            }

            .nav-active {
                color: #1D4E89 !important;
                font-weight: 700 !important;
            }

            .mobile-toggle {
                background: rgba(255, 255, 255, 0.9);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(29, 78, 137, 0.1);
                transition: all 0.3s ease;
            }

            .mobile-toggle:hover {
                background: rgba(255, 255, 255, 1);
                transform: scale(1.05);
                box-shadow: 0 4px 15px rgba(29, 78, 137, 0.2);
            }
        </style>

        <nav class="fixed w-full z-20 top-0 start-0 glass-effect shadow-lg border-b border-white/20 overflow-visible">
            <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto py-3 px-4 lg:px-8">

                <!-- Enhanced Brand Section -->
                <div class="flex items-center space-x-3 group">
                    <div class="relative">
                        <img src="{{ asset('assets/img/tlc.png') }}"
                            class="h-10 w-10 md:h-12 md:w-12 rounded-lg logo-glow" alt="TLC Logo">
                    </div>
                    <div class="select-none">
                        <h1 class="text-lg md:text-2xl font-black gradient-text tracking-tight capitalize">
                            TLC Program
                        </h1>
                        <p class="text-xs text-slate-600 font-medium tracking-wide capitalize">
                            Teaching & Learning Certification
                        </p>
                    </div>
                </div>

                <!-- Enhanced Mobile Menu Toggle -->
                <div class="lg:hidden">
                    <button id="mobile-menu-toggle"
                        class="mobile-toggle p-2.5 rounded-lg text-slate-700 focus:outline-none focus:ring-4 focus:ring-blue-500/20">
                        <svg id="hamburger-icon" class="h-5 w-5 transition-transform duration-300" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        <svg id="close-icon" class="h-5 w-5 transition-transform duration-300 hidden" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

                <!-- Enhanced Navigation Menu -->
                <div id="mobile-menu"
                    class="hidden lg:flex fixed lg:static inset-x-0 top-16 lg:top-0 glass-effect lg:bg-transparent pb-4 lg:pb-0 border-b border-white/20 lg:border-0 mx-4 lg:mx-0 rounded-xl lg:rounded-none">
                    <div
                        class="container mx-auto px-4 lg:px-0 flex flex-col lg:flex-row items-center space-y-4 lg:space-y-0 lg:space-x-6 py-3 lg:py-0">
                        <a href="{{ route('asesi.dashboard') }}"
                            class="nav-link text-base font-semibold transition-all duration-300 {{ request()->routeIs('asesi.dashboard') ? 'nav-active' : 'text-gray-600 hover:text-[#1D4E89]' }}">
                            Dashboard
                        </a>

                        <a href="{{ route('asesi.sertifikasi') }}"
                            class="nav-link text-base font-semibold transition-all duration-300 {{ request()->routeIs('asesi.sertifikasi') ? 'nav-active' : 'text-gray-600 hover:text-[#1D4E89]' }}">
                            Sertifikasi
                        </a>

                        <a href="{{ route('asesi.transaksi') }}"
                            class="nav-link text-base font-semibold transition-all duration-300 {{ request()->routeIs('asesi.transaksi') ? 'nav-active' : 'text-gray-600 hover:text-[#1D4E89]' }}">
                            Transaksi
                        </a>
                    </div>
                </div>

                <!-- Enhanced User Interaction -->
                <div class="hidden lg:flex items-center space-x-4">

                    <!-- Enhanced Welcome Message -->
                    <div class="welcome-card hover-glow rounded-lg px-3 py-2">
                        <div class="flex items-center space-x-2">
                            <div class="relative">
                                <svg class="h-5 w-5 text-[#1D4E89]" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                                    </path>
                                </svg>
                                <div
                                    class="absolute -top-0.5 -right-0.5 w-1.5 h-1.5 bg-blue-400 rounded-full animate-ping">
                                </div>
                            </div>
                            <div>
                                <span class="text-sm font-medium text-gray-700">Selamat datang,</span>
                                <span class="ml-1 font-bold text-[#1D4E89]">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Enhanced Notification -->
                    <div class="relative">
                        <button
                            class="p-2.5 rounded-full bg-white/60 backdrop-blur-sm border border-white/30 hover:bg-white/80 hover:scale-105 transition-all duration-300 focus:outline-none focus:ring-4 focus:ring-blue-500/20">
                            <svg class="h-5 w-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14V11a6 6 0 10-12 0v3c0 .386-.149.757-.405 1.035L4 17h5m6 0a3 3 0 11-6 0">
                                </path>
                            </svg>
                        </button>
                        <span
                            class="absolute -top-1.5 -right-1.5 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold rounded-full px-1.5 py-0.5 notification-pulse shadow-lg">
                            3
                        </span>
                    </div>

                    <!-- Enhanced Profile -->
                    <div class="relative">
                        <button id="profile-button-asesi"
                            class="flex items-center space-x-2 p-1.5 rounded-xl hover:bg-white/50 backdrop-blur-sm transition-all duration-300 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-500/20">
                            <div class="profile-ring">
                                <img src="{{ asset('storage/' . (Auth::user()->userProfile->profile_image ?? 'blankProfile.png')) }}"
                                    alt="Profile Image" class="w-9 h-9 rounded-full object-cover">
                            </div>
                            <svg id="profile-arrow" class="h-4 w-4 text-gray-600 transition-transform duration-300"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Enhanced Dropdown -->
                        <div id="profile-menu-asesi"
                            class="absolute right-0 top-12 mt-2 w-48 glass-effect rounded-xl shadow-xl border border-white/20 hidden dropdown-enter overflow-hidden z-50">
                            <div class="py-2">
                                <a href="{{ route('asesi.profile') }}"
                                    class="flex items-center space-x-3 px-4 py-3 transition-all duration-300 group {{ request()->routeIs('asesi.profile') ? 'text-[#1D4E89] font-bold bg-gradient-to-r from-blue-50 to-purple-50' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-[#1D4E89]' }}">
                                    <div
                                        class="p-1.5 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-blue-600">
                                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="12" cy="7" r="4"></circle>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Lihat Profil</span>
                                </a>

                                <div class="border-t border-gray-100 my-1"></div>

                                <a href="{{ route('asesi.profile') }}"
                                    class="flex items-center space-x-3 px-4 py-3 transition-all duration-300 group {{ request()->routeIs('asesi.profile') ? 'text-[#1D4E89] font-bold bg-gradient-to-r from-blue-50 to-purple-50' : 'text-gray-700 hover:bg-gradient-to-r hover:from-blue-50 hover:to-purple-50 hover:text-[#1D4E89]' }}">
                                    <div
                                        class="p-1.5 bg-blue-100 rounded-lg group-hover:bg-blue-200 transition-colors duration-300">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="text-blue-600">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13">
                                            </line>
                                            <line x1="16" y1="17" x2="8" y2="17">
                                            </line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                    <span class="font-medium">Sertifikat Saya</span>
                                </a>

                                <div class="border-t border-gray-100 my-1"></div>

                                <div>
                                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                                        @csrf
                                        <button type="submit"
                                            class="w-full flex items-center space-x-3 px-4 py-3 text-red-500 hover:bg-red-50 transition-all duration-300 group">
                                            <div
                                                class="p-1.5 bg-red-100 rounded-lg group-hover:bg-red-200 transition-colors duration-300">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="text-red-600">
                                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                    <polyline points="16 17 21 12 16 7"></polyline>
                                                    <line x1="21" y1="12" x2="9"
                                                        y2="12"></line>
                                                </svg>
                                            </div>
                                            <span class="font-medium">Logout</span>
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
                // Enhanced mobile menu toggle
                const mobileToggle = document.getElementById('mobile-menu-toggle');
                const mobileMenu = document.getElementById('mobile-menu');
                const hamburgerIcon = document.getElementById('hamburger-icon');
                const closeIcon = document.getElementById('close-icon');

                mobileToggle.addEventListener('click', function() {
                    mobileMenu.classList.toggle('hidden');
                    hamburgerIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');

                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('mobile-menu-enter');
                        setTimeout(() => {
                            mobileMenu.classList.remove('mobile-menu-enter');
                        }, 300);
                    }
                });

                // Enhanced profile dropdown with arrow animation
                const profileButton = document.getElementById("profile-button-asesi");
                const profileMenu = document.getElementById("profile-menu-asesi");
                const profileArrow = document.getElementById("profile-arrow");

                profileButton.addEventListener("click", function(event) {
                    event.stopPropagation();
                    profileMenu.classList.toggle("hidden");

                    // Animate arrow
                    if (profileMenu.classList.contains('hidden')) {
                        profileArrow.style.transform = 'rotate(0deg)';
                    } else {
                        profileArrow.style.transform = 'rotate(180deg)';
                        profileMenu.classList.add('dropdown-enter');
                        setTimeout(() => {
                            profileMenu.classList.remove('dropdown-enter');
                        }, 300);
                    }
                });

                // Close dropdown when clicking outside
                document.addEventListener("click", function(event) {
                    if (!profileMenu.contains(event.target) && !profileButton.contains(event.target)) {
                        profileMenu.classList.add("hidden");
                        profileArrow.style.transform = 'rotate(0deg)';
                    }
                });

                // Close mobile menu on window resize
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 1024) {
                        mobileMenu.classList.remove('hidden');
                        hamburgerIcon.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                });

                // Add active state animations for navigation links
                const navLinks = document.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    if (link.classList.contains('nav-active')) {
                        link.classList.add('active');
                    }
                });
            });
        </script>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-[#0D3B66] text-white py-10 relative">
        <!-- Border Top -->
        <div class="absolute top-0 left-0 right-0 h-1 bg-gradient-to-r from-yellow-500 via-orange-500 to-red-500">
        </div>

        <div class="absolute inset-0 opacity-5">
            <div
                class="w-full h-full bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik0zNiAxOGMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiNmZmYiIHN0cm9rZS1vcGFjaXR5PSIuNSIvPjxwYXRoIGQ9Ik0yNCAzNmMzLjMxNCAwIDYtMi42ODYgNi02cy0yLjY4Ni02LTYtNmMtMy4zMTQgMC02IDIuNjg2LTYgNnMyLjY4NiA2IDYgNnptMCAwIiBzdHJva2U9IiNmZmYiIHN0cm9rZS1vcGFjaXR5PSIuNSIvPjwvZz48L3N2Zz4=')]">
            </div>
        </div>

        <div class="container max-w-6xl mx-auto px-6 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- TLC Program - kiri -->
                <div class="space-y-3">
                    <h2 class="text-xl font-bold mb-3 pb-2 border-b-2 border-orange-400 inline-block">
                        TLC Program
                    </h2>
                    <p class="text-gray-300 leading-relaxed mb-4 text-sm">
                        Program sertifikasi untuk memberdayakan pendidik dengan pengetahuan dan
                        keterampilan mengajar yang efektif.
                    </p>
                    <div class="flex space-x-4 mt-3">
                        <a href="#" class="text-white hover:text-orange-400 transition-colors">
                            <i class="fab fa-facebook-f text-lg"></i>
                        </a>
                        <a href="#" class="text-white hover:text-orange-400 transition-colors">
                            <i class="fab fa-twitter text-lg"></i>
                        </a>
                        <a href="#" class="text-white hover:text-orange-400 transition-colors">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="#" class="text-white hover:text-orange-400 transition-colors">
                            <i class="fab fa-linkedin-in text-lg"></i>
                        </a>
                    </div>
                </div>

                <!-- Tautan Cepat - Middle -->
                <div class="md:flex md:justify-center">
                    <div class="space-y-3">
                        <h2 class="text-xl font-bold mb-3 pb-2 border-b-2 border-orange-400 inline-block">
                            Tautan Cepat
                        </h2>
                        <ul class="space-y-2 text-sm">
                            <li class="group">
                                <a href="#"
                                    class="flex items-center text-gray-300 hover:text-orange-400 transition-colors duration-300">
                                    <span
                                        class="transform group-hover:translate-x-2 transition-transform duration-200">
                                        <i class="fas fa-chevron-right mr-2 text-orange-400 text-sm"></i>
                                        Tentang TLC
                                    </span>
                                </a>
                            </li>
                            <li class="group">
                                <a href="#"
                                    class="flex items-center text-gray-300 hover:text-orange-400 transition-colors duration-300">
                                    <span
                                        class="transform group-hover:translate-x-2 transition-transform duration-200">
                                        <i class="fas fa-chevron-right mr-2 text-orange-400 text-sm"></i>
                                        Manfaat
                                    </span>
                                </a>
                            </li>
                            <li class="group">
                                <a href="#"
                                    class="flex items-center text-gray-300 hover:text-orange-400 transition-colors duration-300">
                                    <span
                                        class="transform group-hover:translate-x-2 transition-transform duration-200">
                                        <i class="fas fa-chevron-right mr-2 text-orange-400 text-sm"></i>
                                        Kurikulum
                                    </span>
                                </a>
                            </li>
                            <li class="group">
                                <a href="#"
                                    class="flex items-center text-gray-300 hover:text-orange-400 transition-colors duration-300">
                                    <span
                                        class="transform group-hover:translate-x-2 transition-transform duration-200">
                                        <i class="fas fa-chevron-right mr-2 text-orange-400 text-sm"></i>
                                        Paket Harga
                                    </span>
                                </a>
                            </li>
                            <li class="group">
                                <a href="#"
                                    class="flex items-center text-gray-300 hover:text-orange-400 transition-colors duration-300">
                                    <span
                                        class="transform group-hover:translate-x-2 transition-transform duration-200">
                                        <i class="fas fa-chevron-right mr-2 text-orange-400 text-sm"></i>
                                        Pendaftaran
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kontak - Kanan -->
                <div class="md:text-right space-y-3">
                    <h2 class="text-xl font-bold mb-3 pb-2 border-b-2 border-orange-400 md:ml-auto md:inline-block">
                        Kontak
                    </h2>
                    <ul class="space-y-3 text-sm">
                        <li class="flex items-start md:justify-end group">
                            <i
                                class="fas fa-map-marker-alt text-orange-400 text-lg mt-1 md:order-2 md:ml-3 group-hover:animate-bounce"></i>
                            <span class="ml-3 md:ml-0 text-gray-300 md:text-right md:order-1">
                                Jl. Pendidikan No. 123, Jakarta Pusat, Indonesia
                            </span>
                        </li>
                        <li class="flex items-center md:justify-end group">
                            <i
                                class="fas fa-phone-alt text-orange-400 text-lg md:order-2 md:ml-3 group-hover:animate-bounce"></i>
                            <span
                                class="ml-3 md:ml-0 text-gray-300 hover:text-orange-400 transition-colors md:order-1">
                                <a href="tel:+6221123456789">+62 21 1234 5678</a>
                            </span>
                        </li>
                        <li class="flex items-center md:justify-end group">
                            <i
                                class="fas fa-envelope text-orange-400 text-lg md:order-2 md:ml-3 group-hover:animate-bounce"></i>
                            <span
                                class="ml-3 md:ml-0 text-gray-300 hover:text-orange-400 transition-colors md:order-1">
                                <a href="mailto:info@tlcprogram.id">info@tlcprogram.id</a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 pt-4 border-t border-gray-500 text-center text-gray-400 text-sm">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <p>© 2025 Teaching and Learning Certification Program. All rights reserved.</p>
                    <div class="mt-2 md:mt-0">
                        <a href="#" class="text-gray-400 hover:text-orange-400 mx-2 transition-colors">Kebijakan
                            Privasi</a>
                        <span class="mx-2">|</span>
                        <a href="#" class="text-gray-400 hover:text-orange-400 mx-2 transition-colors">Syarat
                            & Ketentuan</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FontAwesome Script untuk Icon -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" crossorigin="anonymous"></script>
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
