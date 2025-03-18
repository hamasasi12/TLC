<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - TLC Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 via-green-100 to-yellow-100 flex items-center justify-center min-h-screen p-4">
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden w-full max-w-4xl flex">
        <!-- Left Section -->
        <div class="hidden md:flex flex-col justify-center items-center w-1/2 bg-blue-200 p-10">
            {{-- <div class="flex items-center gap-2">
                <img src="logo.png" alt="Logo" class="w-10 h-10">
                <h1 class="text-2xl font-bold text-blue-800">TLC Care</h1>
            </div> --}}
            <h2 class="text-3xl font-bold text-blue-800 mt-4">Segera Daftarkan Diri Anda!</h2>
            <p class="text-blue-700  mt-2">Create your account and become part of our nurturing community where everyone is valued and supported.</p>
            <div class="mt-6 w-32 h-32 bg-gray-300 flex items-center justify-center rounded-lg">
                <span class="text-gray-500"><img src="images/logoTlcPng.png" alt=""></span>
            </div>
            <div class="mt-4 flex gap-2">
                <span class="px-3 py-1 text-sm font-semibold text-yellow-700 bg-yellow-300 rounded-full">Supportive</span>
                <span class="px-3 py-1 text-sm font-semibold text-green-700 bg-green-300 rounded-full">Caring</span>
                <span class="px-3 py-1 text-sm font-semibold text-blue-700 bg-blue-300 rounded-full">Nurturing</span>
            </div>
        </div>
        
        <!-- Right Section -->
        <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-blue-800">Create Account</h2>
                {{-- <div>
                    <button class="px-4 py-1 text-blue-500 text-sm">Login</button>
                    <button class="px-4 py-1 bg-blue-500 text-white rounded-full text-sm">Register</button>
                </div> --}}
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
            
            {{-- <p class="text-center mt-6 text-sm">Already have an account? <a href="#" class="text-blue-500 font-semibold">Sign in</a></p> --}}
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
