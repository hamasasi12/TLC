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
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-abu font-sans">

    <!-- Navbar -->
        <header class="mb-20">
            <nav
                class="fixed w-full z-20 top-0 start-0 bg-gradient-to-r from-[#3A6EA5] to-[#90BE6D] shadow-sm border-b border-gray-300">
                <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto py-4 px-12">
                    <a href="#" class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo.svg') }}" class="h-12" alt="TLC Logo" loading="lazy">
                        <div class="flex flex-col">
                            <span class="text-lg font-bold text-[#1D4E89] tracking-wide">TLC Program</span>
                            <span class="text-sm text-[#f1e686] font-medium">Teaching & Learning Certification</span>
                        </div>
                    </a>

                    <!-- Hamburger Menu Button -->
                    <button id="menu-toggle" class="lg:hidden text-white focus:outline-none">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex lg:items-center lg:space-x-10 text-sm font-semibold" id="menu">
                        <a href="#home" class="text-white hover:text-[#F4A261] transition duration-300">Beranda</a>
                        <a href="#about" class="text-white hover:text-[#F4A261] transition duration-300">Tentang TLC</a>
                        <a href="#harga" class="text-white hover:text-[#F4A261] transition duration-300">Harga</a>
                        <a href="#skema" class="text-white hover:text-[#F4A261] transition duration-300">Skema</a>
                        <a href="#proses" class="text-white hover:text-[#F4A261] transition duration-300">Sertifikasi</a>
                        <a href="#faq" class="text-white hover:text-[#F4A261] transition duration-300">FAQ</a>
                    </div>

                    <!-- Authentication Buttons -->
                    <div class="hidden lg:flex lg:items-center lg:space-x-4">
                        <a href="{{ route('login') }}">
                            <button
                                class="border-2 border-white text-white text-sm px-3 py-1.5 rounded-lg hover:bg-[#F4A261] hover:text-[#3A6EA5] transition duration-300">Log
                                in</button>
                        </a>
                        <a href="{{ route('register') }}">
                            <button
                                class="border-2 border-white text-white text-sm px-3 py-1.5 rounded-lg hover:bg-[#F4A261] hover:text-[#3A6EA5] transition duration-300">Register
                                Now</button>
                        </a>
                    </div>
                </div>

                <!-- Mobile Menu -->
                <div id="mobile-menu"
                    class="hidden lg:hidden flex flex-col items-center space-y-4 py-6 bg-[#3A6EA5] border-t border-gray-300 text-sm font-medium">
                    <a href="#home" class="text-white hover:text-[#F4A261] transition duration-300">Beranda</a>
                    <a href="#about" class="text-white hover:text-[#F4A261] transition duration-300">Tentang TLC</a>
                    <a href="#harga" class="text-white hover:text-[#F4A261] transition duration-300">Harga</a>
                    <a href="#skema" class="text-white hover:text-[#F4A261] transition duration-300">Skema</a>
                    <a href="#proses" class="text-white hover:text-[#F4A261] transition duration-300">Sertifikasi</a>
                    <a href="#faq" class="text-white hover:text-[#F4A261] transition duration-300">FAQ</a>

                    <a href="{{ route('login') }}">

                        <button
                            class="border-2 border-white text-white text-sm px-3 py-1.5 rounded-lg hover:bg-[#F4A261] hover:text-[#3A6EA5] transition duration-300">Log
                            in</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button
                            class="bg-gradient-to-r from-[#F4A261] to-[#90BE6D] text-white text-sm px-3 py-1.5 rounded-lg shadow-md hover:opacity-90 transition duration-300">Register
                            Now</button>
                    </a>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        document.getElementById('menu-toggle').addEventListener('click', function() {
                            document.getElementById('mobile-menu').classList.toggle('hidden');
                        });
                    });
                </script>
            </nav>
        </header>
        {{-- End Navbar --}}

    @yield('content')

            <!-- Swiper.js CDN -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <!-- Swiper.js Initialization -->
        <script>
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 3,
                spaceBetween: 15, // Jarak antar gambar tetap dekat
                loop: true,
                autoplay: {
                    delay: 2000,
                    disableOnInteraction: false,
                },
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev",
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },
            });
        </script>

        {{-- </main> --}}
        <footer class="bg-[#0D3B66] text-white py-10">
            <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- TLC Program -->
                <div>
                    <h2 class="text-lg font-semibold">TLC Program</h2>
                    <p class="text-sm mt-2">
                        Program sertifikasi untuk memberdayakan pendidik dengan pengetahuan dan keterampilan mengajar
                        yang
                        efektif.
                    </p>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="hover:text-gray-300"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>

                <!-- Tautan Cepat -->
                <div>
                    <h2 class="text-lg font-semibold">Tautan Cepat</h2>
                    <ul class="mt-2 space-y-2 text-sm">
                        <li><a href="#about" class="hover:text-gray-300">Tentang TLC</a></li>
                        <li><a href="#" class="hover:text-gray-300">Manfaat</a></li>
                        <li><a href="#" class="hover:text-gray-300">Paket Harga</a></li>
                        <li><a href="#" class="hover:text-gray-300">Pendaftaran</a></li>
                        <li><a href="#galeri" class="hover:text-gray-300">Galeri</a></li>
                    </ul>
                </div>

                <!-- Kontak -->
                <div>
                    <h2 class="text-lg font-semibold">Kontak</h2>
                    <ul class="mt-2 space-y-2 text-sm">
                        <li><i class="fas fa-map-marker-alt text-yellow-400"></i> Jl. Pendidikan No. 123, Jakarta
                            Pusat,
                            Indonesia</li>
                        <li><i class="fas fa-phone-alt text-yellow-400"></i> +62 21 1234 5678</li>
                        <li><i class="fas fa-envelope text-yellow-400"></i> info@tlcprogram.id</li>
                    </ul>
                </div>

                <!-- Berlangganan -->
                {{-- <div>
                <h2 class="text-lg font-semibold">Berlangganan</h2>
                <p class="text-sm mt-2">Dapatkan informasi terbaru tentang program dan kegiatan TLC.</p>
                <div class="mt-4 flex">
                    <input type="email" class="p-2 w-full text-gray-900 rounded-l-md" placeholder="Email Anda">
                    <button class="bg-[#E76F51] px-4 py-2 rounded-r-md font-semibold hover:bg-[#D9534F]">Kirim</button>
                </div>
            </div> --}}
            </div>

            <hr class="border-gray-500 my-6">

            <div class="text-center text-sm">
                © 2025 Teaching and Learning Certification Program. All rights reserved.
            </div>

            <!-- FontAwesome for Icons -->
            <script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>
        </footer>

</body>

</html>
