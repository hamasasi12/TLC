@extends('layouts.asesiDashboard')

@section('content')
    {{-- Halaman Sertifikasi Asesi --}}

    {{-- Overview Sertifikasi --}}

    {{-- <section class="max-w-7xl mx-auto px-4 py-8 ">
        <!-- Dashboard Header -->
        {{-- <div class="text-center mb-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-2">Dashboard Overview</h1>
            <p class="text-gray-600">Selamat datang di Teaching & Learning Certification Program</p>
        </div> --}}

        <!-- Stats Cards -->
        {{-- <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-xl shadow-sm p-6 relative overflow-hidden">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Peserta Telah Tersertifikasi</p>
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">1,243</h3>
                        <div class="flex items-center text-green-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">+15%</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-orange-400 to-red-500 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 relative overflow-hidden">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Tingkat Kepuasan Peserta</p>
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">97%</h3>
                        <div class="flex items-center text-green-600">
                            <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 9.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 7.414V15a1 1 0 11-2 0V7.414L6.707 9.707a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium">+3%</span>
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-yellow-400 to-orange-500 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-xl shadow-sm p-6 relative overflow-hidden">
                <div class="flex items-start justify-between">
                    <div>
                        <p class="text-sm text-gray-600 mb-2">Level Sertifikasi</p>
                        <h3 class="text-3xl font-bold text-gray-900 mb-2">3</h3>
                        <div class="text-gray-400 text-sm">
                            Level tersedia
                        </div>
                    </div>
                    <div class="bg-gradient-to-r from-red-400 to-pink-500 p-3 rounded-xl">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Add some interactive animations -->
        <script>
            // Add hover animations to cards
            document.querySelectorAll('.bg-white').forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-4px)';
                    this.style.transition = 'transform 0.3s ease';
                    this.style.boxShadow = '0 10px 25px rgba(0, 0, 0, 0.1)';
                });

                card.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                    this.style.boxShadow = '0 1px 3px rgba(0, 0, 0, 0.1)';
                });
            });

            // Add pulse animation to gradient icons
            document.querySelectorAll('.bg-gradient-to-r').forEach(icon => {
                setInterval(() => {
                    icon.style.animation = 'pulse 2s ease-in-out';
                    setTimeout(() => {
                        icon.style.animation = '';
                    }, 2000);
                }, 5000);
            });

            // Add CSS animations
            const style = document.createElement('style');
            style.textContent = `
                    @keyframes pulse {
                        0%, 100% { transform: scale(1); }
                        50% { transform: scale(1.05); }
                    }

                    .bg-white {
                        transition: all 0.3s ease;
                    }
                `;
            document.head.appendChild(style);
        </script>
    </section> 

    {{-- End Overview --}}

    {{-- Status Sertifikasi --}}
    <section class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header dengan gradient yang menarik -->
        <div class="mb-8 relative overflow-hidden animate-fadeIn">
            <div class="bg-gradient-to-r from-[#1D4E89] via-[#2A5AAF] to-[#E76F51] rounded-2xl p-8 text-white relative">
                <div class="absolute inset-0 bg-black opacity-10"></div>
                <div class="relative z-10">
                    <div class="flex items-center mb-2">
                        <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 2L3 7v11a1 1 0 001 1h3a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1h3a1 1 0 001-1V7l-7-5z"
                                clip-rule="evenodd" />
                        </svg>
                        <h1 class="text-3xl font-bold">Status Sertifikasi Anda</h1>
                    </div>
                    <p class="text-white/90 text-lg">Pantau progres pembelajaran dan sertifikasi Anda dalam
                        Teaching
                        & Learning Certification</p>
                </div>
                <!-- Decorative elements -->
                <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full -mr-16 -mt-16"></div>
                <div class="absolute bottom-0 left-0 w-24 h-24 bg-white/10 rounded-full -ml-12 -mb-12"></div>
            </div>
        </div>

        <!-- Certification Cards -->
        <livewire:asesi.certification-card />
        <!-- Certification Cards -->

    </section>
    {{-- End Status Sertifikasi --}}

    <section
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 shadow-xl rounded-3xl border border-orange-100 p-8 mb-10 bg-gradient-to-br from-blue-50 via-white to-orange-50">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-8 space-y-4 sm:space-y-0">
            <div class="flex items-center space-x-3">
                <div class="bg-gradient-to-r from-[#1D4E89] to-[#5396ae] text-white p-3 rounded-xl shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h2
                    class="text-3xl font-extrabold text-transparent bg-clip-text bg-[#1D4E89]">
                    KATEGORI LEVEL</h2>
            </div>
            <div class="flex items-center space-x-4">
                {{-- <span
                    class="px-4 py-2 bg-orange-100 text-[#E76F51] font-medium rounded-full border border-orange-200 shadow-sm flex items-center">
                    <span class="inline-block w-2 h-2 bg-[#E76F51] rounded-full mr-2 animate-pulse"></span>
                    Dalam Progres
                </span> --}}
                {{-- TAMPILAN SELESAI --}}
                {{-- <span class="px-4 py-2 bg-green-100 text-green-700 font-medium rounded-full border border-green-200 shadow-sm flex items-center w-fit">
                    <span class="inline-block w-2 h-2 bg-green-600 rounded-full mr-2"></span>
                    Selesai
                </span> --}}

                {{-- TAMPILAN BELUM DIMULAI --}}
                {{-- <span class="px-4 py-2 bg-gray-100 text-gray-600 font-medium rounded-full border border-gray-200 shadow-sm flex items-center w-fit">
                    <span class="inline-block w-2 h-2 bg-gray-400 rounded-full mr-2"></span>
                    Belum Dimulai
                </span> --}}
                <button
                    class="px-6 py-2 bg-gradient-to-r from-[#1D4E89] to-[#14406B] text-white rounded-xl font-medium shadow-lg hover:shadow-xl focus:ring-4 focus:ring-blue-200">
                    <a href="{{ route('asesi.nilai') }}">Lihat Nilai</a>

                </button>
            </div>
        </div>

        <p class="text-gray-600 text-base mb-10 text-center sm:text-left max-w-2xl">
            Daftar kategori kuis yang akan anda kerjakan. Selesaikan setiap kategori untuk membuka level berikutnya!
        </p>

        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center sm:justify-start gap-3 mb-10">
            <button onclick="showLevel('A')"
                class="px-6 py-3 bg-gradient-to-r from-[#1D4E89] to-[#14406B] text-white rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                id="levelAButton">
                @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_A']))
                    <livewire:level-unlock-icon />
                @else
                    <livewire:level-lock-icon />
                @endif
                Level A
            </button>
            <button onclick="showLevel('B')"
                class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                id="levelBButton">
                @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_B']))
                    <livewire:level-unlock-icon />
                @else
                    <livewire:level-lock-icon />
                @endif
                Level B
            </button>
            <button onclick="showLevel('C')"
                class="px-6 py-3 bg-white text-gray-700 rounded-xl text-sm font-medium shadow-md transform transition duration-300 hover:shadow-lg flex items-center level-button"
                id="levelCButton">
                @if (Auth::user()->hasAnyPermission(['bundling', 'access_level_C']))
                    <livewire:level-unlock-icon />
                @else
                    <livewire:level-lock-icon />
                @endif
                Level C
            </button>
        </div>

        <!-- Categories A -->
        <div id="levelA" class="level-content">
            <livewire:categories-a />
        </div>

        <!-- Categories B -->
        <div id="levelB" class="level-content hidden">
            <livewire:categories-b />
        </div>

        <!-- Categories C -->
        <div id="levelC" class="level-content hidden">
            <livewire:categories-c />
        </div>

        <script>
            function showLevel(level) {
                // Hide all level contents
                document.querySelectorAll('.level-content').forEach(content => {
                    content.classList.add('hidden');
                });

                // Show selected level content
                document.getElementById(`level${level}`).classList.remove('hidden');

                // Update button styles
                document.querySelectorAll('.level-button').forEach(button => {
                    if (button.id === `level${level}Button`) {
                        button.classList.remove('bg-white', 'text-gray-700');
                        button.classList.add('bg-gradient-to-r', 'from-[#1D4E89]', 'to-[#14406B]', 'text-white');
                    } else {
                        button.classList.add('bg-white', 'text-gray-700');
                        button.classList.remove('bg-gradient-to-r', 'from-[#1D4E89]', 'to-[#14406B]', 'text-white');
                    }
                });
            }
        </script>
    </section>
    {{-- End Kategori level --}}

    {{-- <section class="w-full px-6 py-12">
        <div class="container mx-auto max-w-7xl">
            <!-- Enhanced Header -->
            <div class="gradient-bg text-white p-8 rounded-3xl shadow-2xl mb-8 relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-black/10 to-transparent"></div>
                <div class="relative z-10">
                    <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                        <div class="flex items-center gap-5">
                            <div class="glass-effect p-4 rounded-2xl">
                                <i class="fas fa-trophy text-3xl text-yellow-300 drop-shadow-lg"></i>
                            </div>
                            <div>
                                <h1 class="text-3xl lg:text-4xl font-bold mb-2 tracking-tight">Hasil Test Sertifikasi</h1>
                                <p class="text-lg opacity-90 font-medium">Detail hasil test dan performa peserta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Statistics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <!-- Total Lulus -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-teal-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#1D4E89] text-sm font-semibold uppercase tracking-wide mb-2">Total Lulus</p>
                            <p class="text-4xl font-bold text-teal-600 mb-1">4</p>
                            <p class="text-teal-500 text-sm font-medium">+2 dari bulan lalu</p>
                        </div>
                        <div class="bg-gradient-to-br from-teal-400 to-teal-600 p-4 rounded-2xl shadow-lg">
                            <i class="fas fa-check text-white text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Total Gagal -->
                <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-xl p-8 card-hover border border-pink-100">
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-[#1D4E89] text-sm font-semibold uppercase tracking-wide mb-2">Total Gagal</p>
                            <p class="text-4xl font-bold text-pink-600 mb-1">2</p>
                            <p class="text-pink-500 text-sm font-medium">Perlu perhatian</p>
                        </div>
                        <div class="bg-gradient-to-br from-pink-400 to-pink-600 p-4 rounded-2xl shadow-lg">
                            <i class="fas fa-times text-white text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced Results Table -->
            <div class="bg-white/90 backdrop-blur-sm rounded-2xl shadow-2xl overflow-hidden border border-orange-200/30">
                <div class="bg-gradient-to-r from-orange-50 to-blue-50 px-8 py-6 border-b border-orange-200">
                    <h3 class="text-xl font-bold text-[#1D4E89] flex items-center gap-3">
                        <i class="fas fa-table text-[#E76F51]"></i>
                        Data Hasil Test
                    </h3>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-gradient-to-r from-blue-50 to-orange-50">
                            <tr>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    No</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Nama Peserta</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Kategori</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Status</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Skor</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Total Soal</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Tidak Dijawab</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Benar</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Salah</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Kelulusan</th>
                                <th class="px-8 py-5 text-left text-xs font-bold text-[#1D4E89] uppercase tracking-wider">
                                    Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-orange-100">
                            <!-- Row 1 - Ahmad Rizki HOTS -->
                            @foreach ($exams as $data)
                                <tr class="table-row">
                                    <td class="px-8 py-6 text-sm font-semibold text-[#1D4E89]">{{ $loop->iteration }}</td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-3">
                                            <span
                                                class="text-sm font-semibold text-[#1D4E89]">{{ $data->user?->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                                <i class="fas fa-lightbulb text-[#E76F51] text-sm"></i>
                                            </div>
                                            <span
                                                class="text-sm font-medium text-[#1D4E89]">{{ $data->categoryA?->name }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="status-completed px-4 py-2 text-xs font-bold rounded-full shadow-sm">
                                            {{ $data->status }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-2">
                                            <span class="text-lg font-bold text-[#1D4E89]">{{ $data->score }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-sm font-medium text-gray-700">{{ $data->total_questions }}
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="px-3 py-1 text-xs font-semibold bg-gray-100 text-gray-800 rounded-full">{{ $data->unanswered_questions }}</span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="px-3 py-1 text-xs font-semibold bg-teal-100 text-teal-800 rounded-full">{{ $data->correct_answers }}</span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span
                                            class="px-3 py-1 text-xs font-semibold bg-pink-100 text-pink-800 rounded-full">{{ $data->wrong_answers }}</span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex items-center text-teal-600 font-semibold">
                                            <i class="fas fa-medal mr-2 text-lg"></i>
                                            <span class="text-sm">{{ $data->is_passed ? 'Lulus' : 'Tidak Lulus' }}</span>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <button
                                            class="bg-blue-50 hover:bg-blue-100 text-[#1D4E89] px-4 py-2 rounded-lg flex items-center gap-2 transition-all duration-200 font-medium hover-lift">
                                            <i class="fas fa-eye"></i>
                                            Detail
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            .gradient-bg {
                background: linear-gradient(135deg, #1D4E89 0%, #E76F51 50%, #F4A261 100%);
            }

            .glass-effect {
                background: rgba(255, 255, 255, 0.15);
                backdrop-filter: blur(10px);
                border: 1px solid rgba(255, 255, 255, 0.2);
            }

            .card-hover {
                transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            }

            .card-hover:hover {
                transform: translateY(-8px);
                box-shadow: 0 25px 50px -12px rgba(231, 111, 81, 0.25);
            }

            .hover-lift {
                transition: all 0.3s ease-in-out;
            }

            .hover-lift:hover {
                transform: translateY(-2px) scale(1.02);
                box-shadow: 0 10px 25px -5px rgba(231, 111, 81, 0.2);
            }

            .table-row {
                transition: all 0.2s ease;
            }

            .table-row:hover {
                background: linear-gradient(90deg, rgba(231, 111, 81, 0.05) 0%, rgba(29, 78, 137, 0.05) 100%);
                transform: translateX(4px);
            }

            .search-focus:focus {
                box-shadow: 0 0 0 3px rgba(231, 111, 81, 0.1);
            }

            .status-completed {
                background: linear-gradient(135deg, #14b8a6, #0d9488);
                color: white;
            }

            .status-ongoing {
                background: linear-gradient(135deg, #E76F51, #d97706);
                color: white;
            }

            .pulse-animation {
                animation: pulse 2s infinite;
            }

            @keyframes pulse {

                0%,
                100% {
                    opacity: 1;
                }

                50% {
                    opacity: 0.7;
                }
            }
        </style>
    </section> --}}
@endsection
