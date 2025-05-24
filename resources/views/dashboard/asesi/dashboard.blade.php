@extends('layouts.asesiDashboard')
@section('title', 'Teaching & Learning Certification')

@section('content')

    <section class="bg-abu">

        {{-- Tampilan Home  --}}
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
                    <img src="{{ asset('images/hamass.png') }}" alt="TLC Program"
                        class="relative z-10 max-w-lg w-full rounded-2xl shadow-2xl hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
        {{-- End Tampilan Home Baru --}}

        {{-- Apa yang akan Guru Dapatkan? --}}
        {{-- <section class="max-w-7xl mx-auto px-6 sm:px-8 py-20 bg-white" id="manfaat">
            <div class="flex flex-col 2xl:flex-row md:items-start md:justify-between gap-10 mb-14">
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
        </section> --}}

        <section class="max-w-7xl mx-auto px-6 sm:px-8 py-20 bg-white" id="manfaat">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold tracking-wide shadow-sm mb-4">
                    MANFAAT
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight text-gray-800 mb-6">
                    Apa yang akan Guru Dapatkan?
                </h2>
                <div class="h-1 w-20 bg-purple-500 mx-auto mb-4"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Program TLC dirancang untuk memberikan nilai tambah signifikan bagi karir pendidik.
                </p>
            </div>

            <!-- Benefits Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Box 1 -->
                <div class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-purple-200 cursor-pointer group">
                    <div class="bg-purple-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m0 14v1m8-8h1M4 12H3m15.364-6.364l.707.707M6.343 17.657l-.707.707m12.728 0l.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-3 text-purple-700 group-hover:text-purple-800">
                            3 Event Premium
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Dapatkan akses ke Seminar Nasional, Forum Praktik Baik, dan Pelatihan Diknas 32JP setiap bulan untuk pengembangan profesional berkelanjutan.
                        </p>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-blue-200 cursor-pointer group">
                    <div class="bg-blue-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 6h16M4 18h16M4 12h8" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-3 text-blue-700 group-hover:text-blue-800">
                            Rekaman Sesi Premium
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Akses seumur hidup ke rekaman pelatihan berkualitas tinggi. Belajar kapanpun, dimanapun sesuai jadwal Anda.
                        </p>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-orange-200 cursor-pointer group">
                    <div class="bg-orange-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5m10 0V4m-6 4h.01M12 16h.01M8 12h.01M16 12h.01" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-3 text-orange-700 group-hover:text-orange-800">
                            Jaringan Pendidik Nasional
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Terhubung dengan ribuan guru dari seluruh Indonesia. Perluasan jaringan profesional yang tak ternilai untuk pengembangan karir.
                        </p>
                    </div>
                </div>

                <!-- Box 4 -->
                <div class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-yellow-200 cursor-pointer group">
                    <div class="bg-yellow-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7 12a5 5 0 1110 0 5 5 0 01-10 0z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-3 text-yellow-700 group-hover:text-yellow-800">
                            KTA Member Eksklusif
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Kartu Tanda Anggota digital yang membuka akses ke berbagai keuntungan eksklusif dan diskon khusus dari mitra TLC.
                        </p>
                    </div>
                </div>

                <!-- Box 5 -->
                <div class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-green-200 cursor-pointer group">
                    <div class="bg-green-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-3 text-green-700 group-hover:text-green-800">
                            Sertifikasi Terakreditasi
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Sertifikasi resmi yang diakui oleh Kemendikbud dan lembaga pendidikan terkemuka, memberikan nilai tambah signifikan pada CV Anda.
                        </p>
                    </div>
                </div>

                <div class="flex items-start bg-white p-6 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-pink-200 cursor-pointer group">
                    <div class="bg-pink-600 p-3 rounded-xl mr-4 shadow-md group-hover:scale-110 transition-all duration-500 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-xl mb-3 text-pink-700 group-hover:text-pink-800">
                            Konsultasi Karir Pendidik
                        </h3>
                        <p class="text-gray-600 leading-relaxed text-sm">
                            Akses ke sesi konsultasi dengan pakar pendidikan untuk membantu merencanakan dan mengembangkan jalur karir profesional Anda di dunia pendidikan.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="max-w-7xl mx-auto px-6 sm:px-8 py-20 bg-white" id="manfaat">
            <!-- Header Section - Centered and Better Spacing -->
            <div class="text-center mb-16">
                <span class="inline-block px-6 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold tracking-wide shadow-sm mb-6">
                    MANFAAT
                </span>
                <h2 class="text-3xl sm:text-4xl md:text-5xl font-extrabold leading-tight text-gray-800 mb-6">
                    Apa yang akan Guru Dapatkan?
                </h2>
                <div class="h-1 w-20 bg-purple-500 mx-auto mb-6"></div>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto leading-relaxed">
                    Program TLC dirancang untuk memberikan nilai tambah signifikan bagi karir pendidik.
                </p>
            </div>

            <!-- Benefits Grid - All 5 boxes in uniform grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Box 1 -->
                <div class="flex flex-col bg-white p-8 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-purple-200 cursor-pointer group h-full">
                    <div class="bg-purple-600 p-4 rounded-xl mb-6 shadow-md group-hover:scale-110 transition-all duration-500 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m0 14v1m8-8h1M4 12H3m15.364-6.364l.707.707M6.343 17.657l-.707.707m12.728 0l.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-xl mb-4 text-purple-700 group-hover:text-purple-800">
                            3 Event Premium
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Dapatkan akses ke Seminar Nasional, Forum Praktik Baik, dan Pelatihan Diknas 32JP setiap bulan untuk pengembangan profesional berkelanjutan.
                        </p>
                    </div>
                </div>

                <!-- Box 2 -->
                <div class="flex flex-col bg-white p-8 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-blue-200 cursor-pointer group h-full">
                    <div class="bg-blue-600 p-4 rounded-xl mb-6 shadow-md group-hover:scale-110 transition-all duration-500 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M4 6h16M4 18h16M4 12h8" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-xl mb-4 text-blue-700 group-hover:text-blue-800">
                            Rekaman Sesi Premium
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Akses seumur hidup ke rekaman pelatihan berkualitas tinggi. Belajar kapanpun, dimanapun sesuai jadwal Anda.
                        </p>
                    </div>
                </div>

                <!-- Box 3 -->
                <div class="flex flex-col bg-white p-8 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-orange-200 cursor-pointer group h-full">
                    <div class="bg-orange-600 p-4 rounded-xl mb-6 shadow-md group-hover:scale-110 transition-all duration-500 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5m10 0V4m-6 4h.01M12 16h.01M8 12h.01M16 12h.01" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-xl mb-4 text-orange-700 group-hover:text-orange-800">
                            Jaringan Pendidik Nasional
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Terhubung dengan ribuan guru dari seluruh Indonesia. Perluasan jaringan profesional yang tak ternilai untuk pengembangan karir.
                        </p>
                    </div>
                </div>

                <!-- Box 4 -->
                <div class="flex flex-col bg-white p-8 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-yellow-200 cursor-pointer group h-full">
                    <div class="bg-yellow-600 p-4 rounded-xl mb-6 shadow-md group-hover:scale-110 transition-all duration-500 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7M12 4v16m8-8H4" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-xl mb-4 text-yellow-700 group-hover:text-yellow-800">
                            KTA Member Eksklusif
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Kartu Tanda Anggota digital yang membuka akses ke berbagai keuntungan eksklusif dan diskon khusus dari mitra TLC.
                        </p>
                    </div>
                </div>

                <!-- Box 5 -->
                <div class="flex flex-col bg-white p-8 rounded-2xl hover:shadow-xl hover:-translate-y-2 transition-all duration-500 border-2 border-green-200 cursor-pointer group h-full md:col-span-2 lg:col-span-1">
                    <div class="bg-green-600 p-4 rounded-xl mb-6 shadow-md group-hover:scale-110 transition-all duration-500 w-fit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 1.343-3 3 0 .795.312 1.519.818 2.049L12 18l2.182-4.951A2.993 2.993 0 0015 11c0-1.657-1.343-3-3-3z" />
                        </svg>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-bold text-xl mb-4 text-green-700 group-hover:text-green-800">
                            Sertifikasi Terakreditasi
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Sertifikasi resmi yang diakui oleh Kemendikbud dan lembaga pendidikan terkemuka, memberikan nilai tambah signifikan pada CV Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- End guru dapatkan --}}


        {{-- Testimoni --}}
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
        {{-- End Testimoni --}}

        {{-- Paket TLC --}}
        @livewire('asesi.payment-card')
        {{-- End Paket TLC & Modals --}}


        {{-- Alur Pendaftaraan --}}
        <section class="relative w-full px-5 py-20 overflow-hidden bg-gradient-to-b from-white to-blue-50">
            <div class="max-w-6xl mx-auto relative">
                <div class="text-center mb-16">
                    <span
                        class="inline-block px-4 py-1 bg-indigo-100 text-indigo-600 rounded-full text-sm font-semibold tracking-wide shadow-sm mb-4">CARA
                        BERGABUNG</span>
                    <h2 class="text-3xl md:text-5xl font-extrabold text-gray-800 mb-4">
                        Tiga Langkah Mudah Untuk Menjadi <br>
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


    </section>

    <script src="https://kit.fontawesome.com/yourkitcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="{{ asset('assets/js/asesiDashboard.js') }}" defer></script>
@endsection
