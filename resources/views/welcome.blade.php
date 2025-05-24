@extends('layouts.app')

@section('title', 'Teaching and Learning Certification')

@section('content')
    <div class="bg-abu">

        <!-- HOME -->
        <main id="home" class="w-full px-5 py-20 bg-gradient-to-br from-blue-50 via-white to-orange-50 text-gray-900">
            <div class="container mx-auto max-w-7xl view grid grid-cols-12 transition-all duration-500 ease-in-out mb-16">
                <div class="col-span-12 lg:col-span-7 p-5">
                    <div class="animate-fadeIn">
                        <span
                            class="text-lg text-[#E76F51] font-semibold inline-block px-4 py-1 bg-orange-100 rounded-full">#TRANSFORMASI
                            PENDIDIKAN ERA DIGITAL</span>
                        <h1
                            class="text-5xl md:text-6xl font-extrabold text-[#1D4E89] leading-tight mt-4 hover:scale-105 transition-transform duration-300">
                            <span class="relative inline-block">
                                <span class="relative z-10">Transform.</span>
                                <span class="absolute -bottom-2 left-0 w-full h-3 bg-yellow-300 opacity-50 z-0"></span>
                            </span>
                            <span class="relative inline-block">
                                <span class="relative z-10">Teach.</span>
                                <span class="absolute -bottom-2 left-0 w-full h-3 bg-blue-300 opacity-50 z-0"></span>
                            </span>
                            <span class="relative inline-block">
                                <span class="relative z-10">Thrive.</span>
                                <span class="absolute -bottom-2 left-0 w-full h-3 bg-orange-300 opacity-50 z-0"></span>
                            </span>
                        </h1>
                        <h2 class="text-4xl font-bold text-[#1D4E89] mt-2 mb-4">Teaching & Learning Certification</h2>
                        <p class="text-xl text-gray-700 mt-6 max-w-xl leading-relaxed">
                            <strong class="text-[#E76F51]">Bukan sekadar pelatihan biasa.</strong> Program sertifikasi yang
                            telah memberdayakan <span class="font-semibold">500+ pendidik</span> dengan metode pengajaran
                            revolusioner untuk menciptakan pengalaman belajar yang transformatif di era digital.
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row my-8 gap-4">
                        <a href="#skema"
                            class="bg-[#1D4E89] text-white px-8 py-4 rounded-xl shadow-lg text-lg font-semibold hover:bg-[#14406B] transition-all duration-300 hover:scale-105 active:scale-95 flex items-center justify-center">
                            <span>Daftar Sekarang</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#vidio"
                            class="bg-white border-2 border-[#1D4E89] text-[#1D4E89] px-8 py-4 rounded-xl shadow-md text-lg font-semibold hover:bg-gray-100 transition-all duration-300 hover:scale-105 active:scale-95 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Lihat Video</span>
                        </a>
                    </div>

                    <div class="mt-10">
                        <p class="text-gray-600 font-medium mb-4">Dipercaya oleh institusi pendidikan terkemuka:</p>
                        <div class="flex flex-wrap gap-6 items-center justify-start">
                            <div class="bg-white p-3 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                                <img src="{{ asset('images/smpit-an-nur.png') }}" alt="SMPIT An-Nur"
                                    class="h-16 hover:scale-110 transition-transform duration-300" loading="lazy">
                            </div>
                            <div class="bg-white p-3 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                                <img src="{{ asset('images/smp-sma-gibs.png') }}" alt="Global Islamic Boarding School"
                                    class="h-16 hover:scale-110 transition-transform duration-300" loading="lazy">
                            </div>
                            <div class="bg-white p-3 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                                <img src="{{ asset('images/hafecs.png') }}" alt="HAFECS"
                                    class="h-12 hover:scale-110 transition-transform duration-300" loading="lazy">
                            </div>
                            <div class="bg-white p-3 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                                <img src="{{ asset('images/hrp.png') }}" alt="HAFECS Research & Publication"
                                    class="h-16 hover:scale-110 transition-transform duration-300" loading="lazy">
                            </div>
                        </div>
                    </div>
                </div>

                <div
                    class="hidden lg:flex col-span-12 lg:col-span-5 rounded-2xl mx-3 overflow-hidden shadow-2xl relative group">
                    <img src="{{ asset('images/konten_satu.jpg') }}"
                        class="w-full h-full object-cover scale-100 group-hover:scale-110 transition-transform duration-700"
                        alt="Teacher engaging with students" loading="lazy">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#1D4E89]/70 to-transparent opacity-50 group-hover:opacity-70 transition-opacity duration-500">
                    </div>
                    <div
                        class="absolute bottom-6 left-6 bg-white/90 backdrop-blur-sm px-6 py-4 rounded-xl transform -translate-y-4 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-500">
                        <p class="text-[#1D4E89] font-bold text-xl">Kuasai Kelas Dengan Percaya Diri</p>
                        <p class="text-gray-700">Tingkatkan keterampilan mengajar Anda</p>
                    </div>
                </div>
            </div>


        </main>
        <!-- End Home -->

        <!-- Apa itu TLC? -->
        <section id="about"
            class="w-full px-5 py-20 bg-gradient-to-br from-blue-50 via-white to-blue-100 text-gray-900">
            <div class="max-w-7xl mx-auto w-full">
                <!-- Section Title -->
                <div class="text-center mb-16">
                    <span
                        class="inline-block px-4 py-1 bg-[#1D4E89]/10 text-[#1D4E89] font-semibold rounded-full text-sm mb-3">TENTANG
                        PROGRAM</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-[#1D4E89]">Temukan Kekuatan TLC</h2>
                    <div class="w-24 h-1 bg-[#E76F51] mt-4 mb-6 mx-auto"></div>
                    <p class="text-xl text-gray-700 max-w-3xl mx-auto">Program revolusioner yang mengubah cara guru
                        mengajar dan siswa belajar</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <!-- Gambar dengan label yang ditingkatkan -->
                    <div class="relative rounded-xl overflow-hidden shadow-2xl group h-[500px]">
                        <img src="{{ asset('images/konten_tiga.jpg') }}" alt="Teaching Mastery Framework"
                            class="object-cover w-full h-full transition-transform duration-700 group-hover:scale-110"
                            loading="lazy">

                        <div class="absolute inset-0 bg-gradient-to-t from-[#1D4E89]/80 to-transparent"></div>

                        <div
                            class="absolute bottom-0 left-0 right-0 p-8 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-500">
                            <div
                                class="bg-[#E76F51] text-white px-4 py-2 rounded-lg inline-block text-sm font-semibold shadow-md mb-3">
                                Teaching Mastery Framework
                            </div>
                            <h3 class="text-3xl font-bold text-white mb-2">Metodologi Yang Teruji</h3>
                            <p class="text-white/90 mb-4">Framework yang dirancang khusus untuk meningkatkan efektivitas
                                pengajaran di era digital</p>
                            <a href="#framework"
                                class="inline-flex items-center text-white hover:text-[#E76F51] transition-colors duration-300">
                                <span class="mr-2">Pelajari Framework</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Konten Deskripsi yang ditingkatkan -->
                    <div>
                        <h3 class="text-3xl font-bold text-[#1D4E89] mb-6">Transformasi Mengajar Untuk Era Digital</h3>

                        <p class="leading-relaxed text-gray-800 text-lg mb-6">
                            <span class="font-semibold text-[#1D4E89]">Teaching and Learning Certification (TLC)</span>
                            adalah langkah nyata menuju pengembangan diri sebagai pendidik unggul. Dengan pendekatan <span
                                class="font-semibold text-[#1D4E89]">Teaching Mastery Framework (TMF)</span>, Anda akan
                            dibekali strategi mengajar yang efektif, relevan, dan mampu menciptakan pengalaman belajar yang
                            bermakna.
                        </p>

                        <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-[#1D4E89] mb-8">
                            <h4 class="font-bold text-xl text-[#1D4E89] mb-3">Mengapa TLC Berbeda?</h4>
                            <p class="text-gray-700">
                                Program ini memberikan standar pengajaran berkualitas yang terstruktur dan praktis, membantu
                                para guru mencapai hasil belajar optimal dalam lingkungan pendidikan modern.
                            </p>
                        </div>

                        <!-- Benefits with icons -->
                        <div class="space-y-4">
                            <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-lg">
                                <div class="bg-[#1D4E89] text-white p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-lg text-[#1D4E89]">Pengakuan Profesional</h5>
                                    <p class="text-gray-700">Dapatkan sertifikasi yang diakui sebagai bukti keahlian
                                        mengajar Anda</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-orange-50 rounded-lg">
                                <div class="bg-[#E76F51] text-white p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-lg text-[#E76F51]">Peningkatan Kinerja</h5>
                                    <p class="text-gray-700">Tingkatkan hasil belajar siswa dengan teknik pengajaran yang
                                        efektif</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-green-50 rounded-lg">
                                <div class="bg-[#2A9D8F] text-white p-3 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                    </svg>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-lg text-[#2A9D8F]">Jaringan Global</h5>
                                    <p class="text-gray-700">Bergabunglah dengan komunitas pengajar terbaik dari berbagai
                                        negara</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Apa itu TLC -->

        <!-- Visi & Misi Section - Enhanced Version -->
        <section class="w-full py-20 bg-gradient-to-br from-[#1D4E89]/10 to-white text-gray-900">
            <div class="max-w-5xl mx-auto text-center px-6">
                <h2 class="text-5xl font-black text-[#1D4E89] mb-2 tracking-tight">Transformasi Pendidikan Dimulai dari
                    <span class="text-[#E76F51]">Anda</span>
                </h2>
                <div class="w-24 h-1 bg-[#E76F51] mt-4 mb-8 mx-auto rounded-full"></div>
                <p class="text-gray-800 max-w-3xl mx-auto text-xl leading-relaxed font-medium">
                    Bergabunglah dengan ribuan pendidik profesional yang telah meningkatkan kualitas pengajaran mereka
                    melalui program pengembangan kompetensi guru terdepan di Indonesia.
                </p>
            </div>

            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 mt-16 px-6">
                <!-- Visi - Enhanced -->
                <div
                    class="bg-white p-10 rounded-3xl shadow-xl border-l-4 border-[#1D4E89] transition-transform duration-300 ease-in-out hover:scale-102 hover:shadow-2xl relative overflow-hidden group">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#1D4E89]/5 rounded-full blur-2xl group-hover:bg-[#1D4E89]/10 transition-all duration-500">
                    </div>
                    <div class="flex items-center gap-5 mb-6 relative z-10">
                        <div class="bg-[#A8DADC] p-4 rounded-xl shadow-lg">
                            <svg class="w-8 h-8 text-[#1D4E89]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6l4 2"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-black text-[#1D4E89]">Visi Kami</h3>
                    </div>
                    <p class="text-gray-700 text-xl text-left leading-relaxed relative z-10">
                        Menciptakan generasi pendidik <span class="font-bold text-[#1D4E89]">terbaik di Indonesia</span>
                        yang mampu menginspirasi dan mempersiapkan siswa menghadapi tantangan global masa depan.
                    </p>
                    <ul class="mt-8 space-y-5 text-gray-700 text-lg relative z-10">
                        <li class="flex items-start gap-4 group/item">
                            <span
                                class="text-[#E76F51] text-3xl mt-1 group-hover/item:scale-125 transition-transform">🏆</span>
                            <div>
                                <span class="font-bold text-[#1D4E89]">Keunggulan Pengajaran</span>
                                <p class="text-gray-600 mt-1">Metode pembelajaran tervalidasi yang meningkatkan hasil
                                    belajar hingga 43%</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <span
                                class="text-[#E76F51] text-3xl mt-1 group-hover/item:scale-125 transition-transform">🚀</span>
                            <div>
                                <span class="font-bold text-[#1D4E89]">Inovasi Pendidikan</span>
                                <p class="text-gray-600 mt-1">Penerapan teknologi dan pendekatan pembelajaran terkini</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <span
                                class="text-[#E76F51] text-3xl mt-1 group-hover/item:scale-125 transition-transform">🎓</span>
                            <div>
                                <span class="font-bold text-[#1D4E89]">Pendidikan Berkualitas</span>
                                <p class="text-gray-600 mt-1">Akses pendidikan komprehensif untuk guru di seluruh Indonesia
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <!-- Misi - Enhanced -->
                <div
                    class="bg-white p-10 rounded-3xl shadow-xl border-l-4 border-[#E76F51] transition-transform duration-300 ease-in-out hover:scale-102 hover:shadow-2xl relative overflow-hidden group">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#E76F51]/5 rounded-full blur-2xl group-hover:bg-[#E76F51]/10 transition-all duration-500">
                    </div>
                    <div class="flex items-center gap-5 mb-6 relative z-10">
                        <div class="bg-[#A8DADC] p-4 rounded-xl shadow-lg">
                            <svg class="w-8 h-8 text-[#E76F51]" fill="none" stroke="currentColor" stroke-width="2.5"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </div>
                        <h3 class="text-3xl font-black text-[#E76F51]">Misi Kami</h3>
                    </div>
                    <p class="text-gray-700 text-xl text-left leading-relaxed relative z-10">
                        Memberikan <span class="font-bold text-[#E76F51]">pelatihan transformatif</span> yang memberdayakan
                        guru menciptakan pengalaman belajar luar biasa dan hasil nyata bagi siswa di seluruh Indonesia.
                    </p>
                    <ul class="mt-8 space-y-5 text-gray-700 text-lg relative z-10">
                        <li class="flex items-start gap-4 group/item">
                            <span
                                class="text-[#E76F51] text-3xl mt-1 group-hover/item:scale-125 transition-transform">👩‍🏫</span>
                            <div>
                                <span class="font-bold text-[#E76F51]">Kompetensi Pedagogis</span>
                                <p class="text-gray-600 mt-1">Program pelatihan guru bersertifikasi dengan metode terkini
                                </p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <span
                                class="text-[#E76F51] text-3xl mt-1 group-hover/item:scale-125 transition-transform">🔄</span>
                            <div>
                                <span class="font-bold text-[#E76F51]">Komunitas Pendidik</span>
                                <p class="text-gray-600 mt-1">Jaringan +5,000 guru berbagi praktik terbaik di seluruh
                                    negeri</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <span
                                class="text-[#E76F51] text-3xl mt-1 group-hover/item:scale-125 transition-transform">💡</span>
                            <div>
                                <span class="font-bold text-[#E76F51]">Inovasi Pengajaran</span>
                                <p class="text-gray-600 mt-1">Kurikulum dinamis yang mengikuti perkembangan dunia
                                    pendidikan</p>
                            </div>
                        </li>
                        <li class="flex items-start gap-4 group/item">
                            <span
                                class="text-[#E76F51] text-3xl mt-1 group-hover/item:scale-125 transition-transform">🤝</span>
                            <div>
                                <span class="font-bold text-[#E76F51]">Kolaborasi</span>
                                <p class="text-gray-600 mt-1">Membangun ekosistem pendidikan yang saling mendukung</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="max-w-3xl mx-auto mt-16 text-center px-6">
                <a href="#daftar"
                    class="inline-block px-10 py-4 bg-[#E76F51] text-white font-bold text-xl rounded-full shadow-lg transform transition-all duration-300 hover:scale-105 hover:shadow-xl active:scale-95">
                    Mulai Perjalanan Profesional Anda Hari Ini
                </a>
                <p class="text-gray-500 mt-4 italic">Sudah lebih dari 10.000+ guru bergabung dengan program kami</p>
            </div>
        </section>
        <!-- End Visi & Misi -->

        <!-- Manfaat TLC - Enhanced -->
        <section class="w-full py-24 bg-gradient-to-t from-[#1D4E89]/5 to-white text-gray-900">
            <div class="max-w-6xl mx-auto text-center px-6">
                <span class="text-[#E76F51] font-bold text-lg uppercase tracking-wider">MANFAAT EKSKLUSIF</span>
                <h2 class="text-5xl font-black text-[#1D4E89] mt-2 tracking-tight">Transformasi Karir yang <span
                        class="text-[#E76F51]">Nyata</span></h2>
                <div class="w-24 h-1 bg-[#E76F51] mt-4 mb-8 mx-auto rounded-full"></div>
                <p class="text-gray-800 max-w-3xl mx-auto text-xl leading-relaxed">
                    Program Teaching and Learning Certification memberikan manfaat konkret yang telah terbukti mengubah
                    perjalanan karir
                    ribuan pendidik profesional di Indonesia.
                </p>
            </div>


            <!-- Grid Manfaat - Enhanced -->
            <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 mt-10 px-6">
                <!-- Item Manfaat 1 -->
                <div
                    class="group bg-white p-8 rounded-3xl shadow-xl border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#1D4E89]/5 rounded-full blur-2xl group-hover:bg-[#1D4E89]/10 transition-all duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-transparent to-[#A8DADC]/20 rounded-tl-full">
                    </div>
                    <div class="flex items-center gap-4 mb-5 relative z-10">
                        <div
                            class="bg-[#A8DADC] p-4 rounded-xl shadow-lg group-hover:bg-[#1D4E89] transition-colors duration-300">
                            <span
                                class="text-[#1D4E89] text-4xl group-hover:text-white transition-colors duration-300">🏅</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">
                            Sertifikasi NPSN Resmi</h3>
                    </div>
                    <p class="text-gray-700 text-lg relative z-10">
                        Tingkatkan kredibilitas Anda dengan sertifikasi profesional yang diakui oleh Dinas Pendidikan dan
                        tercatat dalam database nasional.
                    </p>

                </div>

                <!-- Item Manfaat 2 -->
                <div
                    class="group bg-white p-8 rounded-3xl shadow-xl border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#1D4E89]/5 rounded-full blur-2xl group-hover:bg-[#1D4E89]/10 transition-all duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-transparent to-[#A8DADC]/20 rounded-tl-full">
                    </div>
                    <div class="flex items-center gap-4 mb-5 relative z-10">
                        <div
                            class="bg-[#A8DADC] p-4 rounded-xl shadow-lg group-hover:bg-[#1D4E89] transition-colors duration-300">
                            <span
                                class="text-[#1D4E89] text-4xl group-hover:text-white transition-colors duration-300">📖</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">
                            Keterampilan Premium</h3>
                    </div>
                    <p class="text-gray-700 text-lg relative z-10">
                        Kuasai metode pengajaran terkini yang sudah terbukti meningkatkan prestasi siswa hingga 65% dalam
                        waktu satu semester.
                    </p>

                </div>

                <!-- Item Manfaat 3 -->
                <div
                    class="group bg-white p-8 rounded-3xl shadow-xl border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#1D4E89]/5 rounded-full blur-2xl group-hover:bg-[#1D4E89]/10 transition-all duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-transparent to-[#A8DADC]/20 rounded-tl-full">
                    </div>
                    <div class="flex items-center gap-4 mb-5 relative z-10">
                        <div
                            class="bg-[#A8DADC] p-4 rounded-xl shadow-lg group-hover:bg-[#1D4E89] transition-colors duration-300">
                            <span
                                class="text-[#1D4E89] text-4xl group-hover:text-white transition-colors duration-300">🤝</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">Jaringan
                            Profesional Elite</h3>
                    </div>
                    <p class="text-gray-700 text-lg relative z-10">
                        Bergabunglah dengan komunitas eksklusif +5,000 pendidik top Indonesia untuk berkolaborasi dan
                        berbagi peluang karir.
                    </p>

                </div>

                <!-- Item Manfaat 4 -->
                <div
                    class="group bg-white p-8 rounded-3xl shadow-xl border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#1D4E89]/5 rounded-full blur-2xl group-hover:bg-[#1D4E89]/10 transition-all duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-transparent to-[#A8DADC]/20 rounded-tl-full">
                    </div>
                    <div class="flex items-center gap-4 mb-5 relative z-10">
                        <div
                            class="bg-[#A8DADC] p-4 rounded-xl shadow-lg group-hover:bg-[#1D4E89] transition-colors duration-300">
                            <span
                                class="text-[#1D4E89] text-4xl group-hover:text-white transition-colors duration-300">💡</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">Inovasi
                            Digital Edutech</h3>
                    </div>
                    <p class="text-gray-700 text-lg relative z-10">
                        Kuasai teknologi pembelajaran terbaru yang membuat siswa lebih terlibat dan meningkatkan retensi
                        materi hingga 87%.
                    </p>

                </div>

                <!-- Item Manfaat 5 -->
                <div
                    class="group bg-white p-8 rounded-3xl shadow-xl border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#1D4E89]/5 rounded-full blur-2xl group-hover:bg-[#1D4E89]/10 transition-all duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-transparent to-[#A8DADC]/20 rounded-tl-full">
                    </div>
                    <div class="flex items-center gap-4 mb-5 relative z-10">
                        <div
                            class="bg-[#A8DADC] p-4 rounded-xl shadow-lg group-hover:bg-[#1D4E89] transition-colors duration-300">
                            <span
                                class="text-[#1D4E89] text-4xl group-hover:text-white transition-colors duration-300">📚</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">
                            Perpustakaan
                            Premium</h3>
                    </div>
                    <p class="text-gray-700 text-lg relative z-10">
                        Akses tanpa batas ke 1000+ sumber belajar eksklusif, template rencana pembelajaran, dan materi siap
                        pakai bernilai Rp12 juta+.
                    </p>

                </div>

                <!-- Item Manfaat 6 -->
                <div
                    class="group bg-white p-8 rounded-3xl shadow-xl border-l-4 border-[#1D4E89] transition-all duration-300 hover:scale-105 hover:shadow-2xl hover:-translate-y-2 relative overflow-hidden">
                    <div
                        class="absolute -top-12 -right-12 w-40 h-40 bg-[#1D4E89]/5 rounded-full blur-2xl group-hover:bg-[#1D4E89]/10 transition-all duration-500">
                    </div>
                    <div
                        class="absolute bottom-0 right-0 w-32 h-32 bg-gradient-to-br from-transparent to-[#A8DADC]/20 rounded-tl-full">
                    </div>

                    <div class="flex items-center gap-4 mb-5 relative z-10">
                        <div
                            class="bg-[#A8DADC] p-4 rounded-xl shadow-lg group-hover:bg-[#1D4E89] transition-colors duration-300">
                            <span
                                class="text-[#1D4E89] text-4xl group-hover:text-white transition-colors duration-300">🎓</span>
                        </div>
                        <h3 class="text-2xl font-bold text-[#1D4E89] group-hover:text-[#E76F51] transition-colors">Jenjang
                            Karir Eksklusif</h3>
                    </div>
                    <p class="text-gray-700 text-lg relative z-10">
                        Jalur cepat untuk kesempatan mengajar di sekolah-sekolah unggulan dan akses eksklusif ke kesempatan
                        peningkatan karir.
                    </p>

                </div>
            </div>
        </section>

        <!-- Success Stories Section -->
        <section class="w-full px-5 py-20 bg-gradient-to-br from-blue-50 via-gray-50 to-white text-gray-900 shadow-xl"
            id="testimonials">
            <div class="text-center">
                <span
                    class="text-blue-700 font-semibold text-sm uppercase bg-blue-100 px-4 py-2 rounded-full shadow-md animate-pulse">
                    Kisah Sukses
                </span>
                <h1 class="text-5xl font-extrabold text-[#1D4E89] mt-6 leading-tight">
                    Transformasi Nyata <span class="text-[#E76F51]">Dari Para Pendidik</span>
                </h1>
                <p class="text-gray-700 mt-5 max-w-3xl mx-auto text-xl">
                    Bergabunglah dengan ratusan pendidik yang telah mengubah karir mereka melalui program Teaching and
                    Learning Certification kami.
                </p>
            </div>

            <!-- Testimonial Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mt-16 max-w-6xl mx-auto">
                <!-- Testimonial 1 -->
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-md p-8 relative transition-all duration-500 hover:scale-105 hover:shadow-2xl group">
                    <div class="absolute -top-10 left-6 transition-all duration-300 group-hover:-translate-y-2">
                        <img src="{{ asset('images/hamas.png') }}" alt="Hamas, M.Pd"
                            class="w-24 h-24 rounded-full border-4 border-white shadow-lg ring-4 ring-[#E76F51]"
                            loading="lazy">
                        <div class="absolute -bottom-2 -right-2 bg-blue-600 text-white rounded-full p-2 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-16">
                        <strong class="block text-2xl text-gray-900 font-bold">Hamas, M.Pd</strong>
                        <span class="text-blue-600 text-sm font-medium">Guru SMA - Peraih Penghargaan Guru Terbaik
                            2024</span>
                        <div class="flex items-center mt-2 mb-4">
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
                        <p class="text-gray-600 italic mt-4 text-lg leading-relaxed">
                            "Program TLC <span class="text-blue-600 font-semibold">telah membuka dunia baru</span> dalam
                            karir mengajar saya. Siswa-siswa saya kini lebih antusias dan hasil belajar mereka meningkat
                            drastis. Investasi terbaik untuk karir pendidikan yang saya pernah lakukan!"
                        </p>
                        <div class="mt-6 text-sm text-blue-600 font-medium">
                            📈 Peningkatan nilai rata-rata kelas: 28%
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-md p-8 relative transition-all duration-500 hover:scale-105 hover:shadow-2xl group">
                    <div class="absolute -top-10 left-6 transition-all duration-300 group-hover:-translate-y-2">
                        <img src="{{ asset('images/aliando.jpg') }}" alt="Candra, M.Pd"
                            class="w-24 h-24 rounded-full border-4 border-white shadow-lg ring-4 ring-[#E76F51]"
                            loading="lazy">
                        <div class="absolute -bottom-2 -right-2 bg-blue-600 text-white rounded-full p-2 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-16">
                        <strong class="block text-2xl text-gray-900 font-bold">Candra, M.Pd</strong>
                        <span class="text-blue-600 text-sm font-medium">Dosen Universitas - Peneliti Pendidikan</span>
                        <div class="flex items-center mt-2 mb-4">
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
                        <p class="text-gray-600 italic mt-4 text-lg leading-relaxed">
                            "Metode pembelajaran yang saya dapatkan di TLC <span
                                class="text-blue-600 font-semibold">revolusioner dan berbasis riset</span>. Mahasiswa saya
                            sekarang lebih kritis, kreatif, dan publikasi riset pendidikan saya meningkat berkat insight
                            yang didapat."
                        </p>
                        <div class="mt-6 text-sm text-blue-600 font-medium">
                            🏆 Dipromosikan menjadi Ketua Jurusan setelah menerapkan metode TLC
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div
                    class="bg-white border border-gray-200 rounded-2xl shadow-md p-8 relative transition-all duration-500 hover:scale-105 hover:shadow-2xl group">
                    <div class="absolute -top-10 left-6 transition-all duration-300 group-hover:-translate-y-2">
                        <img src="{{ asset('images/guru.png') }}" alt="Yudha, M.Pd"
                            class="w-24 h-24 rounded-full border-4 border-white shadow-lg ring-4 ring-[#E76F51]"
                            loading="lazy">
                        <div class="absolute -bottom-2 -right-2 bg-blue-600 text-white rounded-full p-2 shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                    </div>
                    <div class="mt-16">
                        <strong class="block text-2xl text-gray-900 font-bold">Yudha, M.Pd</strong>
                        <span class="text-blue-600 text-sm font-medium">Guru SD - Trainer Pendidikan Nasional</span>
                        <div class="flex items-center mt-2 mb-4">
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
                        <p class="text-gray-600 italic mt-4 text-lg leading-relaxed">
                            "TLC mengubah saya dari guru biasa menjadi <span class="text-blue-600 font-semibold">pendidik
                                berpengaruh</span>. Kini saya sering diundang sebagai pembicara di berbagai pelatihan guru
                            nasional dan memiliki jaringan profesional yang luas."
                        </p>
                        <div class="mt-6 text-sm text-blue-600 font-medium">
                            🌟 Menjadi mentor bagi 87 guru di seluruh Indonesia
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Success Stories -->

        <!-- Paket Harga -->
        {{-- <section id="harga" class="w-full px-5 py-16 bg-gray-50 text-gray-900 shadow-lg">
            <div class="max-w-6xl mx-auto text-center">
                <h2 class="text-4xl font-extrabold text-[#1D4E89] mt-4">Investasi untuk Masa Depan Profesional Anda</h2>
                <div class="w-16 h-1 bg-[#E76F51] mt-3 mb-6 mx-auto"></div>
                <p class="text-gray-700 max-w-3xl mx-auto text-lg">
                    Tingkatkan keterampilan, perluas wawasan, dan raih peluang karier terbaik dengan paket pelatihan
                    bertahap yang dirancang untuk mendampingi perkembangan Anda dari dasar hingga mahir.
                </p>

                <!-- Progress Path -->
                <div class="flex items-center justify-center gap-4 text-sm font-semibold text-gray-600 mt-8">
                    <div class="flex items-center gap-2">
                        <span class="text-green-600">✔</span> Level A
                    </div>
                    <span>→</span>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400">🔒</span> Level B
                    </div>
                    <span>→</span>
                    <div class="flex items-center gap-2">
                        <span class="text-gray-400">🔒</span> Level C
                    </div>
                </div>
            </div>

            <!-- Kartu Paket -->
            <div class="max-w-6xl mx-auto mt-12 grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Paket Basic (Level A) -->
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 text-center transition-all duration-300 ease-in-out hover:scale-105 hover:shadow-2xl cursor-pointer">
                    <h3 class="text-lg font-bold text-white bg-blue-900 py-3 rounded-lg">LEVEL A - Basic Explorer</h3>
                    <p class="text-gray-600 mt-3">Langkah pertama menuju transformasi profesional Anda.</p>
                    <p class="text-3xl font-extrabold text-blue-900 mt-5">Rp 2.500.000</p>
                    <ul class="mt-6 text-left text-gray-700 space-y-3">
                        <li>✔ 5 Modul pembelajaran dasar</li>
                        <li>✔ Sertifikat digital resmi</li>
                        <li>✔ Akses materi online kapan saja</li>
                        <li>✔ Forum diskusi interaktif</li>
                        <li>✔ Akses penuh selama 3 bulan</li>
                    </ul>
                    <button
                        class="mt-6 bg-blue-900 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-transform transform hover:scale-105 active:scale-95">
                        Mulai Sekarang
                    </button>
                </div>

                <!-- Paket Intermediate (Level B - Dikunci) -->
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 text-center opacity-60 cursor-not-allowed">
                    <h3 class="text-lg font-bold text-white bg-blue-900 py-3 rounded-lg">LEVEL B - Skilled Achiever</h3>
                    <p class="text-gray-600 mt-3">Tersedia setelah Anda menyelesaikan Level A.</p>
                    <p class="text-3xl font-extrabold text-blue-900 mt-5">Rp 3.500.000</p>
                    <ul class="mt-6 text-left text-gray-700 space-y-3">
                        <li>✔ 10 Modul pembelajaran menengah</li>
                        <li>✔ Sertifikat digital & akses komunitas</li>
                        <li>✔ Materi eksklusif tambahan</li>
                        <li>✔ Mentoring grup (2 sesi)</li>
                        <li>✔ Akses selama 6 bulan</li>
                    </ul>
                    <button class="mt-6 bg-gray-400 text-white px-6 py-3 rounded-lg font-semibold cursor-not-allowed"
                        disabled>
                        Tersedia Setelah Level A
                    </button>
                </div>

                <!-- Paket Advanced (Level C - Dikunci) -->
                <div
                    class="bg-white border border-gray-200 rounded-xl shadow-sm p-8 text-center opacity-60 cursor-not-allowed">
                    <h3 class="text-lg font-bold text-white bg-blue-900 py-3 rounded-lg">LEVEL C - Master Leader</h3>
                    <p class="text-gray-600 mt-3">Buka akses setelah menyelesaikan Level B.</p>
                    <p class="text-3xl font-extrabold text-blue-900 mt-5">Rp 7.500.000</p>
                    <ul class="mt-6 text-left text-gray-700 space-y-3">
                        <li>✔ Semua 15 Modul lengkap</li>
                        <li>✔ Sertifikat premium + cetak</li>
                        <li>✔ Sesi mentoring pribadi (6x)</li>
                        <li>✔ Workshop eksklusif (2x)</li>
                        <li>✔ Akses komunitas seumur hidup</li>
                        <li>✔ Paket 3 buku panduan</li>
                        <li>✔ Durasi akses 12 bulan</li>
                    </ul>
                    <button class="mt-6 bg-gray-400 text-white px-6 py-3 rounded-lg font-semibold cursor-not-allowed"
                        disabled>
                        Selesaikan Level B Terlebih Dahulu
                    </button>
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
                        class="relative group overflow-hidden rounded-2xl shadow-xl cursor-pointer transform transition-transform hover:shadow-2xl">
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

                
            </div>
        </section>

        {{-- Modal --}}
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

        {{-- End Modal --}}
        <!-- End Paket Harga -->

        <!-- Timeline Program TLC - Enhanced Version -->
        <section id="skema"
            class="w-full px-5 py-20 bg-gradient-to-b from-blue-50 to-gray-50 text-gray-900 shadow-lg">
            <div class="max-w-4xl mx-auto text-center">
                <span
                    class="inline-block px-4 py-1 rounded-full bg-blue-100 text-blue-800 text-sm font-semibold mb-4">PROGRAM
                    UNGGULAN 2025</span>
                <h2 class="text-5xl font-extrabold text-[#1D4E89] mt-4 leading-tight">Transformasi Karir Anda Dimulai <span
                        class="text-[#E76F51]">Di Sini</span></h2>
                <div class="w-24 h-1 bg-[#E76F51] mt-5 mb-8 mx-auto"></div>
                <p class="text-gray-700 max-w-2xl mx-auto text-xl leading-relaxed">
                    Jadwal komprehensif program <strong>Teaching and Learning Certification</strong> yang akan membuka pintu
                    kesuksesan profesional Anda. <span class="text-blue-700 font-semibold">Bergabunglah dengan ribuan
                        alumni sukses kami!</span>
                </p>
            </div>

            <!-- Timeline -->
            <div class="max-w-5xl mx-auto mt-16 relative">
                <div
                    class="hidden md:block absolute left-1/2 transform -translate-x-1/2 h-full w-2 bg-gradient-to-b from-blue-400 to-blue-600 rounded-full">
                </div>

                <!-- Event Items -->
                <div class="space-y-12">
                    <div class="flex flex-col md:flex-row items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center">
                            <div
                                class="bg-white p-8 rounded-xl shadow-sm border-l-4 border-blue-500 w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                                <span class="text-6xl mr-6 group-hover:animate-bounce">📅</span>
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-700">Pendaftaran Eksklusif</h3>
                                    <p class="text-gray-600 mt-3">Daftar sekarang dan dapatkan <span
                                            class="bg-yellow-100 px-2 py-1 rounded-md font-semibold text-yellow-800">diskon
                                            30%</span> plus akses ke 5 masterclass eksklusif senilai Rp2.500.000!</p>
                                    <button
                                        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 transform hover:-translate-y-1">Daftar
                                        Sekarang</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg absolute left-1/2 transform -translate-x-1/2">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row-reverse items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center justify-end">
                            <div
                                class="bg-white p-8 rounded-xl shadow-sm border-r-4 border-blue-500 w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                                <span class="text-6xl mr-6 group-hover:animate-pulse">🎯</span>
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-700">Orientasi Intensif</h3>
                                    <p class="text-gray-600 mt-3">Acara pembuka yang menginspirasi dengan <span
                                            class="bg-green-100 px-2 py-1 rounded-md font-semibold text-green-800">pembicara
                                            tamu internasional</span> dan jaringan dengan profesional industri terkemuka.
                                    </p>
                                    <button
                                        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 transform hover:-translate-y-1">Lihat
                                        Agenda</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg absolute left-1/2 transform -translate-x-1/2">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center">
                            <div
                                class="bg-white p-8 rounded-xl shadow-sm border-l-4 border-blue-500 w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                                <span class="text-6xl mr-6 group-hover:rotate-12 transition-transform">📖</span>
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-700">Sesi Pelatihan Premium</h3>
                                    <p class="text-gray-600 mt-3">12 modul interaktif dipimpin oleh <span
                                            class="bg-purple-100 px-2 py-1 rounded-md font-semibold text-purple-800">pakar
                                            industri bersertifikasi</span> dengan studi kasus dunia nyata dan feedback
                                        personal.</p>
                                    <button
                                        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 transform hover:-translate-y-1">Eksplorasi
                                        Kurikulum</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg absolute left-1/2 transform -translate-x-1/2">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row-reverse items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center justify-end">
                            <div
                                class="bg-white p-8 rounded-xl shadow-sm border-r-4 border-blue-500 w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                                <span class="text-6xl mr-6 group-hover:animate-spin slow">👨‍🏫</span>
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-700">Project Praktis Bernilai Tinggi</h3>
                                    <p class="text-gray-600 mt-3">Kembangkan portofolio profesional Anda dengan <span
                                            class="bg-red-100 px-2 py-1 rounded-md font-semibold text-red-800">proyek riil
                                            dari perusahaan partner</span> dan bimbingan langsung dari mentor industri.</p>
                                    <button
                                        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 transform hover:-translate-y-1">Lihat
                                        Project Sebelumnya</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg absolute left-1/2 transform -translate-x-1/2">
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-center justify-between w-full">
                        <div class="w-full md:w-1/2 flex items-center">
                            <div
                                class="bg-white p-8 rounded-xl shadow-lg border-l-4 border-blue-500 w-full flex items-center transition-all duration-300 hover:scale-105 hover:shadow-2xl group">
                                <span class="text-6xl mr-6 group-hover:scale-125 transition-transform">🏆</span>
                                <div>
                                    <h3 class="text-2xl font-bold text-blue-700">Sertifikasi & Penempatan Karir</h3>
                                    <p class="text-gray-600 mt-3">Raih sertifikasi yang <span
                                            class="bg-blue-100 px-2 py-1 rounded-md font-semibold text-blue-800">diakui
                                            secara internasional</span> dan akses ke jaringan 500+ perusahaan partner untuk
                                        peluang karir eksklusif.</p>
                                    <button
                                        class="mt-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-full transition-all duration-300 transform hover:-translate-y-1">Lihat
                                        Testimonial Alumni</button>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden md:flex items-center justify-center w-8 h-8 bg-blue-600 rounded-full border-4 border-white shadow-lg absolute left-1/2 transform -translate-x-1/2">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- End Timeline Program TLC -->

        {{-- Skema - Enhanced Version --}}
        <div id="proses" class="w-full px-5 py-24 bg-gradient-to-b from-white to-gray-50 text-gray-900 shadow-lg"
            id="skema">
            <div class="text-center mb-16">
                <span
                    class="inline-block px-4 py-1 rounded-full bg-orange-100 text-orange-800 text-sm font-semibold mb-4">JALAN
                    MENUJU KESUKSESAN</span>
                <h1 class="text-5xl font-bold text-[#1D4E89] mt-2 leading-tight">Perjalanan Transformasi <span
                        class="text-[#E76F51]">Profesional Anda</span></h1>
                <div class="w-24 h-1 bg-[#E76F51] mt-5 mb-8 mx-auto"></div>
                <p class="text-gray-700 text-xl max-w-3xl mx-auto">Enam langkah terstruktur yang akan mengubah pengetahuan
                    menjadi keahlian dan sertifikasi yang diakui industri, dengan tingkat keberhasilan alumni 94%.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-5 justify-center max-w-6xl mx-auto">
                <!-- Step 1 -->
                <div
                    class="relative bg-white shadow-md p-8 rounded-2xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden group">
                    <div
                        class="absolute -right-12 -top-12 w-24 h-24 bg-blue-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div
                        class="absolute -left-12 -bottom-12 w-24 h-24 bg-blue-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div class="relative">
                        <div
                            class="w-20 h-20 mx-auto flex items-center justify-center bg-blue-600 text-white font-bold rounded-full text-2xl shadow-lg mb-6 group-hover:animate-pulse">
                            1
                        </div>
                        <h2 class="font-bold text-2xl text-blue-800 mb-3">Fondasi Pembelajaran</h2>
                        <p class="text-gray-600 mb-4">Kuasai konsep dasar dan metodologi terkini melalui 8 modul intensif
                            Level A yang diajarkan oleh pakar industri.</p>

                    </div>
                </div>

                <!-- Step 2 -->
                <div
                    class="relative bg-white shadow-md p-8 rounded-2xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden group">
                    <div
                        class="absolute -right-12 -top-12 w-24 h-24 bg-green-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div
                        class="absolute -left-12 -bottom-12 w-24 h-24 bg-green-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div class="relative">
                        <div
                            class="w-20 h-20 mx-auto flex items-center justify-center bg-green-500 text-white font-bold rounded-full text-2xl shadow-lg mb-6 group-hover:animate-pulse">
                            2
                        </div>
                        <h2 class="font-bold text-2xl text-green-800 mb-3">Validasi Kompetensi</h2>
                        <p class="text-gray-600 mb-4">Uji kemampuan Anda dalam skenario dunia nyata dengan tes komprehensif
                            dan dapatkan sertifikat Level A Anda.</p>

                    </div>
                </div>

                <!-- Step 3 -->
                <div
                    class="relative bg-white shadow-md p-8 rounded-2xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden group">
                    <div
                        class="absolute -right-12 -top-12 w-24 h-24 bg-yellow-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div
                        class="absolute -left-12 -bottom-12 w-24 h-24 bg-yellow-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div class="relative">
                        <div
                            class="w-20 h-20 mx-auto flex items-center justify-center bg-yellow-500 text-white font-bold rounded-full text-2xl shadow-lg mb-6 group-hover:animate-pulse">
                            3
                        </div>
                        <h2 class="font-bold text-2xl text-yellow-800 mb-3">Spesialisasi Lanjutan</h2>
                        <p class="text-gray-600 mb-4">Perdalam keahlian dengan modul Level B yang fokus pada strategi
                            implementasi dan pemecahan masalah kompleks.</p>

                    </div>
                </div>

                <!-- Step 4 -->
                <div
                    class="relative bg-white shadow-md p-8 rounded-2xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden group">
                    <div
                        class="absolute -right-12 -top-12 w-24 h-24 bg-orange-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div
                        class="absolute -left-12 -bottom-12 w-24 h-24 bg-orange-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div class="relative">
                        <div
                            class="w-20 h-20 mx-auto flex items-center justify-center bg-orange-500 text-white font-bold rounded-full text-2xl shadow-lg mb-6 group-hover:animate-pulse">
                            4
                        </div>
                        <h2 class="font-bold text-2xl text-orange-800 mb-3">Proyek Implementasi</h2>
                        <p class="text-gray-600 mb-4">Terapkan pengetahuan Level B dalam proyek kolaboratif dengan
                            perusahaan partner untuk pengalaman praktis bernilai tinggi.</p>

                    </div>
                </div>

                <!-- Step 5 -->
                <div
                    class="relative bg-white shadow-md p-8 rounded-2xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden group">
                    <div
                        class="absolute -right-12 -top-12 w-24 h-24 bg-red-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div
                        class="absolute -left-12 -bottom-12 w-24 h-24 bg-red-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div class="relative">
                        <div
                            class="w-20 h-20 mx-auto flex items-center justify-center bg-red-500 text-white font-bold rounded-full text-2xl shadow-lg mb-6 group-hover:animate-pulse">
                            5
                        </div>
                        <h2 class="font-bold text-2xl text-red-800 mb-3">Masterclass Level C</h2>
                        <p class="text-gray-600 mb-4">Akses kelas eksklusif dari pemimpin industri global dan pengembangan
                            kepemimpinan untuk posisi senior.</p>

                    </div>
                </div>

                <!-- Step 6 -->
                <div
                    class="relative bg-white shadow-md p-8 rounded-2xl text-center transition-all duration-300 hover:scale-105 hover:shadow-2xl overflow-hidden group">
                    <div
                        class="absolute -right-12 -top-12 w-24 h-24 bg-purple-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div
                        class="absolute -left-12 -bottom-12 w-24 h-24 bg-purple-100 rounded-full opacity-70 group-hover:scale-150 transition-all duration-500">
                    </div>
                    <div class="relative">
                        <div
                            class="w-20 h-20 mx-auto flex items-center justify-center bg-purple-500 text-white font-bold rounded-full text-2xl shadow-lg mb-6 group-hover:animate-pulse">
                            6
                        </div>
                        <h2 class="font-bold text-2xl text-purple-800 mb-3">Sertifikasi Global</h2>
                        <p class="text-gray-600 mb-4">Dapatkan kredensial yang diakui secara internasional dan bergabung
                            dengan jaringan alumni eksklusif kami di seluruh dunia.</p>

                    </div>
                </div>
            </div>

        </div>
        <!-- End Skema Enhanced -->

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

                </div>

                <!-- Embedded YouTube Video -->
                <div class="relative w-full h-72 sm:h-96 rounded-b-lg overflow-hidden mt-1 my-5">
                    <iframe class="w-full h-full transition-transform duration-500 hover:scale-[1.03] active:scale-95"
                        src="https://www.youtube.com/embed/euFMXmg1LoQ" title="Video TLC" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; fullscreen"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
        </section>
        <!-- End Video -->



        <!-- Galeri Kegiatan TLC -->
        <section id="galeri" class="w-full px-5 py-16 bg-white text-gray-900 shadow-lg">
            <div class="max-w-6xl mx-auto text-center">
                <!-- Label -->
                <span
                    class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-xs font-semibold uppercase tracking-wide">
                    Portal Berita
                </span>

                <!-- Title -->
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mt-3">
                    Berita & Informasi Terkini TLC
                </h2>

                <!-- Subtitle -->
                <p class="text-gray-600 mt-2 max-w-3xl mx-auto">
                    Dapatkan informasi terbaru, dokumentasi kegiatan, dan perkembangan program Teaching and Learning
                    Certification secara real-time.
                </p>
            </div>


            <!-- Image Grid (Menampilkan data berita) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10 max-w-6xl mx-auto">
                @forelse($latestNews as $news)
                    <!-- News Item -->
                    <div class="relative w-full h-52 rounded-lg overflow-hidden group">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                            class="w-full h-full object-cover" loading="lazy">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-80 group-hover:opacity-0 transition-opacity duration-300">
                        </div>
                        <div
                            class="absolute bottom-4 left-4 right-4 text-white group-hover:opacity-0 transition-opacity duration-300">
                            <h3 class="font-semibold text-lg">{{ $news->title }}</h3>
                            <p class="text-sm">{{ Str::limit($news->summary, 100) }}</p>
                        </div>
                        <a href="{{ route('newsDetail', $news->slug) }}"
                            class="absolute top-3 right-3 bg-white text-gray-900 px-3 py-1 text-xs font-semibold rounded-full shadow-md group-hover:opacity-0 transition-opacity duration-300">Lihat
                            Detail</a>
                    </div>
                @empty
                    <!-- Tampilkan jika tidak ada berita -->
                    @for ($i = 0; $i < 6; $i++)
                        <div class="relative w-full h-52 rounded-lg overflow-hidden group bg-gray-100">
                            <div class="flex items-center justify-center h-full">
                                <p class="text-gray-400">Belum ada konten</p>
                            </div>
                        </div>
                    @endfor
                @endforelse
            </div>
        </section>
        <!-- End Galeri Kegiatan TLC -->

        <!-- Our Books Section -->
        <section id="books" class="w-full px-5 py-20 bg-gray-50 text-gray-900">
            <div class="text-center mb-12">
                <span class="text-blue-600 font-semibold text-sm uppercase bg-blue-100 px-4 py-1 rounded-full">
                    Koleksi Buku Terbaik
                </span>
                <h2 class="text-4xl font-bold text-[#1D4E89] mt-3">
                    Temukan Buku Favorit Anda 📚
                </h2>
                <p class="text-gray-600 mt-2 max-w-xl mx-auto text-lg">
                    Buku pilihan untuk memperkaya wawasan dan meningkatkan kualitas pengajaran Anda.
                </p>
            </div>

            <!-- Book Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 max-w-6xl mx-auto">

                <!-- Book 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/buku1.png') }}" alt="The Power of Teaching"
                            class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-gray-900/80 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">The Power of Teaching</h3>
                            <p class="text-sm text-gray-200">Metode pengajaran efektif untuk hasil maksimal.</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <button
                            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/buku2.png') }}" alt="The Art of Learning"
                            class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-gray-900/80 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">The Art of Learning</h3>
                            <p class="text-sm text-gray-200">Strategi pembelajaran yang mudah dan menyenangkan.</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <button
                            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/buku3.png') }}" alt="Digital Education"
                            class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-gray-900/80 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Digital Education</h3>
                            <p class="text-sm text-gray-200">Teknologi dalam pendidikan untuk era digital.</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <button
                            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/buku4.png') }}" alt="Curriculum Design"
                            class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-gray-900/80 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Curriculum Design</h3>
                            <p class="text-sm text-gray-200">Panduan lengkap merancang kurikulum yang efektif.</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <button
                            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book 5 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/buku5.png') }}" alt="Leadership in Education"
                            class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-gray-900/80 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Leadership in Education</h3>
                            <p class="text-sm text-gray-200">Menjadi pemimpin inspiratif dalam dunia pendidikan.</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <button
                            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

                <!-- Book 6 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('images/buku6.png') }}" alt="Innovation in Teaching"
                            class="w-full h-64 object-cover">
                        <div class="absolute bottom-0 w-full bg-gradient-to-t from-gray-900/80 to-transparent p-4">
                            <h3 class="text-white font-semibold text-lg">Innovation in Teaching</h3>
                            <p class="text-sm text-gray-200">Metode inovatif dalam dunia pendidikan.</p>
                        </div>
                    </div>
                    <div class="p-4">
                        <button
                            class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                            Beli Sekarang
                        </button>
                    </div>
                </div>

            </div>
        </section>


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
                            Durasi program TLC bervariasi tergantung modul yang diambil, namun rata-rata berlangsung
                            selama
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
                            Program TLC menggunakan metode blended learning yang menggabungkan pembelajaran online dan
                            tatap
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




    </div>

@endsection
