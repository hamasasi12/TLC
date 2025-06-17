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
    </div> --}}

    <div class="p-6 bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl shadow-lg mb-6 mt-16">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-white mb-2">Selamat Datang, Admin!</h1>
                <p class="text-blue-100">Kelola dan pantau aktivitas platform TLC dari satu tempat</p>
            </div>
            <div class="mt-4 md:mt-0">
                <span class="bg-blue-900 bg-opacity-50 text-white px-4 py-2 rounded-lg">
                    <i class="fas fa-calendar-alt mr-2"></i>{{ \Carbon\Carbon::now()->isoFormat('dddd, D MMMM Y') }}
                </span>
            </div>
        </div>
    </div>


    <!-- Stats Overview Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
        <!-- Asesi Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="p-5 bg-gradient-to-r from-purple-500 to-purple-700">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-white">Total Asesi</h3>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <i class="fas fa-user-graduate text-white text-xl"></i>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center">
                    <span class="text-3xl font-bold text-gray-800">{{ $asesi }}</span>

                </div>
            </div>
        </div>

        <!-- Asesor Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="p-5 bg-gradient-to-r from-blue-500 to-blue-700">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-white">Total Asesor</h3>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <i class="fas fa-chalkboard-teacher text-white text-xl"></i>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center">
                    <span class="text-3xl font-bold text-gray-800">{{ $asesor }}</span>

                </div>
            </div>
        </div>

        <!-- Admin Card -->
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <div class="p-5 bg-gradient-to-r from-orange-500 to-orange-700">
                <div class="flex justify-between items-center">
                    <h3 class="text-xl font-bold text-white">Total Admin</h3>
                    <div class="bg-white bg-opacity-30 p-3 rounded-full">
                        <i class="fas fa-user-shield text-white text-xl"></i>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="flex items-center">
                    <span class="text-3xl font-bold text-gray-800">{{ $admins }}</span>

                </div>
            </div>
        </div>
    </div>

    {{-- <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
        <!-- Activity Chart -->
        <div class="bg-white rounded-xl shadow-md p-6 lg:col-span-2">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-lg font-bold text-gray-800">Aktivitas Pengguna</h3>
                <div class="flex space-x-2">
                    <button class="px-3 py-1 bg-blue-100 text-blue-600 rounded-lg text-sm font-medium">Minggu Ini</button>
                    <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-lg text-sm font-medium">Bulan Ini</button>
                </div>
            </div>
            <div class="h-64 w-full bg-gray-50 rounded-lg flex items-center justify-center">
                <!-- Placeholder for chart -->
                <p class="text-gray-400">Grafik aktivitas pengguna akan ditampilkan di sini</p>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-lg font-bold text-gray-800 mb-4">Aktivitas Terbaru</h3>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="bg-green-100 p-2 rounded-full mr-3">
                        <i class="fas fa-user-plus text-green-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Pendaftaran baru</p>
                        <p class="text-xs text-gray-500">5 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-blue-100 p-2 rounded-full mr-3">
                        <i class="fas fa-certificate text-blue-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Sertifikasi selesai</p>
                        <p class="text-xs text-gray-500">1 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-purple-100 p-2 rounded-full mr-3">
                        <i class="fas fa-comment-alt text-purple-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Pesan baru</p>
                        <p class="text-xs text-gray-500">3 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="bg-yellow-100 p-2 rounded-full mr-3">
                        <i class="fas fa-exclamation-triangle text-yellow-600"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium">Peringatan sistem</p>
                        <p class="text-xs text-gray-500">5 jam yang lalu</p>
                    </div>
                </div>
            </div>
            <button class="w-full mt-4 text-sm text-blue-600 hover:text-blue-800">Lihat semua aktivitas</button>
        </div>
    </div> --}}

    <!-- Statistik Sertifikasi dan Tabel Pengguna Terbaru -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Statistik Sertifikasi -->
        <div class="bg-white rounded-xl shadow-md p-6">
            <h3 class="text-lg font-bold text-gray-700 mb-4">Status Pendaftaran Sertifikasi</h3>
            <div class="flex gap-2 mb-4">
                <button onclick="changeChartType('doughnut')"
                    class="px-4 py-2 bg-blue-500 text-white rounded">Doughnut</button>
                <button onclick="changeChartType('bar')" class="px-4 py-2 bg-orange-500 text-white rounded">Bar</button>
            </div>
            <canvas id="userLevelChart"></canvas>
            {{-- <canvas id="userLevelChart" width="100" height="100"></canvas> --}}

            <div class="mt-6 pt-4 border-t border-gray-200">
                <h4 class="text-sm font-semibold text-gray-800 mb-3">Distribusi Level</h4>
                <div class="grid grid-cols-3 gap-2 text-center">
                    <div class="bg-blue-50 p-2 rounded-lg">
                        <span class="block text-xl font-bold text-blue-600">{{ $levelCount['A'] }} User</span>
                        <span class="text-xs text-gray-600">Level A</span>
                    </div>
                    <div class="bg-purple-50 p-2 rounded-lg">
                        <span class="block text-xl font-bold text-purple-600">{{ $levelCount['B'] }} User</span>
                        <span class="text-xs text-gray-600">Level B</span>
                    </div>
                    <div class="bg-green-50 p-2 rounded-lg">
                        <span class="block text-xl font-bold text-green-600">{{ $levelCount['C'] }} User</span>
                        <span class="text-xs text-gray-600">Level C</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Pengguna Terbaru -->
        @livewire('asesi-table')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const levelData = {
            labels: ['Belum Terdaftar', 'Level A', 'Level B', 'Level C'],
            datasets: [{
                label: 'Distribusi Level Asesi',
                data: [
                    {{ $levelCount['userLevelNone'] }},
                    {{ $levelCount['A'] }},
                    {{ $levelCount['B'] }},
                    {{ $levelCount['C'] }}
                ],
                backgroundColor: [
                    '#9CA3AF', // gray
                    '#4ADE80', // green
                    '#60A5FA', // blue
                    '#F472B6' // pink
                ],
                borderColor: '#fff',
                borderWidth: 2
            }]
        };

        let currentChartType = 'doughnut';
        let chartInstance = null;

        function renderChart(type) {
            const ctx = document.getElementById('userLevelChart').getContext('2d');

            // Destroy chart sebelumnya kalau ada
            if (chartInstance) {
                chartInstance.destroy();
            }

            chartInstance = new Chart(ctx, {
                type: type,
                data: levelData,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom'
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const total = {{ array_sum($levelCount) }};
                                    const value = context.raw;
                                    const percent = ((value / total) * 100).toFixed(1);
                                    return `${context.label}: ${value} (${percent}%)`;
                                }
                            }
                        }
                    }
                }
            });

            currentChartType = type;
        }

        function changeChartType(type) {
            renderChart(type);
        }

        // Render chart default saat load
        document.addEventListener('DOMContentLoaded', function() {
            renderChart(currentChartType);
        });
    </script>



@endsection
