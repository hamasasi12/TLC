{{-- <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Card 1: PPT Upload -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="bg-orange-100 p-3 rounded-xl">
                <svg><!-- Icon PPT --></svg>
            </div>
            <h3>Input PPT</h3>
        </div>
        <p>Unggah presentasi PPT untuk dinilai</p>
        <input type="file" accept=".ppt,.pptx">
        <button>Unggah</button>
    </div>

    <!-- Card 2: Yes/No Questions -->
    <div class="bg-white rounded-2xl shadow-lg p-6">
        <div class="flex items-center space-x-3 mb-4">
            <div class="bg-teal-100 p-3 rounded-xl">
                <svg><!-- Icon Question --></svg>
            </div>
            <h3>Soal Ya/Tidak</h3>
        </div>
        <p>Jawab pertanyaan Ya/Tidak</p>
        <div class="space-y-4">
            <div class="p-4 border rounded-xl">
                <p>Pertanyaan 1</p>
                <input type="radio" name="q1"> Ya
                <input type="radio" name="q1"> Tidak
            </div>
        </div>
        <button>Kumpulkan</button>
    </div>
</div> --}}

<!-- Categories B -->
<!-- Level B Content: 2 cards (PPT and Yes/No questions) -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- PPT Card -->
    <div
        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
        <div class="p-6">
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-orange-100 p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900">Input PPT</h3>
            </div>
            <p class="text-gray-600 mb-6">Unggah presentasi PPT untuk ditinjau dan dinilai</p>
            <div class="mb-4">
                <label
                    class="flex items-center justify-center w-full px-4 py-2 border-2 border-dashed border-gray-300 rounded-xl cursor-pointer hover:border-blue-500 hover:bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mr-2" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12" />
                    </svg>
                    <span class="text-sm font-medium text-gray-600">Pilih file atau seret ke
                        sini</span>
                    <input type="file" class="hidden" accept=".ppt,.pptx" />
                </label>
            </div>
            <div class="flex items-center justify-end">
                <button
                    class="px-4 py-2 bg-orange-600 text-white text-sm font-medium rounded-xl hover:bg-orange-700 transition">Unggah</button>
            </div>
        </div>
    </div>

    <!-- Yes/No Questions Card -->
    <div
        class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition duration-300 hover:shadow-xl hover:-translate-y-1">
        <div class="p-6">
            <div class="flex items-center space-x-3 mb-4">
                <div class="bg-teal-100 p-3 rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-teal-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900">Soal Ya/Tidak</h3>
            </div>
            <p class="text-gray-600 mb-6">Jawab pertanyaan dengan opsi Ya atau Tidak</p>
            <div class="space-y-4 mb-6">
                <div class="p-4 border border-gray-200 rounded-xl">
                    <p class="font-medium text-gray-800 mb-3">Apakah metode presentasi yang digunakan
                        sudah
                        sesuai dengan topik?</p>
                    <div class="flex space-x-3">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="q1" class="form-radio h-4 w-4 text-blue-600">
                            <span class="text-gray-700">Ya</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="q1" class="form-radio h-4 w-4 text-blue-600">
                            <span class="text-gray-700">Tidak</span>
                        </label>
                    </div>
                </div>
                <div class="p-4 border border-gray-200 rounded-xl">
                    <p class="font-medium text-gray-800 mb-3">Apakah visualisasi data dalam presentasi
                        mudah
                        dipahami?</p>
                    <div class="flex space-x-3">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="q2" class="form-radio h-4 w-4 text-blue-600">
                            <span class="text-gray-700">Ya</span>
                        </label>
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="q2" class="form-radio h-4 w-4 text-blue-600">
                            <span class="text-gray-700">Tidak</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <button
                    class="px-4 py-2 bg-teal-600 text-white text-sm font-medium rounded-xl hover:bg-teal-700 transition">Kumpulkan</button>
            </div>
        </div>
    </div>
</div>
