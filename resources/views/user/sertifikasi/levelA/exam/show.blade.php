@extends('layouts.exam')

@section('content')
    <!-- Navbar -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white shadow-lg border-b border-[#3A6EA5]/20">
        <div class="max-w-full mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Left section - Logo and Category -->
                <div class="flex items-center space-x-4">
                    <!-- Logo TLC -->
                    <div class="flex-shrink-0 flex items-center">
                        <img class="h-10 w-auto" src="{{ asset('images/logoTlcPng.png') }}" alt="TLC Logo">
                        <span class="ml-2 text-xl font-bold text-[#3A6EA5] hidden sm:block">TLC</span>
                    </div>
                    
                    <!-- Category -->
                    <div class="hidden md:block">
                        <div class="flex items-center space-x-2">
                            <span class="text-sm text-gray-500">Kategori:</span>
                            <span class="px-3 py-1 bg-gradient-to-r from-[#3A6EA5] to-[#90BE6D] text-white text-sm font-medium rounded-full">
                                Sertifikasi Level A
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Center section - Timer -->
                <div class="flex items-center justify-center">
                    @livewire('count-down-timer')
                </div>

                <!-- Right section - Finish Button -->
                <div class="flex items-center">
                    @if ($answeredQuestions > 4)
                        <form action="{{ route('asesi.sertifikasi.level.a.finish', $exam) }}" method="POST"
                            id="finishExamForm" class="inline-block">
                            @csrf
                            <button type="button" onclick="confirmFinish()"
                                class="flex items-center bg-gradient-to-r from-[#90BE6D] to-[#3A6EA5] hover:from-[#7FA85C] hover:to-[#2E5A8A] text-white font-semibold py-2 px-4 sm:px-6 rounded-lg transition-all duration-200 shadow-md hover:shadow-lg text-sm sm:text-base">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 mr-1 sm:mr-2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span class="hidden sm:inline">Selesaikan Ujian</span>
                                <span class="sm:hidden">Selesai</span>
                            </button>
                        </form>
                    @endif

                    <!-- Mobile menu button for category info -->
                    <button id="mobileMenuBtn" class="md:hidden ml-2 p-2 rounded-md text-gray-500 hover:text-[#3A6EA5] hover:bg-gray-100">
                        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile category dropdown -->
            <div id="mobileMenu" class="md:hidden hidden border-t border-gray-200 py-2">
                <div class="flex items-center justify-center space-x-2">
                    <span class="text-sm text-gray-500">Kategori:</span>
                    <span class="px-3 py-1 bg-gradient-to-r from-[#3A6EA5] to-[#90BE6D] text-white text-sm font-medium rounded-full">
                        Sertifikasi Level A
                    </span>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content with top padding for fixed navbar -->
    <div class="min-h-screen py-6 bg-gradient-to-br from-[#3A6EA5]/10 to-[#90BE6D]/10 pt-20">
        <div class=" mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row lg:justify-between gap-6 h-full">
            {{-- //max-w-7xl --}}
            <!-- Left Column - Question Content (70% width on large screens) -->
            <div class="lg:w-10/12">
                @if ($questions->count() > 0)
                    @php
                        $question = $questions->first();
                        $userAnswer =
                            $exam->questionsA()->where('questions_a.id', $question->id)->first()->pivot->user_answer ??
                            null;
                    @endphp

                    <!-- Question Card -->
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6 border border-[#3A6EA5]/20 h-full">
                        <!-- Question Header -->
                        <div class="flex justify-between bg-gradient-to-r from-[#3A6EA5] to-[#90BE6D] px-6 py-4">
                            <h3 class="text-lg font-bold text-white flex items-center">
                                <span
                                    class="bg-white text-[#3A6EA5] rounded-full h-8 w-8 flex items-center justify-center mr-3 font-bold shadow-sm">
                                    {{ $questions->currentPage() }}
                                </span>
                                Pertanyaan
                            </h3>
                        </div>

                        <!-- Question Content -->
                        <div class="p-6">
                            <div class="prose prose-lg max-w-none mb-6">
                                <p class="text-gray-800 text-lg leading-relaxed">{!! $question->question_text !!}</p>
                            </div>

                            @if ($question->image)
                                <div class="mb-6 flex justify-start">
                                    <div class="relative group">
                                        <img src="{{ asset('/storage/' . $question->image) }}" alt="Gambar Soal"
                                            class="max-w-full h-auto rounded-lg shadow-md border border-[#3A6EA5]/20 transition-transform duration-300 group-hover:scale-[1.02] cursor-zoom-in"
                                            onclick="window.open(this.src, '_blank')">
                                    </div>
                                </div>
                            @endif

                            <!-- Answer Options -->
                            <form action="{{ route('asesi.sertifikasi.level.a.answer', $exam) }}" method="POST"
                                id="answerForm">
                                @csrf
                                <input type="hidden" name="question_a_id" value="{{ $question->id }}">

                                <div class="space-y-3 mb-8">
                                    @php
                                        $options = [
                                            'a' => $question->option_a,
                                            'b' => $question->option_b,
                                            'c' => $question->option_c,
                                            'd' => $question->option_d,
                                            // 'e' => $question->option_e,
                                        ];
                                    @endphp

                                    @foreach ($options as $key => $option)
                                        @if ($option)
                                            <div class="flex items-center mb-2">
                                                <input type="radio" name="user_answer" id="answer_{{ $key }}"
                                                    value="{{ $key }}" {{ $userAnswer == $key ? 'checked' : '' }}
                                                    class="mr-2 accent-[#3A6EA5]">
                                                <label for="answer_{{ $key }}"
                                                    class="text-gray-700 cursor-pointer hover:text-[#3A6EA5] transition-colors">
                                                    {{ strtoupper($key) }}. {{ $option }}
                                                </label>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>

                                <!-- Navigation Buttons -->
                                <div class="flex flex-col sm:flex-row justify-between gap-3">
                                    @if ($questions->currentPage() > 1)
                                        <a href="{{ $questions->previousPageUrl() }}"
                                            class="order-2 sm:order-1 flex items-center justify-center bg-gray-100 hover:bg-[#3A6EA5]/10 text-gray-700 hover:text-[#3A6EA5] font-medium py-2.5 px-5 rounded-lg transition duration-150 shadow-sm hover:shadow border border-[#3A6EA5]/20">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Sebelumnya
                                        </a>
                                    @else
                                        <div class="order-2 sm:order-1"></div>
                                    @endif

                                    <div class="order-1 sm:order-2 flex gap-3">
                                        @if ($questions->currentPage() < $totalQuestions)
                                            <input type="hidden" name="next_question"
                                                value="{{ $questions->currentPage() + 1 }}">
                                            <button type="submit"
                                                class="flex-1 sm:flex-none flex items-center justify-center bg-gradient-to-r from-[#3A6EA5] to-[#90BE6D] hover:from-[#2E5A8A] hover:to-[#7FA85C] text-white font-medium py-2.5 px-6 rounded-lg transition duration-150 shadow-sm hover:shadow">
                                                Selanjutnya
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        @else
                                            <input type="hidden" name="next_question"
                                                value="{{ $questions->currentPage() }}">
                                            <button type="submit"
                                                class="flex-1 sm:flex-none bg-gradient-to-r from-[#3A6EA5] to-[#90BE6D] hover:from-[#2E5A8A] hover:to-[#7FA85C] text-white font-medium py-2.5 px-6 rounded-lg transition duration-150 shadow-sm hover:shadow">
                                                Simpan Jawaban
                                            </button>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endif
            </div>

            <!-- Right Column - Question Navigation (30% width on large screens) -->
            <div class="lg:w-4/12">
                <!-- Question Navigation Panel -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-[#3A6EA5]/20 sticky top-6">
                    <div class="p-5">
                        <div class="flex flex-col sm:flex-row justify-between items-center mb-5">
                            <h3 class="text-lg font-bold text-gray-800 mb-3 sm:mb-0">Navigasi Soal</h3>
                        </div>

                        <!-- Legend -->
                        <div class="flex flex-wrap gap-3 mb-4 text-xs">
                            <div class="flex items-center gap-1.5">
                                <div class="w-4 h-4 bg-[#3A6EA5] rounded-md"></div>
                                <span class="text-gray-600">Aktif</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-4 h-4 bg-[#90BE6D] rounded-md"></div>
                                <span class="text-gray-600">Terjawab</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <div class="w-4 h-4 bg-gray-100 border border-[#3A6EA5]/30 rounded-md"></div>
                                <span class="text-gray-600">Belum</span>
                            </div>
                        </div>

                        <!-- Question Grid -->
                        <div
                            class="grid grid-cols-5 sm:grid-cols-6 md:grid-cols-8 gap-2 max-h-96 overflow-y-auto custom-scrollbar p-1">
                            @for ($i = 1; $i <= $totalQuestions; $i++)
                                @php
                                    $pageQuestion = $exam
                                        ->questionsA()
                                        ->skip($i - 1)
                                        ->first();
                                    $hasAnswer = $pageQuestion ? $pageQuestion->pivot->user_answer : null;
                                    $isMarked = $pageQuestion ? $pageQuestion->pivot->is_marked : false;

                                    if ($questions->currentPage() == $i) {
                                        $buttonClass = 'bg-gradient-to-r bg-[#3A6EA5] text-white ring-2 ring-[#3A6EA5]/30';
                                    } elseif ($isMarked) {
                                        $buttonClass =
                                            'bg-yellow-100 border-yellow-400 text-yellow-800 hover:bg-yellow-200';
                                    } elseif ($hasAnswer) {
                                        $buttonClass = 'bg-[#90BE6D] hover:bg-[#7FA85C] text-white';
                                    } else {
                                        $buttonClass =
                                            'bg-gray-100 hover:bg-[#3A6EA5]/10 text-gray-700 hover:text-[#3A6EA5] border border-[#3A6EA5]/20';
                                    }
                                @endphp
                                <a href="{{ route('asesi.sertifikasi.level.a.show', ['exam' => $exam, 'page' => $i]) }}"
                                    class="{{ $buttonClass }} font-medium h-9 w-full flex items-center justify-center rounded-md transition-all duration-150 text-sm"
                                    title="Soal {{ $i }}{{ $hasAnswer ? ' (Sudah dijawab)' : ' (Belum dijawab)' }}">
                                    {{ $i }}
                                    @if ($isMarked)
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 ml-0.5"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    @endif
                                </a>
                            @endfor
                        </div>
                    </div>

                    <!-- Exam Summary -->
                    <div class="bg-gradient-to-r from-[#3A6EA5]/5 to-[#90BE6D]/5 px-5 py-4 border-t border-[#3A6EA5]/20">
                        <div class="grid grid-cols-3 gap-3 text-center">
                            <div class="bg-white p-3 rounded-lg shadow-sm border border-[#3A6EA5]/20">
                                <div class="text-sm text-gray-500">Total Soal</div>
                                <div class="text-lg font-bold text-[#3A6EA5]">{{ $totalQuestions }}</div>
                            </div>
                            <div class="bg-white p-3 rounded-lg shadow-sm border border-[#90BE6D]/20">
                                <div class="text-sm text-gray-500">Terjawab</div>
                                <div class="text-lg font-bold text-[#90BE6D]">{{ $answeredQuestions }}</div>
                            </div>
                            <div class="bg-white p-3 rounded-lg shadow-sm border border-red-200">
                                <div class="text-sm text-gray-500">Belum</div>
                                <div class="text-lg font-bold text-red-600">{{ $totalQuestions - $answeredQuestions }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Confirm finish function for navbar button
            function confirmFinish() {
                Swal.fire({
                    title: 'Konfirmasi Penyelesaian Ujian',
                    text: "Apakah Anda yakin ingin menyelesaikan ujian ini? Pastikan semua jawaban telah disimpan.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Ya, Selesaikan!',
                    cancelButtonText: 'Batal',
                    customClass: {
                        confirmButton: 'bg-gradient-to-r from-[#90BE6D] to-[#3A6EA5] hover:from-[#7FA85C] hover:to-[#2E5A8A] text-white font-semibold px-4 py-2 rounded',
                        cancelButton: 'bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold px-4 py-2 rounded'
                    },
                    buttonsStyling: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('finishExamForm').submit();
                    }
                });
            }

            // Mobile menu toggle
            document.getElementById('mobileMenuBtn').addEventListener('click', function() {
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.toggle('hidden');
            });

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowRight' && {{ $questions->currentPage() }} < {{ $totalQuestions }}) {
                    document.getElementById('answerForm').submit();
                } else if (e.key === 'ArrowLeft' && {{ $questions->currentPage() }} > 1) {
                    window.location.href = "{{ $questions->previousPageUrl() }}";
                } else if (e.key >= 1 && e.key <= 9 && e.key <= {{ $totalQuestions }}) {
                    window.location.href =
                        "{{ route('asesi.sertifikasi.level.a.show', ['exam' => $exam, 'page' => '']) }}/" + e.key;
                }
            });

            // Auto-save on answer selection
            document.querySelectorAll('input[name="user_answer"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const answerKey = this.value.toUpperCase();
                    console.log('Selected answer:', answerKey);
                });
            });
        </script>
    @endpush

    @push('styles')
        <style>
            /* Custom scrollbar for question navigation */
            .custom-scrollbar::-webkit-scrollbar {
                width: 6px;
                height: 6px;
            }

            .custom-scrollbar::-webkit-scrollbar-track {
                background: #f1f1f1;
                border-radius: 10px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #3A6EA5;
                border-radius: 10px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #2E5A8A;
            }

            /* Smooth transitions */
            [type="radio"]:checked+label {
                transform: none;
            }

            /* Responsive adjustments */
            @media (max-width: 1023px) {
                .lg\:w-7\/12,
                .lg\:w-5\/12 {
                    width: 100%;
                }
            }

            /* Ensure content doesn't overlap with fixed navbar */
            body {
                padding-top: 0;
            }
        </style>
    @endpush
@endsection