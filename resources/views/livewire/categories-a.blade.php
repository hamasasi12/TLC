{{-- @php
    $userPermission = Auth::user()->getPermissionNames();
@endphp --}}

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
    @forelse ($categoriesA as $index)
        <div
            class="bg-white rounded-3xl shadow-lg overflow-hidden border border-blue-100 transform transition duration-500 hover:shadow-xl group">
            <div class="relative">
                <img src="{{ asset('/storage/' . $index['banner_img']) }}" alt="Literasi"
                    class="w-full h-48 object-cover group-hover:opacity-90 transition">
                @php
                    $categoryName = strtoupper($index['name']); //
                    $hasAccess = Auth::user()->hasPermissionTo($categoryName);
                @endphp
                @if ($hasAccess)
                    <div
                        class="absolute top-4 right-4 bg-green-500 text-white rounded-full px-3 py-1 text-xs font-medium shadow">
                        Tersedia
                    </div>
                @else
                    <div
                        class="absolute top-4 right-4 bg-red-500 text-white rounded-full px-3 py-1 text-xs font-medium shadow">
                        Terkunci
                    </div>
                @endif
                <div class="absolute bottom-0 left-0 w-full h-16 bg-gradient-to-t from-black to-transparent">
                </div>
            </div>
            <div class="p-6 relative">
                <div class="absolute -top-10 left-6 bg-blue-600 text-white p-3 rounded-xl shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-800 mt-2 mb-2">Kategori: {{ $index['name'] }}</h3>
                <div class="flex items-center text-yellow-500 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-300" fill="currentColor"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z" />
                    </svg>
                    <span class="ml-2 text-sm text-gray-600">
                        {{ $index['question_count'] }}
                        <span> Soal</span>
                    </span>
                </div>
                <div class="flex justify-between items-center">
                    <div class="text-sm text-gray-500">
                        <span class="inline-block w-2 h-2 bg-green-500 rounded-full mr-1"></span>
                        {{ $index['time_limit'] }}
                        <span> Menit</span>
                    </div>
                    <button
                        class="px-5 py-2 bg-gradient-to-r from-blue-500 to-blue-700 text-white rounded-xl text-sm font-medium shadow-md transform transition duration-100 hover:shadow-xl hover:-translate-y-0.5 flex items-center">
                        Mulai
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    @empty
        <div>
            <p class="text-center text-gray-500 text-sm">Tidak ada kategori yang tersedia.</p>
        </div>
    @endforelse

</div>
