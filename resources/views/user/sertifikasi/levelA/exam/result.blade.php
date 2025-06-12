@extends('layouts.exam')

@section('content')
    <div class="py-12 bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Back Navigation -->
            <div class="mb-6">
                <nav class="flex items-center space-x-2 text-sm text-gray-600">
                    <a href="{{ route('asesi.sertifikasi') }}"
                        class="hover:text-blue-600 transition-colors duration-200 flex items-center">
                        <i class="fas fa-home mr-1"></i>
                        Dashboard Sertifikasi
                    </a>
                    <span class="text-gray-400">•</span>
                    <span class="text-gray-800 font-medium">Hasil Ujian {{ $category->name }}</span>
                </nav>
            </div>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-gray-100">
                <div class="p-8 bg-white">
                    <!-- Header Section -->
                    <div class="mb-10 text-center">
                        <div
                            class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-r from-blue-500 to-indigo-600 rounded-full mb-4">
                            <i class="fas fa-chart-line text-white text-2xl"></i>
                        </div>
                        <h3 class="text-3xl font-bold mb-3 text-gray-700">Ringkasan Hasil Ujian</h3>
                        <p class="text-gray-600 text-lg font-bold">{{ $category->name }}</p>

                        <!-- Status Badge -->
                        @if ($exam->is_passed === 1)
                            <div
                                class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-green-100 text-green-800 mt-3">
                                <i class="fas fa-check-circle mr-2"></i>
                                LULUS
                            </div>
                        @else
                            <div
                                class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-red-100 text-red-800 mt-3">
                                <i class="fas fa-times-circle mr-2"></i>
                                TIDAK LULUS
                            </div>
                        @endif
                    </div>

                    <!-- Statistics Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                        <div
                            class="bg-gradient-to-br from-blue-50 to-blue-100 p-6 rounded-xl shadow-lg border border-blue-200 transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-blue-700 text-lg font-semibold">Skor</div>
                                <div class="w-10 h-10 bg-blue-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-trophy text-white"></i>
                                </div>
                            </div>
                            <div class="text-3xl font-bold text-blue-800">{{ $exam->correct_answers }}/{{ $totalQuestions }}
                            </div>
                            {{-- <div class="text-sm text-blue-600 mt-1">
                                {{ number_format(($exam->correct_answers / $totalQuestions) * 100, 1) }}%
                            </div> --}}
                        </div>

                        <div
                            class="bg-gradient-to-br from-green-50 to-green-100 p-6 rounded-xl shadow-lg border border-green-200 transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-green-700 text-lg font-semibold">Benar</div>
                                <div class="w-10 h-10 bg-green-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-check text-white"></i>
                                </div>
                            </div>
                            <div class="text-3xl font-bold text-green-800">{{ $correctAnswers }}</div>
                            {{-- <div class="text-sm text-green-600 mt-1">
                                {{ number_format(($correctAnswers / $totalQuestions) * 100, 1) }}% dari total
                            </div> --}}
                        </div>

                        <div
                            class="bg-gradient-to-br from-red-50 to-red-100 p-6 rounded-xl shadow-lg border border-red-200 transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-red-700 text-lg font-semibold">Salah</div>
                                <div class="w-10 h-10 bg-red-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-times text-white"></i>
                                </div>
                            </div>
                            <div class="text-3xl font-bold text-red-800">{{ $wrongAnswers }}</div>
                            {{-- <div class="text-sm text-red-600 mt-1">
                                {{ number_format(($wrongAnswers / $totalQuestions) * 100, 1) }}% dari total
                            </div> --}}
                        </div>

                        <div
                            class="bg-gradient-to-br from-gray-50 to-gray-100 p-6 rounded-xl shadow-lg border border-gray-200 transition-all duration-300 hover:shadow-xl hover:scale-105">
                            <div class="flex items-center justify-between mb-3">
                                <div class="text-gray-700 text-lg font-semibold">Tidak Dijawab</div>
                                <div class="w-10 h-10 bg-gray-500 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-question text-white"></i>
                                </div>
                            </div>
                            <div class="text-3xl font-bold text-gray-800">{{ $unansweredQuestions }}</div>
                            {{-- <div class="text-sm text-gray-600 mt-1">
                                {{ number_format(($unansweredQuestions / $totalQuestions) * 100, 1) }}% dari total
                            </div> --}}
                        </div>
                    </div>

                    <!-- Score Visualization -->
                    {{-- <div class="bg-gradient-to-r from-gray-50 to-gray-100 p-6 rounded-xl shadow-md mb-8 border border-gray-200">
                        <h4 class="text-xl font-bold mb-4 text-gray-800 flex items-center">
                            <i class="fas fa-chart-pie mr-2 text-blue-600"></i>
                            Visualisasi Skor
                        </h4>
                        <div class="flex items-center justify-center">
                            <div class="relative w-32 h-32">
                                <div class="w-full h-full bg-gray-200 rounded-full"></div>
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center">
                                        <div class="text-2xl font-bold text-gray-800">{{ number_format($exam->score) }}</div>
                                        <div class="text-sm text-gray-600">Nilai</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Exam Information -->
                    <div
                        class="bg-gradient-to-r from-gray-50 to-gray-100 p-8 rounded-xl shadow-md mb-8 border border-gray-200">
                        <div class="flex items-center justify-between mb-6">
                            <h4 class="text-xl font-bold text-gray-800 flex items-center">
                                <i class="fas fa-info-circle mr-2 text-blue-600"></i>
                                Informasi Detail Ujian
                            </h4>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <div class="text-gray-600 mb-2 text-sm font-medium">Kategori Ujian</div>
                                <div class="font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-bookmark mr-2 text-blue-500"></i>
                                    {{ $category->name }}
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <div class="text-gray-600 mb-2 text-sm font-medium">Hari & Tanggal Ujian</div>
                                <div class="font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-calendar-alt mr-2 text-green-500"></i>
                                    {{ \Carbon\Carbon::parse($exam->created_at)->locale('id')->translatedFormat('l, d F Y') }}
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <div class="text-gray-600 mb-2 text-sm font-medium">Waktu Mulai</div>
                                <div class="font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-play-circle mr-2 text-blue-500"></i>
                                    {{ $exam->start_time->format('H:i:s') }} WIB
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <div class="text-gray-600 mb-2 text-sm font-medium">Waktu Selesai</div>
                                <div class="font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-stop-circle mr-2 text-red-500"></i>
                                    {{ $exam->end_time->format('H:i:s') }} WIB
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <div class="text-gray-600 mb-2 text-sm font-medium">Durasi Pengerjaan</div>
                                <div class="font-semibold text-gray-800 flex items-center">
                                    <i class="fas fa-clock mr-2 text-yellow-500"></i>
                                    {{ ceil($exam->start_time->floatDiffInMinutes($exam->end_time)) }} menit
                                </div>
                            </div>
                            <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <div class="text-gray-600 mb-2 text-sm font-medium">Nilai Akhir</div>
                                <div class="font-bold text-xl text-gray-800 flex items-center">
                                    <i class="fas fa-star mr-2 text-yellow-500"></i>
                                    {{ number_format($exam->score) }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div
                        class="flex flex-col sm:flex-row justify-between items-center gap-4 mt-8 pt-6 border-t border-gray-200">
                        <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                            <!-- Back to Dashboard Button -->
                            <a href="{{ route('asesi.sertifikasi') }}"
                                class="inline-flex items-center justify-center px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white font-medium rounded-lg transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Kembali ke Dashboard
                            </a>
                        </div>

                        <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                            @if ($exam->is_passed === 0)
                                <form action="{{ route('asesi.sertifikasi.level.a.instruction') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                                    <button type="submit"
                                        class="inline-flex items-center justify-center px-6 py-3 bg-orange-600 hover:bg-orange-700 text-white font-medium rounded-lg transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105">
                                        <i class="fas fa-redo mr-2"></i>
                                        Coba Lagi
                                    </button>
                                </form>
                            @endif
                            {{-- <a href="{{ route('asesi.nilai') }}"
                                class="inline-flex items-center justify-center px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105">
                                <i class="fas fa-eye mr-2"></i>
                                Lihat Nilai Anda
                            </a> --}}

                            {{-- <button onclick="window.print()"
                                class="inline-flex items-center justify-center px-6 py-3 bg-green-600 hover:bg-green-700 text-white font-medium rounded-lg transition-all duration-200 shadow-md hover:shadow-lg transform hover:scale-105">
                                <i class="fas fa-print mr-2"></i>
                                Cetak Hasil
                            </button> --}}
                        </div>
                    </div>

                    <!-- Motivational Message -->
                    <div class="mt-8 p-6 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border border-blue-200">
                        @if ($exam->is_passed === 1)
                            <div class="text-center">
                                <div class="text-green-600 text-2xl mb-2">
                                    <i class="fas fa-trophy"></i>
                                </div>
                                <h5 class="text-lg font-bold text-green-800 mb-2">Selamat! Anda Telah Lulus!</h5>
                                <p class="text-green-700">
                                    Prestasi yang luar biasa! Anda telah berhasil menyelesaikan ujian dengan baik.
                                    Lanjutkan perjalanan sertifikasi Anda ke tahap berikutnya.
                                </p>
                            </div>
                        @else
                            <div class="text-center">
                                <div class="text-orange-600 text-2xl mb-2">
                                    <i class="fas fa-lightbulb"></i>
                                </div>
                                <h5 class="text-lg font-bold text-orange-800 mb-2">Jangan Menyerah!</h5>
                                <p class="text-orange-700">
                                    Kegagalan adalah kesempatan untuk belajar lebih baik. Pelajari kembali materi dan coba
                                    lagi.
                                    Setiap usaha membawa Anda lebih dekat pada kesuksesan.
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom Styles for Print -->
    <style>
        @media print {
            .no-print {
                display: none !important;
            }

            body {
                background: white !important;
            }

            .bg-gradient-to-br,
            .bg-gradient-to-r {
                background: white !important;
            }
        }
    </style>
@endsection
