@extends('layouts.app')
@section('title', 'Welcome Page')
@section('content')
    <div class="bg-abu">


        <!-- Navbar -->
        <header class="mb-20">
            <nav
                class="fixed w-full z-20 top-0 start-0 bg-gradient-to-r from-[#3A6EA5] to-[#90BE6D] shadow-lg border-b border-gray-300">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto py-4 px-6">
                    <a href="#" class="flex items-center space-x-3">
                        <img src="images/logo.svg" class="h-12" alt="TLC Logo">
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


        <!-- HOME -->
        <main id="home" class="w-full px-5 py-16 bg-gradient-to-b from-gray-50 to-white text-gray-900 shadow-lg">
            <div class="container mx-auto max-w-7xl view grid grid-cols-12 transition-all duration-500 ease-in-out mb-14">
                <div class="col-span-12 lg:col-span-7 p-5">
                    <div>
                        <span class="text-lg text-[#E76F51] font-semibold">#Tingkatkan Kompetensi Mengajar Anda</span>
                        <h1
                            class="text-5xl font-extrabold text-[#1D4E89] leading-snug mt-2 hover:scale-105 transition-transform duration-300">
                            Teaching and Learning Certification (TLC)
                        </h1>
                        <p class="text-lg text-gray-700 mt-4">
                            Memberdayakan pendidik dengan pengetahuan, keterampilan, dan alat untuk berkembang dalam
                            pendidikan masa kini.
                        </p>
                    </div>
                    <div class="flex my-6 gap-4">
                        <a href="#skema"
                            class="bg-[#1D4E89] text-white px-6 py-3 rounded-xl shadow-md text-lg font-semibold hover:bg-[#14406B] transition-transform duration-300 hover:scale-110 active:scale-95">
                            Daftar Sekarang
                        </a>
                        <a href="#vidio"
                            class="bg-gray-200 text-gray-900 px-6 py-3 rounded-xl shadow-md text-lg font-semibold hover:bg-gray-300 transition-transform duration-300 hover:scale-110 active:scale-95">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                    <div class="flex flex-wrap gap-4 items-center justify-start">
                        <img src="images/smpit-an-nur.png" alt="SMPIT An-Nur"
                            class="h-20 hover:scale-110 transition-transform duration-300">
                        <img src="images/smp-sma-gibs.png" alt="Global Islamic Boarding School"
                            class="h-20 hover:scale-110 transition-transform duration-300">
                        <img src="images/hafecs.png" alt="HAFECS"
                            class="h-16 hover:scale-110 transition-transform duration-300">
                        <img src="images/hrp.png" alt="HAFECS Research & Publication"
                            class="h-20 hover:scale-110 transition-transform duration-300">
                    </div>
                </div>
                <div class="hidden lg:block col-span-12 lg:col-span-5 rounded-2xl mx-3 overflow-hidden shadow-xl">
                    <img src="images/konten_satu.jpg"
                        class="w-full h-full object-cover hover:scale-110 transition-transform duration-500" alt="">
                </div>
            </div>

            <!-- Stats Section -->
            <div class="container mx-auto max-w-7xl grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-12 text-center">
                <div
                    class="bg-[#1D4E89] p-6 rounded-xl shadow-md text-white hover:scale-110 transition-transform duration-300">
                    <p class="text-4xl font-extrabold">500+</p>
                    <p class="text-lg">Certified Teachers</p>
                </div>
                <div
                    class="bg-[#1D4E89] p-6 rounded-xl shadow-md text-white hover:scale-110 transition-transform duration-300">
                    <p class="text-4xl font-extrabold">98%</p>
                    <p class="text-lg">Satisfaction Rate</p>
                </div>
                <div
                    class="bg-[#1D4E89] p-6 rounded-xl shadow-md text-white hover:scale-110 transition-transform duration-300">
                    <p class="text-4xl font-extrabold">20+</p>
                    <p class="text-lg">Countries Reached</p>
                </div>
                <div
                    class="bg-[#1D4E89] p-6 rounded-xl shadow-md text-white hover:scale-110 transition-transform duration-300">
                    <p class="text-4xl font-extrabold">5 Years</p>
                    <p class="text-lg">Of Excellence</p>
                </div>
            </div>
        </main>
        <!-- End Home -->

        <!-- Apa itu TLC? -->
        <section id="about" class="w-full px-5 py-16 bg-gradient-to-b from-gray-50 to-white text-gray-900 shadow-lg">
            <div class="max-w-7xl mx-auto w-full grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
                <!-- Gambar dengan label -->
                <div
                    class="relative bg-gray-200 rounded-xl h-96 flex items-center justify-center overflow-hidden shadow-xl transition-transform duration-300 hover:scale-105 active:scale-95">
                    <img src="images/konten_tiga.jpg" alt="Teaching Mastery Framework"
                        class="object-cover w-full h-full">
                    <div
                        class="absolute bottom-4 left-4 bg-[#E76F51] text-white px-4 py-2 rounded-lg text-sm font-semibold shadow-md">
                        Teaching Mastery Framework
                    </div>
                </div>

                <!-- Konten Deskripsi -->
                <div class="text-center">
                    <h2 class="text-4xl font-extrabold text-[#1D4E89]">Apa itu TLC?</h2>
                    <div class="w-16 h-1 bg-[#E76F51] mt-3 mb-6 mx-auto"></div>
                    <p class="leading-relaxed text-gray-800 text-lg">
                        Program <span class="font-semibold text-[#1D4E89]">Teaching and Learning Certification</span>
                        dirancang untuk meningkatkan kompetensi guru dalam mengajar menggunakan metode
                        <span class="font-semibold text-[#1D4E89]">Teaching Mastery Framework (TMF)</span>.
                    </p>
                    <p class="mt-4 leading-relaxed text-gray-800 text-lg">
                        Program ini bertujuan memberikan standar pengajaran berkualitas dan terstruktur, membantu para guru
                        mencapai hasil belajar optimal.
                    </p>
                    <div
                        class="bg-gray-100 text-gray-900 p-5 mt-6 rounded-xl shadow-sm italic border-l-4 border-[#1D4E89] text-lg">
                        "Dengan mengikuti program ini, guru dapat menunjukkan keterampilan mengajar mereka, meningkatkan
                        keahlian, dan memperoleh sertifikasi sebagai pengakuan atas kemampuan mereka dalam mengelola kelas
                        secara efektif."
                    </div>

                    <!-- Fitur -->
                    {{-- <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                    <div
                        class="bg-white p-6 rounded-xl shadow-md border-l-4 border-[#1D4E89] flex items-start gap-4 hover:shadow-xl hover:scale-105 active:scale-95 transition-transform duration-300">
                        <div class="bg-[#1D4E89] text-white px-4 py-2 rounded-full font-bold text-lg">1</div>
                        <div>
                            <h3 class="font-semibold text-lg text-[#1D4E89]">Pembelajaran Terstruktur</h3>
                            <p class="text-gray-700 text-md mt-1">
                                Kurikulum yang dirancang secara sistematis untuk pengembangan kompetensi.
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-white p-6 rounded-xl shadow-md border-l-4 border-[#E76F51] flex items-start gap-4 hover:shadow-xl hover:scale-105 active:scale-95 transition-transform duration-300">
                        <div class="bg-[#E76F51] text-white px-4 py-2 rounded-full font-bold text-lg">2</div>
                        <div>
                            <h3 class="font-semibold text-lg text-[#E76F51]">Praktik Langsung</h3>
                            <p class="text-gray-700 text-md mt-1">
                                Penerapan langsung metode pengajaran dalam lingkungan nyata.
                            </p>
                        </div>
                    </div>
                </div> --}}
                </div>
            </div>
        </section>
        <!-- End Apa itu TLC -->

        <!-- Visi & Misi Section -->
        <section class="w-full px-5 py-16 bg-gradient-to-b from-gray-50 to-white text-gray-900 shadow-lg">
            <div class="max-w-5xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold text-[#1D4E89]">Visi & Misi</h2>
                <div class="w-16 h-1 bg-[#E76F51] mt-3 mb-6 mx-auto"></div>
                <p class="text-gray-800 max-w-2xl mx-auto text-lg ">
                    Kami berkomitmen untuk meningkatkan kualitas pendidikan melalui pengembangan
                    kompetensi guru yang berkelanjutan.
                </p>
            </div>

            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 mt-10">
                <!-- Visi -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#1D4E89] transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-2xl active:scale-95">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                            <svg class="w-7 h-7 text-[#1D4E89]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89]">Visi Kami</h3>
                    </div>
                    <p class="text-gray-700 text-lg text-justify">
                        Menjadi lembaga terdepan dalam pengembangan kompetensi guru yang
                        menghasilkan pendidik berkualitas tinggi, mampu menginspirasi dan
                        mempersiapkan generasi masa depan untuk menghadapi tantangan global.
                    </p>
                    <ul class="mt-5 space-y-3 text-gray-700 text-lg">
                        <li class="flex items-center gap-3">
                            <span class="text-[#E76F51] text-2xl">🏆</span> Keunggulan dalam pengajaran dan pembelajaran
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#E76F51] text-2xl">🚀</span> Inovasi dalam metode pendidikan
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#E76F51] text-2xl">🎓</span> Pendidikan berkualitas untuk semua
                        </li>
                    </ul>
                </div>

                <!-- Misi -->
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#E76F51] transition-transform duration-300 ease-in-out hover:scale-105 hover:shadow-2xl active:scale-95">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                            <svg class="w-7 h-7 text-[#E76F51]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-[#E76F51]">Misi Kami</h3>
                    </div>
                    <p class="text-gray-700 text-lg text-justify">
                        Menyediakan program sertifikasi dan pelatihan berkualitas tinggi yang
                        membekali para pendidik dengan pengetahuan, keterampilan, dan alat yang
                        mereka butuhkan untuk menciptakan lingkungan belajar yang efektif dan
                        inspiratif.
                    </p>
                    <ul class="mt-5 space-y-3 text-gray-700 text-lg">
                        <li class="flex items-center gap-3">
                            <span class="text-[#E76F51] text-2xl">👩‍🏫</span> Mengembangkan kompetensi pedagogis guru
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#E76F51] text-2xl">🔄</span> Memfasilitasi pertukaran praktik terbaik
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#E76F51] text-2xl">💡</span> Mendorong inovasi dalam pengajaran
                        </li>
                        <li class="flex items-center gap-3">
                            <span class="text-[#E76F51] text-2xl">🤝</span> Membangun komunitas pendidik yang kolaboratif
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Visi & Misi -->

        <!-- Manfaat TLC -->
        <section class="w-full px-5 py-16 bg-gradient-to-b from-gray-50 to-white text-gray-900 shadow-lg">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold text-[#1D4E89]">Manfaat TLC</h2>
                <div class="w-16 h-1 bg-[#E76F51] mt-3 mb-6 mx-auto"></div>
                <p class="text-gray-800 max-w-3xl mx-auto text-lg">
                    Program TLC memberikan berbagai manfaat yang akan membantu Anda berkembang sebagai pendidik profesional.
                </p>
            </div>

            <!-- Grid Manfaat -->
            <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 mt-10">
                <!-- Item Manfaat -->
                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl active:scale-95">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                            <span class="text-[#1D4E89] text-4xl">🏅</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">
                            Sertifikasi ber - NPSN</h3>
                    </div>
                    <p class="text-gray-700 text-lg">
                        Dapatkan sertifikasi yang diakui sebagai bukti kompetensi mengajar Anda.
                    </p>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl active:scale-95">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                            <span class="text-[#1D4E89] text-4xl">📖</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">
                            Peningkatan Keterampilan</h3>
                    </div>
                    <p class="text-gray-700 text-lg">
                        Kembangkan metode pengajaran yang efektif dan inovatif.
                    </p>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl active:scale-95">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                            <span class="text-[#1D4E89] text-4xl">🤝</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">Jaringan
                            Profesional</h3>
                    </div>
                    <p class="text-gray-700 text-lg">
                        Bergabung dengan komunitas pendidik yang berdedikasi.
                    </p>
                </div>

                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl active:scale-95">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                            <span class="text-[#1D4E89] text-4xl">💡</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">Inovasi
                            Pembelajaran</h3>
                    </div>
                    <p class="text-gray-700 text-lg">
                        Pelajari teknik pengajaran terbaru yang sesuai dengan kebutuhan siswa masa kini.
                    </p>
                </div>

                {{-- <div
                class="group bg-white p-8 rounded-2xl shadow-xl border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl active:scale-95">
                <div class="flex items-center gap-4 mb-5">
                    <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                        <span class="text-[#1D4E89] text-4xl">🎓</span>
                    </div>
                    <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">
                        Pengakuan Profesional</h3>
                </div>
                <p class="text-gray-700 text-lg">
                    Tingkatkan kredibilitas dan reputasi Anda sebagai pendidik.
                </p>
            </div> --}}

                <div
                    class="group bg-white p-8 rounded-2xl shadow-sm border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl active:scale-95">
                    <div class="flex items-center gap-4 mb-5">
                        <div class="bg-[#A8DADC] p-3 rounded-full shadow-md">
                            <span class="text-[#1D4E89] text-4xl">📚</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">Akses
                            Sumber Daya</h3>
                    </div>
                    <p class="text-gray-700 text-lg">
                        Dapatkan akses ke materi dan alat pengajaran eksklusif.
                    </p>
                </div>
            </div>
        </section>
        <!-- End Manfaat TLC -->

        <!-- Kurikulum TLC -->
        {{-- <section class="w-full px-5 py-16 bg-gradient-to-b from-gray-50 to-white text-gray-900 shadow-lg">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-[#1D4E89]">Kurikulum TLC</h2>
            <div class="w-16 h-1 bg-[#E76F51] mt-3 mb-6 mx-auto"></div>
            <p class="text-gray-800 max-w-3xl mx-auto text-lg">
                Kurikulum komprehensif yang dirancang untuk mengembangkan kompetensi mengajar Anda.
            </p>
        </div>

        <!-- Tab Navigasi -->
        <div class="max-w-6xl mx-auto mt-10 bg-white p-8 rounded-xl shadow-xl">
            <div class="flex flex-wrap justify-center gap-3 border-b pb-4">
                <button
                    class="tab-btn px-5 py-3 font-semibold text-[#1D4E89] bg-gray-100 rounded-lg transition-all duration-300 hover:bg-[#E76F51] hover:text-white focus:bg-[#E76F51] focus:text-white active:scale-95">Dasar-Dasar
                    Pengajaran</button>
                <button
                    class="tab-btn px-5 py-3 font-semibold text-gray-600 bg-gray-100 rounded-lg transition-all duration-300 hover:bg-[#E76F51] hover:text-white focus:bg-[#E76F51] focus:text-white active:scale-95">Metode
                    Pengajaran Inovatif</button>
                <button
                    class="tab-btn px-5 py-3 font-semibold text-gray-600 bg-gray-100 rounded-lg transition-all duration-300 hover:bg-[#E76F51] hover:text-white focus:bg-[#E76F51] focus:text-white active:scale-95">Manajemen
                    Kelas</button>
                <button
                    class="tab-btn px-5 py-3 font-semibold text-gray-600 bg-gray-100 rounded-lg transition-all duration-300 hover:bg-[#E76F51] hover:text-white focus:bg-[#E76F51] focus:text-white active:scale-95">Penilaian
                    dan Evaluasi</button>
                <button
                    class="tab-btn px-5 py-3 font-semibold text-gray-600 bg-gray-100 rounded-lg transition-all duration-300 hover:bg-[#E76F51] hover:text-white focus:bg-[#E76F51] focus:text-white active:scale-95">Komunikasi
                    Efektif</button>
            </div>

            <!-- Konten Kurikulum -->
            <div class="mt-8">
                <h3 class="text-2xl font-bold text-[#1D4E89] text-center">Dasar-Dasar Pengajaran</h3>
                <div class="mt-6 space-y-5">
                    <div
                        class="bg-gray-100 p-6 rounded-xl flex justify-between items-center transition-all duration-300 hover:bg-[#E76F51] hover:text-white hover:scale-105 shadow-md">
                        <span class="text-lg font-medium">Prinsip Dasar Pedagogi Modern</span>
                        <span class="text-gray-600 group-hover:text-white">2 jam</span>
                    </div>
                    <div
                        class="bg-gray-100 p-6 rounded-xl flex justify-between items-center transition-all duration-300 hover:bg-[#E76F51] hover:text-white hover:scale-105 shadow-md">
                        <span class="text-lg font-medium">Psikologi Pendidikan</span>
                        <span class="text-gray-600 group-hover:text-white">3 jam</span>
                    </div>
                    <div
                        class="bg-gray-100 p-6 rounded-xl transition-all duration-300 hover:bg-[#E76F51] hover:text-white hover:scale-105 shadow-md">
                        <div class="flex justify-between items-center">
                            <span class="text-lg font-medium">Perencanaan Pembelajaran Efektif</span>
                            <span class="text-gray-600 group-hover:text-white">2.5 jam</span>
                        </div>
                        <p class="text-sm text-gray-600 mt-2 group-hover:text-white">Teknik menyusun rencana
                            pembelajaran yang terstruktur dan efektif</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- End Kurikulum TLC -->

        <!-- Success Stories Section -->
        <section class="w-full px-5 py-16 bg-gradient-to-b from-gray-50 to-white text-gray-900 shadow-lg"
            id="testimonials">
            <div class="text-center">
                <span class="text-blue-700 font-semibold text-sm uppercase bg-blue-100 px-4 py-2 rounded-full shadow-sm">
                    Testimonials
                </span>
                <h1 class="text-4xl font-extrabold text-[#1D4E89] mt-4">
                    Apa Kata Mereka?
                </h1>
                <p class="text-gray-700 mt-3 max-w-2xl mx-auto text-lg">
                    Dengarkan pengalaman para guru yang telah mengikuti program Teaching and Learning Certification.
                </p>
            </div>

            <!-- Testimonial Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-12 max-w-6xl mx-auto">
                <!-- Testimonial 1 -->
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 relative transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <img src="images/hamas.png" alt="Hamas, M.Pd"
                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg ring-4 ring-[#E76F51] absolute -top-10 left-6">
                    <div class="mt-12">
                        <strong class="block text-xl text-gray-900">Hamas, M.Pd</strong>
                        <span class="text-gray-500 text-sm">High School Teacher</span>
                        <p class="text-gray-600 italic mt-4">
                            "Setelah mengikuti program TLC, saya memiliki lebih banyak teknik dan strategi untuk membuat
                            kelas saya lebih interaktif. Saya juga mendapatkan jaringan profesional yang luas dari sesama
                            pendidik di seluruh Indonesia."
                        </p>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 relative transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <img src="images/aliando.jpg" alt="Candra, M.Pd"
                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg ring-4 ring-[#E76F51] absolute -top-10 left-6">
                    <div class="mt-12">
                        <strong class="block text-xl text-gray-900">Candra, M.Pd</strong>
                        <span class="text-gray-500 text-sm">University Professor</span>
                        <p class="text-gray-600 italic mt-4">
                            "Program TLC telah mengubah cara saya mengajar. Metode yang diajarkan sangat praktis dan
                            langsung dapat diterapkan di kelas. Siswa saya menjadi lebih aktif dan bersemangat dalam
                            belajar."
                        </p>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-sm p-8 relative transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <img src="images/guru.png" alt="Yudha, M.Pd"
                        class="w-20 h-20 rounded-full border-4 border-white shadow-lg ring-4 ring-[#E76F51] absolute -top-10 left-6">
                    <div class="mt-12">
                        <strong class="block text-xl text-gray-900">Yudha, M.Pd</strong>
                        <span class="text-gray-500 text-sm">Elementary School Teacher</span>
                        <p class="text-gray-600 italic mt-4">
                            "Setelah mengikuti program TLC, saya memiliki lebih banyak teknik dan strategi untuk membuat
                            kelas saya lebih interaktif. Saya juga mendapatkan jaringan profesional yang luas dari sesama
                            pendidik di seluruh Indonesia."
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Success Stories -->

        <!-- Paket Harga -->
        <section id="harga" class="w-full px-5 py-16 bg-gray-50 text-gray-900 shadow-lg">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold text-[#1D4E89] mt-4">Paket Harga</h2>
                <div class="w-16 h-1 bg-[#E76F51] mt-3 mb-6 mx-auto"></div>
                <p class="text-gray-700 max-w-3xl mx-auto text-lg">
                    Pilih paket yang sesuai dengan kebutuhan pengembangan profesional Anda.
                </p>
            </div>

            <!-- Kartu Paket -->

            <div class="max-w-6xl mx-auto mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Paket Basic (Level A) -->
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 text-center transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <h3 class="text-lg font-bold text-white bg-blue-900 py-3 rounded-lg">LEVEL A</h3>
                    <p class="text-gray-600 mt-3">Paket dasar untuk memulai perjalanan TLC Anda</p>
                    <p class="text-3xl font-extrabold text-blue-900 mt-5">Rp 2.500.000</p>
                    <ul class="mt-6 text-left text-gray-700 space-y-3">
                        <li>✔ Akses ke 5 modul dasar</li>
                        <li>✔ Sertifikat kelulusan digital</li>
                        <li>✔ Materi pembelajaran digital</li>
                        <li>✔ Forum diskusi online</li>
                        <li>✔ Durasi akses 3 bulan</li>
                    </ul>
                    <button
                        class="mt-6 bg-blue-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-transform transform hover:scale-105 active:scale-95">
                        Pilih Paket
                    </button>
                </div>


                <!-- Paket Intermediate (Level B) -->
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 text-center transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <h3 class="text-lg font-bold text-white bg-blue-900 py-3 rounded-lg">LEVEL B</h3>
                    <p class="text-gray-600 mt-3">Paket dasar untuk memulai perjalanan TLC Anda</p>
                    <p class="text-3xl font-extrabold text-blue-900 mt-5">Rp 2.500.000</p>
                    <ul class="mt-6 text-left text-gray-700 space-y-3">
                        <li>✔ Akses ke 5 modul dasar</li>
                        <li>✔ Sertifikat kelulusan digital</li>
                        <li>✔ Materi pembelajaran digital</li>
                        <li>✔ Forum diskusi online</li>
                        <li>✔ Durasi akses 3 bulan</li>
                    </ul>
                    <button
                        class="mt-6 bg-blue-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-transform transform hover:scale-105 active:scale-95">
                        Pilih Paket
                    </button>
                </div>

                <!-- Paket Advanced (Level C) -->
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 text-center transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <h3 class="text-lg font-bold text-white bg-blue-900 py-3 rounded-lg">LEVEL C</h3>
                    <p class="text-gray-600 mt-3">Pengalaman TLC paling komprehensif</p>
                    <p class="text-3xl font-extrabold text-blue-900 mt-5">Rp 7.500.000</p>
                    <ul class="mt-6 text-left text-gray-700 space-y-3">
                        <li>✔ Akses ke semua 15 modul</li>
                        <li>✔ Sertifikat kelulusan premium</li>
                        <li>✔ Semua materi pembelajaran</li>
                        <li>✔ Mentoring pribadi (6 sesi)</li>
                        <li>✔ Akses komunitas seumur hidup</li>
                        <li>✔ Durasi akses 12 bulan</li>
                        <li>✔ Paket 3 buku panduan pengajaran</li>
                        <li>✔ Workshop eksklusif (2x)</li>
                    </ul>
                    <button
                        class="mt-6 bg-blue-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-transform transform hover:scale-105 active:scale-95">
                        Pilih Paket
                    </button>
                </div>

                <!-- Bundle Package - Added inside the grid with full-width on larger screens -->
                <div class="col-span-1 md:col-span-3 flex justify-center">
                    <div
                        class="bg-gradient-to-b from-orange-500 to-orange-600 text-white border border-orange-500 rounded-xl shadow-sm p-8 text-center relative transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl cursor-pointer w-full md:w-2/3 lg:w-1/2">
                        <span
                            class="absolute top-0 right-0 bg-yellow-400 text-xs font-bold text-gray-900 px-4 py-2 rounded-bl-lg shadow-md">TERPOPULER</span>
                        <h3 class="text-lg font-bold bg-orange-700 py-3 rounded-lg">PAKET BUNDLE</h3>
                        <p class="mt-3">Paket lengkap untuk pengembangan profesional</p>
                        <p class="text-3xl font-extrabold mt-5">Rp 4.500.000</p>
                        <ul class="mt-6 text-left space-y-3">
                            <li>✔ Akses ke semua 10 modul</li>
                            <li>✔ Sertifikat cetak & digital</li>
                            <li>✔ Materi pembelajaran lengkap</li>
                            <li>✔ Mentoring grup (4 sesi)</li>
                            <li>✔ Akses komunitas eksklusif</li>
                            <li>✔ Durasi akses 6 bulan</li>
                            <li>✔ 1 buku panduan pengajaran</li>
                        </ul>
                        <button
                            class="mt-6 bg-orange-800 text-white px-6 py-3 rounded-lg font-semibold hover:bg-orange-700 transition-transform transform hover:scale-105 active:scale-95">
                            Pilih Paket
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Paket Harga -->

        <!-- Timeline Program TLC -->
        <section id="skema" class="w-full px-5 py-16 bg-gray-50 text-gray-900 shadow-lg">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold text-[#1D4E89] mt-4">Timeline Program TLC</h2>
                <div class="w-16 h-1 bg-[#E76F51] mt-3 mb-6 mx-auto"></div>
                <p class="text-gray-700 max-w-2xl mx-auto text-lg">
                    Jadwal kegiatan program Teaching and Learning Certification batch terbaru.
                </p>
            </div>

            <!-- Timeline -->
            <div class="max-w-4xl mx-auto mt-12 relative">
                <div
                    class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-1 bg-blue-500 rounded-full">
                </div>

                <!-- Event Items -->
                <div class="space-y-10">
                    <div class="flex flex-col md:flex-row items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center">
                            <div
                                class="bg-white p-6 rounded-lg shadow-sm w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                                <span class="text-5xl mr-5">📅</span>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-700">Pendaftaran</h3>
                                    <p class="text-gray-500 text-sm">Daftar lebih awal untuk mendapatkan diskon early bird.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row-reverse items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center justify-end">
                            <div
                                class="bg-white p-6 rounded-lg shadow-sm w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                                <span class="text-5xl mr-5">🎯</span>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-700">Orientasi Program</h3>
                                    <p class="text-gray-500 text-sm">Pengenalan program, platform pembelajaran, dan jadwal
                                        kegiatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center">
                            <div
                                class="bg-white p-6 rounded-lg shadow-sm w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                                <span class="text-5xl mr-5">📖</span>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-700">Sesi Pelatihan</h3>
                                    <p class="text-gray-500 text-sm">belum ada</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row-reverse items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center justify-end">
                            <div
                                class="bg-white p-6 rounded-lg shadow-sm w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                                <span class="text-5xl mr-5">👨‍🏫</span>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-700">Penugasan</h3>
                                    <p class="text-gray-500 text-sm">belum ada.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center">
                            <div
                                class="bg-white p-6 rounded-lg shadow-lg w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                                <span class="text-5xl mr-5">🏆</span>
                                <div>
                                    <h3 class="text-xl font-semibold text-blue-700">Evaluasi & Penilaian</h3>
                                    <p class="text-gray-500 text-sm">Evaluasi akhir dan penyerahan sertifikat bagi peserta
                                        yang lulus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button Daftar -->
            {{-- <div class="text-center mt-12">
            <a href="#"
                class="bg-blue-600 text-white px-8 py-3 rounded-full text-lg font-semibold shadow-lg hover:bg-blue-700 transition-transform transform hover:scale-110 active:scale-95">
                Daftar Sekarang
            </a>
        </div> --}}
        </section>
        <!-- End Timeline Program TLC -->

        <!-- Skema Pendaftaran TLC -->

        {{-- Skema lama --}}
        {{-- <div class="w-full px-5 py-16 bg-gray-50 text-gray-900 shadow-lg" id="skema">
        <div class="text-center mb-10">
            <span class="text-[#E76F51] font-semibold text-lg">&#9889; Your Certification Journey</span>
            <h1 class="text-4xl font-bold text-[#1D4E89] mt-2">Certification Process</h1>
            <p class="text-gray-700 text-lg">belum ada deskripsi</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 px-5 relative">
            <!-- Garis Penghubung (Desktop) -->
            <div class="hidden lg:block absolute top-1/2 left-0 right-0 mx-auto w-4/5 border-t-2 border-gray-300">
            </div>

            <!-- Step 1 -->
            <div
                class="relative bg-white shadow-lg p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div
                    class="w-12 h-12 mx-auto flex items-center justify-center bg-gradient-to-r from-pink-500 to-purple-500 text-white font-bold rounded-full text-xl">
                    1</div>
                <h2 class="font-bold text-lg mt-3">Mengikuti Kelas Level A</h2>
                <p class="text-gray-600 text-sm">belum ada deskripsi
                </p>
                <div
                    class="hidden lg:block absolute -right-4 top-1/2 transform -translate-y-1/2 text-2xl text-gray-400">
                    ➡</div>
            </div>

            <!-- Step 2 -->
            <div
                class="relative bg-white shadow-lg p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div
                    class="w-12 h-12 mx-auto flex items-center justify-center bg-blue-500 text-white font-bold rounded-full text-xl">
                    2</div>
                <h2 class="font-bold text-lg mt-3">Tes Kompetensi Level A</h2>
                <p class="text-gray-600 text-sm">belum ada deskripsi</p>
                <div
                    class="hidden lg:block absolute -right-4 top-1/2 transform -translate-y-1/2 text-2xl text-gray-400">
                    ➡</div>
            </div>

            <!-- Step 3 -->
            <div
                class="relative bg-white shadow-lg p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div
                    class="w-12 h-12 mx-auto flex items-center justify-center bg-yellow-500 text-white font-bold rounded-full text-xl">
                    3</div>
                <h2 class="font-bold text-lg mt-3">Mengikuti Kelas Level B</h2>
                <p class="text-gray-600 text-sm">belum ada deskripsi</p>
                <div
                    class="hidden lg:block absolute -right-4 top-1/2 transform -translate-y-1/2 text-2xl text-gray-400">
                    ➡</div>
            </div>

            <!-- Step 4 -->
            <div
                class="relative bg-white shadow-lg p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div
                    class="w-12 h-12 mx-auto flex items-center justify-center bg-green-500 text-white font-bold rounded-full text-xl">
                    4</div>
                <h2 class="font-bold text-lg mt-3">Tes Kompetensi Level B</h2>
                <p class="text-gray-600 text-sm">belum ada deskripsi</p>
                <div
                    class="hidden lg:block absolute -right-4 top-1/2 transform -translate-y-1/2 text-2xl text-gray-400">
                    ➡</div>
            </div>

            <!-- Step 5 -->
            <div
                class="bg-white shadow-lg p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div
                    class="w-12 h-12 mx-auto flex items-center justify-center bg-red-500 text-white font-bold rounded-full text-xl">
                    5</div>
                <h2 class="font-bold text-lg mt-3">Mengikuti Kelas Level C</h2>
                <p class="text-gray-600 text-sm">belum ada deskripsi
                </p>
            </div>
            <div
                class="bg-white shadow-lg p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                <div
                    class="w-12 h-12 mx-auto flex items-center justify-center bg-red-500 text-white font-bold rounded-full text-xl">
                    6</div>
                <h2 class="font-bold text-lg mt-3">Tes Sertifikasi Level C</h2>
                <p class="text-gray-600 text-sm">belum ada deskripsi
                </p>
            </div>
        </div>

    </div> --}}

        <div id="proses" class="w-full px-5 py-16 bg-gray-50 text-gray-900 shadow-lg" id="skema">
            <div class="text-center mb-10">
                <span class="text-[#E76F51] font-semibold text-lg">&#9889; Proses Sertifikasimu</span>
                <h1 class="text-5xl font-bold text-[#1D4E89] mt-2">Proses Sertifikasi</h1>
                <p class="text-gray-700 text-lg">Jalur lengkap untuk mendapatkan sertifikasi profesional Anda.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-5 justify-center">
                <!-- Step 1 -->
                <div
                    class="relative bg-white shadow-sm p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div
                        class="w-14 h-14 mx-auto flex items-center justify-center bg-blue-600 text-white font-bold rounded-full text-xl">
                        1
                    </div>
                    <h2 class="font-bold text-lg mt-3">Mengikuti Kelas Level A</h2>
                    <p class="text-gray-600 text-sm">Memulai perjalanan dengan dasar pembelajaran.</p>
                </div>

                <!-- Step 2 -->
                <div
                    class="relative bg-white shadow-sm p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div
                        class="w-14 h-14 mx-auto flex items-center justify-center bg-green-500 text-white font-bold rounded-full text-xl">
                        2
                    </div>
                    <h2 class="font-bold text-lg mt-3">Tes Kompetensi Level A</h2>
                    <p class="text-gray-600 text-sm">Ujian untuk mendapatkan sertifikat dasar.</p>
                </div>

                <!-- Step 3 -->
                <div
                    class="relative bg-white shadow-sm p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div
                        class="w-14 h-14 mx-auto flex items-center justify-center bg-yellow-500 text-white font-bold rounded-full text-xl">
                        3
                    </div>
                    <h2 class="font-bold text-lg mt-3">Mengikuti Kelas Level B</h2>
                    <p class="text-gray-600 text-sm">Melanjutkan ke tingkat pembelajaran lanjutan.</p>
                </div>

                <!-- Step 4 -->
                <div
                    class="relative bg-white shadow-sm p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div
                        class="w-14 h-14 mx-auto flex items-center justify-center bg-orange-500 text-white font-bold rounded-full text-xl">
                        4
                    </div>
                    <h2 class="font-bold text-lg mt-3">Tes Kompetensi Level B</h2>
                    <p class="text-gray-600 text-sm">Menguji pemahaman dan keterampilan lebih lanjut.</p>
                </div>

                <!-- Step 5 -->
                <div
                    class="relative bg-white shadow-sm p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div
                        class="w-14 h-14 mx-auto flex items-center justify-center bg-red-500 text-white font-bold rounded-full text-xl">
                        5
                    </div>
                    <h2 class="font-bold text-lg mt-3">Mengikuti Kelas Level C</h2>
                    <p class="text-gray-600 text-sm">Kelas tingkat akhir sebelum sertifikasi penuh.</p>
                </div>

                <!-- Step 6 -->
                <div
                    class="relative bg-white shadow-sm p-6 rounded-xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl">
                    <div
                        class="w-14 h-14 mx-auto flex items-center justify-center bg-purple-500 text-white font-bold rounded-full text-xl">
                        6
                    </div>
                    <h2 class="font-bold text-lg mt-3">Tes Sertifikasi Level C</h2>
                    <p class="text-gray-600 text-sm">Evaluasi akhir untuk mendapatkan sertifikasi.</p>
                </div>
            </div>
        </div>

        <!-- End Skema -->

        <!-- Video TLC Section -->
        <section id="vidio" class="w-full px-5 py-16 bg-gray-50 text-gray-900 shadow-lg">
            <div class="max-w-6xl mx-auto text-center">
                <!-- Label -->
                <span class="bg-[#E76F51] text-white px-3 py-1 rounded-full text-xs font-semibold">
                    Video TLC
                </span>

                <!-- Title -->
                <h2 class="text-4xl font-bold text-black mt-4">
                    Lihat Program TLC dalam Aksi
                </h2>

                <!-- Subtitle -->
                <p class="text-gray-700 mt-2 text-lg">
                    Tonton video pengenalan dan testimoni dari program Teaching and Learning Certification
                </p>
            </div>

            <!-- Video Container -->
            <div
                class="max-w-6xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-sm transition-all duration-500 hover:shadow-2xl hover:scale-[1.02]">
                <!-- Tab Navigation -->
                <div class="flex justify-between bg-[#A8DADC] text-gray-800 rounded-t-lg overflow-hidden">
                    <button
                        class="flex-1 py-3 text-[#1D4E89] font-semibold border-b-4 border-[#E76F51] transition-all duration-300 hover:bg-[#E76F51] hover:text-white active:scale-95">
                        📺 Pengenalan TLC
                    </button>
                    <button
                        class="flex-1 py-3 text-gray-800 font-semibold transition-all duration-300 hover:bg-[#E76F51] hover:text-white active:scale-95">
                        🧑‍🎓 Testimoni Peserta
                    </button>
                    <button
                        class="flex-1 py-3 text-gray-800 font-semibold transition-all duration-300 hover:bg-[#E76F51] hover:text-white active:scale-95">
                        📖 Metode Pengajaran
                    </button>
                </div>

                <!-- Embedded YouTube Video -->
                <div class="relative w-full h-72 sm:h-96 rounded-b-lg overflow-hidden mt-1 my-5">
                    <iframe class="w-full h-full transition-transform duration-500 hover:scale-[1.03] active:scale-95"
                        src="https://www.youtube.com/embed/euFMXmg1LoQ" title="Video TLC" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Tab Descriptions -->
                {{-- <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-5">
                <div
                    class="bg-[#E76F51] p-5 rounded-lg text-center text-white font-semibold transition-all duration-300 hover:scale-105 active:scale-95 shadow-md hover:shadow-lg">
                    📺 Pengenalan TLC
                    <p class="text-sm font-normal opacity-90 mt-1">Video pengenalan program Teaching and Learning
                        Certification</p>
                </div>
                <div
                    class="bg-[#A8DADC] p-5 rounded-lg text-center text-gray-900 font-semibold transition-all duration-300 hover:bg-[#1D4E89] hover:text-white hover:scale-105 active:scale-95 shadow-md hover:shadow-lg">
                    🧑‍🎓 Testimoni Peserta
                    <p class="text-sm text-gray-800 font-normal opacity-80 mt-1">Pengalaman para alumni program TLC</p>
                </div>
                <div
                    class="bg-[#A8DADC] p-5 rounded-lg text-center text-gray-900 font-semibold transition-all duration-300 hover:bg-[#1D4E89] hover:text-white hover:scale-105 active:scale-95 shadow-md hover:shadow-lg">
                    📖 Metode Pengajaran
                    <p class="text-sm text-gray-800 font-normal opacity-80 mt-1">Penjelasan tentang metode TMF yang
                        efektif</p>
                </div>
            </div> --}}

                <!-- View More Button -->
                {{-- <div class="text-center mt-6">
                <button
                    class="text-[#E76F51] font-semibold text-lg transition-transform duration-300 hover:underline hover:scale-105 active:scale-95">
                    Lihat Semua Video →
                </button>
            </div> --}}
            </div>
        </section>
        <!-- End Video -->

        <!-- Mentor Section -->
        {{-- <section class="w-full px-5 py-16 bg-gradient-to-b from-gray-50 to-white text-gray-900 shadow-lg">
        <div class="max-w-6xl mx-auto text-center">
            <span
                class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold flex items-center justify-center w-fit mx-auto">
                Tim Ahli Kami
            </span>
            <h2 class="text-3xl font-bold text-gray-900 mt-3">
                Mentor <span class="text-blue-600">Berpengalaman</span>
            </h2>
            <p class="text-gray-600 mt-2 mb-4 max-w-3xl mx-auto">
                Bertemu dengan para ahli yang akan membimbing Anda dalam perjalanan TLC
            </p>
        </div>

        <!-- Mentor Cards -->
        <div class="grid md:grid-cols-4 gap-6 max-w-7xl mx-auto px-5">
            <!-- Mentor 1 -->
            <div
                class="bg-white shadow-lg rounded-xl overflow-hidden text-left relative p-6 transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer active:scale-95">
                <span
                    class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 text-xs font-semibold rounded-full">Ahli</span>
                <img src="images/konten_satu.jpg" alt="Dr. Budi Santoso" class="w-full h-40 object-cover rounded-md">
                <h3 class="font-bold text-lg mt-3 text-blue-900">Dr. Budi Santoso</h3>
                <p class="text-yellow-600 text-sm">Direktur Program TLC</p>
                <p class="text-gray-600 text-sm mt-2">
                    Pakar pendidikan dengan pengalaman lebih dari 20 tahun dalam pengembangan kurikulum dan pelatihan.
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Pengembangan Kurikulum</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Metode Pengajaran</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Evaluasi Pendidikan</span>
                </div>
                <a href="#" class="text-blue-600 text-sm font-semibold mt-4 block">Lihat Profil Lengkap →</a>
            </div>

            <!-- Mentor 2 -->
            <div
                class="bg-white shadow-lg rounded-xl overflow-hidden text-left relative p-6 transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer active:scale-95">
                <span
                    class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 text-xs font-semibold rounded-full">Ahli</span>
                <img src="images/konten_tiga.jpg" alt="Prof. Siti Rahayu, M.Pd."
                    class="w-full h-40 object-cover rounded-md">
                <h3 class="font-bold text-lg mt-3 text-blue-900">Prof. Siti Rahayu, M.Pd.</h3>
                <p class="text-yellow-600 text-sm">Ahli Pedagogi</p>
                <p class="text-gray-600 text-sm mt-2">
                    Profesor pendidikan dengan fokus pada metode pengajaran inovatif dan pembelajaran berbasis proyek.
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Pedagogi Modern</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Pembelajaran Berbasis
                        Proyek</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Psikologi Pendidikan</span>
                </div>
                <a href="#" class="text-blue-600 text-sm font-semibold mt-4 block">Lihat Profil Lengkap →</a>
            </div>

            <!-- Mentor 3 -->
            <div
                class="bg-white shadow-lg rounded-xl overflow-hidden text-left relative p-6 transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer active:scale-95">
                <span
                    class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 text-xs font-semibold rounded-full">Ahli</span>
                <img src="images/hamas.png" alt="Ahmad Wijaya, M.Ed." class="w-full h-40 object-cover rounded-md">
                <h3 class="font-bold text-lg mt-3 text-blue-900">Ahmad Wijaya, M.Ed.</h3>
                <p class="text-yellow-600 text-sm">Spesialis Teknologi Pendidikan</p>
                <p class="text-gray-600 text-sm mt-2">
                    Ahli dalam integrasi teknologi dalam pembelajaran dan pengembangan media pembelajaran digital.
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Teknologi Pendidikan</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">E-Learning</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Media Pembelajaran
                        Digital</span>
                </div>
                <a href="#" class="text-blue-600 text-sm font-semibold mt-4 block">Lihat Profil Lengkap →</a>
            </div>

            <!-- Mentor 4 -->
            <div
                class="bg-white shadow-lg rounded-xl overflow-hidden text-left relative p-6 transform transition duration-300 hover:scale-105 hover:shadow-2xl cursor-pointer active:scale-95">
                <span
                    class="absolute top-3 right-3 bg-yellow-500 text-white px-2 py-1 text-xs font-semibold rounded-full">Ahli</span>
                <img src="images/aliando.jpg" alt="Dr. Maya Indrawati" class="w-full h-40 object-cover rounded-md">
                <h3 class="font-bold text-lg mt-3 text-blue-900">Dr. Maya Indrawati</h3>
                <p class="text-yellow-600 text-sm">Konsultan Manajemen Kelas</p>
                <p class="text-gray-600 text-sm mt-2">
                    Spesialis dalam manajemen kelas dan pengembangan lingkungan belajar yang positif dan inklusif.
                </p>
                <div class="mt-3 flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Manajemen Kelas</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Pendidikan Inklusif</span>
                    <span class="bg-blue-100 text-blue-700 px-2 py-1 text-xs rounded-md">Psikologi Anak</span>
                </div>
                <a href="#" class="text-blue-600 text-sm font-semibold mt-4 block">Lihat Profil Lengkap →</a>
            </div>
        </div>
    </section> --}}
        <!-- End Mentor Section -->

        <!-- Galeri Kegiatan TLC -->
        <section id="galeri" class="w-full px-5 py-16 bg-white text-gray-900 shadow-lg">
            <div class="max-w-6xl mx-auto text-center">
                <!-- Label -->
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                    Dokumentasi Kegiatan
                </span>

                <!-- Title -->
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3">
                    Galeri Kegiatan TLC
                </h2>

                <!-- Subtitle -->
                <p class="text-gray-600 mt-2 max-w-3xl mx-auto">
                    Dokumentasi berbagai kegiatan dalam program Teaching and Learning Certification
                </p>
            </div>

            <!-- Image Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10 max-w-6xl mx-auto">
                <!-- Image 1 -->
                <div class="relative w-full h-52 rounded-lg overflow-hidden group">
                    <img src="images/siswa.png" alt="Workshop Metode Pengajaran Inovatif"
                        class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80 group-hover:opacity-0 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-4 left-4 right-4 text-white group-hover:opacity-0 transition-opacity duration-300">
                        <h3 class="font-semibold text-lg">Workshop Metode Pengajaran Inovatif</h3>
                        <p class="text-sm">Para guru sedang berpartisipasi dalam workshop interaktif tentang metode
                            pengajaran inovatif yang dipimpin oleh Dr....</p>
                    </div>
                    <button
                        class="absolute top-3 right-3 bg-white text-gray-900 px-3 py-1 text-xs font-semibold rounded-full shadow-md group-hover:opacity-0 transition-opacity duration-300">Lihat
                        Detail</button>
                </div>

                <!-- Image 2 -->
                <div class="relative w-full h-52 rounded-lg overflow-hidden group">
                    <img src="images/guru.png" alt="Image 2" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80 group-hover:opacity-0 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-4 left-4 right-4 text-white group-hover:opacity-0 transition-opacity duration-300">
                        <h3 class="font-semibold text-lg">Judul Kegiatan 2</h3>
                        <p class="text-sm">Deskripsi singkat tentang kegiatan 2 yang berlangsung dalam program TLC.</p>
                    </div>
                    <button
                        class="absolute top-3 right-3 bg-white text-gray-900 px-3 py-1 text-xs font-semibold rounded-full shadow-md group-hover:opacity-0 transition-opacity duration-300">Lihat
                        Detail</button>
                </div>

                <!-- Image 3 -->
                <div class="relative w-full h-52 rounded-lg overflow-hidden group">
                    <img src="images/guru.png" alt="Image 3" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80 group-hover:opacity-0 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-4 left-4 right-4 text-white group-hover:opacity-0 transition-opacity duration-300">
                        <h3 class="font-semibold text-lg">Judul Kegiatan 3</h3>
                        <p class="text-sm">Deskripsi singkat tentang kegiatan 3 yang berlangsung dalam program TLC.</p>
                    </div>
                    <button
                        class="absolute top-3 right-3 bg-white text-gray-900 px-3 py-1 text-xs font-semibold rounded-full shadow-md group-hover:opacity-0 transition-opacity duration-300">Lihat
                        Detail</button>
                </div>

                <!-- Image 4 -->
                <div class="relative w-full h-52 rounded-lg overflow-hidden group">
                    <img src="images/guru.png" alt="Image 4" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80 group-hover:opacity-0 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-4 left-4 right-4 text-white group-hover:opacity-0 transition-opacity duration-300">
                        <h3 class="font-semibold text-lg">Judul Kegiatan 4</h3>
                        <p class="text-sm">Deskripsi singkat tentang kegiatan 4 yang berlangsung dalam program TLC.</p>
                    </div>
                    <button
                        class="absolute top-3 right-3 bg-white text-gray-900 px-3 py-1 text-xs font-semibold rounded-full shadow-md group-hover:opacity-0 transition-opacity duration-300">Lihat
                        Detail</button>
                </div>

                <!-- Image 5 -->
                <div class="relative w-full h-52 rounded-lg overflow-hidden group">
                    <img src="images/guru.png" alt="Image 5" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80 group-hover:opacity-0 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-4 left-4 right-4 text-white group-hover:opacity-0 transition-opacity duration-300">
                        <h3 class="font-semibold text-lg">Judul Kegiatan 5</h3>
                        <p class="text-sm">Deskripsi singkat tentang kegiatan 5 yang berlangsung dalam program TLC.</p>
                    </div>
                    <button
                        class="absolute top-3 right-3 bg-white text-gray-900 px-3 py-1 text-xs font-semibold rounded-full shadow-md group-hover:opacity-0 transition-opacity duration-300">Lihat
                        Detail</button>
                </div>

                <!-- Image 6 -->
                <div class="relative w-full h-52 rounded-lg overflow-hidden group">
                    <img src="images/guru.png" alt="Image 6" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80 group-hover:opacity-0 transition-opacity duration-300">
                    </div>
                    <div
                        class="absolute bottom-4 left-4 right-4 text-white group-hover:opacity-0 transition-opacity duration-300">
                        <h3 class="font-semibold text-lg">Judul Kegiatan 6</h3>
                        <p class="text-sm">Deskripsi singkat tentang kegiatan 6 yang berlangsung dalam program TLC.</p>
                    </div>
                    <button
                        class="absolute top-3 right-3 bg-white text-gray-900 px-3 py-1 text-xs font-semibold rounded-full shadow-md group-hover:opacity-0 transition-opacity duration-300">Lihat
                        Detail</button>
                </div>
            </div>
        </section>
        <!-- End Galeri Kegiatan TLC -->

        <!-- Our Books Section -->
        <div class="w-full px-5 py-16 bg-gray-50 text-gray-900 shadow-lg" id="books">
            <div class="text-center">
                <span class="text-blue-600 font-semibold text-sm uppercase bg-blue-100 px-3 py-1 rounded-full">
                    Koleksi Buku Terbaik
                </span>
                <h1
                    class="text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-500 mt-3">
                    Temukan Buku Favorit Anda 📖✨
                </h1>
                <p class="text-gray-700 mt-2 max-w-2xl mx-auto text-lg">
                    Berbagai pilihan buku menarik untuk menambah wawasan dan inspirasi!
                </p>
            </div>

            <!-- Book Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 mt-12 max-w-6xl mx-auto">
                <!-- Book Item 1 -->
                <div
                    class="relative w-full h-96 bg-white shadow-sm rounded-lg p-5 transition-transform transform hover:scale-105 hover:-rotate-2">
                    <div class="relative w-full h-full">
                        <img src="images/buku1.png" alt="Buku 1"
                            class="w-full h-full object-cover rounded-lg shadow-md">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-50 rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <h3 class="font-semibold text-xl">The Power of Teaching</h3>
                        <p class="text-sm">Metode pengajaran efektif untuk hasil maksimal.</p>
                        <button
                            class="mt-3 w-full bg-blue-600 text-white font-medium py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book Item 2 -->
                <div
                    class="relative w-full h-96 bg-white shadow-sm rounded-lg p-5 transition-transform transform hover:scale-105 hover:rotate-2">
                    <div class="relative w-full h-full">
                        <img src="images/buku2.png" alt="Buku 2"
                            class="w-full h-full object-cover rounded-lg shadow-md">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-50 rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <h3 class="font-semibold text-xl">The Art of Learning</h3>
                        <p class="text-sm">Strategi pembelajaran yang mudah dan menyenangkan.</p>
                        <button
                            class="mt-3 w-full bg-blue-600 text-white font-medium py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book Item 3 -->
                <div
                    class="relative w-full h-96 bg-white shadow-sm rounded-lg p-5 transition-transform transform hover:scale-105 hover:-rotate-2">
                    <div class="relative w-full h-full">
                        <img src="images/buku3.png" alt="Buku 3"
                            class="w-full h-full object-cover rounded-lg shadow-md">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-50 rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <h3 class="font-semibold text-xl">Digital Education</h3>
                        <p class="text-sm">Teknologi dalam pendidikan untuk era digital.</p>
                        <button
                            class="mt-3 w-full bg-blue-600 text-white font-medium py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book Item 4 -->
                <div
                    class="relative w-full h-96 bg-white shadow-sm rounded-lg p-5 transition-transform transform hover:scale-105 hover:rotate-2">
                    <div class="relative w-full h-full">
                        <img src="images/buku4.png" alt="Buku 4"
                            class="w-full h-full object-cover rounded-lg shadow-md">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-50 rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <h3 class="font-semibold text-xl">Curriculum Design</h3>
                        <p class="text-sm">Panduan lengkap merancang kurikulum yang efektif.</p>
                        <button
                            class="mt-3 w-full bg-blue-600 text-white font-medium py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book Item 5 -->
                <div
                    class="relative w-full h-96 bg-white shadow-sm rounded-lg p-5 transition-transform transform hover:scale-105 hover:-rotate-2">
                    <div class="relative w-full h-full">
                        <img src="images/buku5.png" alt="Buku 5"
                            class="w-full h-full object-cover rounded-lg shadow-md">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-50 rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <h3 class="font-semibold text-xl">Leadership in Education</h3>
                        <p class="text-sm">Menjadi pemimpin inspiratif dalam dunia pendidikan.</p>
                        <button
                            class="mt-3 w-full bg-blue-600 text-white font-medium py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book Item 6 -->
                <div
                    class="relative w-full h-96 bg-white shadow-sm rounded-lg p-5 transition-transform transform hover:scale-105 hover:rotate-2">
                    <div class="relative w-full h-full">
                        <img src="images/buku6.png" alt="Buku 6"
                            class="w-full h-full object-cover rounded-lg shadow-md">
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-50 rounded-lg">
                        </div>
                    </div>
                    <div class="absolute bottom-5 left-5 right-5 text-white">
                        <h3 class="font-semibold text-xl">Innovation in Teaching</h3>
                        <p class="text-sm">Metode inovatif dalam dunia pendidikan.</p>
                        <button
                            class="mt-3 w-full bg-blue-600 text-white font-medium py-2 rounded-lg shadow-md hover:bg-blue-700 transition duration-300">
                            Beli Sekarang
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Our Books Section -->

        <!-- FAQ Section -->
        <section id="faq" class="w-full px-5 py-16 bg-white text-gray-900 shadow-lg">
            <!-- Header -->
            <div class="text-center mb-10">
                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-semibold">
                    Pertanyaan Umum
                </span>
                <h2 class="text-3xl font-bold text-black mt-3">
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-900 mt-2">
                    Temukan jawaban untuk pertanyaan yang sering diajukan tentang program TLC
                </p>
            </div>
            <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-sm">
                <!-- Search Bar -->
                {{-- <div class="mb-6 relative">
                <input type="text" placeholder="Cari pertanyaan..."
                    class="w-full p-3 pl-10 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <span class="absolute left-3 top-3 text-gray-500">
                    🔍
                </span>
            </div> --}}


                <!-- FAQ List -->
                <div class="space-y-4 text-left">
                    <div
                        class="faq-item bg-white p-4 border border-gray-300 rounded-lg cursor-pointer shadow-sm transition-all duration-300 hover:bg-blue-50 hover:shadow-md active:scale-95">
                        <h3 class="text-blue-700 font-medium flex justify-between items-center">
                            Apa itu program Teaching and Learning Certification (TLC)?
                            <span class="faq-icon transition-transform duration-300">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-2 text-gray-600">
                            Program Teaching and Learning Certification (TLC) adalah program sertifikasi yang dirancang
                            untuk meningkatkan kompetensi guru dalam mengajar secara efektif.
                        </p>
                    </div>

                    <div
                        class="faq-item bg-white p-4 border border-gray-300 rounded-lg cursor-pointer shadow-sm transition-all duration-300 hover:bg-blue-50 hover:shadow-md active:scale-95">
                        <h3 class="text-blue-700 font-medium flex justify-between items-center">
                            Berapa lama durasi program TLC?
                            <span class="faq-icon transition-transform duration-300">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-2 text-gray-600">
                            Durasi program TLC bervariasi tergantung modul yang diambil, namun rata-rata berlangsung selama
                            3-6 bulan.
                        </p>
                    </div>

                    <div
                        class="faq-item bg-white p-4 border border-gray-300 rounded-lg cursor-pointer shadow-sm transition-all duration-300 hover:bg-blue-50 hover:shadow-md active:scale-95">
                        <h3 class="text-blue-700 font-medium flex justify-between items-center">
                            Apakah sertifikat TLC diakui secara resmi?
                            <span class="faq-icon transition-transform duration-300">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-2 text-gray-600">
                            Ya, sertifikat TLC diakui oleh berbagai lembaga pendidikan dan institusi profesional.
                        </p>
                    </div>

                    <div
                        class="faq-item bg-white p-4 border border-gray-300 rounded-lg cursor-pointer shadow-sm transition-all duration-300 hover:bg-blue-50 hover:shadow-md active:scale-95">
                        <h3 class="text-blue-700 font-medium flex justify-between items-center">
                            Bagaimana metode pembelajaran dalam program TLC?
                            <span class="faq-icon transition-transform duration-300">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-2 text-gray-600">
                            Program TLC menggunakan metode blended learning yang menggabungkan pembelajaran online dan tatap
                            muka.
                        </p>
                    </div>

                    <div
                        class="faq-item bg-white p-4 border border-gray-300 rounded-lg cursor-pointer shadow-sm transition-all duration-300 hover:bg-blue-50 hover:shadow-md active:scale-95">
                        <h3 class="text-blue-700 font-medium flex justify-between items-center">
                            Siapa saja yang dapat mengikuti program TLC?
                            <span class="faq-icon transition-transform duration-300">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-2 text-gray-600">
                            Program ini terbuka untuk semua pendidik, baik guru baru maupun yang berpengalaman.
                        </p>
                    </div>

                    <div
                        class="faq-item bg-white p-4 border border-gray-300 rounded-lg cursor-pointer shadow-sm transition-all duration-300 hover:bg-blue-50 hover:shadow-md active:scale-95">
                        <h3 class="text-blue-700 font-medium flex justify-between items-center">
                            Apakah ada prasyarat untuk mengikuti program TLC?
                            <span class="faq-icon transition-transform duration-300">▼</span>
                        </h3>
                        <p class="faq-answer hidden mt-2 text-gray-600">
                            Tidak ada prasyarat khusus, namun pengalaman mengajar sebelumnya akan menjadi nilai tambah.
                        </p>
                    </div>
                </div>

                <!-- Contact Section -->
                {{-- <div class="mt-10 bg-gray-100 p-6 rounded-lg text-center shadow-md">
                <p class="text-gray-700">Masih punya pertanyaan?</p>
                <p class="text-gray-500 text-sm mb-4">Jangan ragu untuk menghubungi tim kami untuk informasi lebih
                    lanjut</p>
                <div class="flex flex-col sm:flex-row justify-center gap-3">
                    <button class="bg-blue-700 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-800">Hubungi
                        Kami</button>
                    <button
                        class="border border-gray-300 px-5 py-2 rounded-lg font-semibold text-gray-700 hover:bg-gray-200">info@tlcprogram.id</button>
                </div>
            </div> --}}
            </div>

            <!-- Script untuk Interaktif FAQ -->
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    let faqItems = document.querySelectorAll(".faq-item");

                    faqItems.forEach(item => {
                        item.addEventListener("click", function() {
                            let answer = this.querySelector(".faq-answer");
                            let icon = this.querySelector(".faq-icon");

                            // Tutup semua jawaban yang lain sebelum membuka yang diklik
                            document.querySelectorAll(".faq-answer").forEach(ans => {
                                if (ans !== answer) {
                                    ans.classList.add("hidden");
                                    ans.style.opacity = "0";
                                    ans.parentElement.querySelector(".faq-icon").style.transform =
                                        "rotate(0deg)";
                                }
                            });

                            if (answer.classList.contains("hidden")) {
                                answer.classList.remove("hidden");
                                answer.style.opacity = "1";
                                icon.style.transform = "rotate(180deg)";
                            } else {
                                answer.classList.add("hidden");
                                answer.style.opacity = "0";
                                icon.style.transform = "rotate(0deg)";
                            }
                        });
                    });
                });
            </script>
        </section>
        <!-- End FAQ Section -->

        {{-- Pendaftaraan --}}
        {{-- <section class="w-full px-5 py-16 bg-gradient-to-r from-[#F4A261] via-[#A8DADC] to-[#1D4E89] text-gray-900">
        <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg transition-transform duration-300 hover:scale-[1.02]">
            <!-- Header -->
            <div class="text-center mb-10">
                <h2 class="text-3xl font-bold text-blue-900">Pendaftaran TLC</h2>
                <div class="w-16 h-1 bg-yellow-500 mx-auto mt-2"></div>
                <p class="text-gray-600 mt-3">
                    Mulai perjalanan pengembangan profesional Anda dengan mendaftar program TLC
                </p>
            </div>

            <!-- Step Indicator -->
            <div class="flex justify-between items-center bg-blue-900 text-white p-4 rounded-lg">
                <div class="flex-1 text-center transition-transform duration-300 hover:scale-110 active:scale-95">
                    <div class="w-8 h-8 bg-yellow-500 text-white rounded-full flex items-center justify-center mx-auto font-bold">1</div>
                    <p class="text-sm mt-1">Informasi Pribadi</p>
                </div>
                <div class="w-20 h-1 bg-yellow-500"></div>
                <div class="flex-1 text-center opacity-50 transition-transform duration-300 hover:scale-110 active:scale-95">
                    <div class="w-8 h-8 bg-blue-700 text-white rounded-full flex items-center justify-center mx-auto font-bold">2</div>
                    <p class="text-sm mt-1">Detail Institusi</p>
                </div>
                <div class="w-20 h-1 bg-blue-700"></div>
                <div class="flex-1 text-center opacity-50 transition-transform duration-300 hover:scale-110 active:scale-95">
                    <div class="w-8 h-8 bg-blue-700 text-white rounded-full flex items-center justify-center mx-auto font-bold">3</div>
                    <p class="text-sm mt-1">Pilihan Program</p>
                </div>
            </div>

            <!-- Formulir Pendaftaran -->
            <div class="mt-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Informasi Pribadi</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="transition-transform duration-300 hover:scale-105">
                        <label class="text-sm text-gray-700">Nama Depan</label>
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1" placeholder="Masukkan nama depan">
                    </div>
                    <div class="transition-transform duration-300 hover:scale-105">
                        <label class="text-sm text-gray-700">Nama Belakang</label>
                        <input type="text" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1" placeholder="Masukkan nama belakang">
                    </div>
                </div>
                <div class="mt-4 transition-transform duration-300 hover:scale-105">
                    <label class="text-sm text-gray-700">Email</label>
                    <input type="email" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1" placeholder="nama@contoh.com">
                </div>
                <div class="mt-4 transition-transform duration-300 hover:scale-105">
                    <label class="text-sm text-gray-700">Nomor Telepon</label>
                    <input type="tel" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1" placeholder="08xxxxxxxxxx">
                </div>
            </div>

            <!-- Tombol Lanjutkan -->
            <div class="mt-6">
                <button class="w-full bg-blue-700 text-white p-3 rounded-lg font-semibold hover:bg-blue-800 transition-transform duration-300 hover:scale-105 active:scale-95">Lanjutkan</button>
            </div>
        </div>
    </section> --}}
        {{-- End Pendafatraan --}}

        <!-- Pendaftaran -->
        {{-- <section class="w-full px-5 py-16 bg-white text-gray-900 shadow-lg">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-blue-900">Pendaftaran TLC</h2>
            <div class="w-16 h-1 bg-yellow-500 mx-auto mt-2"></div>
            <p class="text-gray-600 mt-2">Mulai perjalanan pengembangan profesional Anda dengan mendaftar program TLC
            </p>
        </div>

        <div class="max-w-6xl mx-auto flex flex-col md:flex-row gap-8 items-center">
            <!-- Left Side: Text & Features -->
            <div class="md:w-1/2 text-left space-y-4">
                <span class="text-blue-600 font-semibold text-sm uppercase bg-blue-100 px-3 py-1 rounded-full">
                    Join Us Today
                </span>
                <h1
                    class="text-3xl md:text-4xl font-bold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-purple-500">
                    Register for TLC Program
                </h1>
                <p class="text-gray-600 max-w-md">
                    Take the first step towards enhancing your teaching skills and advancing your career.
                </p>

                <!-- Feature List -->
                <ul class="space-y-2 text-gray-700">
                    <li class="flex items-center">✅ Flexible learning schedule</li>
                    <li class="flex items-center">✅ Expert-led courses and workshops</li>
                    <li class="flex items-center">✅ Globally recognized certification</li>
                    <li class="flex items-center">✅ Ongoing professional development</li>
                </ul>
            </div>

            <!-- Right Side: Form -->
            <div
                class="md:w-1/2 max-w-3xl bg-white p-6 rounded-xl shadow-lg transition-transform duration-300 hover:scale-[1.02]">
                <!-- Step Indicator -->
                <div class="flex justify-between items-center bg-blue-900 text-white p-4 rounded-lg mb-6">
                    <div class="flex-1 text-center transition-transform duration-300 hover:scale-110 active:scale-95">
                        <div
                            class="w-8 h-8 bg-yellow-500 text-white rounded-full flex items-center justify-center mx-auto font-bold">
                            1</div>
                        <p class="text-sm mt-1">Informasi Pribadi</p>
                    </div>
                    <div class="w-16 h-1 bg-yellow-500"></div>
                    <div
                        class="flex-1 text-center opacity-50 transition-transform duration-300 hover:scale-110 active:scale-95">
                        <div
                            class="w-8 h-8 bg-blue-700 text-white rounded-full flex items-center justify-center mx-auto font-bold">
                            2</div>
                        <p class="text-sm mt-1">Detail Institusi</p>
                    </div>
                    <div class="w-16 h-1 bg-blue-700"></div>
                    <div
                        class="flex-1 text-center opacity-50 transition-transform duration-300 hover:scale-110 active:scale-95">
                        <div
                            class="w-8 h-8 bg-blue-700 text-white rounded-full flex items-center justify-center mx-auto font-bold">
                            3</div>
                        <p class="text-sm mt-1">Pilihan Program</p>
                    </div>
                </div>

                <!-- Formulir Pendaftaran -->
                <div>
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Informasi Pribadi</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="transition-transform duration-300 hover:scale-105">
                            <label class="text-sm text-gray-700">Nama Depan</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1"
                                placeholder="Masukkan nama depan">
                        </div>
                        <div class="transition-transform duration-300 hover:scale-105">
                            <label class="text-sm text-gray-700">Nama Belakang</label>
                            <input type="text"
                                class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1"
                                placeholder="Masukkan nama belakang">
                        </div>
                    </div>
                    <div class="mt-4 transition-transform duration-300 hover:scale-105">
                        <label class="text-sm text-gray-700">Email</label>
                        <input type="email"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1"
                            placeholder="nama@contoh.com">
                    </div>
                    <div class="mt-4 transition-transform duration-300 hover:scale-105">
                        <label class="text-sm text-gray-700">Nomor Telepon</label>
                        <input type="tel"
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 mt-1"
                            placeholder="08xxxxxxxxxx">
                    </div>
                </div>

                <!-- Tombol Lanjutkan -->
                <div class="mt-6">
                    <button
                        class="w-full bg-blue-700 text-white p-3 rounded-lg font-semibold hover:bg-blue-800 transition-transform duration-300 hover:scale-105 active:scale-95">
                        Lanjutkan
                    </button>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- End Pendaftaran -->

        <!-- Sponsor Section -->
        {{-- <section class="w-full px-5 py-16 bg-white text-gray-900 shadow-lg">
        <h2 class="text-2xl font-bold text-black text-center">Didukung Oleh</h2>
        <div class="w-16 h-1 bg-[#E76F51] mx-auto mt-2 mb-8"></div>

        <!-- Swiper Container -->
        <div class="swiper mySwiper max-w-6xl mx-auto bg-white p-6 rounded-lg shadow-lg">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex items-center justify-center">
                    <img src="images/guru.png" alt="Sponsor 1" class="w-96 h-96 object-contain">
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img src="images/guru.png" alt="Sponsor 2" class="w-96 h-96 object-contain">
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img src="images/guru.png" alt="Sponsor 3" class="w-96 h-96 object-contain">
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img src="images/guru.png" alt="Sponsor 4" class="w-96 h-96 object-contain">
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img src="images/guru.png" alt="Sponsor 5" class="w-96 h-96 object-contain">
                </div>
                <div class="swiper-slide flex items-center justify-center">
                    <img src="images/guru.png" alt="Sponsor 6" class="w-96 h-96 object-contain">
                </div>
            </div>

            <!-- Swiper Pagination -->
            <div class="swiper-pagination"></div>

            <!-- Swiper Navigation Buttons -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section> --}}

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
                        Program sertifikasi untuk memberdayakan pendidik dengan pengetahuan dan keterampilan mengajar yang
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
                        <li><i class="fas fa-map-marker-alt text-yellow-400"></i> Jl. Pendidikan No. 123, Jakarta Pusat,
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

    </div>
@endsection
