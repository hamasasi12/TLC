@extends('layouts.adminDashboard')
@section('title', 'Admin Dashboard')

@section('content')

 <!-- Dashboard Header with Welcome Message -->
    {{-- <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl shadow-lg mb-6">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-white mb-2">Selamat Datang, Admin!</h1>
                <p class="text-blue-100">Kelola dan pantau aktivitas platform TLC dari satu tempat</p>
            </div>
            <div class="mt-4 md:mt-0">
                <span class="bg-blue-900 bg-opacity-50 text-white px-4 py-2 rounded-lg">
                    <i class="fas fa-calendar-alt mr-2"></i>{{ date('l, d F Y') }}
                </span>
            </div>
        </div>
        <div class="bg-white/20 backdrop-blur-sm text-white px-4 py-3 rounded-xl border border-white/30">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-white/20 rounded-full flex items-center justify-center">
                    <i class="fas fa-calendar-alt text-sm"></i>
                </div>
                <div>
                    <p class="text-xs font-medium opacity-90">Hari ini</p>
                    <p class="text-sm font-bold">{{ \Carbon\Carbon::now()->isoFormat('D MMM Y') }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Compact Stats Cards -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-6">
    <!-- Asesi Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="p-4 bg-gradient-to-r from-[#1D4E89] to-[#2563eb]">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold text-white">Total Asesi</h3>
                </div>
                <div class="bg-white/25 p-3 rounded-xl">
                    <i class="fas fa-user-graduate text-white text-lg"></i>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center justify-between">
                <span class="text-2xl md:text-3xl font-bold text-gray-800">{{ $asesi }}</span>
                <div class="text-right">
                    <div class="text-green-500 text-xs font-semibold flex items-center">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +12%
                    </div>
                    <div class="text-xs text-gray-500">vs bulan lalu</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Asesor Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="p-4 bg-gradient-to-r from-[#E76F51] to-[#ea580c]">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold text-white">Total Asesor</h3>
                </div>
                <div class="bg-white/25 p-3 rounded-xl">
                    <i class="fas fa-chalkboard-teacher text-white text-lg"></i>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center justify-between">
                <span class="text-2xl md:text-3xl font-bold text-gray-800">{{ $asesor }}</span>
                <div class="text-right">
                    <div class="text-green-500 text-xs font-semibold flex items-center">
                        <i class="fas fa-arrow-up mr-1"></i>
                        +8%
                    </div>
                    <div class="text-xs text-gray-500">vs bulan lalu</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Admin Card -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        <div class="p-4 bg-gradient-to-r from-[#1D4E89] to-[#E76F51]">
            <div class="flex justify-between items-center">
                <div>
                    <h3 class="text-lg font-bold text-white">Total Admin</h3>
                </div>
                <div class="bg-white/25 p-3 rounded-xl">
                    <i class="fas fa-user-shield text-white text-lg"></i>
                </div>
            </div>
        </div>
        <div class="p-4">
            <div class="flex items-center justify-between">
                <span class="text-2xl md:text-3xl font-bold text-gray-800">{{ $admins }}</span>
                <div class="text-right">
                    <div class="text-[#1D4E89] text-xs font-semibold flex items-center">
                        <i class="fas fa-minus mr-1"></i>
                        Stabil
                    </div>
                    <div class="text-xs text-gray-500">vs bulan lalu</div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Activity Chart -->
        <div class="bg-white rounded-xl shadow-md p-6 lg:col-span-2">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-gray-800">Aktivitas Pengguna</h3>
                <div class="flex space-x-2">
                    <button class="px-3 py-2 bg-gradient-to-r from-[#E76F51] to-[#ea580c] text-white rounded-lg text-xs font-semibold shadow-md hover:shadow-lg transition-all duration-300">
                        Minggu Ini
                    </button>
                    <button class="px-3 py-2 bg-gray-100 text-gray-600 rounded-lg text-xs font-semibold hover:bg-gray-200 transition-colors">
                        Bulan Ini
                    </button>
                </div>
            </div>
        </div>
        <div class="p-4 md:p-6">
            <div class="h-48 md:h-60 w-full bg-gradient-to-br from-blue-50 to-orange-50 rounded-xl flex items-center justify-center border-2 border-dashed border-[#1D4E89]/30">
                <div class="text-center">
                    <div class="w-12 h-12 bg-gradient-to-br from-[#E76F51] to-[#1D4E89] rounded-full flex items-center justify-center mx-auto mb-3">
                        <i class="fas fa-chart-line text-white text-lg"></i>
                    </div>
                    <p class="text-gray-600 font-medium text-sm">Grafik aktivitas pengguna</p>
                    <p class="text-gray-500 text-xs mt-1">Data sedang dimuat...</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities -->
    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
        <div class="p-4 bg-gradient-to-r from-[#1D4E89] to-[#E76F51]">
            <h3 class="text-lg font-bold text-white flex items-center">
                <i class="fas fa-clock mr-2"></i>
                Aktivitas Terbaru
            </h3>
        </div>
        <div class="p-4">
            <div class="space-y-4">
                <div class="flex items-start group hover:bg-green-50 p-2 rounded-lg transition-colors cursor-pointer">
                    <div class="bg-gradient-to-br from-green-400 to-green-500 p-2 rounded-lg mr-3 shadow-md">
                        <i class="fas fa-user-plus text-white text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-gray-800 text-sm">Pendaftaran baru</p>
                        <p class="text-xs text-gray-600">Asesi baru bergabung</p>
                        <p class="text-xs text-gray-500 mt-1">5 menit lalu</p>
                    </div>
                </div>
                
                <div class="flex items-start group hover:bg-blue-50 p-2 rounded-lg transition-colors cursor-pointer">
                    <div class="bg-gradient-to-br from-[#1D4E89] to-[#2563eb] p-2 rounded-lg mr-3 shadow-md">
                        <i class="fas fa-certificate text-white text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-gray-800 text-sm">Sertifikasi selesai</p>
                        <p class="text-xs text-gray-600">Proses sertifikasi berhasil</p>
                        <p class="text-xs text-gray-500 mt-1">1 jam lalu</p>
                    </div>
                </div>
                
                <div class="flex items-start group hover:bg-purple-50 p-2 rounded-lg transition-colors cursor-pointer">
                    <div class="bg-gradient-to-br from-purple-400 to-purple-500 p-2 rounded-lg mr-3 shadow-md">
                        <i class="fas fa-comment-alt text-white text-sm"></i>
                    </div>
                    <div class="flex-1">
                        <p class="font-semibold text-gray-800 text-sm">Pesan baru</p>
                        <p class="text-xs text-gray-600">Pesan dari asesor</p>
                        <p class="text-xs text-gray-500 mt-1">3 jam lalu</p>
                    </div>
                </div>
            </div>
            <button class="w-full mt-4 text-sm text-blue-600 hover:text-blue-800">Lihat semua aktivitas</button>
        </div>
    </div>

    <!-- Statistik Sertifikasi dan Tabel Pengguna Terbaru -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Statistik Sertifikasi -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Status Sertifikasi</h3>
            <div class="space-y-4">
                <!-- Sertifikasi Selesai -->
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Selesai</span>
                        <span class="text-sm font-medium text-gray-700">65%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-green-600 h-2.5 rounded-full" style="width: 65%"></div>
                    </div>
                </div>

                <!-- Sertifikasi Dalam Proses -->
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Dalam Proses</span>
                        <span class="text-sm font-medium text-gray-700">25%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-yellow-500 h-2.5 rounded-full" style="width: 25%"></div>
                    </div>
                </div>

                <!-- Sertifikasi Belum Dimulai -->
                <div>
                    <div class="flex justify-between mb-1">
                        <span class="text-sm font-medium text-gray-700">Belum Dimulai</span>
                        <span class="text-sm font-medium text-gray-700">10%</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5">
                        <div class="bg-gray-400 h-2.5 rounded-full" style="width: 10%"></div>
                    </div>
                </div>
            </div>
            <canvas id="userLevelChart"></canvas>
            {{-- <canvas id="userLevelChart" width="100" height="100"></canvas> --}}

            <div class="mt-6 pt-4 border-t border-gray-200">
                <h4 class="text-sm font-semibold text-gray-800 mb-3">Distribusi Level</h4>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="bg-blue-50 p-2 rounded-lg">
                        <span class="block text-xl font-bold text-blue-600">42%</span>
                        <span class="text-xs text-gray-600">Level A</span>
                    </div>
                    <div class="bg-purple-50 p-2 rounded-lg">
                        <span class="block text-xl font-bold text-purple-600">35%</span>
                        <span class="text-xs text-gray-600">Level B</span>
                    </div>
                    <div class="bg-green-50 p-2 rounded-lg">
                        <span class="block text-xl font-bold text-green-600">23%</span>
                        <span class="text-xs text-gray-600">Level C</span>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection