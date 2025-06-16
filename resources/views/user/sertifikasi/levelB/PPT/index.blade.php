@extends('layouts.exam')

@section('title', 'Pengerjaan Level B - Modul Ajar')

@section('content')
<div class="max-w-2xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md dark:bg-gray-800">
    <h2 class="text-2xl font-bold text-gray-800 dark:text-white mb-6">Upload PPT & Deskripsi</h2>

    {{-- Tampilkan pesan error umum --}}
    @if ($errors->any())
        <div class="mb-6 p-4 bg-red-100 text-red-700 rounded-lg">
            <strong>Terjadi kesalahan:</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('asesi.sertifikasi.level.b.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div>
            <label for="file_ppt" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Upload File PPT</label>
            <input type="file" id="file_ppt" name="file_ppt" required
                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none dark:text-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400">
            @error('file_ppt')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="block text-sm font-medium text-gray-700 dark:text-gray-200 mb-1">Deskripsi Modul Ajar</label>
            <input type="text" id="description" name="description" value="{{ old('description') }}" required
                class="w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:placeholder-gray-400"
                placeholder="Tuliskan deskripsi singkat...">
            @error('description')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg shadow-md hover:bg-blue-700 transition-all">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection
