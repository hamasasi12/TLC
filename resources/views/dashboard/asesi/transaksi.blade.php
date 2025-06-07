@extends('layouts.asesiDashboard')

@section('title', 'Teaching and Learning Certification')

@section('content')

    <section>
        {{-- Langkah Pembayaran --}}
        {{-- <section class="purchase-guide relative mt-32 max-w-6xl mx-auto px-4 py-12"
            style="background: #ffffff; border-radius: 20px; overflow: hidden;">

            <!-- Removed gradient background decoration -->

            <div class="bg-white rounded-3xl shadow-2xl p-6 sm:p-8 md:p-10 border border-gray-200 relative z-10"
                style="box-shadow: 0 20px 60px rgba(0,0,0,0.1), 0 10px 20px rgba(13,148,136,0.15);">

                <!-- Header with animation -->
                <div class="text-center mb-8 md:mb-10 relative">
                    <h1 class="text-xl sm:text-2xl md:text-3xl font-extrabold mb-4 relative"
                        style="background: linear-gradient(to right, #0d9488, #0ea5e9); -webkit-background-clip: text; background-clip: text; color: transparent; text-shadow: 0px 2px 4px rgba(0,0,0,0.1);">
                        Cara Trasaksi Paket di Teaching & Learning Certification
                    </h1>
                    <div class="h-1 w-20 mx-auto rounded-full"
                        style="background: linear-gradient(to right, #0d9488, #0ea5e9);"></div>
                    <div class="absolute -top-10 -right-10 w-20 h-20 rounded-full hidden md:block"
                        style="background: radial-gradient(circle, rgba(13,148,136,0.3) 0%, rgba(255,255,255,0) 70%);">
                    </div>
                    <div class="absolute -bottom-10 -left-10 w-20 h-20 rounded-full hidden md:block"
                        style="background: radial-gradient(circle, rgba(14,165,233,0.3) 0%, rgba(255,255,255,0) 70%);">
                    </div>
                </div>

                <!-- Step indicator 1-4 -->
                <div class="flex justify-between items-center px-0 sm:px-2 mb-6 md:mb-8 relative">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0d9488, #0ea5e9); box-shadow: 0 4px 10px rgba(13,148,136,0.4);">
                        1</div>

                    <div class="flex-1 h-1 sm:h-2 mx-1 sm:mx-2 rounded-full relative"
                        style="background: linear-gradient(90deg, #0d9488, #0ea5e9);">
                        <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-white opacity-30"></div>
                    </div>

                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0d9488, #0ea5e9); box-shadow: 0 4px 10px rgba(13,148,136,0.4);">
                        2</div>

                    <div class="flex-1 h-1 sm:h-2 mx-1 sm:mx-2 rounded-full relative"
                        style="background: linear-gradient(90deg, #0d9488, #0ea5e9);">
                        <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-white opacity-30"></div>
                    </div>

                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0d9488, #0ea5e9); box-shadow: 0 4px 10px rgba(13,148,136,0.4);">
                        3</div>

                    <div class="flex-1 h-1 sm:h-2 mx-1 sm:mx-2 rounded-full relative"
                        style="background: linear-gradient(90deg, #0d9488, #0ea5e9);">
                        <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-white opacity-30"></div>
                    </div>

                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0d9488, #0ea5e9); box-shadow: 0 4px 10px rgba(13,148,136,0.4);">
                        4</div>
                </div>

                <!-- Cards 1-4 - IMPROVED FOR BETTER IMAGE VISIBILITY -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-10 md:mb-14">
                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-teal-100 hover:border-teal-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal1.png" alt="Kunjungi tlc.com"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-teal-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-teal-500 text-white font-bold text-xs">
                                1
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Ketik TLC.com di browser</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0d9488, #0ea5e9);"></div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-blue-100 hover:border-blue-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal2.png" alt="Pilih kategori sesuai paket"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-blue-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-blue-500 text-white font-bold text-xs">
                                2
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Pastikan kategori sesuai</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0d9488, #0ea5e9);"></div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-green-100 hover:border-green-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal3.png" alt="Pilih produk Tlc"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-green-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-green-500 text-white font-bold text-xs">
                                3
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Pilih produk TLC</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0d9488, #0ea5e9);"></div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-yellow-100 hover:border-yellow-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal4.png" alt="Pilih paket langganan"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-yellow-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-yellow-500 text-white font-bold text-xs">
                                4
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Pilih paket langganan</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0d9488, #0ea5e9);"></div>
                        </div>
                    </div>
                </div>

                <!-- Step indicator 5-8 -->
                <div class="flex justify-between items-center px-0 sm:px-2 mb-6 md:mb-8 relative">
                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0ea5e9, #0d9488); box-shadow: 0 4px 10px rgba(14,165,233,0.4);">
                        5</div>

                    <div class="flex-1 h-1 sm:h-2 mx-1 sm:mx-2 rounded-full relative"
                        style="background: linear-gradient(90deg, #0ea5e9, #0d9488);">
                        <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-white opacity-30"></div>
                    </div>

                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0ea5e9, #0d9488); box-shadow: 0 4px 10px rgba(14,165,233,0.4);">
                        6</div>

                    <div class="flex-1 h-1 sm:h-2 mx-1 sm:mx-2 rounded-full relative"
                        style="background: linear-gradient(90deg, #0ea5e9, #0d9488);">
                        <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-white opacity-30"></div>
                    </div>

                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0ea5e9, #0d9488); box-shadow: 0 4px 10px rgba(14,165,233,0.4);">
                        7</div>

                    <div class="flex-1 h-1 sm:h-2 mx-1 sm:mx-2 rounded-full relative"
                        style="background: linear-gradient(90deg, #0ea5e9, #0d9488);">
                        <div class="absolute top-1/2 left-0 right-0 h-0.5 bg-white opacity-30"></div>
                    </div>

                    <div class="w-8 h-8 sm:w-10 sm:h-10 md:w-12 md:h-12 rounded-full flex items-center justify-center text-white font-bold text-sm sm:text-base md:text-lg relative z-10"
                        style="background: linear-gradient(135deg, #0ea5e9, #0d9488); box-shadow: 0 4px 10px rgba(14,165,233,0.4);">
                        8</div>
                </div>

                <!-- Cards 5-8 - IMPROVED FOR BETTER IMAGE VISIBILITY -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-red-100 hover:border-red-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal5.png" alt="Pilih kode diskon"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-red-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-red-500 text-white font-bold text-xs">
                                5
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Pilih kode diskon</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0ea5e9, #0d9488);"></div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-purple-100 hover:border-purple-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal6.png" alt="Halaman draft invoice"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-purple-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-purple-500 text-white font-bold text-xs">
                                6
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Halaman draft invoice</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0ea5e9, #0d9488);"></div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-pink-100 hover:border-pink-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal7.png" alt="Pilih metode pembayaran"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-pink-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-pink-500 text-white font-bold text-xs">
                                7
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Pilih metode pembayaran</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0ea5e9, #0d9488);"></div>
                        </div>
                    </div>

                    <div class="flex flex-col items-center group">
                        <div class="rounded-xl shadow-lg overflow-hidden mb-3 w-full h-56 sm:h-44 md:h-60 lg:h-64 relative border-2 border-orange-100 hover:border-orange-300 transition-all duration-300"
                            style="background: #ffffff;">
                            <div class="absolute inset-0 flex items-center justify-center p-3 md:p-4">
                                <img src="images/asal8.png" alt="Lihat invoice pembayaran"
                                    class="max-w-full max-h-full object-contain transform hover:scale-105 transition-transform duration-300"
                                    style="filter: drop-shadow(0 4px 6px rgba(0,0,0,0.15))" />
                            </div>
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-orange-500 to-transparent h-1/2 opacity-0 group-hover:opacity-20 transition-opacity">
                            </div>
                            <div
                                class="absolute top-2 right-2 w-6 h-6 rounded-full flex items-center justify-center bg-orange-500 text-white font-bold text-xs">
                                8
                            </div>
                        </div>
                        <div class="relative">
                            <p class="text-center font-bold text-gray-800 px-4 py-2 text-sm sm:text-base rounded-full"
                                style="background: #ffffff; border: 1px solid #e2e8f0;">
                                <span class="relative z-10">Lihat invoice pembayaran</span>
                            </p>
                            <div class="absolute -bottom-1 left-0 right-0 h-0.5 rounded-full"
                                style="background: linear-gradient(to right, #0ea5e9, #0d9488);"></div>
                        </div>
                    </div>
                </div>

                <!-- Removed decorative gradient elements -->
            </div>
        </section> --}}
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

        {{-- Checkout --}}
        {{-- <section class="checkout-section max-w-6xl mx-auto p-4 py-8">
            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-3xl font-bold text-gray-900">Checkout</h1>
                <p class="text-gray-500">Selesaikan pembelian Anda dengan aman</p>
            </div>

            <!-- Steps - Responsive for mobile -->
            <div class="flex items-center justify-between mb-10 relative">
                <div class="flex flex-col items-center z-10">
                    <div
                        class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-black text-white flex items-center justify-center font-bold transform hover:scale-110 transition text-sm md:text-base">
                        1</div>
                    <span class="mt-2 text-xs md:text-sm font-semibold">Keranjang</span>
                </div>
                <div class="h-0.5 bg-gray-300 absolute left-0 right-0 top-4 md:top-5 z-0"></div>
                <div class="flex flex-col items-center z-10">
                    <div
                        class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-gray-300 text-gray-700 flex items-center justify-center font-bold hover:bg-gray-400 transition text-sm md:text-base">
                        2</div>
                    <span class="mt-2 text-xs md:text-sm text-gray-500">Pemesanan</span>
                </div>
                <div class="flex flex-col items-center z-10">
                    <div
                        class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-gray-300 text-gray-700 flex items-center justify-center font-bold hover:bg-gray-400 transition text-sm md:text-base">
                        3</div>
                    <span class="mt-2 text-xs md:text-sm text-gray-500">Pembayaran</span>
                </div>
            </div>

            <!-- Main content grid - Responsive layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6">
                <!-- Cart Section -->
                <div class="lg:col-span-2">
                    <div
                        class="bg-white rounded-lg shadow-lg p-4 md:p-6 border border-gray-200 hover:shadow-xl transition">
                        <h2 class="text-xl font-bold mb-2 md:mb-4">Pilihan Paket</h2>
                        <p class="text-gray-500 text-xs md:text-sm mb-4 md:mb-6">Pilih paket yang sesuai dengan kebutuhan
                            Anda</p>

                        <!-- Package A - Responsive -->
                        <div
                            class="flex flex-row items-center p-3 md:p-4 mb-3 md:mb-4 border rounded-lg hover:bg-gray-50 transition">
                            <div class="w-16 h-16 md:w-24 md:h-24 mr-3 md:mr-4">
                                <img src="images/levela.png" alt="Paket A"
                                    class="w-full h-full object-cover rounded-lg" />
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col md:flex-row md:items-center justify-between">
                                    <div>
                                        <h3 class="text-base md:text-lg font-bold">Paket A</h3>
                                        <p class="text-gray-600 text-xs md:text-sm mt-1">Premium Audio Equipment Bundle</p>
                                    </div>
                                    <div class="mt-2 md:mt-0">
                                        <span class="font-bold text-base md:text-lg">Rp3.799.000</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end mt-2 md:mt-4">
                                    <button class="text-xs md:text-sm text-red-500 hover:text-red-700">Hapus</button>
                                </div>
                            </div>
                        </div>

                        <!-- Package B - Responsive -->
                        <div
                            class="flex flex-row items-center p-3 md:p-4 mb-3 md:mb-4 border rounded-lg hover:bg-gray-50 transition">
                            <div class="w-16 h-16 md:w-24 md:h-24 mr-3 md:mr-4">
                                <img src="images/levelb.png" alt="Paket B"
                                    class="w-full h-full object-cover rounded-lg" />
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col md:flex-row md:items-center justify-between">
                                    <div>
                                        <h3 class="text-base md:text-lg font-bold">Paket B</h3>
                                        <p class="text-gray-600 text-xs md:text-sm mt-1">Gaming System Complete Set</p>
                                    </div>
                                    <div class="mt-2 md:mt-0">
                                        <span class="font-bold text-base md:text-lg">Rp3.799.000</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end mt-2 md:mt-4">
                                    <button class="text-xs md:text-sm text-red-500 hover:text-red-700">Hapus</button>
                                </div>
                            </div>
                        </div>

                        <!-- Package C - Responsive -->
                        <div class="flex flex-row items-center p-3 md:p-4 border rounded-lg hover:bg-gray-50 transition">
                            <div class="w-16 h-16 md:w-24 md:h-24 mr-3 md:mr-4">
                                <img src="images/levelc.png" alt="Paket C"
                                    class="w-full h-full object-cover rounded-lg" />
                            </div>
                            <div class="flex-1">
                                <div class="flex flex-col md:flex-row md:items-center justify-between">
                                    <div>
                                        <h3 class="text-base md:text-lg font-bold">Paket C</h3>
                                        <p class="text-gray-600 text-xs md:text-sm mt-1">Smart Home Connectivity Bundle</p>
                                    </div>
                                    <div class="mt-2 md:mt-0">
                                        <span class="font-bold text-base md:text-lg">Rp3.799.000</span>
                                    </div>
                                </div>
                                <div class="flex items-center justify-end mt-2 md:mt-4">
                                    <button class="text-xs md:text-sm text-red-500 hover:text-red-700">Hapus</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary - Responsive -->
                <div class="lg:col-span-1">
                    <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 border border-gray-200 mb-4 md:mb-6">
                        <h2 class="text-lg md:text-xl font-bold mb-4 md:mb-6">Ringkasan Pesanan</h2>
                        <div class="space-y-3 md:space-y-4 mb-4 md:mb-6">
                            <div class="flex justify-between">
                                <span class="text-sm md:text-base text-gray-600">Paket A </span>
                                <span class="text-sm md:text-base">Rp3.799.000</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-sm md:text-base text-gray-600">Paket B </span>
                                <span class="text-sm md:text-base">Rp3.799.000</span>
                            </div>
                            
                            <div class="border-t border-gray-200 pt-3 md:pt-4">
                                <div class="flex justify-between">
                                    <span class="text-sm md:text-base text-gray-600">Subtotal</span>
                                    <span class="text-sm md:text-base">Rp11.397.000</span>
                                </div>
                                <div class="flex justify-between mt-2">
                                    <span class="text-sm md:text-base text-gray-600">Pajak (10%)</span>
                                    <span class="text-sm md:text-base">Rp1.139.700</span>
                                </div>
                            </div>
                            <div class="pt-3 md:pt-4 border-t border-gray-200 flex justify-between font-bold">
                                <span class="text-base md:text-lg">Total</span>
                                <span class="text-base md:text-lg">Rp12.536.700</span>
                            </div>
                        </div>
                        <button
                            class="w-full bg-black text-white py-2 md:py-3 rounded-md font-medium hover:bg-gray-800 transform hover:scale-105 transition text-sm md:text-base">
                            Lanjut ke Pengiriman
                        </button>
                    </div>

                    <!-- Promo Code Section - Responsive -->
                    <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 border border-gray-200">
                        <h2 class="text-base md:text-lg font-bold mb-3 md:mb-4">Punya Kode Promo?</h2>
                        <div class="flex gap-2">
                            <input type="text" placeholder="Masukkan kode"
                                class="flex-1 border border-gray-300 rounded-md px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-gray-200" />
                            <button
                                class="bg-white border border-gray-300 text-gray-800 px-3 py-2 rounded-md font-medium text-sm hover:bg-gray-50 transform hover:scale-105 transition">
                                Terapkan
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sticky Checkout Button for Mobile -->
            <div class="lg:hidden fixed bottom-0 left-0 right-0 bg-white p-4 border-t border-gray-200 shadow-lg">
                <div class="flex justify-between items-center mb-3">
                    <span class="font-bold">Total:</span>
                    <span class="font-bold text-lg">Rp12.536.700</span>
                </div>
                <button class="w-full bg-black text-white py-3 rounded-md font-medium">
                    Lanjut ke Pengiriman
                </button>
            </div>
        </section> --}}
        {{-- End Checkout --}}

        {{-- Riwayat Transaksi --}}
        <section class="max-w-6xl mx-auto px-6 py-8">
            <!-- Header with gradient background -->
            <div class="gradient-bg rounded-2xl p-8 mb-8 text-white">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="bg-white bg-opacity-20 rounded-xl p-3">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold">Riwayat Transaksi</h1>
                            <p class="text-blue-100 mt-1">Daftar riwayat transaksi yang telah Anda lakukan</p>
                        </div>
                    </div>
                    <button
                        class="bg-white bg-opacity-20 hover:bg-opacity-30 px-6 py-3 rounded-xl transition-all duration-200 flex items-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                            </path>
                        </svg>
                        Filter
                    </button>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <!-- Total Transaksi -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Total Transaksi</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">3</p>
                            <div class="flex items-center mt-2">
                                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span class="text-green-500 text-sm font-medium">+12%</span>
                            </div>
                        </div>
                        <div class="bg-blue-500 rounded-2xl p-4">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-5 14H7v-2h7v2zm3-4H7v-2h10v2zm0-4H7V7h10v2z" />
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Transaksi Sukses -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Transaksi Sukses</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">1</p>
                            <div class="flex items-center mt-2">
                                <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                </svg>
                                <span class="text-green-500 text-sm font-medium">+8%</span>
                            </div>
                        </div>
                        <div class="bg-green-500 rounded-2xl p-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Menunggu Pembayaran -->
                <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 card-hover">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-gray-500 text-sm font-medium">Menunggu Pembayaran</p>
                            <p class="text-3xl font-bold text-gray-800 mt-2">2</p>
                        </div>
                        <div class="bg-orange-500 rounded-2xl p-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Search and Filter -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100 mb-6">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div class="relative flex-1 max-w-md">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <input type="text"
                            class="pl-12 pr-4 py-3 w-full border border-gray-200 rounded-xl focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200"
                            placeholder="Cari transaksi...">
                    </div>
                    <select
                        class="border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-purple-500 focus:border-purple-500 transition-all duration-200 bg-white">
                        <option>Semua Status</option>
                        <option>Success</option>
                        <option>Waiting to Pay</option>
                        <option>Waiting to Validate</option>
                    </select>
                </div>
            </div>

            <!-- Transaction Table -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <!-- Table Header -->
                <div class="bg-gray-50 px-6 py-4">
                    <div class="grid grid-cols-12 gap-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
                        <div class="col-span-1">No.</div>
                        <div class="col-span-2">Level Sertifikasi</div>
                        <div class="col-span-2">Harga</div>
                        <div class="col-span-3">Tanggal</div>
                        <div class="col-span-2">Status</div>
                        <div class="col-span-2">Aksi</div>
                    </div>
                </div>

                <!-- Table Body -->
                <div class="divide-y divide-gray-100">
                    <!-- Row 1 -->
                    <div class="px-6 py-6 hover:bg-gray-50 transition-colors duration-200">
                        <div class="grid grid-cols-12 gap-4 items-center">
                            <div class="col-span-1">
                                <span class="text-blue-600 font-semibold text-lg">1</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-gray-800 font-medium">Level A</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-green-600 font-semibold">Rp 300,000</span>
                            </div>
                            <div class="col-span-3">
                                <span class="text-gray-500">22 Feb 2022, 10:50 WIB</span>
                            </div>
                            <div class="col-span-2">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full status-waiting-validate">
                                    Waiting to Validate
                                </span>
                            </div>
                            <div class="col-span-2">
                                <button
                                    class="btn-pay text-white px-6 py-2 rounded-xl text-sm font-semibold transition-all duration-200 hover:shadow-lg transform hover:-translate-y-1 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M2 17h20v2H2zm1.15-4.05L4 11l.85 1.95.45-.2C5.8 12.16 6.28 12 7 12s1.2.16 1.7.75l.45.2L10 11l.85 1.95.45-.2c.5-.59.98-.75 1.7-.75s1.2.16 1.7.75l.45.2L16 11l.85 1.95.45-.2c.5-.59.98-.75 1.7-.75.72 0 1.2.16 1.7.75l.45.2L22 11v4.5c0 .83-.67 1.5-1.5 1.5h-17C2.67 17 2 16.33 2 15.5V11l.85 1.95.3-.15c.5-.59.98-.8 1.7-.8.72 0 1.2.21 1.7.8l.3.15-.7-.1z" />
                                    </svg>
                                    Pay
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Row 2 -->
                    <div class="px-6 py-6 hover:bg-gray-50 transition-colors duration-200">
                        <div class="grid grid-cols-12 gap-4 items-center">
                            <div class="col-span-1">
                                <span class="text-blue-600 font-semibold text-lg">2</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-gray-800 font-medium">Level B</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-green-600 font-semibold">Rp 300,000</span>
                            </div>
                            <div class="col-span-3">
                                <span class="text-gray-500">22 Feb 2022, 10:50 WIB</span>
                            </div>
                            <div class="col-span-2">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full status-waiting-pay">
                                    Waiting to Pay
                                </span>
                            </div>
                            <div class="col-span-2">
                                <button
                                    class="btn-pay text-white px-6 py-2 rounded-xl text-sm font-semibold transition-all duration-200 hover:shadow-lg transform hover:-translate-y-1 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M2 17h20v2H2zm1.15-4.05L4 11l.85 1.95.45-.2C5.8 12.16 6.28 12 7 12s1.2.16 1.7.75l.45.2L10 11l.85 1.95.45-.2c.5-.59.98-.75 1.7-.75s1.2.16 1.7.75l.45.2L16 11l.85 1.95.45-.2c.5-.59.98-.75 1.7-.75.72 0 1.2.16 1.7.75l.45.2L22 11v4.5c0 .83-.67 1.5-1.5 1.5h-17C2.67 17 2 16.33 2 15.5V11l.85 1.95.3-.15c.5-.59.98-.8 1.7-.8.72 0 1.2.21 1.7.8l.3.15-.7-.1z" />
                                    </svg>
                                    Pay
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Row 3 -->
                    <div class="px-6 py-6 hover:bg-gray-50 transition-colors duration-200">
                        <div class="grid grid-cols-12 gap-4 items-center">
                            <div class="col-span-1">
                                <span class="text-blue-600 font-semibold text-lg">3</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-gray-800 font-medium">Level C</span>
                            </div>
                            <div class="col-span-2">
                                <span class="text-green-600 font-semibold">Rp 300,000</span>
                            </div>
                            <div class="col-span-3">
                                <span class="text-gray-500">22 Feb 2022, 10:50 WIB</span>
                            </div>
                            <div class="col-span-2">
                                <span class="px-3 py-1 text-xs font-semibold rounded-full status-success">
                                    Success
                                </span>
                            </div>
                            <div class="col-span-2">
                                <button
                                    class="btn-invoice text-white px-6 py-2 rounded-xl text-sm font-semibold transition-all duration-200 hover:shadow-lg transform hover:-translate-y-1 flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                    Invoice
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                // Add loading state animation when buttons are clicked
                document.querySelectorAll('button').forEach(button => {
                    button.addEventListener('click', function() {
                        if (this.innerHTML.includes('Pay') || this.innerHTML.includes('Invoice')) {
                            const originalHTML = this.innerHTML;
                            this.innerHTML =
                                '<span class="inline-flex items-center gap-2"><svg class="animate-spin h-4 w-4" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>Processing...</span>';
                            setTimeout(() => {
                                this.innerHTML = originalHTML;
                            }, 1500);
                        }
                    });
                });

                // Add smooth scrolling and responsive behavior
                window.addEventListener('resize', function() {
                    // Handle responsive adjustments if needed
                });
            </script>
            <style>
                .gradient-bg {
                    background: linear-gradient(135deg, #4F46E5 0%, #7C3AED 50%, #A855F7 100%);
                }

                .card-hover {
                    transition: all 0.3s ease;
                }

                .card-hover:hover {
                    transform: translateY(-2px);
                }

                .status-waiting-validate {
                    background-color: #FEF3C7;
                    color: #92400E;
                }

                .status-waiting-pay {
                    background-color: #DBEAFE;
                    color: #1E40AF;
                }

                .status-success {
                    background-color: #D1FAE5;
                    color: #065F46;
                }

                .btn-pay {
                    background: linear-gradient(135deg, #3B82F6, #1D4ED8);
                }

                .btn-pay:hover {
                    background: linear-gradient(135deg, #1D4ED8, #1E3A8A);
                }

                .btn-invoice {
                    background: linear-gradient(135deg, #6B7280, #374151);
                }

                .btn-invoice:hover {
                    background: linear-gradient(135deg, #374151, #1F2937);
                }
            </style>
        </section>
        {{-- <section
            class="max-w-6xl mx-auto px-6 py-12 bg-white shadow-xl rounded-2xl border border-gray-100 mt-8 mb-8 transform transition-all">
            <!-- Header with gradient accent -->
            <div class="relative pb-2">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500">
                </div>
                <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-3">
                    <span class="w-2 h-8 bg-blue-500 rounded-md"></span>Riwayat Transaksi
                </h2>
                <p class="text-gray-500 mt-2 ml-5">Daftar riwayat transaksi yang telah Anda lakukan</p>
            </div>

            <!-- Summary Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 my-8">
                <div
                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 transition duration-300 hover:shadow-lg hover:-translate-y-1">
                    <h3 class="text-gray-500 font-semibold">Total Transaksi</h3>
                    <p class="text-2xl font-bold text-gray-800 mt-2">3</p>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 transition duration-300 hover:shadow-lg hover:-translate-y-1">
                    <h3 class="text-gray-500 font-semibold">Transaksi Sukses</h3>
                    <p class="text-2xl font-bold text-green-600 mt-2">1</p>
                </div>
                <div
                    class="bg-white rounded-xl p-6 shadow-md border border-gray-100 transition duration-300 hover:shadow-lg hover:-translate-y-1">
                    <h3 class="text-gray-500 font-semibold">Menunggu Pembayaran</h3>
                    <p class="text-2xl font-bold text-blue-600 mt-2">2</p>
                </div>
            </div>

            <!-- Search and Filters -->
            <div class="flex flex-col md:flex-row md:justify-between mb-6 gap-4">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text"
                        class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full md:w-64 text-sm"
                        placeholder="Cari transaksi...">
                </div>
                <div class="flex flex-wrap gap-3">
                    <select
                        class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <option>Semua Status</option>
                        <option>Success</option>
                        <option>Waiting to Pay</option>
                        <option>Waiting to Validate</option>
                    </select>
                    <select
                        class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm">
                        <option>Semua Level</option>
                        <option>Level A</option>
                        <option>Level B</option>
                        <option>Level C</option>
                    </select>
                </div>
            </div>

            <!-- Transaction Table -->
            <div class="overflow-x-auto rounded-xl shadow-md border border-gray-100">
                <table class="w-full">
                    <thead class="bg-gray-50">
                        <tr>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                                No.
                            </th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                                Level Sertifikasi
                            </th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                                Harga
                            </th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                                Tanggal
                            </th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                                Status
                            </th>
                            <th
                                class="px-6 py-4 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                1
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Level A
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                Rp 300,000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                22 Feb 2022, 10:50 WIB
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    Waiting to Validate
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                -
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                2
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Level B
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                Rp 300,000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                22 Feb 2022, 10:50 WIB
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                    Waiting to Pay
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <button
                                    class="bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white text-sm px-5 py-2 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-1">
                                    Pay
                                </button>
                            </td>
                        </tr>

                        <tr class="hover:bg-gray-50 transition-colors">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-blue-600">
                                3
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                Level C
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                Rp 300,000
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                22 Feb 2022, 10:50 WIB
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                    Success
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-center">
                                <button
                                    class="bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white text-sm px-5 py-2 rounded-lg shadow-md hover:shadow-lg transition-all duration-200 transform hover:-translate-y-1">
                                    Invoice
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="flex items-center justify-between mt-6">
                <div class="flex items-center text-gray-500 text-sm">
                    Showing <span class="font-medium mx-1">1</span> to <span class="font-medium mx-1">3</span> of <span
                        class="font-medium mx-1">3</span> results
                </div>
                <div class="flex gap-2">
                    <button disabled class="px-3 py-1 border border-gray-300 rounded bg-gray-100 text-gray-400">
                        Previous
                    </button>
                    <button class="px-3 py-1 border border-gray-300 rounded bg-blue-500 text-white">
                        1
                    </button>
                    <button disabled class="px-3 py-1 border border-gray-300 rounded bg-gray-100 text-gray-400">
                        Next
                    </button>
                </div>
            </div>
            <script>
                // Add a loading state animation when buttons are clicked
                document.querySelectorAll('button').forEach(button => {
                    button.addEventListener('click', function() {
                        if (this.innerHTML === 'Pay' || this.innerHTML === 'Invoice') {
                            const originalText = this.innerHTML;
                            this.innerHTML = '<span class="inline-block animate-pulse">Processing...</span>';
                            setTimeout(() => {
                                this.innerHTML = originalText;
                            }, 1500);
                        }
                    });
                });
            </script>
        </section> --}}
        {{-- <section class="max-w-7xl mx-auto">
            <!-- Header with gradient background -->
            <div class="bg-gradient-to-r from-blue-500 via-purple-600 to-purple-700 rounded-t-2xl p-8 text-white">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="bg-white bg-opacity-20 rounded-lg p-3">
                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                <path fill-rule="evenodd"
                                    d="M4 5a2 2 0 012-2v1a1 1 0 102 0V3h6v1a1 1 0 102 0V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-3xl font-bold">Riwayat Transaksi</h1>
                            <p class="text-blue-100 mt-1">Daftar riwayat transaksi yang telah Anda lakukan</p>
                        </div>
                    </div>
                    <button
                        class="bg-white bg-opacity-20 hover:bg-opacity-30 px-6 py-3 rounded-lg flex items-center gap-2 transition-all">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Filter
                    </button>
                </div>
            </div>

            <!-- Summary Cards -->
            <div class="bg-white rounded-b-2xl shadow-xl p-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <!-- Total Transaksi Card -->
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-6 border border-blue-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Total Transaksi</p>
                                <p class="text-3xl font-bold text-gray-800 mt-2">3</p>
                                <p class="text-green-600 text-sm font-medium mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    +12%
                                </p>
                            </div>
                            <div class="bg-blue-500 rounded-2xl p-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                                    <path fill-rule="evenodd"
                                        d="M4 5a2 2 0 012-2v1a1 1 0 102 0V3h6v1a1 1 0 102 0V3a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 01-2-2V5z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Transaksi Sukses Card -->
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-6 border border-green-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Transaksi Sukses</p>
                                <p class="text-3xl font-bold text-gray-800 mt-2">1</p>
                                <p class="text-green-600 text-sm font-medium mt-1 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    +8%
                                </p>
                            </div>
                            <div class="bg-green-500 rounded-2xl p-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Menunggu Pembayaran Card -->
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-6 border border-orange-200">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600 text-sm font-medium">Menunggu Pembayaran</p>
                                <p class="text-3xl font-bold text-gray-800 mt-2">2</p>
                            </div>
                            <div class="bg-orange-500 rounded-2xl p-4">
                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Search and Filter Bar -->
                <div class="flex flex-col lg:flex-row justify-between items-center gap-4 mb-8">
                    <div class="relative flex-1 max-w-md">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input type="text"
                            class="pl-12 pr-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 block w-full text-sm bg-gray-50"
                            placeholder="Cari transaksi...">
                    </div>
                    <div class="flex gap-3">
                        <select
                            class="border border-gray-200 rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 text-sm bg-gray-50 min-w-[150px]">
                            <option>Semua Status</option>
                            <option>Success</option>
                            <option>Waiting to Pay</option>
                            <option>Waiting to Validate</option>
                        </select>
                    </div>
                </div>

                <!-- Transaction Table -->
                <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden">
                    <table class="w-full">
                        <thead class="bg-gray-50">
                            <tr>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    No.</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Level Sertifikasi</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Harga</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Tanggal</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Status</th>
                                <th
                                    class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-semibold text-blue-600">1</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-medium text-gray-800">Level A</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-semibold text-green-600">Rp 300,000</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-600">22 Feb 2022, 10:50 WIB</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        Waiting to Validate
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded-lg font-medium transition-colors flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4z"></path>
                                            <path d="M6 6a2 2 0 012-2h8a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V6z">
                                            </path>
                                        </svg>
                                        Pay
                                    </button>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-semibold text-blue-600">2</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-medium text-gray-800">Level B</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-semibold text-green-600">Rp 300,000</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-600">22 Feb 2022, 10:50 WIB</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        Waiting to Pay
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button
                                        class="bg-blue-500 hover:bg-blue-600 text-white text-sm px-4 py-2 rounded-lg font-medium transition-colors flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4z"></path>
                                            <path d="M6 6a2 2 0 012-2h8a2 2 0 012 2v6a2 2 0 01-2 2H8a2 2 0 01-2-2V6z">
                                            </path>
                                        </svg>
                                        Pay
                                    </button>
                                </td>
                            </tr>

                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-semibold text-blue-600">3</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-medium text-gray-800">Level C</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm font-semibold text-green-600">Rp 300,000</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="text-sm text-gray-600">22 Feb 2022, 10:50 WIB</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Success
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <button
                                        class="bg-gray-500 hover:bg-gray-600 text-white text-sm px-4 py-2 rounded-lg font-medium transition-colors flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Invoice
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <script>
                // Add loading state animation when buttons are clicked
                document.querySelectorAll('button').forEach(button => {
                    button.addEventListener('click', function() {
                        if (this.innerHTML.includes('Pay') || this.innerHTML.includes('Invoice')) {
                            const originalHTML = this.innerHTML;
                            this.innerHTML = '<span class="inline-block animate-pulse">Processing...</span>';
                            this.disabled = true;
                            setTimeout(() => {
                                this.innerHTML = originalHTML;
                                this.disabled = false;
                            }, 1500);
                        }
                    });
                });
            </script>
        </section> --}}
        {{-- End Riwayat trasanksi --}}

        {{-- Metode Pembayaran --}}
        {{-- <section class="max-w-6xl mx-auto px-6 py-12 bg-white shadow-lg rounded-2xl border border-gray-100 mt-8 mb-8">
            <!-- Header with subtle accent -->
            <div class="relative pb-2 mb-8">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500">
                </div>
                <h2 class="text-3xl font-bold text-gray-800 flex items-center gap-3">
                    <span class="w-2 h-8 bg-indigo-500 rounded-md"></span>Metode Pembayaran
                </h2>
                <p class="text-gray-500 mt-2 ml-5">Pilih metode pembayaran yang paling nyaman untuk Anda</p>
            </div>

            <!-- Featured Payment Methods with Dropdown -->
            <div class="grid grid-cols-1 gap-6 mb-8">
                <!-- Bank Transfer Dropdown -->
                <div
                    class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="dropdown-header flex items-center justify-between p-6 cursor-pointer"
                        onclick="toggleDropdown('bankTransfer')">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-blue-50 rounded-lg shadow-sm flex items-center justify-center mr-4 overflow-hidden">
                                <img src="images/logibanktf.png" alt="Bank Transfer"
                                    class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg">Bank Transfer</h3>
                                <p class="text-sm text-gray-600">Transfer melalui ATM, Internet Banking, atau Mobile
                                    Banking</p>
                            </div>
                        </div>
                        <div
                            class="dropdown-icon w-8 h-8 bg-blue-50 rounded-full shadow-sm flex items-center justify-center text-blue-500 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div id="bankTransfer" class="dropdown-content p-6 pt-0 hidden bg-white border-t border-gray-100">
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-16 h-10 mb-2 overflow-hidden flex items-center justify-center bg-white rounded-lg shadow-sm p-2 border border-gray-100">
                                    <img src="/api/placeholder/64/40" alt="BCA"
                                        class="object-contain w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">Bank BCA</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-16 h-10 mb-2 overflow-hidden flex items-center justify-center bg-white rounded-lg shadow-sm p-2 border border-gray-100">
                                    <img src="/api/placeholder/64/40" alt="BNI"
                                        class="object-contain w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">Bank BNI</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-16 h-10 mb-2 overflow-hidden flex items-center justify-center bg-white rounded-lg shadow-sm p-2 border border-gray-100">
                                    <img src="/api/placeholder/64/40" alt="BRI"
                                        class="object-contain w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">Bank BRI</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-16 h-10 mb-2 overflow-hidden flex items-center justify-center bg-white rounded-lg shadow-sm p-2 border border-gray-100">
                                    <img src="/api/placeholder/64/40" alt="BSI"
                                        class="object-contain w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">Bank Syariah</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-16 h-10 mb-2 overflow-hidden flex items-center justify-center bg-white rounded-lg shadow-sm p-2 border border-gray-100">
                                    <img src="/api/placeholder/64/40" alt="Mandiri"
                                        class="object-contain w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">Bank Mandiri</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- E-Wallet Dropdown -->
                <div
                    class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="dropdown-header flex items-center justify-between p-6 cursor-pointer"
                        onclick="toggleDropdown('eWallet')">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-purple-50 rounded-lg shadow-sm flex items-center justify-center mr-4 overflow-hidden">
                                <img src="images/ewallet.png" alt="E-Wallet" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg">E-Wallet</h3>
                                <p class="text-sm text-gray-600">Bayar dengan e-wallet favorit Anda untuk proses instan</p>
                            </div>
                        </div>
                        <div
                            class="dropdown-icon w-8 h-8 bg-purple-50 rounded-full shadow-sm flex items-center justify-center text-purple-500 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div id="eWallet" class="dropdown-content p-6 pt-0 hidden bg-white border-t border-gray-100">
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-4">
                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-12 h-12 mb-2 overflow-hidden rounded-full bg-white shadow-sm p-2 flex items-center justify-center border border-gray-100">
                                    <img src="/api/placeholder/48/48" alt="GoPay"
                                        class="object-cover w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">GoPay</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-12 h-12 mb-2 overflow-hidden rounded-full bg-white shadow-sm p-2 flex items-center justify-center border border-gray-100">
                                    <img src="/api/placeholder/48/48" alt="OVO"
                                        class="object-cover w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">OVO</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-12 h-12 mb-2 overflow-hidden rounded-full bg-white shadow-sm p-2 flex items-center justify-center border border-gray-100">
                                    <img src="/api/placeholder/48/48" alt="Dana"
                                        class="object-cover w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">Dana</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-12 h-12 mb-2 overflow-hidden rounded-full bg-white shadow-sm p-2 flex items-center justify-center border border-gray-100">
                                    <img src="/api/placeholder/48/48" alt="LinkAja"
                                        class="object-cover w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">LinkAja</p>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex flex-col items-center">
                                <div
                                    class="w-12 h-12 mb-2 overflow-hidden rounded-full bg-white shadow-sm p-2 flex items-center justify-center border border-gray-100">
                                    <img src="/api/placeholder/48/48" alt="ShopeePay"
                                        class="object-cover w-full h-full" />
                                </div>
                                <p class="text-xs text-gray-600 font-medium">ShopeePay</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- QRIS Dropdown -->
                <div
                    class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="dropdown-header flex items-center justify-between p-6 cursor-pointer"
                        onclick="toggleDropdown('qris')">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-amber-50 rounded-lg shadow-sm flex items-center justify-center mr-4 overflow-hidden">
                                <img src="images/qris.png" alt="QRIS" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg">QRIS</h3>
                                <p class="text-sm text-gray-600">Scan kode QR untuk pembayaran dari aplikasi apapun</p>
                            </div>
                        </div>
                        <div
                            class="dropdown-icon w-8 h-8 bg-amber-50 rounded-full shadow-sm flex items-center justify-center text-amber-500 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div id="qris" class="dropdown-content p-6 pt-0 hidden bg-white border-t border-gray-100">
                        <div class="flex flex-col md:flex-row items-center gap-6">
                            <div
                                class="p-4 bg-gray-50 rounded-xl border border-gray-100 flex items-center justify-center w-full md:w-1/2 h-64">
                                <div class="w-48 h-48 bg-white p-4 rounded-lg shadow-md flex items-center justify-center">
                                    <img src="/api/placeholder/160/160" alt="QRIS Code"
                                        class="w-full h-full object-contain" />
                                </div>
                            </div>
                            <div class="w-full md:w-1/2 p-4">
                                <h4 class="font-bold text-gray-800 mb-4">Cara Pembayaran dengan QRIS:</h4>
                                <ol class="space-y-3">
                                    <li class="flex items-start">
                                        <span
                                            class="w-6 h-6 bg-amber-500 text-white rounded-full flex items-center justify-center mr-3 flex-shrink-0">1</span>
                                        <p class="text-sm text-gray-600">Buka aplikasi e-wallet atau m-banking Anda</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span
                                            class="w-6 h-6 bg-amber-500 text-white rounded-full flex items-center justify-center mr-3 flex-shrink-0">2</span>
                                        <p class="text-sm text-gray-600">Pilih menu Scan QR atau QRIS</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span
                                            class="w-6 h-6 bg-amber-500 text-white rounded-full flex items-center justify-center mr-3 flex-shrink-0">3</span>
                                        <p class="text-sm text-gray-600">Scan kode QR di samping</p>
                                    </li>
                                    <li class="flex items-start">
                                        <span
                                            class="w-6 h-6 bg-amber-500 text-white rounded-full flex items-center justify-center mr-3 flex-shrink-0">4</span>
                                        <p class="text-sm text-gray-600">Periksa detail transaksi dan konfirmasi pembayaran
                                        </p>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mini Market Dropdown -->
                <div
                    class="bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden hover:shadow-lg transition-shadow">
                    <div class="dropdown-header flex items-center justify-between p-6 cursor-pointer"
                        onclick="toggleDropdown('miniMarket')">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-green-50 rounded-lg shadow-sm flex items-center justify-center mr-4 overflow-hidden">
                                <img src="images/minimarket.png" alt="Mini Market" class="w-full h-full object-cover" />
                            </div>
                            <div>
                                <h3 class="font-bold text-gray-800 text-lg">Mini Market</h3>
                                <p class="text-sm text-gray-600">Bayar di Alfamart, Indomaret, atau minimarket terdekat</p>
                            </div>
                        </div>
                        <div
                            class="dropdown-icon w-8 h-8 bg-green-50 rounded-full shadow-sm flex items-center justify-center text-green-500 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>
                    <div id="miniMarket" class="dropdown-content p-6 pt-0 hidden bg-white border-t border-gray-100">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex items-center">
                                <div
                                    class="w-16 h-10 mb-0 overflow-hidden flex items-center justify-center bg-white rounded-lg shadow-sm p-2 mr-4 border border-gray-100">
                                    <img src="/api/placeholder/64/40" alt="Alfamart"
                                        class="object-contain w-full h-full" />
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">Alfamart</p>
                                    <p class="text-xs text-gray-600 mt-1">Tersedia di 10.000+ gerai di seluruh Indonesia
                                    </p>
                                </div>
                            </div>

                            <div
                                class="p-4 rounded-xl hover:bg-gray-50 transition-colors cursor-pointer flex items-center">
                                <div
                                    class="w-16 h-10 mb-0 overflow-hidden flex items-center justify-center bg-white rounded-lg shadow-sm p-2 mr-4 border border-gray-100">
                                    <img src="/api/placeholder/64/40" alt="Indomaret"
                                        class="object-contain w-full h-full" />
                                </div>
                                <div>
                                    <p class="font-medium text-gray-800">Indomaret</p>
                                    <p class="text-xs text-gray-600 mt-1">Tersedia di 15.000+ gerai di seluruh Indonesia
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recently Used Payment Methods -->
            <div class="mt-12">
                <h3 class="text-lg font-bold text-gray-800 mb-6 flex items-center">
                    <span class="w-1 h-6 bg-indigo-500 rounded-md mr-2"></span>
                    Metode Pembayaran Terakhir Digunakan
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div
                        class="bg-white rounded-xl p-6 shadow-md border border-gray-200 transition duration-300 hover:shadow-xl group cursor-pointer">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-white border border-blue-100 rounded-xl shadow-sm flex items-center justify-center mr-4 overflow-hidden group-hover:scale-110 transition-transform">
                                <img src="images/bca.png" alt="BCA" class="w-8 h-8 object-contain" />
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">Bank Transfer - BCA</p>
                                <p class="text-xs text-gray-400 mt-1">Terakhir digunakan 2 hari yang lalu</p>
                            </div>
                            <div class="ml-auto flex items-center">
                                <span class="bg-blue-100 text-blue-800 text-xs py-1 px-2 rounded-full mr-3">Cepat</span>
                                <button
                                    class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-lg text-sm transition-colors shadow-md hover:shadow-lg">
                                    Gunakan
                                </button>
                            </div>
                        </div>
                    </div>

                    <div
                        class="bg-white rounded-xl p-6 shadow-md border border-gray-200 transition duration-300 hover:shadow-xl group cursor-pointer">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-white border border-green-100 rounded-xl shadow-sm flex items-center justify-center mr-4 overflow-hidden group-hover:scale-110 transition-transform">
                                <img src="images/ewallet.png" alt="GoPay" class="w-8 h-8 object-contain" />
                            </div>
                            <div>
                                <p class="text-sm text-gray-600">E-Wallet - GoPay</p>
                                <p class="text-xs text-gray-400 mt-1">Terakhir digunakan 1 minggu yang lalu</p>
                            </div>
                            <div class="ml-auto flex items-center">
                                <span class="bg-green-100 text-green-800 text-xs py-1 px-2 rounded-full mr-3">Instan</span>
                                <button
                                    class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-lg text-sm transition-colors shadow-md hover:shadow-lg">
                                    Gunakan
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Promotional Banner -->
            <div class="mt-12">
                <h3 class="text-lg font-bold text-gray-800 mb-6 flex items-center">
                    <span class="w-1 h-6 bg-amber-500 rounded-md mr-2"></span>
                    Promo Spesial
                </h3>
                <div class="bg-white rounded-xl overflow-hidden shadow-lg border border-amber-200 relative">
                    <!-- Abstract pattern background -->
                    <div class="absolute inset-0 overflow-hidden opacity-5">
                        <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="smallGrid" width="10" height="10" patternUnits="userSpaceOnUse">
                                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor"
                                        stroke-width="0.5" />
                                </pattern>
                                <pattern id="grid" width="80" height="80" patternUnits="userSpaceOnUse">
                                    <rect width="80" height="80" fill="url(#smallGrid)" />
                                    <path d="M 80 0 L 0 0 0 80" fill="none" stroke="currentColor" stroke-width="1" />
                                </pattern>
                            </defs>
                            <rect width="100%" height="100%" fill="url(#grid)" stroke="currentColor"
                                stroke-width="1.5" class="text-amber-500" />
                        </svg>
                    </div>
                    <div class="flex flex-col md:flex-row p-6 md:p-8 relative z-10">
                        <div class="md:w-2/3">
                            <span
                                class="inline-block bg-amber-500 text-white text-xs font-bold px-3 py-1 rounded-full mb-4">Promo
                                Terbatas</span>
                            <h4 class="text-2xl font-bold text-gray-800 mb-2">Diskon 15% untuk Pembayaran via QRIS</h4>
                            <p class="text-gray-600 mb-6">Gunakan metode pembayaran QRIS dan dapatkan potongan harga
                                langsung hingga Rp100.000</p>
                            <div class="flex items-center gap-4">
                                <button
                                    class="bg-amber-500 hover:bg-amber-600 text-white px-6 py-3 rounded-lg shadow-md hover:shadow-lg transition-all font-semibold">
                                    Gunakan Sekarang
                                </button>
                                <div class="flex items-center gap-2 text-gray-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <span class="text-sm">Berlaku hingga 30 April 2025</span>
                                </div>
                            </div>
                        </div>
                        <div class="md:w-1/3 flex items-center justify-center mt-6 md:mt-0">
                            <div
                                class="w-24 h-24 md:w-32 md:h-32 bg-white rounded-full shadow-lg flex items-center justify-center border-4 border-amber-100">
                                <div
                                    class="bg-amber-500 rounded-full w-20 h-20 md:w-24 md:h-24 flex items-center justify-center text-white text-2xl md:text-4xl font-bold">
                                    15%
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                function toggleDropdown(id) {
                    const content = document.getElementById(id);
                    const header = content.previousElementSibling;
                    const icon = header.querySelector('.dropdown-icon');

                    // Close all other dropdowns first
                    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
                        if (dropdown.id !== id && !dropdown.classList.contains('hidden')) {
                            dropdown.classList.add('hidden');
                            const otherHeader = dropdown.previousElementSibling;
                            const otherIcon = otherHeader.querySelector('.dropdown-icon');
                            otherIcon.style.transform = 'rotate(0deg)';
                        }
                    });

                    // Toggle current dropdown
                    if (content.classList.contains('hidden')) {
                        content.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';

                        // Add active state to header
                        header.classList.add('bg-gray-50');
                    } else {
                        content.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';

                        // Remove active state from header
                        header.classList.remove('bg-gray-50');
                    }
                }

                // Add a ripple effect to buttons
                document.querySelectorAll('button').forEach(button => {
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

                // Add hover effect to payment options
                document.querySelectorAll('.cursor-pointer').forEach(item => {
                    if (!item.classList.contains('dropdown-header')) {
                        item.addEventListener('mouseenter', function() {
                            this.classList.add('transform');
                            this.classList.add('translate-y-1');
                        });

                        item.addEventListener('mouseleave', function() {
                            this.classList.remove('transform');
                            this.classList.remove('translate-y-1');
                        });
                    }
                });

                // Auto-open the first dropdown for demo purposes
                window.addEventListener('load', function() {
                    setTimeout(() => {
                        toggleDropdown('bankTransfer');
                    }, 500);
                });
            </script>

            <style>
                .ripple {
                    position: absolute;
                    background-color: rgba(255, 255, 255, 0.7);
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

                button {
                    position: relative;
                    overflow: hidden;
                }

                .dropdown-content {
                    max-height: 0;
                    overflow: hidden;
                    transition: max-height 0.3s ease;
                }

                .dropdown-content:not(.hidden) {
                    max-height: 1000px;
                }
            </style>
        </section> --}}
        {{-- End Metode Pembayaran --}}

    </section>

@endsection
