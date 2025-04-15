<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TLC Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white flex items-center justify-center min-h-screen p-4">
    {{-- <div class="bg-white shadow-lg rounded-3xl overflow-hidden w-full max-w-4xl flex">
        <!-- Left Section -->
        <div class="hidden md:flex flex-col justify-center items-center w-1/2 bg-blue-200 p-10">
            
            <h2 class="text-3xl font-bold text-blue-800 mt-4">Segera Daftarkan Diri Anda!</h2>
            <div class="mt-6 w-32 h-32 bg-gray-300 flex items-center justify-center rounded-lg">
                <span class="text-gray-500"><img src="images/logoTlcPng.png" alt=""></span>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-blue-800">Create Account</h2>
            </div>
            <form>
                <div class="mb-4">
                    <label class="text-sm font-medium text-gray-700">First Name</label>
                    <input type="text" placeholder="John" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label class="text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" placeholder="your.email@example.com" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label class="text-sm font-medium text-gray-700">Create Password</label>
                    <input type="password" placeholder="Your Password" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label class="text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" placeholder="Confirm Password" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400">
                </div>
                <div class="flex items-center mb-6">
                    <input type="checkbox" id="terms" class="mr-2">
                    <label for="terms" class="text-sm text-gray-600">I agree to the <a href="#" class="text-blue-500">terms of service</a> and <a href="#" class="text-blue-500">privacy policy</a></label>
                </div>
                <button class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition flex items-center justify-center gap-2">
                    Daftar Sekarang
                </button>
            </form>
            <p class="text-center mt-6 text-sm">
                Already have an account? <a href="{{ route('login') }}" class="text-blue-500 font-semibold">Sign in</a>
            </p>
            
        </div>
    </div> --}}

    <div class="bg-gradient-to-r from-blue-600 to-indigo-700 shadow-2xl rounded-3xl overflow-hidden w-full max-w-4xl flex transform hover:scale-[1.01] transition-all duration-300">
        <!-- kiri Section - Enhanced Visual Appeal -->
        <div class="hidden md:flex flex-col justify-center items-center w-1/2 bg-gradient-to-br from-blue-400 to-purple-500 p-10 relative overflow-hidden">
            <!-- Animasi bakground element -->
            <div class="absolute top-0 left-0 w-full h-full opacity-10">
                <div class="absolute w-40 h-40 rounded-full bg-white top-10 left-10 animate-pulse"></div>
                <div class="absolute w-20 h-20 rounded-full bg-white bottom-10 right-20 animate-ping"></div>
            </div>
            
            <h2 class="text-4xl font-extrabold text-white mt-4 text-center drop-shadow-lg">Mulai Perjalanan Anda Di TLC</h2>
            <p class="text-white text-center mt-4 mb-8">Layanan TLC untuk kenyamanan dan Kepuasan Anda</p>
            
            <div class="mt-6 w-40 h-40 bg-white/20 backdrop-blur-sm flex items-center justify-center rounded-full shadow-xl border-4 border-white/30 p-2 hover:rotate-3 transition-all duration-300">
                <img src="images/logoTlcPng.png" alt="TLC Care Logo" class="max-w-full max-h-full object-contain">
            </div>
            
            
            <div class="mt-10 text-white/90 flex flex-col gap-3">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span>Mentor terbaik</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span>Pelayanan 24/7</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-300" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                    </svg>
                    <span>Harga terjangkau</span>
                </div>
            </div>
        </div>
        
        <!-- kanan Section - Enhanced Form -->
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center bg-white">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-indigo-700 bg-clip-text text-transparent">Buat Akun Baru</h2>
            </div>
            
            <form class="space-y-6">
                <div class="relative">
                    <label class="text-sm font-medium text-gray-700 block mb-1">Nama Lengkap</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="text" placeholder="Masukkan nama lengkap" class="w-full pl-10 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 hover:border-blue-400">
                    </div>
                </div>
                
                <div class="relative">
                    <label class="text-sm font-medium text-gray-700 block mb-1">Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                        </span>
                        <input type="email" placeholder="email@example.com" class="w-full pl-10 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 hover:border-blue-400">
                    </div>
                </div>
                
                <div class="relative">
                    <label class="text-sm font-medium text-gray-700 block mb-1">Kata Sandi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="password" placeholder="Minimal 8 karakter" class="w-full pl-10 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 hover:border-blue-400">
                    </div>
                </div>
                
                <div class="relative">
                    <label class="text-sm font-medium text-gray-700 block mb-1">Konfirmasi Kata Sandi</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <input type="password" placeholder="Ulangi kata sandi" class="w-full pl-10 p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all duration-200 hover:border-blue-400">
                    </div>
                </div>
                
                <div class="flex items-center">
                    <input type="checkbox" id="terms" class="w-4 h-4 text-blue-600 rounded focus:ring-blue-500">
                    <label for="terms" class="ml-2 text-sm text-gray-600">Saya menyetujui <a href="#" class="text-blue-600 font-semibold hover:underline">syarat dan ketentuan</a> serta <a href="#" class="text-blue-600 font-semibold hover:underline">kebijakan privasi</a></label>
                </div>
                
                <button class="w-full bg-gradient-to-r from-blue-600 to-indigo-700 text-white py-3 rounded-lg hover:from-blue-700 hover:to-indigo-800 transition-all duration-300 transform hover:-translate-y-1 shadow-lg flex items-center justify-center gap-2 font-bold">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                    </svg>
                    DAFTAR SEKARANG
                </button>
                
                <div class="relative my-6">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative flex justify-center text-sm">
                        <span class="px-2 bg-white text-gray-500">atau daftar dengan</span>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-4">
                    <button type="button" class="flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white hover:bg-gray-50 transition-all duration-200">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 0C5.37 0 0 5.37 0 12C0 17.31 3.435 21.795 8.205 23.385C8.805 23.49 9.03 23.13 9.03 22.815C9.03 22.53 9.015 21.585 9.015 20.58C6 21.135 5.22 19.845 4.98 19.17C4.845 18.825 4.26 17.76 3.75 17.475C3.33 17.25 2.73 16.695 3.735 16.68C4.68 16.665 5.355 17.55 5.58 17.91C6.66 19.725 8.385 19.215 9.075 18.9C9.18 18.12 9.495 17.595 9.84 17.295C7.17 16.995 4.38 15.96 4.38 11.37C4.38 10.065 4.845 8.985 5.61 8.145C5.49 7.845 5.07 6.615 5.73 4.965C5.73 4.965 6.735 4.65 9.03 6.195C9.99 5.925 11.01 5.79 12.03 5.79C13.05 5.79 14.07 5.925 15.03 6.195C17.325 4.635 18.33 4.965 18.33 4.965C18.99 6.615 18.57 7.845 18.45 8.145C19.215 8.985 19.68 10.05 19.68 11.37C19.68 15.975 16.875 16.995 14.205 17.295C14.64 17.67 15.015 18.39 15.015 19.515C15.015 21.12 15 22.41 15 22.815C15 23.13 15.225 23.505 15.825 23.385C18.2072 22.5808 20.2772 21.0498 21.7437 19.0074C23.2101 16.9651 23.9993 14.5143 24 12C24 5.37 18.63 0 12 0Z" fill="#171515" />
                        </svg>
                        Github
                    </button>
                    <button type="button" class="flex items-center justify-center py-2 px-4 border border-gray-300 rounded-lg shadow-sm bg-white hover:bg-gray-50 transition-all duration-200">
                        <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.766 12.2764C23.766 11.4607 23.6999 10.6406 23.5588 9.83807H12.24V14.4591H18.7217C18.4528 15.9494 17.5885 17.2678 16.323 18.1056V21.104H20.19C22.4608 19.014 23.766 15.9274 23.766 12.2764Z" fill="#4285F4"/>
                            <path d="M12.2401 24.0008C15.4766 24.0008 18.2059 22.9382 20.1945 21.1039L16.3276 18.1055C15.2517 18.8375 13.8627 19.252 12.2445 19.252C9.11388 19.252 6.45934 17.1399 5.50693 14.3003H1.5166V17.3912C3.55371 21.4434 7.7029 24.0008 12.2401 24.0008Z" fill="#34A853"/>
                            <path d="M5.50253 14.3003C4.99987 12.8099 4.99987 11.1961 5.50253 9.70575V6.61481H1.51649C-0.18551 10.0056 -0.18551 14.0004 1.51649 17.3912L5.50253 14.3003Z" fill="#FBBC04"/>
                            <path d="M12.2401 4.74966C13.9509 4.7232 15.6044 5.36697 16.8434 6.54867L20.2695 3.12262C18.1001 1.0855 15.2208 -0.034466 12.2401 0.000808666C7.7029 0.000808666 3.55371 2.55822 1.5166 6.61481L5.50264 9.70575C6.45505 6.86173 9.1096 4.74966 12.2401 4.74966Z" fill="#EA4335"/>
                        </svg>
                        Google
                    </button>
                </div>
            </form>
            
            <p class="text-center mt-8 text-sm text-gray-600">
                Sudah memiliki akun? <a href="{{ route('login') }}" class="text-blue-600 font-semibold hover:underline transition-colors">Masuk sekarang</a>
            </p>
        </div>
    </div>
</body>
</html>




{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Register Page</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="m-0 p-0">
    <section class="flex flex-col md:flex-row h-screen items-center m-0">
        <div class="hidden lg:block w-full md:w-1/2 h-screen bg-cover bg-no-repeat bg-center"
            style="background-image: url('{{ asset('assets/img/loginPage.jpg') }}');">
        </div>


        <div
            class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto mt-20 md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
        flex items-center justify-center">

            <div class="w-full">

                <div class="flex w-full justify-start items-center gap-1">
                    <h1 class="text-xl font-bold">Teaching Learning Certification</h1>
                    <img class="rounded-full w-20 h-20" src="{{ asset('assets/img/tlc.jpg') }}" alt="">
                </div>
                <h1 class="text-lg md:text-2xl font-bold leading-tight">Register</h1>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Whoops!</strong>
                        <span class="block sm:inline">Username atau Password salah!</span>
                        <span class="block sm:inline">{{ $errors->first() }}</span>
                    </div>
                @endif

                <form class="mt-6" action="{{ route('register') }}" method="POST">
                    @csrf

                    {{-- Nama Depan --}}
                    {{-- <div>
                        <label class="block text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" id="name" placeholder="Enter Nama Lengkap"
                            class="w-full p-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required aria-label="Email Address" value="{{ old('name') }}">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div> --}}

                    {{-- Email
                    <div class="mt-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email" minlength="6"
                            class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none"
                            required aria-label="Password" value="{{ old('email') }}">
                    </div> --}}

                    {{-- Password
                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password"
                            minlength="6"
                            class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none"
                            required aria-label="Password" autocomplete="new-password" value="{{ old('password') }}">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div> --}}

                    {{-- Confirm Password --}}
                    {{-- <div class="mt-4">
                        <label class="block text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Enter Password" minlength="6"
                            class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none"
                            required aria-label="Password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div> --}}

                    {{-- <button type="submit"
                        class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                    px-4 py-3 mt-6">Register</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">
                <p class="my-8">
                    Sudah Punya Akun?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">
                        Masuk
                    </a>
                </p>
            </div>
        </div>
    </section>

</body>

</html> --}}
