@extends('layouts.adminDashboard')

@section('title', $title)

@section('content')
    <div class="max-w-5xl mx-auto px-4 pt-6 mt-4">
        <!-- Header with breadcrumb -->
        <div
            class="flex items-center justify-between p-4 mb-6 bg-gradient-to-r from-blue-600 to-blue-800 rounded-xl shadow-lg">
            <a href="{{ route('admin.asesi.index') }}"
                class="inline-flex items-center px-4 py-2 rounded-lg bg-white text-blue-800 hover:bg-blue-50 transition-colors duration-200 shadow">
                <i class="mr-2 fa-solid fa-arrow-left-long"></i> Kembali
            </a>
            <h1 class="text-xl font-bold text-white sm:text-2xl">Detail Pengguna</h1>
        </div>

        <!-- Main card -->
        <div class="bg-white border border-gray-100 rounded-xl shadow-md overflow-hidden">
            <!-- Profile section -->
            <div class="flex flex-col items-center p-6">
                <img src="{{ $asesi->profile_image ? asset('storage/' . $asesi->profile_image) : asset('assets/img/blank_profile.png') }}"
                    alt="Profile Picture" class="w-32 h-32 object-cover rounded-full border-4 border-white shadow-lg mb-4">
                <h2 class="text-lg font-semibold text-gray-700">{{ $asesi->name }}</h2>
                @if ($asesi->nama_depan)
                    <p class="text-gray-500">{{ $asesi->nama_depan }}</p>
                @endif
            <p class="text-sm mt-1 text-gray-500">Status:
                <span class="font-semibold {{ $asesi->user->status == 'active' ? 'text-green-600' : 'text-red-600' }}">
                    {{ ucfirst($asesi->user->status) }}
                </span>
            </p>
            </div>

            <!-- Information sections -->
            <div class="p-6 space-y-8">
                <!-- Personal Info -->
                <div>
                    <h3 class="text-md font-bold text-gray-800 border-b pb-2 mb-4">Informasi Personal</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm text-gray-500">NIK</p>
                            <p class="font-medium text-gray-800">{{ $asesi->nik ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Nomor WhatsApp</p>
                            <p class="font-medium text-gray-800">{{ $asesi->no_wa ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Jenis Kelamin</p>
                            <p class="font-medium text-gray-800">
                                {{ $asesi->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Tempat Lahir</p>
                            <p class="font-medium text-gray-800">{{ $asesi->tempat_lahir ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Tanggal Lahir</p>
                            <p>{{ $asesi->tanggal_lahir ? \Carbon\Carbon::parse($asesi->tanggal_lahir)->format('d M Y') : '-' }}
                            </p>

                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Institusi</p>
                            <p class="font-medium text-gray-800">{{ $asesi->instansi ?? ($asesi->custom_instansi ?? '-') }}
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Address -->
                <div>
                    <h3 class="text-md font-bold text-gray-800 border-b pb-2 mb-4">Domisili</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm text-gray-500">Provinsi</p>
                            <p class="font-medium text-gray-800">{{ $asesi->provinsi ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Kabupaten</p>
                            <p class="font-medium text-gray-800">{{ $asesi->kabupaten ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Kecamatan</p>
                            <p class="font-medium text-gray-800">{{ $asesi->kecamatan ?? '-' }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Kelurahan</p>
                            <p class="font-medium text-gray-800">{{ $asesi->kelurahan ?? '-' }}</p>
                        </div>
                    </div>
                </div>

                <!-- Account Info -->
                <div>
                    <h3 class="text-md font-bold text-gray-800 border-b pb-2 mb-4">Informasi Akun</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="font-medium text-gray-800">{{ $asesi->user->email ?? '-' }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>testing</p>    
</body>
</html>