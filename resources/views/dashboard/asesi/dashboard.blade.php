@extends('layouts.asesiDashboard')
@section('title', 'Teaching & Learning Certification')

@section('content')

    <section class="bg-abu">

        {{-- Tampilan Home Baru (warna fresh kuning) --}}
        {{-- <div class="w-full px-6 py-20 bg-gradient-to-br from-yellow-50 via-orange-100 to-yellow-50 text-gray-800">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-8">
                <div class="space-y-6 text-center lg:text-left">
                    <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                        Sertifikasi Guru Modern di <span class="text-[#ff7300]">TLC Program</span>
                    </h1>
                    <p class="text-lg text-gray-700">
                        Program pengembangan kompetensi guru yang dirancang untuk Anda yang ingin menjadi inspirasi di kelas
                        dan komunitas pendidikan.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4">
                        <a href="#sertifikasi"
                            class="bg-[#F4A261] hover:bg-[#E76F51] text-white px-6 py-3 rounded-lg font-semibold transition-transform transform hover:scale-105">
                            Mulai Sertifikasi
                        </a>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="{{ asset('images/hamas.png') }}" alt="Dashboard Image"
                        class="max-w-md w-full rounded-xl shadow-lg hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div> --}}

        <div class="w-full px-6 py-24 bg-gradient-to-br from-yellow-50 via-orange-100 to-yellow-100 text-gray-800">
            <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 items-center gap-12">
                <div class="space-y-8 text-center lg:text-left">
                    <span
                        class="inline-block px-4 py-1 bg-orange-100 text-orange-600 rounded-full text-sm font-semibold tracking-wide shadow-sm">PROGRAM
                        UNGGULAN 2025</span>
                    <h1 class="text-4xl md:text-6xl font-extrabold leading-tight">
                        Sertifikasi <span class="text-[#ff7300] relative">
                            Guru Modern
                            <svg class="absolute -bottom-3 left-0 w-full" viewBox="0 0 200 15"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M0,7 Q50,0 100,7 T200,7" stroke="#ff7300" stroke-width="4" fill="none" />
                            </svg>
                        </span> di TLC Program
                    </h1>
                    <p class="text-xl text-gray-700 leading-relaxed">
                        Program pengembangan kompetensi guru yang dirancang untuk transformasi pendidikan Indonesia.
                        Tingkatkan kualifikasi dan perluas pengaruh Anda dalam komunitas pendidikan.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-5">
                        <a href="#sertifikasi"
                            class="bg-[#F4A261] hover:bg-[#E76F51] text-white px-8 py-4 rounded-lg font-bold transition-all transform hover:scale-105 shadow-lg">
                            Mulai Sertifikasi
                        </a>
                        <a href="#testimonials"
                            class="bg-white border-2 border-[#F4A261] text-[#F4A261] hover:bg-orange-50 px-8 py-4 rounded-lg font-bold transition-all">
                            Lihat Testimoni
                        </a>
                    </div>
                </div>
                <div class="flex justify-center relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-orange-200 to-yellow-200 rounded-full blur-3xl opacity-60">
                    </div>
                    <img src="{{ asset('images/hamas.png') }}" alt="TLC Program"
                        class="relative z-10 max-w-lg w-full rounded-2xl shadow-2xl hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
        {{-- End Tampilan Home Baru --}}


        {{-- Stats Counter Section - NEW --}}
        {{-- <div class="w-full bg-white py-12">
            <div class="max-w-7xl mx-auto px-6">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div class="p-6 bg-orange-50 rounded-xl">
                        <span class="block text-4xl md:text-5xl font-extrabold text-[#ff7300] mb-2"
                            id="counter1">5000+</span>
                        <span class="text-gray-700 font-medium">Guru Bersertifikat</span>
                    </div>
                    <div class="p-6 bg-blue-50 rounded-xl">
                        <span class="block text-4xl md:text-5xl font-extrabold text-blue-500 mb-2"
                            id="counter2">250+</span>
                        <span class="text-gray-700 font-medium">Sekolah Berpartner</span>
                    </div>
                    <div class="p-6 bg-green-50 rounded-xl">
                        <span class="block text-4xl md:text-5xl font-extrabold text-green-500 mb-2" id="counter3">34</span>
                        <span class="text-gray-700 font-medium">Provinsi Terjangkau</span>
                    </div>
                    <div class="p-6 bg-purple-50 rounded-xl">
                        <span class="block text-4xl md:text-5xl font-extrabold text-purple-500 mb-2"
                            id="counter4">98%</span>
                        <span class="text-gray-700 font-medium">Tingkat Kepuasan</span>
                    </div>
                </div>
            </div>
        </div> --}}
        {{-- End Stats Counter Section --}}


        {{-- Apa yang akan Guru Dapatkan? --}}
        {{-- <section class="max-w-7xl mx-auto px-6 sm:px-8 py-16 sm:py-20 bg-white">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 mb-14">
                <div class="md:w-1/3 text-center md:text-left">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight text-gray-800">
                        Apa yang akan Guru Dapatkan?
                    </h2>
                </div>

                <div class="md:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <!-- Box 1 -->
                    <div
                        class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-purple-200 cursor-pointer group">
                        <div
                            class="bg-purple-500 p-3 rounded-full mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v1m0 14v1m8-8h1M4 12H3m15.364-6.364l.707.707M6.343 17.657l-.707.707m12.728 0l.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-2 text-purple-600 group-hover:text-purple-700">
                                3 Event (Semnas, Praktik Baik, Diknas 32JP)
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                3 Event Guru dapatkan setiap bulannya, untuk pengembangan diri guru.
                            </p>
                        </div>
                    </div>

                    <!-- Box 2 -->
                    <div
                        class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-blue-200 cursor-pointer group">
                        <div
                            class="bg-blue-500 p-3 rounded-full mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 6h16M4 18h16M4 12h8" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-lg mb-2 text-blue-600 group-hover:text-blue-700">Rekaman Sesi
                            </h3>
                            <p class="text-gray-600 text-sm leading-relaxed">
                                Akses rekaman pelatihan jika tidak bisa hadir langsung.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 Box Bawah -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Box 3 -->
                <div
                    class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-orange-200 cursor-pointer group">
                    <div
                        class="bg-orange-500 p-3 rounded-full mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5V4H2v16h5m10 0V4m-6 4h.01M12 16h.01M8 12h.01M16 12h.01" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-2 text-orange-600 group-hover:text-orange-700">Relasi Guru
                            Indonesia</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Ribuan guru tergabung dengan kami, dapatkan relasi dari seluruh Indonesia.
                        </p>
                    </div>
                </div>

                <!-- Box 4 -->
                <div
                    class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-yellow-200 cursor-pointer group">
                    <div
                        class="bg-yellow-500 p-3 rounded-full mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-2 text-yellow-600 group-hover:text-yellow-700">KTA Member TLC
                            Program</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Anggota mendapatkan identitas berupa Kartu Digital.
                        </p>
                    </div>
                </div>

                <!-- Box 5 -->
                <div
                    class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border border-green-200 cursor-pointer group">
                    <div
                        class="bg-green-500 p-3 rounded-full mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 1.343-3 3 0 .795.312 1.519.818 2.049L12 18l2.182-4.951A2.993 2.993 0 0015 11c0-1.657-1.343-3-3-3z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-semibold text-lg mb-2 text-green-600 group-hover:text-green-700">Sertifikasi Resmi
                        </h3>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Diakui oleh lembaga pendidikan terpercaya.
                        </p>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="max-w-7xl mx-auto px-6 sm:px-8 py-20 bg-white" id="manfaat">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-10 mb-14">
                <div class="md:w-1/3 text-center md:text-left">
                    <span
                        class="inline-block px-4 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold tracking-wide shadow-sm mb-4">MANFAAT</span>
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight text-gray-800">
                        Apa yang akan Guru Dapatkan?
                    </h2>
                    <div class="h-1 w-20 bg-purple-500 mt-6 mb-4 mx-auto md:ml-0"></div>
                    <p class="text-gray-600 mt-4 text-lg">Program TLC dirancang untuk memberikan nilai tambah signifikan
                        bagi karir pendidik.</p>
                </div>

                <div class="md:w-2/3 grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <!-- Box 1 -->
                    <div
                        class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-purple-200 cursor-pointer group">
                        <div
                            class="bg-purple-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4v1m0 14v1m8-8h1M4 12H3m15.364-6.364l.707.707M6.343 17.657l-.707.707m12.728 0l.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl mb-2 text-purple-700 group-hover:text-purple-800">
                                3 Event Premium
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Dapatkan akses ke Seminar Nasional, Forum Praktik Baik, dan Pelatihan Diknas 32JP setiap
                                bulan untuk pengembangan profesional berkelanjutan.
                            </p>
                        </div>
                    </div>

                    <!-- Box 2 -->
                    <div
                        class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-blue-200 cursor-pointer group">
                        <div
                            class="bg-blue-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 6h16M4 18h16M4 12h8" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-xl mb-2 text-blue-700 group-hover:text-blue-800">Rekaman Sesi Premium
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Akses seumur hidup ke rekaman pelatihan berkualitas tinggi. Belajar kapanpun, dimanapun
                                sesuai jadwal Anda.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3 Box Bawah -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Box 3 -->
                <div
                    class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-orange-200 cursor-pointer group">
                    <div
                        class="bg-orange-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5V4H2v16h5m10 0V4m-6 4h.01M12 16h.01M8 12h.01M16 12h.01" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-2 text-orange-700 group-hover:text-orange-800">Jaringan Pendidik
                            Nasional</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Terhubung dengan ribuan guru dari seluruh Indonesia. Perluasan jaringan profesional yang tak
                            ternilai untuk pengembangan karir.
                        </p>
                    </div>
                </div>

                <!-- Box 4 -->
                <div
                    class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-yellow-200 cursor-pointer group">
                    <div
                        class="bg-yellow-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 13l4 4L19 7M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-2 text-yellow-700 group-hover:text-yellow-800">KTA Member Eksklusif
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Kartu Tanda Anggota digital yang membuka akses ke berbagai keuntungan eksklusif dan diskon
                            khusus dari mitra TLC.
                        </p>
                    </div>
                </div>

                <!-- Box 5 -->
                <div
                    class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-green-200 cursor-pointer group">
                    <div
                        class="bg-green-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-9 h-9 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 1.343-3 3 0 .795.312 1.519.818 2.049L12 18l2.182-4.951A2.993 2.993 0 0015 11c0-1.657-1.343-3-3-3z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-2 text-green-700 group-hover:text-green-800">Sertifikasi
                            Terakreditasi</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Sertifikasi resmi yang diakui oleh Kemendikbud dan lembaga pendidikan terkemuka, memberikan
                            nilai tambah signifikan pada CV Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        {{-- End guru dapatkan --}}



        <section class="w-full py-16 px-6 bg-gray-50" id="testimonials">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <span
                        class="inline-block px-4 py-1 bg-blue-100 text-blue-600 rounded-full text-sm font-semibold tracking-wide shadow-sm mb-4">TESTIMONI</span>
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 mb-4">Apa Kata Mereka?</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Cerita sukses dari para guru yang telah
                        menyelesaikan program TLC</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-14 h-14 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                                <span class="text-xl font-bold text-orange-600">SA</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Siti Aminah</h4>
                                <p class="text-sm text-gray-500">Guru SD Negeri 1 Jakarta</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                        <p class="italic text-gray-600">"Program TLC benar-benar mengubah cara saya mengajar. Sekarang saya
                            lebih percaya diri dan murid-murid saya lebih antusias dalam belajar!"</p>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-14 h-14 rounded-full bg-blue-100 flex items-center justify-center mr-4">
                                <span class="text-xl font-bold text-blue-600">BS</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Budi Santoso</h4>
                                <p class="text-sm text-gray-500">Guru SMP Negeri 5 Surabaya</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                        <p class="italic text-gray-600">"Sertifikasi Level B membuka kesempatan promosi di sekolah saya.
                            Materi pelatihannya sangat relevan dengan kebutuhan pendidikan saat ini."</p>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="bg-white p-6 md:p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300">
                        <div class="flex items-center mb-4">
                            <div class="w-14 h-14 rounded-full bg-green-100 flex items-center justify-center mr-4">
                                <span class="text-xl font-bold text-green-600">DR</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800">Dewi Rahayu</h4>
                                <p class="text-sm text-gray-500">Kepala Sekolah SMA 2 Bandung</p>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex text-yellow-400">
                                ★★★★★
                            </div>
                        </div>
                        <p class="italic text-gray-600">"Sebagai kepala sekolah, saya melihat perubahan signifikan pada
                            guru-guru yang mengikuti TLC. Kualitas pembelajaran meningkat drastis!"</p>
                    </div>
                </div>
            </div>
        </section>


        {{-- Paket TLC --}}
        {{-- <section class="w-full py-16 px-4 sm:px-6">
            <div class="max-w-7xl mx-auto">
                <!-- Course Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card Level A -->
                    <div
                        class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('images/levela.png') }}" alt="Level A"
                            class="w-full h-52 sm:h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-opacity-50 flex flex-col justify-end p-4 transition-all duration-500 group-hover:bg-opacity-70">
                            <h3
                                class="text-white text-lg md:text-2xl font-bold mb-2 leading-tight translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                Sertifikasi Level A</h3>
                            <p
                                class="text-white text-xs md:text-sm mb-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">
                                Informasi Sertifikasi Dasar Pengajaran Efektif</p>
                            <button onclick="document.getElementById('modalA').classList.remove('hidden')"
                                class="bg-white text-black px-4 md:px-6 py-2 text-xs md:text-sm rounded translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">Baca
                                selengkapnya</button>
                        </div>
                    </div>

                    <!-- Card Level B -->
                    <div
                        class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('images/levelb.png') }}" alt="Level B"
                            class="w-full h-52 sm:h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-opacity-50 flex flex-col justify-end p-4 transition-all duration-500 group-hover:bg-opacity-70">
                            <h3
                                class="text-white text-lg md:text-2xl font-bold mb-2 leading-tight translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                Sertifikasi Level B</h3>
                            <p
                                class="text-white text-xs md:text-sm mb-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">
                                Informasi Sertifikasi Strategi Pembelajaran Lanjut</p>
                            <button onclick="document.getElementById('modalB').classList.remove('hidden')"
                                class="bg-white text-black px-4 md:px-6 py-2 text-xs md:text-sm rounded translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">Baca
                                selengkapnya</button>
                        </div>
                    </div>

                    <!-- Card Level C -->
                    <div
                        class="relative group overflow-hidden rounded-xl shadow-lg cursor-pointer transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('images/levelc.png') }}" alt="Level C"
                            class="w-full h-52 sm:h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div
                            class="absolute inset-0 bg-opacity-50 flex flex-col justify-end p-4 transition-all duration-500 group-hover:bg-opacity-70">
                            <h3
                                class="text-white text-lg md:text-2xl font-bold mb-2 leading-tight translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500">
                                Sertifikasi Level C</h3>
                            <p
                                class="text-white text-xs md:text-sm mb-3 translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">
                                Informasi Sertifikasi Mastery Pengajaran Kreatif</p>
                            <button onclick="document.getElementById('modalC').classList.remove('hidden')"
                                class="bg-white text-black px-4 md:px-6 py-2 text-xs md:text-sm rounded translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-700">Baca
                                selengkapnya</button>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="w-full py-20 px-6 bg-gradient-to-b from-white to-blue-50" id="sertifikasi">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <span
                        class="inline-block px-4 py-1 bg-yellow-100 text-yellow-600 rounded-full text-sm font-semibold tracking-wide shadow-sm mb-4">PROGRAM
                        SERTIFIKASI</span>
                    <h2 class="text-3xl sm:text-5xl font-extrabold text-gray-800 mb-4">Pilih Jalur Sertifikasi Anda</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Program bertingkat yang disesuaikan dengan kebutuhan
                        dan tujuan karir pendidik</p>
                </div>

                <!-- Course Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Card Level A -->
                    <div
                        class="relative group overflow-hidden rounded-2xl shadow-xl cursor-pointer transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <div
                            class="absolute -right-4 top-6 bg-orange-500 text-white px-8 py-1 rotate-45 text-sm font-bold">
                            POPULER</div>
                        <img src="{{ asset('images/levela.png') }}" alt="Level A"
                            class="w-full h-56 sm:h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6 transition-all duration-500">
                            <div class="mb-4">
                                <span
                                    class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">LEVEL
                                    A</span>
                            </div>
                            <h3 class="text-white text-2xl md:text-3xl font-bold mb-3 leading-tight">
                                Sertifikasi Dasar</h3>
                            <p class="text-white/90 text-sm md:text-base mb-4">
                                Fondasi pengajaran efektif untuk semua guru</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Manajemen
                                    Kelas</span>
                                <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Desain
                                    Pembelajaran</span>
                                <span
                                    class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Asesmen</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-white font-bold text-xl">Rp 499.000</span>
                                <button onclick="document.getElementById('modalA').classList.remove('hidden')"
                                    class="bg-white text-gray-800 px-4 md:px-6 py-2 text-xs md:text-sm font-bold rounded-lg hover:bg-orange-200 transition-all">Detail
                                    Program</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Level B -->
                    <div
                        class="relative group overflow-hidden rounded-2xl shadow-xl cursor-pointer transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <img src="{{ asset('images/levelb.png') }}" alt="Level B"
                            class="w-full h-56 sm:h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6 transition-all duration-500">
                            <div class="mb-4">
                                <span
                                    class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">LEVEL
                                    B</span>
                            </div>
                            <h3 class="text-white text-2xl md:text-3xl font-bold mb-3 leading-tight">
                                Sertifikasi Menengah</h3>
                            <p class="text-white/90 text-sm md:text-base mb-4">
                                Strategi pembelajaran lanjutan untuk guru berpengalaman</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Modul
                                    Interaktif</span>
                                <span
                                    class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Literasi
                                    Digital</span>
                                <span
                                    class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Project
                                    Based</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-white font-bold text-xl">Rp 699.000</span>
                                <button onclick="document.getElementById('modalB').classList.remove('hidden')"
                                    class="bg-white text-gray-800 px-4 md:px-6 py-2 text-xs md:text-sm font-bold rounded-lg hover:bg-orange-200 transition-all">Detail
                                    Program</button>
                            </div>
                        </div>
                    </div>

                    <!-- Card Level C -->
                    <div
                        class="relative group overflow-hidden rounded-2xl shadow-xl cursor-pointer transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl">
                        <div class="absolute -right-4 top-6 bg-blue-500 text-white px-8 py-1 rotate-45 text-sm font-bold">
                            PREMIUM</div>
                        <img src="{{ asset('images/levelc.png') }}" alt="Level C"
                            class="w-full h-56 sm:h-64 object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black to-transparent opacity-70"></div>
                        <div class="absolute inset-0 flex flex-col justify-end p-6 transition-all duration-500">
                            <div class="mb-4">
                                <span
                                    class="bg-white/20 text-white text-xs font-bold px-3 py-1 rounded-full backdrop-blur-sm">LEVEL
                                    C</span>
                            </div>
                            <h3 class="text-white text-2xl md:text-3xl font-bold mb-3 leading-tight">
                                Sertifikasi Master</h3>
                            <p class="text-white/90 text-sm md:text-base mb-4">
                                Pengajaran kreatif tingkat mahir untuk pemimpin pendidikan</p>
                            <div class="flex flex-wrap gap-2 mb-6">
                                <span
                                    class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Praktik
                                    Video</span>
                                <span
                                    class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Mentoring
                                    1-on-1</span>
                                <span
                                    class="bg-white/20 text-white text-xs px-3 py-1 rounded-full backdrop-blur-sm">Publikasi</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-white font-bold text-xl">Rp 999.000</span>
                                <button onclick="document.getElementById('modalC').classList.remove('hidden')"
                                    class="bg-white text-gray-800 px-4 md:px-6 py-2 text-xs md:text-sm font-bold rounded-lg hover:bg-orange-200 transition-all">Detail
                                    Program</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-flex items-center justify-center bg-gradient-to-r from-[#F4A261] to-[#E76F51] text-white px-8 py-4 rounded-lg font-bold shadow-lg hover:shadow-xl transform transition-all hover:scale-105">
                        <span>Bandingkan Semua Paket</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- Modal Template -->
        {{-- @foreach (['A', 'B', 'C'] as $level)
            <div id="modal{{ $level }}"
                class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50 hidden">
                <div class="bg-white rounded-xl shadow-xl max-w-lg w-full p-6 relative">
                    <button onclick="document.getElementById('modal{{ $level }}').classList.add('hidden')"
                        class="absolute top-2 right-3 text-gray-400 hover:text-gray-600">&times;</button>
                    <h2 class="text-xl font-bold mb-4 text-[#F4A261]">Sertifikasi Level {{ $level }}</h2>
                    <p class="text-gray-600 mb-6 text-sm leading-relaxed">
                        @switch($level)
                            @case('A')
                                Bangun fondasi pengajaran Anda dengan pendekatan yang terbukti efektif! Di Level A, Anda akan
                                mempelajari dasar-dasar penting yang wajib dimiliki setiap guru hebat—mulai dari manajemen kelas,
                                penyusunan tujuan pembelajaran, hingga strategi instruksional yang kuat. Cocok untuk semua guru yang
                                ingin mengajar dengan percaya diri sejak hari pertama.
                            @break

                            @case('B')
                                Naik ke tahap lanjutan! Di Level B, Anda akan ditantang untuk menyusun modul ajar yang kreatif dan
                                mengisi skala literasi yang mengukur kemampuan Anda dalam memahami kebutuhan belajar siswa. Ini
                                adalah langkah nyata menuju pembelajaran yang berdampak dan terukur.
                            @break

                            @case('C')
                                Tunjukkan mastery Anda sebagai pendidik sejati! Level C mengajak Anda membuktikan keterampilan
                                mengajar melalui video praktik langsung dan refleksi diri mendalam. Sertifikasi ini dirancang bagi
                                guru yang ingin menjadi role model inspiratif di ruang kelas dan komunitas belajar.
                            @break
                        @endswitch
                    </p>
                    <div class="text-right">
                        <a href="#"
                            class="bg-[#F4A261] hover:bg-[#E76F51] text-white px-5 py-2 rounded-lg font-semibold">Mulai
                            Sertifikasi</a>
                    </div>
                </div>
            </div>
        @endforeach --}}

        @foreach (['A', 'B', 'C'] as $level)
            <div id="modal{{ $level }}"
                class="fixed inset-0 bg-black bg-opacity-80 backdrop-blur-sm flex items-center justify-center z-50 hidden transition-all duration-300">
                <div
                    class="bg-white rounded-2xl shadow-2xl max-w-lg w-full p-8 relative transform transition-all duration-500 scale-100">
                    <button onclick="document.getElementById('modal{{ $level }}').classList.add('hidden')"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <div class="flex items-center mb-6">
                        <div class="w-12 h-12 rounded-full bg-orange-100 flex items-center justify-center mr-4">
                            <span class="text-xl font-bold text-orange-600">{{ $level }}</span>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">Sertifikasi Level {{ $level }}</h2>
                    </div>

                    <div class="mb-6">
                        <div class="h-1 w-16 bg-orange-500 mb-4"></div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-3">
                            @switch($level)
                                @case('A')
                                    Fondasi Pengajaran Efektif
                                @break

                                @case('B')
                                    Strategi Pembelajaran Lanjutan
                                @break

                                @case('C')
                                    Mastery Pengajaran Kreatif
                                @break
                            @endswitch
                        </h3>

                        <p class="text-gray-600 mb-6 leading-relaxed">
                            @switch($level)
                                @case('A')
                                    Bangun fondasi pengajaran Anda dengan pendekatan yang terbukti efektif! Di Level A, Anda akan
                                    mempelajari dasar-dasar penting yang wajib dimiliki setiap guru hebat—mulai dari manajemen
                                    kelas,
                                    penyusunan tujuan pembelajaran, hingga strategi instruksional yang kuat. Cocok untuk semua guru
                                    yang
                                    ingin mengajar dengan percaya diri sejak hari pertama.
                                @break

                                @case('B')
                                    Naik ke tahap lanjutan! Di Level B, Anda akan ditantang untuk menyusun modul ajar yang kreatif
                                    dan
                                    mengisi skala literasi yang mengukur kemampuan Anda dalam memahami kebutuhan belajar siswa. Ini
                                    adalah langkah nyata menuju pembelajaran yang berdampak dan terukur.
                                @break

                                @case('C')
                                    Tunjukkan mastery Anda sebagai pendidik sejati! Level C mengajak Anda membuktikan keterampilan
                                    mengajar melalui video praktik langsung dan refleksi diri mendalam. Sertifikasi ini dirancang
                                    bagi
                                    guru yang ingin menjadi role model inspiratif di ruang kelas dan komunitas belajar.
                                @break
                            @endswitch
                        </p>

                        <!-- Benefit cards -->
                        <div class="grid grid-cols-2 gap-3 mb-6">
                            @switch($level)
                                @case('A')
                                    <div class="flex items-center p-3 bg-orange-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Manajemen Kelas</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-orange-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Strategi Motivasi</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-orange-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Desain Pembelajaran</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-orange-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-orange-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Teknik Asesmen</span>
                                    </div>
                                @break

                                @case('B')
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Modul Interaktif</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Literasi Digital</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Project Based</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Analisis Pembelajaran</span>
                                    </div>
                                @break

                                @case('C')
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Praktik Video</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Mentoring 1-on-1</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Publikasi</span>
                                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span class="text-sm font-medium">Kepemimpinan</span>
                                    </div>
                                @break
                            @endswitch
                        </div>
                    </div>

                    <!-- Price and CTA -->
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-gray-500 text-sm line-through">
                                @switch($level)
                                    @case('A')
                                        Rp 699.000
                                    @break

                                    @case('B')
                                        Rp 999.000
                                    @break

                                    @case('C')
                                        Rp 1.299.000
                                    @break
                                @endswitch
                            </span>
                            <div class="text-2xl font-bold text-gray-800">
                                @switch($level)
                                    @case('A')
                                        Rp 499.000
                                    @break

                                    @case('B')
                                        Rp 699.000
                                    @break

                                    @case('C')
                                        Rp 999.000
                                    @break
                                @endswitch
                            </div>
                        </div>
                        <a href="#"
                            class="bg-gradient-to-r from-[#F4A261] to-[#E76F51] hover:from-[#E76F51] hover:to-[#E76F51] text-white px-6 py-3 rounded-lg font-bold shadow-lg transform transition-all hover:scale-105">
                            Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
        {{-- End Paket TLC & Modals --}}


        {{-- Alur Pendaftaraan --}}
        {{-- <section class="relative w-full px-5 py-16 overflow-hidden">
            <div class="max-w-6xl mx-auto relative">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-black mb-4 animate__animated animate__fadeInDown">
                        Segera Daftarkan Diri Anda Di TLC
                    </h2>
                    <p class="text-gray-600 text-md max-w-2xl mx-auto animate__animated animate__fadeIn">
                        Berikut Ini Langkah Mudah Pendaftaran Teaching & Learning Certification
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-[#4DB5D9]/10 to-[#4DB5D9]/20 rounded-3xl blur-2xl">
                    </div>

                    <div class="relative z-10 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Step 1 -->
                        <div class="group">
                            <div class="relative">
                                <div
                                    class="absolute -inset-2 bg-[#4DB5D9]/20 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out blur-lg">
                                </div>
                                <div
                                    class="relative z-10 w-28 h-28 md:w-36 md:h-36 mx-auto bg-white shadow-2xl border-4 border-[#4DB5D9] rounded-full flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                    <span
                                        class="text-5xl md:text-6xl font-bold text-[#4DB5D9] transition-all duration-300 group-hover:text-7xl">1</span>
                                </div>
                            </div>
                            <div class="text-center mt-6">
                                <h3
                                    class="text-lg md:text-xl font-bold text-[#4DB5D9] mb-3 group-hover:text-[#4DB5D9]/80 transition-colors">
                                    Daftar Akun</h3>
                                <p
                                    class="text-gray-600 px-4 group-hover:text-gray-800 transition-colors text-sm md:text-base">
                                    Lakukan registrasi akun lalu lengkapi profil.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="group">
                            <div class="relative">
                                <div
                                    class="absolute -inset-2 bg-[#4DB5D9]/20 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out blur-lg">
                                </div>
                                <div
                                    class="relative z-10 w-28 h-28 md:w-36 md:h-36 mx-auto bg-white shadow-2xl border-4 border-[#4DB5D9] rounded-full flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                    <span
                                        class="text-5xl md:text-6xl font-bold text-[#4DB5D9] transition-all duration-300 group-hover:text-7xl">2</span>
                                </div>
                            </div>
                            <div class="text-center mt-6">
                                <h3
                                    class="text-lg md:text-xl font-bold text-[#4DB5D9] mb-3 group-hover:text-[#4DB5D9]/80 transition-colors">
                                    Melakukan Pembayaran</h3>
                                <p
                                    class="text-gray-600 px-4 group-hover:text-gray-800 transition-colors text-sm md:text-base">
                                    Menyelesaikan proses pembayaran sertifikasi Level
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="group">
                            <div class="relative">
                                <div
                                    class="absolute -inset-2 bg-[#4DB5D9]/20 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-300 ease-in-out blur-lg">
                                </div>
                                <div
                                    class="relative z-10 w-28 h-28 md:w-36 md:h-36 mx-auto bg-white shadow-2xl border-4 border-[#4DB5D9] rounded-full flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:shadow-xl">
                                    <span
                                        class="text-5xl md:text-6xl font-bold text-[#4DB5D9] transition-all duration-300 group-hover:text-7xl">3</span>
                                </div>
                            </div>
                            <div class="text-center mt-6">
                                <h3
                                    class="text-lg md:text-xl font-bold text-[#4DB5D9] mb-3 group-hover:text-[#4DB5D9]/80 transition-colors">
                                    Mendapatkan Modul Pelatihan Dan Tes Sertifikasi</h3>
                                <p
                                    class="text-gray-600 px-4 group-hover:text-gray-800 transition-colors text-sm md:text-base">
                                    Kamu akan diberikan akses untuk belajar modul yang ada dan Melakukan Tes Sertifikasi
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Garis lengkung -->
                    <svg class="hidden md:block absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-full z-0"
                        viewBox="0 0 1200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M100 100C100 100 300 50 600 100C900 150 1100 100 1100 100" stroke="#4DB5D9"
                            stroke-width="4" stroke-linecap="round" class="animate__animated animate__fadeIn">
                        </path>
                    </svg>
                </div>

                <div class="text-center mt-16">
                    <button
                        class="px-8 py-3 bg-[#4DB5D9] text-white text-lg font-semibold rounded-full transform transition-all duration-300 hover:scale-105 hover:bg-[#4DB5D9]/90 active:scale-95 shadow-xl hover:shadow-2xl">
                        Pesan Sekarang
                    </button>
                </div>
            </div>

        </section> --}}


        <section class="relative w-full px-5 py-20 overflow-hidden bg-gradient-to-b from-white to-blue-50">
            <div class="max-w-6xl mx-auto relative">
                <div class="text-center mb-16">
                    <span
                        class="inline-block px-4 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm font-semibold tracking-wide shadow-sm mb-4">CARA
                        BERGABUNG</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-gray-800 mb-4">
                        Tiga Langkah Mudah Untuk Menjadi
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-purple-600">Guru
                            Bersertifikat</span>
                    </h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        Proses pendaftaran yang sederhana dan cepat untuk meningkatkan kualifikasi profesional Anda
                    </p>
                </div>

                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-400/10 to-purple-400/10 rounded-3xl blur-3xl">
                    </div>

                    <div class="relative z-10 grid grid-cols-1 sm:grid-cols-3 gap-8 md:gap-12">
                        <!-- Step 1 -->
                        <div
                            class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100">
                            <div class="relative mb-8">
                                <div
                                    class="absolute -inset-2 bg-gradient-to-r from-blue-400 to-indigo-400 opacity-20 group-hover:opacity-100 rounded-full blur-lg transition-all duration-300">
                                </div>
                                <div
                                    class="relative z-10 w-20 h-20 mx-auto bg-gradient-to-br from-blue-500 to-indigo-600 rounded-2xl flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                                    <span class="text-4xl font-extrabold text-white">1</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-4 group-hover:text-indigo-600 transition-colors">
                                    Daftar Akun
                                </h3>
                                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">
                                    Buat akun TLC dan lengkapi profil Anda secara mendetail untuk memulai perjalanan
                                    pengembangan profesional.
                                </p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div
                            class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100">
                            <div class="relative mb-8">
                                <div
                                    class="absolute -inset-2 bg-gradient-to-r from-indigo-400 to-purple-400 opacity-20 group-hover:opacity-100 rounded-full blur-lg transition-all duration-300">
                                </div>
                                <div
                                    class="relative z-10 w-20 h-20 mx-auto bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                                    <span class="text-4xl font-extrabold text-white">2</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-4 group-hover:text-purple-600 transition-colors">
                                    Pilih & Bayar Program
                                </h3>
                                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">
                                    Pilih level sertifikasi yang sesuai dengan kebutuhan Anda dan selesaikan pembayaran
                                    dengan berbagai metode yang tersedia.
                                </p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div
                            class="group bg-white p-8 rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 border border-gray-100">
                            <div class="relative mb-8">
                                <div
                                    class="absolute -inset-2 bg-gradient-to-r from-purple-400 to-pink-400 opacity-20 group-hover:opacity-100 rounded-full blur-lg transition-all duration-300">
                                </div>
                                <div
                                    class="relative z-10 w-20 h-20 mx-auto bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl flex items-center justify-center transform transition-all duration-300 group-hover:scale-110 group-hover:rotate-3">
                                    <span class="text-4xl font-extrabold text-white">3</span>
                                </div>
                            </div>
                            <div class="text-center">
                                <h3
                                    class="text-xl font-bold text-gray-800 mb-4 group-hover:text-pink-600 transition-colors">
                                    Akses & Dapatkan Sertifikasi
                                </h3>
                                <p class="text-gray-600 group-hover:text-gray-700 transition-colors">
                                    Akses modul pembelajaran, ikuti pelatihan, selesaikan tes, dan raih sertifikasi yang
                                    diakui secara nasional.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Curved arrow path -->
                    <svg class="hidden lg:block absolute top-1/3 left-1/2 transform -translate-x-1/2 w-full z-0"
                        viewBox="0 0 1200 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 50C200 20 400 80 600 50C800 20 1000 80 1200 50" stroke="url(#gradient)"
                            stroke-width="2" stroke-dasharray="6 4" />
                        <defs>
                            <linearGradient id="gradient" x1="0" y1="0" x2="1200" y2="0"
                                gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#4F46E5" />
                                <stop offset="50%" stop-color="#7C3AED" />
                                <stop offset="100%" stop-color="#DB2777" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="text-center mt-16">
                    <a href="#"
                        class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white text-lg font-bold rounded-xl transform transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-indigo-500/30">
                        <span>Mulai Perjalanan Anda</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        {{-- End Pendaftaraan --}}


        {{-- Ulasan dan Riwayat --}}
        {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-gray-50 border border-gray-200 p-6 rounded-xl">
                <h4 class="text-lg font-bold text-gray-800 mb-2">🗣 Ulasan Anda</h4>
                <p class="text-sm text-gray-600 mb-4">Bagikan pengalaman Anda mengikuti program sertifikasi ini.</p>
                <textarea class="w-full border border-gray-300 rounded-lg px-4 py-2 text-sm" rows="4"
                    placeholder="Tulis pendapat Anda..."></textarea>
                <button class="mt-3 bg-[#F4A261] hover:bg-[#E76F51] text-white px-5 py-2 rounded-lg text-sm">Kirim
                    Ulasan</button>
            </div>
            <div class="bg-white border border-gray-200 p-6 rounded-xl">
                <h4 class="text-lg font-bold text-gray-800 mb-4">📜 Riwayat Aktivitas</h4>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li>✅ 28 Apr 2025 - Tes Level A diselesaikan</li>
                    <li>📤 29 Apr 2025 - Modul Ajar Level B diunggah</li>
                    <li>⏳ 30 Apr 2025 - Menunggu penilaian Level B</li>
                </ul>
            </div>
        </div> --}}

        {{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            <div class="bg-white border border-gray-200 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="rounded-full bg-blue-100 p-3 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Bagikan Pengalaman Anda</h4>
                </div>
                <p class="text-gray-600 mb-5">Ulasan Anda membantu meningkatkan program ini dan menginspirasi peserta
                    lainnya.</p>
                <textarea
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 text-gray-700 focus:border-blue-500 focus:ring focus:ring-blue-200 transition"
                    rows="4" placeholder="Bagaimana pengalaman Anda mengikuti program ini?"></textarea>
                <div class="mt-3 flex items-center">
                    <div class="flex mr-4">
                        <span class="mr-2">Rating:</span>
                        <div class="flex text-yellow-400">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                            </svg>
                        </div>
                    </div>
                    <button
                        class="ml-auto bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg text-sm font-medium transition transform hover:scale-105">
                        Kirim Ulasan
                    </button>
                </div>
            </div>

            <div class="bg-white border border-gray-200 p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
                <div class="flex items-center mb-6">
                    <div class="rounded-full bg-indigo-100 p-3 mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold text-gray-800">Riwayat Aktivitas</h4>
                </div>
                <div class="space-y-4">
                    <div class="bg-green-50 rounded-lg p-4 border-l-4 border-green-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            <span class="font-medium text-gray-800">28 Apr 2025</span>
                        </div>
                        <p class="ml-7 text-gray-700">Tes Level A diselesaikan dengan nilai 90/100</p>
                    </div>

                    <div class="bg-blue-50 rounded-lg p-4 border-l-4 border-blue-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                            </svg>
                            <span class="font-medium text-gray-800">29 Apr 2025</span>
                        </div>
                        <p class="ml-7 text-gray-700">Modul Ajar Level B berhasil diunggah</p>
                    </div>

                    <div class="bg-yellow-50 rounded-lg p-4 border-l-4 border-yellow-500">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="font-medium text-gray-800">30 Apr 2025</span>
                        </div>
                        <p class="ml-7 text-gray-700">Menunggu penilaian Level B (est. 3 hari)</p>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <a href="#"
                        class="text-indigo-600 hover:text-indigo-800 font-medium text-sm flex items-center justify-center">
                        Lihat Semua Aktivitas
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div> --}}

        {{-- Preview Sertifikat --}}
        {{-- <div class="text-center">
            <h3 class="text-lg font-bold mb-4 text-gray-700">🎓 Contoh Sertifikat Anda</h3>
            <img src="{{ asset('images/hamas.png') }}" class="mx-auto rounded shadow w-full max-w-xl"
                alt="Contoh Sertifikat">
        </div> --}}

        {{-- <div class="mb-20">
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold mb-2 text-gray-800">Sertifikat Teaching & Learning</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Raih sertifikat profesional yang diakui secara nasional dan
                    tingkatkan peluang karir Anda dalam bidang pendidikan</p>
            </div>

            <div
                class="relative bg-white p-6 rounded-2xl shadow-xl max-w-4xl mx-auto transform hover:scale-[1.02] transition duration-500 group">
                <div
                    class="absolute inset-0 bg-gradient-to-r from-blue-500/20 to-indigo-500/20 rounded-2xl opacity-0 group-hover:opacity-100 transition duration-500">
                </div>
                <img src="{{ asset('images/hamas.png') }}" class="w-full rounded-lg shadow-lg z-10 relative"
                    alt="Contoh Sertifikat">

                <div
                    class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-gray-900/80 to-transparent p-8 rounded-b-2xl text-white opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-4 group-hover:translate-y-0">
                    <h4 class="text-xl font-bold">Apa yang akan Anda dapatkan?</h4>
                    <ul class="mt-3 space-y-2">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Sertifikat digital & fisik dengan kode QR verifikasi
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Pencantuman dalam database tenaga pengajar tersertifikasi
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-400" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                            Akses eksklusif ke komunitas pengajar profesional
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}

        {{-- Keunggulan Program TLC --}}
        {{-- <div class="mb-20">
            <div class="text-center mb-12">
                <span class="bg-blue-100 text-blue-800 text-sm font-medium px-4 py-1.5 rounded-full">Kenapa Harus
                    TLC?</span>
                <h3 class="text-3xl font-bold mt-4 mb-4 text-gray-800">Keunggulan Program Kami</h3>
                <p class="text-gray-600 max-w-2xl mx-auto">Program Teaching & Learning Certification dirancang untuk
                    memenuhi kebutuhan pendidik profesional dengan beragam keunggulan</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-blue-500">
                    <div class="bg-blue-100 rounded-full p-3 w-14 h-14 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-blue-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-gray-800">Kurikulum Inovatif</h4>
                    <p class="text-gray-600">Dirancang oleh pakar pendidikan terkemuka dengan pendekatan berbasis
                        kompetensi yang sesuai standar global.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-indigo-500">
                    <div class="bg-indigo-100 rounded-full p-3 w-14 h-14 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-gray-800">Pengakuan Nasional</h4>
                    <p class="text-gray-600">Sertifikasi diakui oleh lembaga pendidikan dan pemerintah sebagai standar
                        kualitas mengajar.</p>
                </div>

                <div
                    class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition duration-300 border-t-4 border-purple-500">
                    <div class="bg-purple-100 rounded-full p-3 w-14 h-14 flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-purple-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h4 class="text-xl font-bold mb-3 text-gray-800">Jaringan Profesional</h4>
                    <p class="text-gray-600">Bergabunglah dengan komunitas pendidik berkualitas tinggi untuk berbagi ide
                        dan praktik terbaik.</p>
                </div>
            </div>
        </div> --}}

        {{-- Vidio Keseruan TLC --}}
        {{-- <section class="max-w-7xl mx-auto px-4 md:px-8 py-20 bg-white relative overflow-hidden">
            <!-- Heading -->
            <div class="max-w-4xl mx-auto text-center mb-14 relative z-10">
                <h2 class="text-3xl md:text-5xl font-extrabold text-gray-800 leading-tight mb-6">
                    Tonton Keseruan di
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-500 to-sky-500">
                        TLC Program
                    </span>
                </h2>
                <p class="text-lg md:text-xl text-gray-700 font-medium max-w-2xl mx-auto">
                    Saksikan pengalaman luar biasa dan momen tak terlupakan!
                </p>
            </div>

            <!-- Carousel -->
            <div class="relative group">
                <div id="testimonialContainer"
                    class="flex gap-6 md:gap-8 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-6 md:pb-8 no-scrollbar items-center px-2 md:px-4">
                    <!-- Video 1 -->
                    <div
                        class="flex-shrink-0 w-[85%] sm:w-[350px] md:w-[450px] h-[200px] sm:h-[280px] md:h-[350px] snap-center transform transition-transform duration-500 hover:scale-105 hover:shadow-2xl hover:ring-4 hover:ring-purple-400 hover:ring-opacity-50 rounded-2xl md:rounded-3xl overflow-hidden shadow-xl">
                        <iframe class="w-full h-full object-cover" src="https://www.youtube.com/embed/Jn7vuXLozJI"
                            frameborder="0" allowfullscreen></iframe>
                    </div>

                    <!-- Video 2 -->
                    <div
                        class="flex-shrink-0 w-[85%] sm:w-[350px] md:w-[450px] h-[200px] sm:h-[280px] md:h-[350px] snap-center transform transition-transform duration-500 hover:scale-105 hover:shadow-2xl hover:ring-4 hover:ring-purple-400 hover:ring-opacity-50 rounded-2xl md:rounded-3xl overflow-hidden shadow-xl">
                        <iframe class="w-full h-full object-cover" src="https://www.youtube.com/embed/Jn7vuXLozJI"
                            frameborder="0" allowfullscreen></iframe>
                    </div>

                    <!-- Video 3 -->
                    <div
                        class="flex-shrink-0 w-[85%] sm:w-[350px] md:w-[450px] h-[200px] sm:h-[280px] md:h-[350px] snap-center transform transition-transform duration-500 hover:scale-105 hover:shadow-2xl hover:ring-4 hover:ring-purple-400 hover:ring-opacity-50 rounded-2xl md:rounded-3xl overflow-hidden shadow-xl">
                        <iframe class="w-full h-full object-cover" src="https://www.youtube.com/embed/Jn7vuXLozJI"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>

                <!-- Navigasi Button -->
                <div class="hidden md:flex absolute inset-y-0 w-full justify-between items-center px-4">
                    <button id="prevBtn"
                        class="bg-white/70 hover:bg-white/90 rounded-full p-3 shadow-lg transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-gray-800"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextBtn"
                        class="bg-white/70 hover:bg-white/90 rounded-full p-3 shadow-lg transition duration-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-gray-800"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
        </section> --}}
        {{-- End Video --}}
    </section>

    <script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/asesiDashboard.js') }}" defer></script>
@endsection
