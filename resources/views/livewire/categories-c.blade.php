{{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Card 1: Essay -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="bg-indigo-100 p-3 rounded-xl">
                <svg><!-- Icon Essay --></svg>
            </div>
            <h3>Soal Essay</h3>
        </div>
        <p>Jawab pertanyaan essay</p>
        <textarea placeholder="Tulis jawaban..."></textarea>
        <button>Kumpulkan</button>
    </div>

    <!-- Card 2: Video Upload -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="bg-red-100 p-3 rounded-xl">
                <svg><!-- Icon Video --></svg>
            </div>
            <h3>Input Video</h3>
        </div>
        <p>Unggah video presentasi</p>
        <input type="file" accept="video/*">
        <button>Unggah</button>
    </div>
</div> --}}

<!-- Categories C -->

<!-- Level C Content: 2 cards (Essay and Video input) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Essay Card -->
    <div
        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
        <div class="p-6">
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-indigo-100 p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900">Soal Essay</h3>
            </div>
            <p class="text-gray-600 mb-6">Jawab pertanyaan dengan esai singkat dan padat</p>
            <div class="space-y-4 mb-6">
                <div class="p-4 border border-gray-200 rounded-xl">
                    <p class="font-medium text-gray-800 mb-3">Jelaskan bagaimana konsep utama dapat
                        diterapkan
                        dalam konteks industri saat ini.</p>
                    <textarea rows="4"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Tulis jawaban Anda di sini..."></textarea>
                </div>
                <div class="p-4 border border-gray-200 rounded-xl">
                    <p class="font-medium text-gray-800 mb-3">Analisis kelebihan dan kekurangan dari
                        pendekatan
                        yang dibahas dalam materi.</p>
                    <textarea rows="4"
                        class="w-full border border-gray-300 rounded-lg p-3 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                        placeholder="Tulis jawaban Anda di sini..."></textarea>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <button
                    class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-xl hover:bg-indigo-700 transition">Kumpulkan</button>
            </div>
        </div>
    </div>

    <!-- Video Input Card -->
    <div
        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
        <div class="p-6">
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-red-100 p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900">Input Video</h3>
            </div>
            <p class="text-gray-600 mb-6">Unggah video presentasi atau demo Anda</p>
            <div class="mb-6">
                <div
                    class="border-2 border-dashed border-gray-300 rounded-xl p-6 text-center cursor-pointer hover:border-red-500 hover:bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto text-gray-400 mb-4" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                    </svg>
                    <p class="text-sm font-medium text-gray-600 mb-1">Seret file video ke sini atau
                        klik untuk
                        memilih</p>
                    <p class="text-xs text-gray-500">Format yang didukung: MP4, MOV, AVI (Maks. 100MB)
                    </p>
                    <input type="file" class="hidden" accept="video/*" />
                </div>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-xs text-gray-500">0 file dipilih</span>
                <button
                    class="px-4 py-2 bg-red-600 text-white text-sm font-medium rounded-xl hover:bg-red-700 transition">Unggah</button>
            </div>
        </div>
    </div>
</div>
