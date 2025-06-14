@extends('layouts.asesiDashboard')
@section('title', 'Teaching & Learning Certification')

@section('content')
    @php use Vinkla\Hashids\Facades\Hashids; @endphp
    <section class="bg-abu">

        {{-- Main Tampilan Awal --}}
        <main id="beranda"
            class="w-full px-5 py-16 bg-gradient-to-br from-blue-50 via-white to-orange-50 relative overflow-hidden">
            <!-- Warna Baground -->
            <div class="absolute inset-0 pointer-events-none">
                <div class="absolute top-10 left-10 w-2 h-2 bg-orange-300 rounded-full animate-sparkle"></div>
                <div class="absolute top-20 right-20 w-3 h-3 bg-blue-300 rounded-full animate-sparkle"
                    style="animation-delay: 1s;"></div>
                <div class="absolute top-40 left-1/4 w-1 h-1 bg-yellow-400 rounded-full animate-sparkle"
                    style="animation-delay: 2s;"></div>
                <div class="absolute bottom-40 right-1/3 w-2 h-2 bg-pink-300 rounded-full animate-sparkle"
                    style="animation-delay: 0.5s;"></div>
            </div>

            <div
                class="container mx-auto max-w-7xl grid grid-cols-12 transition-all duration-500 ease-in-out mb-14 gap-6 relative z-10">
                <!-- Sebelah kiri -->
                <div class="col-span-12 lg:col-span-7 p-5 transform transition-all duration-500">
                    <!-- Program Unggulan -->
                    <div class="inline-flex items-center bg-orange-100 text-[#1D4E89] px-4 py-2 rounded-full mb-6 backdrop-blur-sm border border-orange-200 hover-lift animate-glow-border cursor-pointer magnetic-effect"
                        onmouseover="this.classList.add('animate-wiggle')"
                        onmouseleave="this.classList.remove('animate-wiggle')"
                        onclick="this.classList.add('animate-shake'); setTimeout(() => this.classList.remove('animate-shake'), 500)">
                        <span class="text-[#E76F51] mr-2 animate-bounce-subtle">✨</span>
                        <span class="text-sm font-medium">PROGRAM UNGGULAN 2025</span>
                        <span class="text-[#E76F51] ml-2 animate-bounce-subtle" style="animation-delay: 0.3s;">✨</span>
                    </div>

                    <div class="animate-fadeIn">
                        <h1
                            class="text-5xl lg:text-6xl font-extrabold leading-tight mt-2 text-[#1D4E89] hover:cursor-default">
                            <span class="block hover:animate-text-glow transition-all duration-300">Sertifikasi Guru</span>
                            <span class="block hover:animate-text-glow transition-all duration-300"
                                style="transition-delay: 0.1s;">Modern di</span>
                            <span class="text-[#E76F51]  hover:scale-105 transition-transform duration-300 inline-block">TLC
                                Program</span>
                        </h1>
                        <p
                            class="text-xl text-gray-700 mt-6 leading-relaxed max-w-2xl hover:text-gray-800 transition-colors duration-300">
                            Program pengembangan kompetensi guru yang dirancang untuk transformasi pendidikan Indonesia.
                            Tingkatkan kualifikasi dan perluas pengaruh Anda dalam komunitas pendidikan.
                        </p>
                    </div>

                    <div class="flex flex-wrap my-8 gap-4">
                        <a href="#sertifikasi"
                            class="button-primary bg-[#1D4E89] hover:bg-[#14406B] text-white px-8 py-4 rounded-full shadow-lg text-lg font-bold hover:shadow-xl transition-all duration-300 hover:scale-105 active:scale-95 flex items-center relative z-10">
                            <span>Mulai Sertifikasi</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2 transition-transform duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                        <a href="#testimoni"
                            class="bg-transparent border-2 border-[#E76F51] text-[#E76F51] hover:bg-[#E76F51] hover:text-white px-8 py-4 rounded-full shadow-lg text-lg font-bold hover:shadow-xl transition-all duration-300 hover:scale-105 active:scale-95 hover-lift relative overflow-hidden group">
                            <span class="relative z-10">Lihat Testimoni TLC Program</span>
                            <div
                                class="absolute inset-0 bg-[#E76F51] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left">
                            </div>
                        </a>
                    </div>

                    <!-- Kurikulum -->
                    <div class="grid grid-cols-2 gap-4 mt-12">
                        <div
                            class="feature-card flex items-center text-[#1D4E89] p-4 bg-white/80 rounded-xl backdrop-blur-sm border border-blue-200 hover:bg-white/90 hover:shadow-md transition-all duration-300 cursor-pointer">
                            <div
                                class="w-8 h-8 bg-[#E76F51] rounded-full flex items-center justify-center mr-3 hover:animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-white transition-transform duration-300 hover:scale-110"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-medium">Kurikulum Tervalidasi</span>
                        </div>
                        <div
                            class="feature-card flex items-center text-[#1D4E89] p-4 bg-white/80 rounded-xl backdrop-blur-sm border border-blue-200 hover:bg-white/90 hover:shadow-md transition-all duration-300 cursor-pointer">
                            <div
                                class="w-8 h-8 bg-[#E76F51] rounded-full flex items-center justify-center mr-3 hover:animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-white transition-transform duration-300 hover:scale-110"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-medium">Sertifikat Terakreditasi</span>
                        </div>
                        <div
                            class="feature-card flex items-center text-[#1D4E89] p-4 bg-white/80 rounded-xl backdrop-blur-sm border border-blue-200 hover:bg-white/90 hover:shadow-md transition-all duration-300 cursor-pointer">
                            <div
                                class="w-8 h-8 bg-[#E76F51] rounded-full flex items-center justify-center mr-3 hover:animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-white transition-transform duration-300 hover:scale-110"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-medium">Mentor Berpengalaman</span>
                        </div>
                        <div
                            class="feature-card flex items-center text-[#1D4E89] p-4 bg-white/80 rounded-xl backdrop-blur-sm border border-blue-200 hover:bg-white/90 hover:shadow-md transition-all duration-300 cursor-pointer">
                            <div
                                class="w-8 h-8 bg-[#E76F51] rounded-full flex items-center justify-center mr-3 hover:animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 text-white transition-transform duration-300 hover:scale-110"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="font-medium">Jaringan Pendidik Nasional</span>
                        </div>
                    </div>
                </div>

                <!-- Sebalah Kanan -->
                <div class="col-span-12 lg:col-span-5 relative flex items-center justify-center">
                    <div
                        class="interactive-card bg-white/90 backdrop-blur-lg border border-blue-200 rounded-3xl p-8 w-full max-w-md shadow-3xl hover:shadow-3xl transition-all duration-500 animate-card-float shadow-glow">
                        <!-- Icon -->
                        <div class="flex justify-center mb-6">
                            <div class="w-16 h-16 bg-[#E76F51]/20 rounded-full flex items-center justify-center animate-pulse-glow hover:scale-110 transition-transform duration-300 cursor-pointer"
                                onclick="this.style.animation = 'pulse-glow 0.5s ease-in-out'; setTimeout(() => this.style.animation = 'pulse-glow 3s ease-in-out infinite', 500)">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-8 w-8 text-[#E76F51] transition-transform duration-300 hover:rotate-12"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                </svg>
                            </div>
                        </div>

                        <h3
                            class="text-2xl font-bold text-[#1D4E89] text-center mb-2 hover:scale-105 transition-transform duration-300 cursor-default">
                            Teaching & Learning Certification
                        </h3>
                        <p
                            class="text-gray-700 text-center mb-8 leading-relaxed hover:text-gray-800 transition-colors duration-300">
                            Kembangkan keterampilan mengajar Anda dan dapatkan sertifikasi yang diakui secara nasional
                        </p>

                        <!-- Guru Tersertifikasi -->
                        <div class="grid grid-cols-3 gap-4 text-center">
                            <div class="stat-card bg-blue-50 rounded-2xl p-4 border border-blue-200 hover:bg-blue-100 transition-all duration-300"
                                onclick="this.querySelector('.stat-number').style.animation = 'bounce-subtle 0.6s ease'">
                                <div class="stat-number text-3xl font-bold text-[#1D4E89] mb-1">1000+</div>
                                <div class="text-sm text-gray-600">Guru Tersertifikasi</div>
                            </div>
                            <div class="stat-card bg-orange-50 rounded-2xl p-4 border border-orange-200 hover:bg-orange-100 transition-all duration-300"
                                onclick="this.querySelector('.stat-number').style.animation = 'bounce-subtle 0.6s ease'">
                                <div class="stat-number text-3xl font-bold text-[#E76F51] mb-1">300+</div>
                                <div class="text-sm text-gray-600">Sekolah Mitra</div>
                            </div>
                            <div class="stat-card bg-blue-50 rounded-2xl p-4 border border-blue-200 hover:bg-blue-100 transition-all duration-300"
                                onclick="this.querySelector('.stat-number').style.animation = 'bounce-subtle 0.6s ease'">
                                <div class="stat-number text-3xl font-bold text-[#1D4E89] mb-1">34</div>
                                <div class="text-sm text-gray-600">Provinsi</div>
                            </div>
                        </div>
                    </div>

                    <!-- Element-element -->
                    <div class="absolute top-4 -left-4 w-20 h-20 bg-[#E76F51]/30 rounded-full animate-float hover:scale-125 transition-transform duration-300 cursor-pointer"
                        onclick="this.style.animation = 'float 1s ease-in-out'; setTimeout(() => this.style.animation = 'float 6s ease-in-out infinite', 1000)">
                    </div>
                    <div class="absolute bottom-8 -right-6 w-16 h-16 bg-yellow-300/40 rounded-full animate-float hover:scale-125 transition-transform duration-300 cursor-pointer"
                        style="animation-delay: 2s;"
                        onclick="this.style.animation = 'float 1s ease-in-out'; setTimeout(() => this.style.animation = 'float 6s ease-in-out infinite', 1000)">
                    </div>
                    <div class="absolute top-1/2 -right-8 w-12 h-12 bg-[#1D4E89]/30 rounded-full animate-float hover:scale-125 transition-transform duration-300 cursor-pointer"
                        style="animation-delay: 4s;"
                        onclick="this.style.animation = 'float 1s ease-in-out'; setTimeout(() => this.style.animation = 'float 6s ease-in-out infinite', 1000)">
                    </div>
                </div>
            </div>
            <script>
                document.querySelectorAll('.magnetic-effect').forEach(element => {
                    element.addEventListener('mousemove', (e) => {
                        const rect = element.getBoundingClientRect();
                        const x = e.clientX - rect.left - rect.width / 2;
                        const y = e.clientY - rect.top - rect.height / 2;

                        element.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
                    });

                    element.addEventListener('mouseleave', () => {
                        element.style.transform = 'translate(0px, 0px)';
                    });
                });


                document.querySelectorAll('.button-primary, .stat-card, .feature-card').forEach(element => {
                    element.addEventListener('click', function(e) {
                        const ripple = document.createElement('div');
                        const rect = this.getBoundingClientRect();
                        const size = Math.max(rect.width, rect.height);
                        const x = e.clientX - rect.left - size / 2;
                        const y = e.clientY - rect.top - size / 2;

                        ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255, 255, 255, 0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                `;

                        this.style.position = 'relative';
                        this.style.overflow = 'hidden';
                        this.appendChild(ripple);

                        setTimeout(() => {
                            ripple.remove();
                        }, 600);
                    });
                });


                const style = document.createElement('style');
                style.textContent = `
            @keyframes ripple {
                to {
                    transform: scale(2);
                    opacity: 0;
                }
            }
            `;
                document.head.appendChild(style);


                window.addEventListener('mousemove', (e) => {
                    const mouseX = e.clientX / window.innerWidth;
                    const mouseY = e.clientY / window.innerHeight;

                    document.querySelectorAll('.animate-float').forEach((element, index) => {
                        const speed = (index + 1) * 0.5;
                        const x = (mouseX - 0.5) * speed;
                        const y = (mouseY - 0.5) * speed;

                        element.style.transform += ` translate(${x}px, ${y}px)`;
                    });
                });
            </script>
            <style>
                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(20px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                @keyframes float {
                    0% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-20px);
                    }

                    100% {
                        transform: translateY(0px);
                    }
                }

                @keyframes pulse-glow {

                    0%,
                    100% {
                        box-shadow: 0 0 20px rgba(231, 111, 81, 0.3);
                        transform: scale(1);
                    }

                    50% {
                        box-shadow: 0 0 40px rgba(231, 111, 81, 0.5);
                        transform: scale(1.05);
                    }
                }

                @keyframes bounce-subtle {

                    0%,
                    100% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-10px);
                    }
                }

                @keyframes wiggle {
                    0% {
                        transform: rotate(0deg);
                    }

                    25% {
                        transform: rotate(5deg);
                    }

                    75% {
                        transform: rotate(-5deg);
                    }

                    100% {
                        transform: rotate(0deg);
                    }
                }

                @keyframes shake {

                    0%,
                    100% {
                        transform: translateX(0);
                    }

                    25% {
                        transform: translateX(-5px);
                    }

                    75% {
                        transform: translateX(5px);
                    }
                }

                @keyframes glow-border {
                    0% {
                        box-shadow: 0 0 5px rgba(231, 111, 81, 0.2);
                    }

                    50% {
                        box-shadow: 0 0 20px rgba(231, 111, 81, 0.4), 0 0 30px rgba(231, 111, 81, 0.2);
                    }

                    100% {
                        box-shadow: 0 0 5px rgba(231, 111, 81, 0.2);
                    }
                }

                @keyframes text-glow {

                    0%,
                    100% {
                        text-shadow: 0 0 10px rgba(231, 111, 81, 0.3);
                    }

                    50% {
                        text-shadow: 0 0 20px rgba(231, 111, 81, 0.6), 0 0 30px rgba(231, 111, 81, 0.4);
                    }
                }

                @keyframes card-float {

                    0%,
                    100% {
                        transform: translateY(0) rotate(0deg);
                    }

                    25% {
                        transform: translateY(-10px) rotate(1deg);
                    }

                    75% {
                        transform: translateY(-5px) rotate(-1deg);
                    }
                }

                @keyframes sparkle {

                    0%,
                    100% {
                        opacity: 0;
                        transform: scale(0) rotate(0deg);
                    }

                    50% {
                        opacity: 1;
                        transform: scale(1) rotate(180deg);
                    }
                }

                .animate-fadeIn {
                    animation: fadeIn 1s ease-out;
                }

                .animate-float {
                    animation: float 6s ease-in-out infinite;
                }

                .animate-pulse-glow {
                    animation: pulse-glow 3s ease-in-out infinite;
                }

                .animate-bounce-subtle {
                    animation: bounce-subtle 2s ease-in-out infinite;
                }

                .animate-wiggle {
                    animation: wiggle 0.5s ease-in-out;
                }

                .animate-shake {
                    animation: shake 0.5s ease-in-out;
                }

                .animate-glow-border {
                    animation: glow-border 2s ease-in-out infinite;
                }

                .animate-text-glow {
                    animation: text-glow 2s ease-in-out infinite;
                }

                .animate-card-float {
                    animation: card-float 4s ease-in-out infinite;
                }

                .animate-sparkle {
                    animation: sparkle 1.5s ease-in-out infinite;
                }

                .shadow-3xl {
                    box-shadow: 0 35px 60px -12px rgba(0, 0, 0, 0.25);
                }

                .shadow-glow {
                    box-shadow: 0 0 30px rgba(231, 111, 81, 0.2);
                }

                .hover-lift {
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .hover-lift:hover {
                    transform: translateY(-8px) scale(1.02);
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
                }

                .interactive-card {
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    transform-origin: center;
                }

                .interactive-card:hover {
                    transform: translateY(-12px) rotateX(5deg) rotateY(2deg);
                    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
                }

                .interactive-card:active {
                    transform: translateY(-8px) scale(0.98);
                }

                .feature-card {
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                }

                .feature-card::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
                    transition: left 0.5s;
                }

                .feature-card:hover::before {
                    left: 100%;
                }

                .feature-card:hover {
                    transform: translateY(-3px) scale(1.02);
                    box-shadow: 0 10px 25px rgba(29, 78, 137, 0.15);
                }

                .button-primary {
                    transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
                    position: relative;
                    overflow: hidden;
                }

                .button-primary::before {
                    content: '';
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 0;
                    height: 0;
                    background: rgba(255, 255, 255, 0.2);
                    border-radius: 50%;
                    transform: translate(-50%, -50%);
                    transition: all 0.6s ease;
                }

                .button-primary:hover::before {
                    width: 300px;
                    height: 300px;
                }

                .button-primary:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 15px 35px rgba(29, 78, 137, 0.3);
                }

                .button-primary:active {
                    transform: translateY(0) scale(0.95);
                }

                .text-shimmer {
                    background: linear-gradient(45deg, #1D4E89, #E76F51, #1D4E89);
                    background-size: 200% 200%;
                    -webkit-background-clip: text;
                    -webkit-text-fill-color: transparent;
                    background-clip: text;
                    animation: shimmer 3s ease-in-out infinite;
                }

                @keyframes shimmer {
                    0% {
                        background-position: 0% 50%;
                    }

                    50% {
                        background-position: 100% 50%;
                    }

                    100% {
                        background-position: 0% 50%;
                    }
                }

                .stat-card {
                    transition: all 0.3s ease;
                    cursor: pointer;
                }

                .stat-card:hover {
                    transform: translateY(-5px) rotateZ(2deg);
                    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                }

                .stat-card:hover .stat-number {
                    animation: bounce-subtle 0.6s ease;
                }

                .magnetic-effect {
                    transition: transform 0.2s ease;
                }
            </style>
        </main>
        {{-- End Main Tampilan Awal --}}

        {{-- Apa guru Dapatkan --}}

        <section class="w-full px-5 py-20 bg-gradient-to-br from-blue-50 via-white to-orange-50" id="manfaat">
            <div class="container mx-auto max-w-7xl">
                <!-- Header Section -->
                <div class="text-center mb-16 animate-fadeIn">
                    <span
                        class="text-lg text-[#E76F51] font-semibold inline-block px-6 py-2 bg-orange-100 rounded-full shadow-md hover:shadow-lg transition-all duration-300 hover:scale-105 mb-6">
                        #MANFAAT PROGRAM TLC
                    </span>
                    <h2
                        class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight text-[#1D4E89] mb-6 hover:scale-105 transition-transform duration-300">
                        <span class="relative inline-block">
                            <span class="relative z-10">Apa yang akan</span>
                            <span class="absolute -bottom-2 left-0 w-full h-3 bg-yellow-300 opacity-50 z-0"></span>
                        </span>
                        <br>
                        <span class="relative inline-block">
                            <span class="relative z-10">Guru Dapatkan?</span>
                            <span class="absolute -bottom-2 left-0 w-full h-3 bg-orange-300 opacity-50 z-0"></span>
                        </span>
                    </h2>
                    <p class="text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed">
                        <strong class="text-[#E76F51]">Bukan sekadar sertifikat biasa.</strong> Program komprehensif yang
                        telah terbukti meningkatkan <span class="font-semibold text-[#1D4E89]">kompetensi dan karir</span>
                        ratusan pendidik profesional.
                    </p>
                </div>

                <!-- Manfaat -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Box 1: Sertifikasi Terakreditasi -->
                    <div
                        class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl hover-lift border border-white/50 group cursor-pointer">
                        <div
                            class="bg-gradient-to-br from-teal-400 to-teal-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                            <i class="fas fa-award text-white text-2xl group-hover:animate-bounce relative z-10"></i>
                        </div>
                        <h3
                            class="text-xl font-bold text-[#1D4E89] mb-4 group-hover:text-teal-600 transition-colors duration-300">
                            Sertifikasi Terakreditasi
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Dapatkan sertifikat yang diakui secara nasional untuk meningkatkan kredibilitas profesional Anda
                        </p>
                    </div>

                    <!-- Box 2: Kurikulum Terkini -->
                    <div
                        class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl hover-lift border border-white/50 group cursor-pointer">
                        <div
                            class="bg-gradient-to-br from-blue-400 to-blue-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/20 animate-ping"></div>
                            <i
                                class="fas fa-graduation-cap text-white text-2xl group-hover:animate-pulse relative z-10"></i>
                        </div>
                        <h3
                            class="text-xl font-bold text-[#1D4E89] mb-4 group-hover:text-blue-600 transition-colors duration-300">
                            Kurikulum Terkini
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Akses materi pembelajaran yang selalu diperbaharui sesuai perkembangan dunia pendidikan
                        </p>
                    </div>

                    <!-- Box 3: Pengembangan Keterampilan -->
                    <div
                        class="bg-white/90 backdrop-blur-sm p-8 rounded-2xl shadow-xl hover:shadow-2xl hover-lift border-2 border-[#E76F51]/30 group cursor-pointer relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-orange-200 to-orange-300 rounded-full -translate-y-10 translate-x-10 opacity-30 animate-pulse">
                        </div>
                        <div
                            class="bg-gradient-to-br from-[#E76F51] to-orange-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg relative z-10 overflow-hidden">
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent animate-shimmer">
                            </div>
                            <i class="fas fa-rocket text-white text-2xl group-hover:animate-spin relative z-10"></i>
                        </div>
                        <h3
                            class="text-xl font-bold text-[#1D4E89] mb-4 group-hover:text-[#E76F51] transition-colors duration-300 relative z-10">
                            Pengembangan Keterampilan
                        </h3>
                        <p class="text-gray-700 leading-relaxed relative z-10">
                            Kembangkan keterampilan mengajar modern yang relevan dengan kebutuhan siswa di era digital
                        </p>
                    </div>

                    <!-- Box 4: Jaringan Profesional -->
                    <div
                        class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl hover-lift border border-white/50 group cursor-pointer">
                        <div
                            class="bg-gradient-to-br from-orange-400 to-orange-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                            <i class="fas fa-users text-white text-2xl group-hover:animate-bounce relative z-10"></i>
                        </div>
                        <h3
                            class="text-xl font-bold text-[#1D4E89] mb-4 group-hover:text-orange-600 transition-colors duration-300">
                            Jaringan Profesional
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Bergabung dengan komunitas pendidik dari seluruh Indonesia untuk berbagi pengalaman dan praktik
                            terbaik
                        </p>
                    </div>

                    <!-- Box 5: Peningkatan Karir -->
                    <div
                        class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl hover-lift border border-white/50 group cursor-pointer">
                        <div
                            class="bg-gradient-to-br from-pink-400 to-pink-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/20 animate-ping"></div>
                            <i class="fas fa-chart-line text-white text-2xl group-hover:animate-pulse relative z-10"></i>
                        </div>
                        <h3
                            class="text-xl font-bold text-[#1D4E89] mb-4 group-hover:text-pink-600 transition-colors duration-300">
                            Peningkatan Karir
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Buka peluang karir yang lebih luas dan potensi kenaikan pendapatan dengan kualifikasi yang lebih
                            tinggi
                        </p>
                    </div>

                    <!-- Box 6: Pengakuan Profesional -->
                    <div
                        class="bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl hover-lift border border-white/50 group cursor-pointer">
                        <div
                            class="bg-gradient-to-br from-green-400 to-green-600 w-16 h-16 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 shadow-lg relative overflow-hidden">
                            <div class="absolute inset-0 bg-white/20 animate-pulse"></div>
                            <i class="fas fa-star text-white text-2xl group-hover:animate-spin relative z-10"></i>
                        </div>
                        <h3
                            class="text-xl font-bold text-[#1D4E89] mb-4 group-hover:text-green-600 transition-colors duration-300">
                            Pengakuan Profesional
                        </h3>
                        <p class="text-gray-700 leading-relaxed">
                            Dapatkan pengakuan sebagai pendidik berkualitas tinggi yang memenuhi standar kompetensi nasional
                        </p>
                    </div>
                </div>
            </div>
            <style>
                .animate-fadeIn {
                    animation: fadeIn 1s ease-in-out;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(20px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .hover-lift {
                    transition: all 0.3s ease-in-out;
                }

                .hover-lift:hover {
                    transform: translateY(-8px) scale(1.02);
                }

                .hover-lift:active {
                    transform: translateY(-4px) scale(0.98);
                }

                @keyframes shimmer {
                    0% {
                        transform: translateX(-100%);
                    }

                    100% {
                        transform: translateX(100%);
                    }
                }

                .animate-shimmer {
                    animation: shimmer 2s infinite;
                }

                .animate-bounce {
                    animation: bounce 1s infinite;
                }

                .animate-spin {
                    animation: spin 2s linear infinite;
                }

                .animate-pulse {
                    animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
                }

                .animate-ping {
                    animation: ping 1s cubic-bezier(0, 0, 0.2, 1) infinite;
                }

                @keyframes bounce {

                    0%,
                    100% {
                        transform: translateY(-25%);
                        animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
                    }

                    50% {
                        transform: none;
                        animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
                    }
                }

                @keyframes spin {
                    to {
                        transform: rotate(360deg);
                    }
                }

                @keyframes pulse {
                    50% {
                        opacity: .5;
                    }
                }

                @keyframes ping {

                    75%,
                    100% {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
            </style>
        </section>
        {{-- End Apa yang guru dapatkan --}}

        {{-- Testimoni --}}
        <section class="w-full py-16 px-6 bg-gradient-to-br from-blue-50 via-white to-orange-50" id="testimonials">
            <div class="max-w-6xl mx-auto">
                <!-- Header -->
                <div class="text-center mb-16">
                    <span
                        class="inline-block px-6 py-2 bg-orange-100 text-[#E76F51] rounded-full text-sm font-semibold tracking-wide shadow-sm mb-6">
                        TESTIMONI
                    </span>
                    <h2 class="text-4xl sm:text-5xl font-bold text-[#1D4E89] mb-6">Apa Kata Mereka?</h2>
                    <p class="text-xl text-gray-700 max-w-2xl mx-auto leading-relaxed">
                        Cerita sukses dari para guru yang telah menyelesaikan program TLC
                    </p>
                </div>

                <!-- Testimoni -->
                <div class="max-w-4xl mx-auto mb-12">
                    <div
                        class="testimonial-card p-8 md:p-12 rounded-3xl shadow-xl border-4 border-[#1D4E89] testimonial-content fade-in">
                        <!-- bintang -->
                        <div class="flex justify-center mb-8">
                            <div class="flex text-3xl text-yellow-400">
                                ★★★★★
                            </div>
                        </div>

                        <!-- Quotes -->
                        <div class="text-center mb-10">
                            <p
                                class="text-xl md:text-2xl text-gray-700 italic leading-relaxed font-medium testimonial-quote">
                                "Program TLC benar-benar mengubah cara saya mengajar. Sekarang saya lebih percaya diri dan
                                murid-murid saya lebih antusias dalam belajar!"
                            </p>
                        </div>

                        <!-- Profile -->
                        <div class="flex flex-col items-center">
                            <!-- Avatar -->
                            <div
                                class="w-20 h-20 rounded-full bg-[#E76F51] flex items-center justify-center mb-4 shadow-lg testimonial-avatar">
                                <span class="text-2xl font-bold text-white testimonial-initials">SA</span>
                            </div>
                            <!-- Nama dan gelar -->
                            <div class="text-center">
                                <h4 class="text-2xl font-bold text-[#1D4E89] mb-2 testimonial-name">Siti Aminah</h4>
                                <p class="text-lg text-gray-600 testimonial-title">Guru SD Negeri 1 Jakarta</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigasi -->
                <div class="flex justify-center items-center space-x-4">

                    <button
                        class="nav-btn p-3 rounded-full bg-white shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 border-2 border-[#1D4E89] hover:border-[#E76F51]"
                        onclick="previousTestimonial()">
                        <svg class="w-6 h-6 text-[#1D4E89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>


                    <div class="flex space-x-3">
                        <button class="dot w-4 h-4 rounded-full bg-gray-300 hover:bg-[#E76F51] transition-all duration-300"
                            onclick="showTestimonial(0)"></button>
                        <button class="dot w-4 h-4 rounded-full bg-gray-300 hover:bg-[#E76F51] transition-all duration-300"
                            onclick="showTestimonial(1)"></button>
                        <button
                            class="dot w-4 h-4 rounded-full bg-gray-300 hover:bg-[#E76F51] transition-all duration-300 active"
                            onclick="showTestimonial(2)"></button>
                    </div>


                    <button
                        class="nav-btn p-3 rounded-full bg-white shadow-lg hover:shadow-xl transition-all duration-300 hover:bg-gray-50 border-2 border-[#1D4E89] hover:border-[#E76F51]"
                        onclick="nextTestimonial()">
                        <svg class="w-6 h-6 text-[#1D4E89]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>

            <script>
                const testimonials = [{
                        name: "Siti Aminah",
                        title: "Guru SD Negeri 1 Jakarta",
                        initials: "SA",
                        quote: "Program TLC benar-benar mengubah cara saya mengajar. Sekarang saya lebih percaya diri dan murid-murid saya lebih antusias dalam belajar!",
                        color: "bg-[#E76F51]"
                    },
                    {
                        name: "Budi Santoso",
                        title: "Guru SMP Negeri 5 Surabaya",
                        initials: "BS",
                        quote: "Sertifikasi Level B membuka kesempatan promosi di sekolah saya. Materi pelatihannya sangat relevan dengan kebutuhan pendidikan saat ini.",
                        color: "bg-[#1D4E89]"
                    },
                    {
                        name: "Ahmad Hidayat",
                        title: "Kepala Sekolah, SD Cendekia",
                        initials: "AH",
                        quote: "Setelah mengirim beberapa guru kami untuk mengikuti program TLC, kami melihat peningkatan signifikan dalam kualitas pembelajaran di sekolah. Siswa menjadi lebih terlibat dan hasil belajar meningkat.",
                        color: "bg-yellow-500"
                    }
                ];

                let currentTestimonial = 2;

                function showTestimonial(index) {
                    currentTestimonial = index;
                    const testimonial = testimonials[index];


                    const content = document.querySelector('.testimonial-content');
                    content.classList.remove('fade-in');

                    setTimeout(() => {

                        document.querySelector('.testimonial-quote').textContent = `"${testimonial.quote}"`;
                        document.querySelector('.testimonial-name').textContent = testimonial.name;
                        document.querySelector('.testimonial-title').textContent = testimonial.title;
                        document.querySelector('.testimonial-initials').textContent = testimonial.initials;
                        document.querySelector('.testimonial-avatar').className =
                            `w-20 h-20 rounded-full ${testimonial.color} flex items-center justify-center mb-4 shadow-lg testimonial-avatar`;


                        document.querySelectorAll('.dot').forEach((dot, i) => {
                            dot.classList.toggle('active', i === index);
                        });


                        content.classList.add('fade-in');
                    }, 150);
                }

                function nextTestimonial() {
                    const next = (currentTestimonial + 1) % testimonials.length;
                    showTestimonial(next);
                }

                function previousTestimonial() {
                    const prev = (currentTestimonial - 1 + testimonials.length) % testimonials.length;
                    showTestimonial(prev);
                }


                setInterval(() => {
                    nextTestimonial();
                }, 8000);


                showTestimonial(2);
            </script>

            <style>
                .testimonial-card {
                    background: linear-gradient(135deg, #dbeafe 0%, #fff7ed 100%);
                }

                .dot {
                    transition: all 0.3s ease;
                }

                .dot.active {
                    background-color: #1D4E89;
                }

                .nav-btn:hover svg {
                    color: #E76F51;
                }

                .fade-in {
                    animation: fadeIn 0.5s ease-in-out;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(10px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
            </style>
        </section>
        {{-- Testimoni --}}

        {{-- Pilih Jalur Sertifikasi --}}
        <section class="relative min-h-screen py-20 px-6 overflow-hidden gradient-bg" id="sertifikasi">
            <!-- Animasi untuk latar belakang -->
            <div class="absolute inset-0 overflow-hidden">
                <div class="particle w-2 h-2" style="left: 10%; animation-delay: 0s;"></div>
                <div class="particle w-3 h-3" style="left: 20%; animation-delay: 2s;"></div>
                <div class="particle w-1 h-1" style="left: 30%; animation-delay: 4s;"></div>
                <div class="particle w-2 h-2" style="left: 40%; animation-delay: 1s;"></div>
                <div class="particle w-3 h-3" style="left: 50%; animation-delay: 3s;"></div>
                <div class="particle w-1 h-1" style="left: 60%; animation-delay: 5s;"></div>
                <div class="particle w-2 h-2" style="left: 70%; animation-delay: 2.5s;"></div>
                <div class="particle w-3 h-3" style="left: 80%; animation-delay: 4.5s;"></div>
                <div class="particle w-1 h-1" style="left: 90%; animation-delay: 1.5s;"></div>
            </div>

            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Header Section -->
                <div class="text-center mb-20 floating-animation">
                    <div class="inline-block mb-6">
                        <span
                            class="inline-flex items-center px-6 py-3 bg-orange-100 text-orange-600 rounded-full text-sm font-bold tracking-widest shadow-xl glass-effect glow-effect">
                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            PROGRAM SERTIFIKASI
                        </span>
                    </div>
                    <h2 class="text-5xl sm:text-7xl font-black text-blue-900 mb-6 leading-tight">
                        Pilih Jalur
                        <span class="block text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-orange-600">
                            Sertifikasi Anda
                        </span>
                    </h2>
                    <p class="text-xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                        Program bertingkat yang disesuaikan dengan kebutuhan dan tujuan karir pendidik masa depan
                    </p>
                </div>

                <!-- Card Section -->
                @php
                    $user = Auth::user();
                @endphp
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-16">
                    <!-- Level A -->
                    <div class="relative group card-hover">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-orange-400 to-orange-500 rounded-3xl blur opacity-20 group-hover:opacity-30">
                        </div>
                        <div
                            class="relative h-[600px] rounded-3xl shadow-2xl overflow-hidden bg-white border border-gray-200">

                            {{-- <div class="absolute top-6 right-6 z-20"> --}}
                            {{-- <span
                                    class="inline-flex items-center px-4 py-2 bg-orange-500 text-white text-xs font-bold rounded-full pulse-glow">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                    POPULER
                                </span> --}}
                            {{-- </div> --}}


                            <div class="absolute inset-0 card-bg-level-a opacity-90"></div>


                            <div class="relative h-full flex flex-col justify-between p-8 text-white">
                                <div>
                                    <div class="mb-6">
                                        <span
                                            class="inline-flex items-center px-4 py-2 bg-white/20 text-gray-700 text-sm font-bold rounded-full glass-effect">
                                            LEVEL A
                                        </span>
                                    </div>
                                    <h3 class="text-4xl font-black mb-4 leading-tight">
                                        {{-- Sertifikasi<br>Dasar --}}
                                        Teaching Knowledge Certification
                                    </h3>
                                    {{-- <p class="text-white/90 text-lg mb-8 leading-relaxed">
                                        Fondasi pengajaran efektif untuk semua guru yang ingin memulai perjalanan
                                        profesional
                                    </p> --}}
                                </div>

                                <div>
                                    <div class="grid grid-cols-1 gap-3 mb-8">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Uji Literasi Numerasi</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Uji Pedagogical Content Kowledge (PCK)</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Uji Higher Order Thinking Skills
                                                (HOTS)</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        {{-- <div>
                                            <span class="text-3xl font-black">
                                                Rp.{{ number_format($levels[0]->price, 0, ',', '.') }}
                                            </span>
                                            <span class="block text-sm text-white/70">Per sertifikasi</span>
                                        </div> --}}
                                        @if ($user->hasPermissionTo('access_level_A'))
                                            <button onclick="document.getElementById('modalA').classList.remove('hidden')"
                                                class="bg-white text-orange-500 px-6 py-3 font-bold rounded-xl hover:bg-orange-50 transition-all  shadow-lg">
                                                Detail Program
                                            </button>
                                        @else
                                            <button onclick="document.getElementById('modalA').classList.remove('hidden')"
                                                class="bg-white text-orange-500 px-6 py-3 font-bold rounded-xl hover:bg-orange-50 transition-all  shadow-lg">
                                                Mulai Sekarang
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Level B -->
                    <div class="relative group card-hover">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-blue-400 to-blue-600 rounded-3xl blur opacity-20 group-hover:opacity-30">
                        </div>
                        <div
                            class="relative h-[600px] rounded-3xl shadow-2xl overflow-hidden bg-white border border-gray-200">

                            <div class="absolute inset-0 card-bg-level-b opacity-90"></div>


                            <div class="relative h-full flex flex-col justify-between p-8 text-white">
                                <div>
                                    <div class="mb-6">
                                        <span
                                            class="inline-flex items-center px-4 py-2 bg-white/20 text-gray-700 text-sm font-bold rounded-full glass-effect">
                                            LEVEL B
                                        </span>
                                    </div>
                                    <h3 class="text-4xl font-black mb-4 leading-tight">
                                        Teaching Activation Certification
                                    </h3>
                                    {{-- <p class="text-white/90 text-lg mb-8 leading-relaxed">
                                        Strategi pembelajaran lanjutan untuk guru berpengalaman yang ingin berkembang
                                    </p> --}}
                                </div>

                                <div>
                                    <div class="grid grid-cols-1 gap-3 mb-8">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Merancang modul ajar/RPP</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Menyusun materi ajar (PPT)</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Merancang LKS</span>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between">
                                        {{-- <div>
                                            <span class="text-3xl font-black">
                                                Rp.{{ number_format($levels[1]->price, 0, ',', '.') }}
                                            </span>
                                            <span class="block text-sm text-white/70">Per sertifikasi</span>
                                        </div> --}}
                                        @if ($user->hasPermissionTo('level_A_completed'))
                                            <button onclick="document.getElementById('modalB').classList.remove('hidden')"
                                                class="bg-white text-blue-600 px-6 py-3 font-bold rounded-xl hover:bg-blue-50 transition-all transform hover:scale-105 shadow-lg">
                                                Mulai Sekarang
                                            </button>
                                        @else
                                            <button onclick="document.getElementById('modalB').classList.remove('hidden')"
                                                class="bg-white text-blue-600 px-6 py-3 font-bold rounded-xl hover:bg-blue-50 transition-all transform hover:scale-105 shadow-lg">
                                                Detail Program
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Level C -->
                    <div class="relative group card-hover">
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-blue-500 to-blue-700 rounded-3xl blur opacity-20 group-hover:opacity-30">
                        </div>
                        <div
                            class="relative h-[600px] rounded-3xl shadow-2xl overflow-hidden bg-white border border-gray-200">

                            {{-- <div class="absolute top-6 right-6 z-20">
                                <span
                                    class="inline-flex items-center px-4 py-2 bg-blue-600 text-white text-xs font-bold rounded-full pulse-glow">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                                    </svg>
                                    PREMIUM
                                </span>
                            </div> --}}


                            <div class="absolute inset-0 card-bg-level-c opacity-90"></div>


                            <div class="relative h-full flex flex-col justify-between p-8 text-white">
                                <div>
                                    <div class="mb-6">
                                        <span
                                            class="inline-flex items-center px-4 py-2 bg-white/20 text-gray-700 text-sm font-bold rounded-full glass-effect">
                                            LEVEL C
                                        </span>
                                    </div>
                                    <h3 class="text-4xl font-black mb-4 leading-tight">
                                        Teaching Mastery Certification
                                    </h3>
                                    {{-- <p class="text-white/90 text-lg mb-8 leading-relaxed">
                                        Pengajaran kreatif tingkat mahir untuk pemimpin pendidikan masa depan
                                    </p> --}}
                                </div>

                                <div>
                                    <div class="grid grid-cols-1 gap-3 mb-8">
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Melaksanakan Pengajaran berbasis TMF</span>
                                        </div>
                                        <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Self Review</span>
                                        </div>
                                        {{-- <div class="flex items-center space-x-3">
                                            <div class="w-2 h-2 bg-white rounded-full"></div>
                                            <span class="text-sm font-medium">Publikasi Karya Ilmiah</span>
                                        </div> --}}
                                    </div>

                                    <div class="flex items-center justify-between">
                                        {{-- <div>
                                            <span class="text-3xl font-black">
                                                Rp.{{ number_format($levels[2]->price, 0, ',', '.') }}
                                            </span>
                                            <span class="block text-sm text-white/70">Per sertifikasi</span>
                                        </div> --}}
                                        <button onclick="document.getElementById('modalC').classList.remove('hidden')"
                                            class="bg-white text-blue-700 px-6 py-3 font-bold rounded-xl hover:bg-blue-50 transition-all transform hover:scale-105 shadow-lg">
                                            Detail Program
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                {{-- <div class="text-center">
                    <button
                        class="group relative inline-flex items-center justify-center bg-blue-600 hover:bg-blue-700 text-white px-12 py-6 rounded-2xl font-bold text-lg shadow-2xl hover:shadow-blue-500/25 transform transition-all hover:scale-105 overflow-hidden">
                        <span class="relative z-10 flex items-center">
                            Bandingkan Semua Paket
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 ml-3 transform group-hover:translate-x-2 transition-transform"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                        <div class="absolute inset-0 bg-blue-500 opacity-0 group-hover:opacity-100 transition-opacity">
                        </div>
                    </button>
                </div> --}}
            </div>

            <script>
                document.addEventListener('mousemove', (e) => {
                    if (Math.random() > 0.9) {
                        createSparkle(e.clientX, e.clientY);
                    }
                });

                function createSparkle(x, y) {
                    const sparkle = document.createElement('div');
                    sparkle.className = 'absolute w-1 h-1 bg-orange-400 rounded-full pointer-events-none z-50';
                    sparkle.style.left = x + 'px';
                    sparkle.style.top = y + 'px';
                    sparkle.style.animation = 'sparkle 1s ease-out forwards';
                    document.body.appendChild(sparkle);

                    setTimeout(() => {
                        sparkle.remove();
                    }, 1000);
                }

                function showModal(modalId) {
                    alert(`Showing details for ${modalId}`);
                }


                const style = document.createElement('style');
                style.textContent = `
            @keyframes sparkle {
                0% { transform: scale(0) rotate(0deg); opacity: 1; }
                50% { transform: scale(1) rotate(180deg); opacity: 1; }
                100% { transform: scale(0) rotate(360deg); opacity: 0; }
            }
            `;
                document.head.appendChild(style);
            </script>

            <style>
                * {
                    font-family: 'Inter', sans-serif;
                }

                .gradient-bg {
                    background: linear-gradient(135deg, #f0f9ff 0%, #ffffff 50%, #fff7ed 100%);
                }

                .card-hover {
                    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                }

                .card-hover:hover {
                    transform: translateY(-8px) scale(1.02);
                }

                .glass-effect {
                    backdrop-filter: blur(20px);
                    -webkit-backdrop-filter: blur(20px);
                }

                .glow-effect {
                    box-shadow: 0 0 30px rgba(234, 88, 12, 0.2);
                }

                .floating-animation {
                    animation: float 6s ease-in-out infinite;
                }

                @keyframes float {

                    0%,
                    100% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-10px);
                    }
                }

                .pulse-glow {
                    animation: pulse-glow 2s infinite;
                }

                @keyframes pulse-glow {

                    0%,
                    100% {
                        box-shadow: 0 0 20px rgba(234, 88, 12, 0.4);
                    }

                    50% {
                        box-shadow: 0 0 40px rgba(234, 88, 12, 0.8);
                    }
                }

                .card-bg-level-a {
                    background: linear-gradient(135deg, #ea5a0c 0%, #f97316 100%);
                }

                .card-bg-level-b {
                    background: linear-gradient(135deg, #1d4ed8 0%, #2563eb 100%);
                }

                .card-bg-level-c {
                    background: linear-gradient(135deg, #1e40af 0%, #1d4ed8 100%);
                }

                .particle {
                    position: absolute;
                    background: rgba(234, 88, 12, 0.1);
                    border-radius: 50%;
                    pointer-events: none;
                    animation: particle-float 8s infinite linear;
                }

                @keyframes particle-float {
                    0% {
                        transform: translateY(100vh) rotate(0deg);
                        opacity: 0;
                    }

                    10% {
                        opacity: 1;
                    }

                    90% {
                        opacity: 1;
                    }

                    100% {
                        transform: translateY(-100px) rotate(360deg);
                        opacity: 0;
                    }
                }
            </style>
        </section>
        {{-- End Pilih Jalur Sertifikasi --}}

        {{-- Investasi untuk Masa Depan --}}
        {{-- @livewire('asesi.payment-card') --}}
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
                                    Teaching Knowledge Certification
                                @break

                                @case('B')
                                    Teaching Activation Certification
                                @break

                                @case('C')
                                    Teaching Mastery Certification
                                @break
                            @endswitch
                        </h3>

                        <p class="text-gray-600 mb-6 leading-relaxed text-justify">
                            @switch($level)
                                @case('A')
                                    Sertifikasi Level A bertujuan menguji pemahaman dasar guru melalui ujian teori terkait
                                    pengajaran yang efektif, terstruktur, dan berdiferensiasi, serta penerapan penilaian berbasis
                                    Teaching Mastery Framework serta Literasi Numerasi
                                @break

                                @case('B')
                                    Sertifikasi Level B bertujuan untuk menguji keterampilan guru melalui aktivasi pengetahuan PCK
                                    dan HOTS dalam pengajaran serta mengembangkan lesson plan (Modul Ajar), Teaching Tactics dan
                                    Teaching Scenario untuk menunjang efektivitas pengajaran guru di kelas.
                                @break

                                @case('C')
                                    Sertifikasi Level C merupakan tahapan Mastery dalam pelaksanaan pengajaran. Peserta akan
                                    berfokus dalam praktik pengajaran efektif di dalam kelas berbasis Teaching Mastery Framework
                                    (TMF)
                                    . Peserta akan merekam dan mereview proses mengajarnya, kemudian akan di uji oleh asesor.
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
                            <span class="text-gray-500 text-md font-semibold line-through">
                                @switch($level)
                                    @case('A')
                                        Rp 199.000
                                    @break

                                    @case('B')
                                        Rp 269.000
                                    @break

                                    @case('C')
                                        Rp 399.000
                                    @break
                                @endswitch
                            </span>
                            <div class="text-2xl font-extrabold text-gray-700">
                                @switch($level)
                                    @case('A')
                                        Rp.{{ number_format($levels[0]->price, 0, ',', '.') }}
                                    @break

                                    @case('B')
                                        Rp.{{ number_format($levels[1]->price, 0, ',', '.') }}
                                    @break

                                    @case('C')
                                        Rp.{{ number_format($levels[2]->price, 0, ',', '.') }}
                                    @break
                                @endswitch
                            </div>
                        </div>
                        @switch($level)
                            @case('A')
                                @if ($user->hasPermissionTo('access_level_A'))
                                    <button
                                        class="bg-blue-500 text-white px-6 py-3 rounded-lg font-bold shadow-lg cursor-not-allowed"
                                        disabled>
                                        Sudah Terdaftar
                                    </button>
                                @else
                                    <a href="{{ route('payments.create', $levels[0]->id) }}"
                                        class="bg-gradient-to-r from-[#F4A261] to-[#E76F51] hover:from-[#E76F51] hover:to-[#E76F51] text-white px-6 py-3 rounded-lg font-bold shadow-lg transform transition-all hover:scale-105">
                                        Daftar Sekarang
                                    </a>
                                @endif
                            @break

                            @case('B')
                                @if ($user->hasPermissionTo('level_A_completed'))
                                    <a href="{{ route('payments.create', $levels[1]->id) }}"
                                        class="bg-gradient-to-r from-[#F4A261] to-[#E76F51] hover:from-[#E76F51] hover:to-[#E76F51] text-white px-6 py-3 rounded-lg font-bold shadow-lg transform transition-all hover:scale-105">
                                        Daftar Sekarang
                                    </a>
                                @else
                                    <button disabled
                                        class="bg-gradient-to-r from-[#F4A261] to-[#E76F51] text-white px-6 py-3 rounded-lg font-bold shadow-lg opacity-60 cursor-not-allowed">
                                        Belum Dibuka
                                    </button>
                                @endif
                            @break

                            @case('C')
                                @if ($user->hasPermissionTo('level_B_completed'))
                                    <a href="{{ route('payments.create', $levels[2]->id) }}"
                                        class="bg-gradient-to-r from-[#F4A261] to-[#E76F51] hover:from-[#E76F51] hover:to-[#E76F51] text-white px-6 py-3 rounded-lg font-bold shadow-lg transform transition-all hover:scale-105">
                                        Daftar Sekarang
                                    </a>
                                @else
                                    <button disabled
                                        class="bg-gradient-to-r from-[#F4A261] to-[#E76F51] text-white px-6 py-3 rounded-lg font-bold shadow-lg opacity-60 cursor-not-allowed">
                                        Belum Dibuka
                                    </button>
                                @endif
                            @break
                        @endswitch
                    </div>
                </div>
            </div>
        @endforeach
        {{-- End Investasi --}}

        {{-- alur Pendaftaraan --}}
        <section class="relative w-full px-5 py-20 overflow-hidden gradient-bg">

            <div class="absolute inset-0">
                <div class="particle" style="left: 10%; width: 4px; height: 4px; animation-delay: 0s;"></div>
                <div class="particle" style="left: 20%; width: 3px; height: 3px; animation-delay: 0.5s;"></div>
                <div class="particle" style="left: 30%; width: 5px; height: 5px; animation-delay: 1s;"></div>
                <div class="particle" style="left: 40%; width: 4px; height: 4px; animation-delay: 1.5s;"></div>
                <div class="particle" style="left: 50%; width: 3px; height: 3px; animation-delay: 2s;"></div>
                <div class="particle" style="left: 60%; width: 4px; height: 4px; animation-delay: 2.5s;"></div>
                <div class="particle" style="left: 70%; width: 5px; height: 5px; animation-delay: 3s;"></div>
                <div class="particle" style="left: 80%; width: 3px; height: 3px; animation-delay: 3.5s;"></div>
                <div class="particle" style="left: 90%; width: 4px; height: 4px; animation-delay: 4s;"></div>
            </div>

            <div class="max-w-7xl mx-auto relative z-10">
                <!-- Header -->
                <div class="text-center mb-20">
                    <div
                        class="inline-flex items-center justify-center px-4 py-2 bg-orange-100 rounded-full text-orange-600 text-sm font-medium mb-6">
                        <span class="w-2 h-2 bg-orange-500 rounded-full mr-2 animate-pulse"></span>
                        Proses Pendaftaran Mudah & Cepat
                    </div>
                    <h2 class="text-5xl md:text-7xl font-bold text-blue-900 mb-8 leading-tight">
                        Alur Pendaftaran<br>
                        <span class="bg-gradient-to-r from-orange-500 to-yellow-500 bg-clip-text text-transparent">
                            Program
                        </span>
                    </h2>
                    <p class="text-xl md:text-2xl text-gray-700 max-w-4xl mx-auto leading-relaxed">
                        Ikuti langkah-langkah sederhana berikut untuk mendaftarkan Diri Anda dalam program
                        <span class="font-bold text-orange-600">Teaching & Learning Certification</span>
                    </p>
                </div>

                <div class="relative">
                    <div class="hidden md:block absolute top-20 left-0 right-0 z-0">
                        <div class="progress-bar">
                            <div class="progress-fill"></div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-5 gap-8 md:gap-4 relative z-10">

                        <div class="step-card text-center animate-slide-up stagger-1">
                            <div class="relative mb-8">

                                <div
                                    class="step-number w-20 h-20 mx-auto bg-gradient-to-br from-blue-700 via-blue-800 to-blue-900 rounded-full flex items-center justify-center mb-6 shadow-2xl">
                                    <span class="text-2xl font-bold text-white">1</span>
                                </div>

                                <div
                                    class="step-icon w-16 h-16 mx-auto bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl flex items-center justify-center floating-icon shadow-lg">
                                    <svg class="w-8 h-8 text-blue-700" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="glass-card rounded-2xl p-8 shadow-2xl h-full">
                                <h3 class="text-xl font-bold text-blue-900 mb-4">Isi Formulir</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Lengkapi formulir pendaftaran online dengan data peserta dan informasi kontak secara
                                    lengkap dan akurat
                                </p>
                            </div>
                        </div>


                        <div class="md:hidden mobile-connector"></div>

                        <!-- langkah 2 -->
                        <div class="step-card text-center animate-slide-up stagger-2">
                            <div class="relative mb-8">

                                <div
                                    class="step-number w-20 h-20 mx-auto bg-gradient-to-br from-orange-500 via-orange-600 to-orange-700 rounded-full flex items-center justify-center mb-6 shadow-2xl">
                                    <span class="text-2xl font-bold text-white">2</span>
                                </div>

                                <div class="step-icon w-16 h-16 mx-auto bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl flex items-center justify-center floating-icon shadow-lg"
                                    style="animation-delay: 0.5s;">
                                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="glass-card rounded-2xl p-8 shadow-2xl h-full">
                                <h3 class="text-xl font-bold text-blue-900 mb-4">Verifikasi</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Tim profesional kami akan memverifikasi data dan menghubungi Anda dalam 24 jam untuk
                                    konfirmasi
                                </p>
                            </div>
                        </div>


                        <div class="md:hidden mobile-connector"></div>

                        <!-- Langkah 3 -->
                        <div class="step-card text-center animate-slide-up stagger-3">
                            <div class="relative mb-8">

                                <div
                                    class="step-number w-20 h-20 mx-auto bg-gradient-to-br from-yellow-500 via-yellow-600 to-amber-600 rounded-full flex items-center justify-center mb-6 shadow-2xl">
                                    <span class="text-2xl font-bold text-white">3</span>
                                </div>

                                <div class="step-icon w-16 h-16 mx-auto bg-gradient-to-br from-yellow-50 to-yellow-100 rounded-2xl flex items-center justify-center floating-icon shadow-lg"
                                    style="animation-delay: 1s;">
                                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="glass-card rounded-2xl p-8 shadow-2xl h-full">
                                <h3 class="text-xl font-bold text-blue-900 mb-4">Konfirmasi</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Konfirmasi pendaftaran dan lakukan pembayaran biaya program sertifikasi dengan mudah
                                </p>
                            </div>
                        </div>

                        <div class="md:hidden mobile-connector"></div>

                        <!-- langkah 4 -->
                        <div class="step-card text-center animate-slide-up stagger-4">
                            <div class="relative mb-8">

                                <div
                                    class="step-number w-20 h-20 mx-auto bg-gradient-to-br from-green-500 via-green-600 to-emerald-600 rounded-full flex items-center justify-center mb-6 shadow-2xl">
                                    <span class="text-2xl font-bold text-white">4</span>
                                </div>

                                <div class="step-icon w-16 h-16 mx-auto bg-gradient-to-br from-green-50 to-green-100 rounded-2xl flex items-center justify-center floating-icon shadow-lg"
                                    style="animation-delay: 1.5s;">
                                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="glass-card rounded-2xl p-8 shadow-2xl h-full">
                                <h3 class="text-xl font-bold text-blue-900 mb-4">Jadwal</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Dapatkan jadwal pelatihan yang fleksibel dan materi pembelajaran yang terstruktur
                                </p>
                            </div>
                        </div>

                        <div class="md:hidden mobile-connector"></div>

                        <!-- langkah 5 -->
                        <div class="step-card text-center animate-slide-up stagger-5">
                            <div class="relative mb-8">

                                <div
                                    class="step-number w-20 h-20 mx-auto bg-gradient-to-br from-indigo-500 via-purple-500 to-blue-600 rounded-full flex items-center justify-center mb-6 shadow-2xl">
                                    <span class="text-2xl font-bold text-white">5</span>
                                </div>

                                <div class="step-icon w-16 h-16 mx-auto bg-gradient-to-br from-indigo-50 to-purple-100 rounded-2xl flex items-center justify-center floating-icon shadow-lg"
                                    style="animation-delay: 2s;">
                                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="glass-card rounded-2xl p-8 shadow-2xl h-full">
                                <h3 class="text-xl font-bold text-blue-900 mb-4">Mulai Belajar</h3>
                                <p class="text-gray-600 leading-relaxed">
                                    Mulai transformasi mengajar dengan metode terpercaya dan dapatkan sertifikasi
                                    profesional
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-20">
                    <button
                        class="pulse-button inline-flex items-center justify-center px-12 py-6 bg-gradient-to-r from-blue-700 via-blue-800 to-blue-900 hover:from-blue-800 hover:via-blue-900 hover:to-indigo-900 text-white text-xl font-bold rounded-2xl transform transition-all duration-300 hover:scale-110 shadow-2xl hover:shadow-3xl relative overflow-hidden group">
                        <span class="relative z-10">Daftar Program Sekarang</span>
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6 ml-3 group-hover:translate-x-1 transition-transform duration-300 relative z-10"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <script>
                const observerOptions = {
                    threshold: 0.1,
                    rootMargin: '0px 0px -50px 0px'
                };

                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('animate-slide-up');
                        }
                    });
                }, observerOptions);

                document.querySelectorAll('.step-card').forEach(card => {
                    observer.observe(card);
                });

                document.querySelectorAll('.step-card').forEach(card => {
                    card.addEventListener('mouseenter', () => {
                        card.style.transform = 'translateY(-10px) scale(1.02)';
                    });

                    card.addEventListener('mouseleave', () => {
                        card.style.transform = '';
                    });
                });

                document.querySelector('.pulse-button').addEventListener('click', (e) => {
                    e.preventDefault();

                    const rect = e.target.getBoundingClientRect();
                    const ripple = document.createElement('span');
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;

                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    ripple.classList.add('ripple');

                    e.target.appendChild(ripple);

                    setTimeout(() => {
                        ripple.remove();
                    }, 600);

                    setTimeout(() => {
                        alert('Formulir pendaftaran akan segera dibuka! 🚀');
                    }, 300);
                });
            </script>

            <style>
                @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

                * {
                    font-family: 'Inter', sans-serif;
                }

                .gradient-bg {
                    background: linear-gradient(135deg, #dbeafe 0%, #ffffff 50%, #fed7aa 100%);
                    position: relative;
                    overflow: hidden;
                }

                .gradient-bg::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%231D4E89' fill-opacity='0.03'%3E%3Ccircle cx='30' cy='30' r='2'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E") repeat;
                    animation: drift 20s linear infinite;
                }

                @keyframes drift {
                    0% {
                        transform: translateX(0) translateY(0);
                    }

                    100% {
                        transform: translateX(-60px) translateY(-60px);
                    }
                }

                .step-card {
                    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
                    position: relative;
                    overflow: hidden;
                }

                .step-card::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(29, 78, 137, 0.1), transparent);
                    transition: left 0.5s;
                }

                .step-card:hover::before {
                    left: 100%;
                }

                .step-card:hover {
                    transform: translateY(-10px) scale(1.02);
                    box-shadow: 0 25px 50px rgba(29, 78, 137, 0.15);
                }

                .step-number {
                    transition: all 0.3s ease;
                    position: relative;
                    z-index: 10;
                }

                .step-card:hover .step-number {
                    transform: scale(1.1) rotate(5deg);
                    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
                }

                .floating-icon {
                    animation: float 3s ease-in-out infinite;
                }

                @keyframes float {

                    0%,
                    100% {
                        transform: translateY(0px);
                    }

                    50% {
                        transform: translateY(-10px);
                    }
                }

                .pulse-button {
                    position: relative;
                    overflow: hidden;
                }

                .pulse-button::before {
                    content: '';
                    position: absolute;
                    top: 50%;
                    left: 50%;
                    width: 0;
                    height: 0;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.3);
                    transition: width 0.6s, height 0.6s, top 0.6s, left 0.6s;
                }

                .pulse-button:hover::before {
                    width: 300px;
                    height: 300px;
                    top: 50%;
                    left: 50%;
                    transform: translate(-50%, -50%);
                }

                .glass-card {
                    background: rgba(255, 255, 255, 0.95);
                    backdrop-filter: blur(10px);
                    border: 1px solid rgba(255, 255, 255, 0.2);
                }

                .step-icon {
                    transition: all 0.3s ease;
                }

                .step-card:hover .step-icon {
                    transform: scale(1.2) rotate(10deg);
                }

                @keyframes slideInUp {
                    from {
                        opacity: 0;
                        transform: translateY(30px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }

                .animate-slide-up {
                    animation: slideInUp 0.6s ease-out forwards;
                }

                .stagger-1 {
                    animation-delay: 0.1s;
                }

                .stagger-2 {
                    animation-delay: 0.2s;
                }

                .stagger-3 {
                    animation-delay: 0.3s;
                }

                .stagger-4 {
                    animation-delay: 0.4s;
                }

                .stagger-5 {
                    animation-delay: 0.5s;
                }

                .mobile-connector {
                    width: 2px;
                    height: 40px;
                    background: linear-gradient(180deg, #1D4E89 0%, #E76F51 100%);
                    margin: 20px auto;
                    position: relative;
                }

                .mobile-connector::after {
                    content: '';
                    position: absolute;
                    bottom: -5px;
                    left: 50%;
                    transform: translateX(-50%);
                    width: 0;
                    height: 0;
                    border-left: 5px solid transparent;
                    border-right: 5px solid transparent;
                    border-top: 10px solid #E76F51;
                }

                .progress-bar {
                    position: absolute;
                    top: 50%;
                    left: 0;
                    right: 0;
                    height: 4px;
                    background: rgba(29, 78, 137, 0.2);
                    border-radius: 2px;
                    overflow: hidden;
                    transform: translateY(-50%);
                }

                .progress-fill {
                    height: 100%;
                    background: linear-gradient(90deg, #1D4E89, #E76F51);
                    border-radius: 2px;
                    width: 0%;
                    animation: fillProgress 3s ease-in-out infinite;
                }

                @keyframes fillProgress {

                    0%,
                    100% {
                        width: 0%;
                    }

                    50% {
                        width: 100%;
                    }
                }

                .particle {
                    position: absolute;
                    background: rgba(29, 78, 137, 0.3);
                    border-radius: 50%;
                    pointer-events: none;
                    animation: particle 4s linear infinite;
                }

                @keyframes particle {
                    0% {
                        transform: translateY(100vh) scale(0);
                        opacity: 1;
                    }

                    100% {
                        transform: translateY(-100px) scale(1);
                        opacity: 0;
                    }
                }

                .ripple {
                    position: absolute;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.6);
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
            </style>
        </section>
        {{-- End Alur Pendaftaraan --}}

        {{-- Vidio Keseruan --}}
        <section
            class="max-w-7xl mx-auto px-4 md:px-8 py-20 bg-gradient-to-br from-blue-50 via-white to-orange-50 relative overflow-hidden">
            <!-- Heading -->
            <div class="max-w-4xl mx-auto text-center mb-14 relative z-10 animate-fadeIn">
                <span class="text-lg text-[#E76F51] font-semibold inline-block px-4 py-1 bg-orange-100 rounded-full mb-4">
                    #KESERUAN TLC PROGRAM
                </span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-[#1D4E89] leading-tight mb-6">
                    Tonton Keseruan di
                    <span class="relative inline-block">
                        <span
                            class="relative z-10 text-transparent bg-clip-text bg-gradient-to-r from-[#1D4E89] to-[#E76F51]">
                            TLC Program
                        </span>
                        <span class="absolute -bottom-2 left-0 w-full h-3 bg-orange-300 opacity-50 z-0"></span>
                    </span>
                </h2>
                <p class="text-lg md:text-xl text-gray-700 font-medium max-w-2xl mx-auto">
                    <strong class="text-[#E76F51]">Saksikan pengalaman luar biasa</strong> dan momen tak terlupakan dari
                    para peserta yang telah merasakan transformasi pembelajaran!
                </p>
            </div>

            <div class="relative group">
                <div id="testimonialContainer"
                    class="flex gap-6 md:gap-8 overflow-x-auto snap-x snap-mandatory scroll-smooth pb-6 md:pb-8 no-scrollbar items-center px-2 md:px-4">
                    <!-- Video 1 -->
                    <div
                        class="flex-shrink-0 w-[85%] sm:w-[350px] md:w-[450px] h-[200px] sm:h-[280px] md:h-[350px] snap-center transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:ring-4 hover:ring-[#E76F51] hover:ring-opacity-50 rounded-2xl md:rounded-3xl overflow-hidden shadow-xl bg-white border-2 border-orange-100">
                        <iframe class="w-full h-full object-cover rounded-2xl md:rounded-3xl"
                            src="https://www.youtube.com/embed/Jn7vuXLozJI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- Video 2 -->
                    <div
                        class="flex-shrink-0 w-[85%] sm:w-[350px] md:w-[450px] h-[200px] sm:h-[280px] md:h-[350px] snap-center transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:ring-4 hover:ring-[#E76F51] hover:ring-opacity-50 rounded-2xl md:rounded-3xl overflow-hidden shadow-xl bg-white border-2 border-orange-100">
                        <iframe class="w-full h-full object-cover rounded-2xl md:rounded-3xl"
                            src="https://www.youtube.com/embed/Jn7vuXLozJI" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- Video 3 -->
                    <div
                        class="flex-shrink-0 w-[85%] sm:w-[350px] md:w-[450px] h-[200px] sm:h-[280px] md:h-[350px] snap-center transform transition-all duration-500 hover:scale-105 hover:shadow-2xl hover:ring-4 hover:ring-[#E76F51] hover:ring-opacity-50 rounded-2xl md:rounded-3xl overflow-hidden shadow-xl bg-white border-2 border-orange-100">
                        <iframe class="w-full h-full object-cover rounded-2xl md:rounded-3xl"
                            src="https://www.youtube.com/embed/Jn7vuXLozJI" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="hidden md:flex absolute inset-y-0 w-full justify-between items-center px-4">
                    <button id="prevBtn"
                        class="bg-[#1D4E89] hover:bg-[#14406B] text-white rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextBtn"
                        class="bg-[#1D4E89] hover:bg-[#14406B] text-white rounded-full p-3 shadow-lg transition-all duration-300 hover:scale-110 active:scale-95">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="text-center mt-16">
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <a href="#daftar"
                        class="bg-[#1D4E89] text-white px-8 py-4 rounded-xl shadow-lg text-lg font-semibold hover:bg-[#14406B] transition-all duration-300 hover:scale-105 active:scale-95 flex items-center justify-center">
                        <span>Bergabung Sekarang</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#info"
                        class="bg-white border-2 border-[#E76F51] text-[#E76F51] px-8 py-4 rounded-xl shadow-md text-lg font-semibold hover:bg-orange-50 transition-all duration-300 hover:scale-105 active:scale-95 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                        <span>Info Lengkap</span>
                    </a>
                </div>
            </div>
            <script>
                const container = document.getElementById('testimonialContainer');
                const prevBtn = document.getElementById('prevBtn');
                const nextBtn = document.getElementById('nextBtn');

                let currentIndex = 0;
                const videos = container.children;
                const totalVideos = videos.length;

                function scrollToVideo(index) {
                    const video = videos[index];
                    if (video) {
                        video.scrollIntoView({
                            behavior: 'smooth',
                            block: 'nearest',
                            inline: 'center'
                        });
                    }
                }

                prevBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex - 1 + totalVideos) % totalVideos;
                    scrollToVideo(currentIndex);
                });

                nextBtn.addEventListener('click', () => {
                    currentIndex = (currentIndex + 1) % totalVideos;
                    scrollToVideo(currentIndex);
                });
            </script>
            <style>
                .no-scrollbar::-webkit-scrollbar {
                    display: none;
                }

                .no-scrollbar {
                    -ms-overflow-style: none;
                    scrollbar-width: none;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                        transform: translateY(20px);
                    }

                    to {
                        opacity: 1;
                        transform: translateY(0);
                    }
                }
            </style>
        </section>
        {{-- End Vidio Keseruan --}}


        {{-- Langkah Pembayaran --}}
        <section class="relative mt-32 max-w-6xl mx-auto px-4 py-12">
            <!-- Header with gradient background -->
            <div class="bg-gradient-to-r from-teal-400 to-blue-500 rounded-3xl p-8 text-white shadow-2xl mb-12">
                <h1 class="text-2xl md:text-3xl font-bold text-center mb-4">
                    Cara Transaksi Paket di Teaching & Learning Certification
                </h1>
                <p class="text-center text-lg opacity-90">
                    Ikuti langkah-langkah mudah berikut untuk memulai sertifikasi Anda
                </p>
            </div>

            <!-- Main content container -->
            <div class="bg-white rounded-3xl shadow-2xl p-6 sm:p-8 md:p-10 border border-gray-200">

                <!-- Steps 1-4 -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-16">
                    <!-- Step 1 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-teal-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-play text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-teal-500 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            1
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Kunjungi tlc.com</h3>
                        <p class="text-gray-600 text-sm">Ketik TLC.com di browser</p>
                        <div class="flex justify-center mt-4">
                            <i class="fas fa-arrow-right text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-blue-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-check text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            2
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Pastikan kategori sesuai</h3>
                        <p class="text-gray-600 text-sm">Pilih kategori sesuai paket</p>
                        <div class="flex justify-center mt-4">
                            <i class="fas fa-arrow-right text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-green-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-shopping-cart text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            3
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Pilih produk TLC</h3>
                        <p class="text-gray-600 text-sm">Pilih produk TLC</p>
                        <div class="flex justify-center mt-4">
                            <i class="fas fa-arrow-right text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-purple-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-bookmark text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            4
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Pilih paket langganan</h3>
                        <p class="text-gray-600 text-sm">Pilih paket langganan</p>
                        <div class="flex justify-center mt-4">
                            <i class="fas fa-arrow-right text-gray-400"></i>
                        </div>
                    </div>
                </div>

                <!-- Steps 5-8 -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Step 5 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-red-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-file-alt text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            5
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Pilih kode diskon</h3>
                        <p class="text-gray-600 text-sm">Pilih kode diskon</p>
                        <div class="flex justify-center mt-4">
                            <i class="fas fa-arrow-right text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Step 6 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-orange-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-file-invoice text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            6
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Halaman draft invoice</h3>
                        <p class="text-gray-600 text-sm">Halaman draft invoice</p>
                        <div class="flex justify-center mt-4">
                            <i class="fas fa-arrow-right text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Step 7 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-pink-500 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-credit-card text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-pink-500 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            7
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Pilih metode pembayaran</h3>
                        <p class="text-gray-600 text-sm">Pilih metode pembayaran</p>
                        <div class="flex justify-center mt-4">
                            <i class="fas fa-arrow-right text-gray-400"></i>
                        </div>
                    </div>

                    <!-- Step 8 -->
                    <div class="step-card bg-gray-50 rounded-2xl p-6 text-center relative">
                        <div
                            class="w-16 h-16 bg-blue-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-download text-white text-2xl"></i>
                        </div>
                        <div
                            class="w-8 h-8 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold text-sm absolute top-4 right-4">
                            8
                        </div>
                        <h3 class="font-bold text-gray-800 mb-2">Lihat invoice pembayaran</h3>
                        <p class="text-gray-600 text-sm">Lihat invoice pembayaran</p>
                    </div>
                </div>
            </div>
            <style>
                .step-card {
                    transition: all 0.3s ease;
                }

                .step-card:hover {
                    transform: translateY(-2px);
                    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                }
            </style>
        </section>
        {{-- End Langkah Pembayaran --}}



        {{-- Tampilan Home Sebelumnya --}}
        {{-- <div class="w-full px-6 py-24 bg-gradient-to-br from-yellow-50 via-orange-100 to-yellow-100 text-gray-800">
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
            </div> --}}
        {{-- End Tampilan Home sebelumnya --}}

        {{-- Testimoni Sebelumnya --}}
        {{-- <section class="w-full py-16 px-6 bg-gray-50" id="testimonials">
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
        </section> --}}
        {{-- Testimoni Sebelumnya --}}

        {{-- pilih jalur Verifikasi --}}
        {{-- <section class="w-full py-20 px-6 bg-gradient-to-b from-white to-blue-50" id="sertifikasi">
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
        </section> --}}
        {{-- End pilih jalur Verifikasi --}}

        {{-- Tiga Langkah --}}
        {{-- <section class="relative w-full px-5 py-20 overflow-hidden bg-gradient-to-b from-white to-blue-50">
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
        </section> --}}
        {{-- End Tiga Langkah --}}

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
