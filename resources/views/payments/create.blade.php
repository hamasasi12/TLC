@extends('layouts.asesiDashboard')

@section('content')
    <div class="container mx-auto px-4 py-8 max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Left Content -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Hero Banner -->
                <div
                    class="bg-gradient-to-r from-teal-400 to-teal-500 rounded-2xl p-6 md:p-8 text-white relative overflow-hidden">
                    <div class="flex flex-col md:flex-row items-center">
                        <div class="flex-1 mb-6 md:mb-0 md:pr-6">
                            <div class="bg-white text-teal-500 px-4 py-2 rounded-full inline-block font-bold text-sm mb-4">
                                eLearning
                            </div>
                            <h1 class="text-xl md:text-2xl font-bold mb-4 leading-tight">
                                Pelajari Ratusan Skill Bersertifikat Sekali Bayar. Fleksibel & Praktikal.
                            </h1>
                            <button
                                class="bg-yellow-400 text-gray-800 px-6 py-2 rounded-full font-bold hover:bg-yellow-300 transition-colors">
                                Selengkapnya
                            </button>
                        </div>
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/img/tlc.png') }}" alt="Student"
                                class="w-32 h-32 md:w-48 md:h-48 rounded-lg object-cover">
                        </div>
                    </div>
                </div>

                <!-- Testimonials -->
                {{-- <div class="bg-white rounded-2xl p-6 shadow-sm">
                    <h2 class="text-xl font-bold mb-4">Testimoni</h2>

                    <!-- Rating -->
                    <div class="flex items-center space-x-4 mb-6">
                        <div class="flex items-center space-x-2">
                            <span class="bg-green-100 text-green-800 px-2 py-1 rounded text-sm font-semibold">
                                COURSE REPORT
                            </span>
                            <span class="font-bold text-lg">4.9</span>
                            <span class="text-gray-600">rating on Course Report</span>
                        </div>
                        <div class="flex -space-x-2">
                            <img src="/api/placeholder/32/32" alt="User"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="/api/placeholder/32/32" alt="User"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="/api/placeholder/32/32" alt="User"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="/api/placeholder/32/32" alt="User"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="/api/placeholder/32/32" alt="User"
                                class="w-8 h-8 rounded-full border-2 border-white">
                        </div>
                        <span class="text-gray-600">> 1.5 Juta Member</span>
                    </div>

                    <!-- Testimonial Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
                        <div class="flex items-start space-x-3 p-4 bg-gray-50 rounded-lg">
                            <img src="/api/placeholder/48/48" alt="Paksi Cahyo"
                                class="w-12 h-12 rounded-full flex-shrink-0">
                            <div>
                                <h4 class="font-semibold text-sm">Paksi Cahyo Baskoro</h4>
                                <p class="text-xs text-gray-600 mt-1">Diterima sebagai Copywriter di DBS Bank Indonesia.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-4 bg-gray-50 rounded-lg">
                            <img src="/api/placeholder/48/48" alt="M. Arkhan" class="w-12 h-12 rounded-full flex-shrink-0">
                            <div>
                                <h4 class="font-semibold text-sm">M. Arkhan Doohan</h4>
                                <p class="text-xs text-gray-600 mt-1">Diterima sebagai Data Analyst di United Tractors.</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3 p-4 bg-gray-50 rounded-lg md:col-span-2 xl:col-span-1">
                            <img src="/api/placeholder/48/48" alt="User" class="w-12 h-12 rounded-full flex-shrink-0">
                            <div>
                                <h4 class="font-semibold text-sm">Sarah Maharani</h4>
                                <p class="text-xs text-gray-600 mt-1">Berhasil mendapat promosi sebagai Marketing Manager.
                                </p>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Product Description -->
                <div class="bg-white rounded-2xl p-2 shadow-sm">
                    {{-- <div class="mb-4">
                        <span class="text-teal-500 text-sm font-medium">Berlangganan E-Learning</span>
                    </div> --}}
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">Paket Level {{ $level->level_name }}</h2>
                    <div class="flex items-center space-x-3 mb-6">
                        <span class="text-3xl font-bold text-gray-800">
                            Rp. {{ number_format($level->price, 0, ',', '.') }}
                        </span>
                        {{-- <span class="text-lg text-gray-400 line-through">Rp 4.200.000</span> --}}
                    </div>

                    <div class="min-h-screen bg-gradient-to-br from-indigo-500 via-purple-500 to-pink-500 p-4 md:p-8">
                        <div class="max-w-4xl mx-auto bg-white rounded-3xl shadow-2xl overflow-hidden">
                            <!-- Header -->
                            <div class="bg-gradient-to-r from-teal-500 to-cyan-600 text-white p-8 md:p-12 text-center">
                                <h1 class="text-4xl md:text-5xl font-bold mb-3 drop-shadow-lg">Level A</h1>
                                <p class="text-lg md:text-xl font-light opacity-90">Teaching & Learning Certification (TLC)
                                </p>
                            </div>

                            <!-- Content -->
                            <div class="p-8 md:p-12">
                                <!-- Intro -->
                                <div class="text-lg leading-relaxed text-gray-700 mb-8 text-justify">
                                    Level A merupakan tahap awal dalam program Teaching & Learning Certification (TLC) yang
                                    dirancang untuk mengukur pengetahuan dasar seorang pendidik dalam praktik mengajar yang
                                    efektif. Pada level ini, peserta akan mengikuti tes teori yang berbasis pada pendekatan
                                    Teaching Mastery Framework (TMF).
                                </div>

                                <!-- Read More Button -->
                                <div class="text-center mb-8">
                                    <button id="readMoreBtn"
                                        class="inline-flex items-center gap-3 bg-gradient-to-r from-teal-500 to-cyan-600 text-white px-8 py-3 rounded-full font-semibold text-base transition-all duration-300 hover:shadow-lg hover:shadow-teal-500/25 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-teal-200">
                                        <span>Lihat Selengkapnya</span>
                                        <span id="arrow" class="transition-transform duration-300 text-sm">▼</span>
                                    </button>
                                </div>

                                <!-- Expandable Content -->
                                <div id="expandableContent"
                                    class="overflow-hidden transition-all duration-500 ease-in-out max-h-0">
                                    <div class="space-y-8">
                                        <!-- Categories Introduction -->
                                        <p class="text-lg leading-relaxed text-gray-700 text-center">
                                            Tes ini terdiri dari empat kategori utama yang mencerminkan aspek fundamental
                                            dalam dunia pendidikan:
                                        </p>

                                        <!-- Categories Grid -->
                                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                            <!-- PCK Card -->
                                            <div
                                                class="group bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-teal-300 relative overflow-hidden">
                                                <div
                                                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-teal-500 to-cyan-600">
                                                </div>
                                                <div class="flex items-center mb-4">
                                                    <div
                                                        class="w-10 h-10 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
                                                        P
                                                    </div>
                                                    <h3 class="text-xl font-semibold text-gray-800">PCK (Pedagogical Content
                                                        Knowledge)</h3>
                                                </div>
                                                <p class="text-gray-600 leading-relaxed">
                                                    Menguji kemampuan peserta dalam mengintegrasikan materi ajar dengan
                                                    strategi pengajaran yang tepat.
                                                </p>
                                            </div>

                                            <!-- HOTS Card -->
                                            <div
                                                class="group bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-teal-300 relative overflow-hidden">
                                                <div
                                                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-teal-500 to-cyan-600">
                                                </div>
                                                <div class="flex items-center mb-4">
                                                    <div
                                                        class="w-10 h-10 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
                                                        H
                                                    </div>
                                                    <h3 class="text-xl font-semibold text-gray-800">HOTS (Higher Order
                                                        Thinking Skills)</h3>
                                                </div>
                                                <p class="text-gray-600 leading-relaxed">
                                                    Menilai kemampuan berpikir kritis, analitis, dan kreatif dalam
                                                    memecahkan masalah pembelajaran.
                                                </p>
                                            </div>

                                            <!-- Literasi Card -->
                                            <div
                                                class="group bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-teal-300 relative overflow-hidden">
                                                <div
                                                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-teal-500 to-cyan-600">
                                                </div>
                                                <div class="flex items-center mb-4">
                                                    <div
                                                        class="w-10 h-10 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
                                                        L
                                                    </div>
                                                    <h3 class="text-xl font-semibold text-gray-800">Literasi</h3>
                                                </div>
                                                <p class="text-gray-600 leading-relaxed">
                                                    Mengasah pemahaman peserta terhadap teks, serta kemampuan menafsirkan,
                                                    menyimpulkan, dan mengidentifikasi makna implisit.
                                                </p>
                                            </div>

                                            <!-- Numerasi Card -->
                                            <div
                                                class="group bg-gradient-to-br from-gray-50 to-gray-100 border border-gray-200 rounded-xl p-6 transition-all duration-300 hover:shadow-xl hover:-translate-y-2 hover:border-teal-300 relative overflow-hidden">
                                                <div
                                                    class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-teal-500 to-cyan-600">
                                                </div>
                                                <div class="flex items-center mb-4">
                                                    <div
                                                        class="w-10 h-10 bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full flex items-center justify-center text-white font-bold text-sm mr-3">
                                                        N
                                                    </div>
                                                    <h3 class="text-xl font-semibold text-gray-800">Numerasi</h3>
                                                </div>
                                                <p class="text-gray-600 leading-relaxed">
                                                    Mengukur kemampuan logika dan berpikir kuantitatif dalam konteks
                                                    pembelajaran dan kehidupan sehari-hari.
                                                </p>
                                            </div>
                                        </div>

                                        <!-- Conclusion -->
                                        <div
                                            class="bg-gradient-to-r from-teal-50 to-cyan-50 border-l-4 border-teal-500 p-6 rounded-r-lg">
                                            <p class="text-teal-800 font-medium leading-relaxed">
                                                Level ini menjadi fondasi penting sebelum melanjutkan ke level berikutnya,
                                                karena menggambarkan kesiapan peserta dalam memahami dan menerapkan prinsip
                                                dasar pedagogi yang kuat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            const readMoreBtn = document.getElementById('readMoreBtn');
                            const expandableContent = document.getElementById('expandableContent');
                            const arrow = document.getElementById('arrow');
                            let isExpanded = false;

                            readMoreBtn.addEventListener('click', function() {
                                if (!isExpanded) {
                                    expandableContent.style.maxHeight = expandableContent.scrollHeight + 'px';
                                    readMoreBtn.querySelector('span').textContent = 'Lihat Lebih Sedikit';
                                    arrow.classList.add('rotate-180');
                                    isExpanded = true;
                                } else {
                                    expandableContent.style.maxHeight = '0px';
                                    readMoreBtn.querySelector('span').textContent = 'Lihat Selengkapnya';
                                    arrow.classList.remove('rotate-180');
                                    isExpanded = false;
                                }
                            });

                            // Smooth scroll animation for better UX
                            expandableContent.addEventListener('transitionend', function() {
                                if (isExpanded) {
                                    expandableContent.style.maxHeight = 'none';
                                }
                            });
                        </script>
                    </div>

                    <div>
                        <h3 class="text-teal-500 font-semibold mb-2">Deskripsi Produk</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Level A merupakan tahap awal dalam program Teaching & Learning Certification (TLC) yang
                            dirancang untuk mengukur pengetahuan dasar seorang pendidik dalam praktik mengajar yang efektif.
                            Pada level ini, peserta akan mengikuti tes teori yang berbasis pada pendekatan Teaching Mastery
                            Framework (TMF).

                            Tes ini terdiri dari empat kategori utama yang mencerminkan aspek fundamental dalam dunia
                            pendidikan:

                            PCK (Pedagogical Content Knowledge)
                            Menguji kemampuan peserta dalam mengintegrasikan materi ajar dengan strategi pengajaran yang
                            tepat.

                            HOTS (Higher Order Thinking Skills)
                            Menilai kemampuan berpikir kritis, analitis, dan kreatif dalam memecahkan masalah pembelajaran.

                            Literasi
                            Mengasah pemahaman peserta terhadap teks, serta kemampuan menafsirkan, menyimpulkan, dan
                            mengidentifikasi makna implisit.

                            Numerasi
                            Mengukur kemampuan logika dan berpikir kuantitatif dalam konteks pembelajaran dan kehidupan
                            sehari-hari.

                            Level ini menjadi fondasi penting sebelum melanjutkan ke level berikutnya, karena menggambarkan
                            kesiapan peserta dalam memahami dan menerapkan prinsip dasar pedagogi yang kuat.

                        </p>
                    </div>
                </div>
            </div>

            <!-- Right Sidebar - Checkout -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-2xl p-6 shadow-sm sticky top-4 border">
                    <!-- Product Summary -->
                    <div class="mb-6">
                        <h3 class="text-gray-500 text-sm font-medium mb-2">RINGKASAN PRODUK</h3>
                        <div class="flex justify-between items-start mb-2">
                            <span class="text-gray-800 font-medium">Paket Level {{ $level->level_name }}</span>
                        </div>
                        <div class="text-right text-gray-800 font-semibold">
                            Rp. {{ number_format($level->price, 0, ',', '.') }}
                        </div>
                    </div>

                    <!-- Promo Code -->
                    <div class="mb-6">
                        <label class="block text-gray-600 text-sm mb-2">Kode Promo / Kupon</label>
                        <div class="flex space-x-2">
                            <input type="text" placeholder="Masukkan kode promo"
                                class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-teal-500">
                        </div>
                        {{-- <button
                            class="w-full mt-2 text-teal-500 border border-teal-500 px-4 py-2 rounded-lg hover:bg-teal-50 transition-colors flex items-center justify-center">
                            <i class="fas fa-gift mr-2"></i>
                            Lihat Promo Hari Ini
                        </button> --}}
                        <livewire:payments.promo-modal>
                    </div>

                    <!-- Payment Method Button -->
                    {{-- <form action="{{ route('payments.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <input type="hidden" name="amount" value="{{ (int) $level->price }}">
                        <button
                            class="w-full bg-teal-500 text-white py-3 rounded-lg font-semibold hover:bg-teal-600 transition-colors mb-6 flex items-center justify-center">
                            Pilih Metode Pembayaran
                            <i class="fas fa-chevron-right ml-2"></i>
                        </button>
                    </form> --}}


                    <!-- Price Summary -->
                    <div class="space-y-3 mb-6">
                        <div class="flex justify-between">
                            <span class="text-gray-600">Subtotal</span>
                            <span class="font-semibold">
                                Rp. {{ number_format($level->price, 0, ',', '.') }}
                            </span>
                        </div>
                        {{-- <div class="flex justify-between">
                            <span class="text-gray-600">PPN (11%)</span>
                            <span class="font-semibold">Rp 19.690</span>
                        </div> --}}
                        <hr class="border-gray-200">
                        <div class="flex justify-between text-lg font-bold">
                            <span>Total</span>
                            <span>
                                Rp. {{ number_format($level->price, 0, ',', '.') }}
                            </span>
                        </div>
                        {{-- <div class="text-right">
                            <button class="text-teal-500 text-sm hover:underline">+ kode unik ⓘ</button>
                        </div> --}}
                    </div>

                    <!-- Continue Payment Button -->
                    {{-- <button class="w-full bg-gray-300 text-gray-500 py-3 rounded-lg font-semibold cursor-not-allowed">
                        Lanjut Bayar
                    </button> --}}

                     <form action="{{ route('payments.store') }}" method="POST">
                        @csrf
                        @method('post')
                        <input type="hidden" name="amount" value="{{ (int) $level->price }}">
                        <button
                            class="w-full bg-teal-500 text-white py-3 rounded-lg font-semibold hover:bg-teal-600 transition-colors mb-6 flex items-center justify-center">
                            Pilih Metode Pembayaran
                            <i class="fas fa-chevron-right ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- WhatsApp Float Button -->
    <div class="fixed bottom-6 right-6">
        <button
            class="bg-green-500 text-white p-4 rounded-full shadow-lg hover:bg-green-600 transition-colors flex items-center space-x-2">
            <i class="fab fa-whatsapp text-xl"></i>
            <span class="hidden sm:inline font-medium">WhatsApp</span>
        </button>
    </div>

    <script>
        // Simple interactivity
        document.addEventListener('DOMContentLoaded', function() {
            // Promo code input interaction
            const promoInput = document.querySelector('input[placeholder="Masukkan kode promo"]');
            const continueButton = document.querySelector('button:contains("Lanjut Bayar")');

            // Payment method button interaction
            const paymentButton = document.querySelector('button:contains("Pilih Metode Pembayaran")');
            paymentButton.addEventListener('click', function() {
                alert('Redirect ke halaman pilih metode pembayaran');
            });

            // WhatsApp button
            const whatsappButton = document.querySelector('.fixed button');
            whatsappButton.addEventListener('click', function() {
                window.open('https://wa.me/628123456789', '_blank');
            });
        });
    </script>
@endsection
