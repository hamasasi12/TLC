<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primarys: "#FBCB04",
                        accent: "#F4CC7C",
                        darkblue: "#0C548C",
                        softblue: "#5F809C",
                        lightblue: "#A6BFCF",
                        navy: "#2E4D69",
                        white: "#FFFFFF",
                        black: "#000000",
                    }
                }
            }
        }
    </script>
</head>

<body class="min-h-screen flex items-center justify-center  py-12 px-4">
    <div class="flex h-screen flex-col md:flex-row w-full max-w-5xl bg-white rounded-2xl shadow-xl overflow-hidden">

        <!-- Left Logo Panel -->
        <div class="hidden md:flex flex-col justify-center items-center w-1/2 bg-gradient-to-br from-[#A6BFCF] to-[#2E4D69] p-10 relative overflow-hidden">
            <!-- Animasi bakground element -->
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <div class="absolute w-40 h-40 rounded-full bg-white top-10 left-10 animate-pulse"></div>
                <div class="absolute w-20 h-20 rounded-full bg-white bottom-10 right-20 animate-ping"></div>
            </div>

            <h2 class="text-4xl font-extrabold text-white mt-4 text-center drop-shadow-lg">Mulai Perjalanan Anda Di TLC
            </h2>
            <p class="text-white text-center mt-4 mb-8">Layanan TLC untuk kenyamanan dan Kepuasan Anda</p>

            <div class="mt-6 w-44 h-44  justify-center">
                <img src="images/logoTlcPng.png" alt="TLC Care Logo" class="max-w-full max-h-full object-contain">
            </div>

            <div class="mt-10 text-white/90 flex flex-col gap-3">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Mentor terbaik</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Pelayanan 24/7</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span>Harga terjangkau</span>
                </div>
            </div>
        </div>

        <!-- Right Form Panel -->
        <div class="md:w-1/2 h-full overflow-y-auto p-8 bg-white">
            <h2 class="text-2xl font-bold text-[#2E4D69] mb-6">Form Registrasi 2</h2>
            <form action="#" method="POST" class="space-y-4">

                {{-- NAMA --}}
                <div>
                    <label class="block text-lg font-medium text-bold text-gray-700">Nama Lengkap: </label>
                    <p class="italic text-sm">Silakan masukkan nama asli dan gelar akademik Anda (jika ada) guna
                        penerbitan sertifikat.</p>
                    <p class="italic text-yellow-400 text-sm">Jika tidak ada gelar akademik maka otomatis akan
                        menggunakan
                        Fullname anda yaitu : </p>
                    <input type="text" name="nama" placeholder="Example Name, S.T." required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-primarys focus:border-primarys">
                </div>

                {{-- NIK --}}
                <div>
                    <label class="block text-lg font-medium text-gray-700">NIK: </label>
                    <p class="italic text-sm">Pastikan NIK anda sudah terisi dengan benar dan tanpa spasi</p>
                    <input type="text" name="nik" placeholder="Nomor Induk Keluarga (Angka)" required
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                </div>


                {{-- TEMPAT LAHIR --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-lg font-medium text-gray-700">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    </div>
                    <div>
                        <label class="block text-lg font-medium text-gray-700">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    </div>

                </div>

                {{-- JENIS KELAMIN --}}

                <div>
                    <label for="instansi" class="pr-2 font-semibold">Jenis Kelamin <span
                            class="text-red-500">*</span></label>
                    <select id="instansi" name="jenis_kelamin"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="" disabled selected>--Pilih Salah Satu--</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                {{-- NOMOR WA --}}
                <div>
                    <label for="no_wa" class="pr-2 font-medium text-gray-700">Nomor Whatsapp <span
                            class="text-red-500">*</span></label>
                    <input
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        type="number" id="no_wa" name="no_wa" placeholder="08xxxxxx" required>
                </div>

                {{-- INSTANSI --}}
                <div>
                    <label for="instansi" class="pr-2 font-semibold">Pilih Instansi <span
                            class="text-red-500">*</span></label>
                    <select id="instansi" name="instansi"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        onchange="showCustomInput()">
                        <option value="" disabled selected>--Pilih Salah Satu--</option>
                        <option value="Perguruan Tinggi">Perguruan Tinggi</option>
                        <option value="Pemerintah">Pemerintah</option>
                        <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                        <option value="Sekolah Menengah Kejuruan">Sekolah Menengah Kejuruan</option>
                        <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                        <option value="Sekolah Dasar">Sekolah Dasar</option>
                        <option value="Lembaga Kursus">Lembaga Kursus</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    <input type="text" id="custom-instansi" name="custom_instansi"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                        placeholder="Masukkan instansi lain" style="display: none;">
                </div>


                {{-- PROVINSI --}}
                <div>
                    <label for="province" class="pr-2 font-semibold">Provinsi Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="province" name="provinsi"
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Provinsi</option>
                        {{-- @foreach ($provinces as $province)
                            <option value="{{ $province->name }}">{{ $province->name }}</option>
                        @endforeach --}}
                    </select>
                </div>


                {{-- KABUPATEN --}}
                <div>
                    <label for="regency" class="pr-2 font-semibold">Kabupeten/Kota Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="regency" name="kabupaten" disabled
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Kabupaten/Kota</option>
                    </select>
                </div>

                {{-- KECAMATAN --}}
                <div>
                    <label for="district" class="pr-2 font-semibold">kecamatan Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="district" name="kecamatan" disabled
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Kecamatan</option>
                    </select>
                </div>

                {{-- KELURAHAN --}}
                <div>
                    <label for="village" class="pr-2 font-semibold">Kelurahan Domisili <span
                            class="text-red-500">*</span></label>
                    <select id="village" name="kelurahan" disabled
                        class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none">
                        <option value="">Pilih Kelurahan</option>
                    </select>
                </div>

                {{-- GAMBAR --}}

                {{-- <div>
                    <!-- Image preview element -->
                    <div>
                    <img id="profilePreview" src="{{ asset('storage/images/blankProfile.png') }}" alt="Profile Picture"
                        class="w-24 h-24 rounded-full my-auto">
                    </div>

                    <div class="mt-3">
                        <label class="pr-2 font-semibold" for="profilInput">
                            Upload Foto Profile (opsional)
                        </label>
                        <input
                        class="w-full upload-btn block text-sm text-gray-900 border border-black rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        aria-describedby="profilInput_help" name="profile_image" accept=".jpg, .jpeg, .png"
                        id="profilInput" type="file" onchange="previewImage(event)">
                    </div>
                </div> --}}

                <div>
                    <button type="submit"
                        class="w-full bg-gradient-to-r from-[#0C548C] to-[#2E4D69] text-white font-bold py-2 px-4 mt-2 rounded-md hover:bg-accent transition duration-300">Daftar</button>
                </div>
            </form>
        </div>

    </div>
</body>

</html>
