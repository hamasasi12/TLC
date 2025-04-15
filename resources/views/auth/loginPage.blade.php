<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - TLC Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="bg-white flex items-center justify-center min-h-screen p-4">
    {{-- <div class="bg-white shadow-lg rounded-3xl overflow-hidden w-full max-w-4xl flex flex-col md:flex-row">
        <!-- Left Section -->
        <div class="hidden md:flex flex-col justify-center items-center w-full md:w-1/2 bg-blue-200 p-10">
            <h1 class="text-3xl font-bold text-blue-800 text-center">Selamat Datang</h1>
            <div class="mt-6 w-32 h-32 bg-gray-300 flex items-center justify-center rounded-lg">
                <span class="text-gray-500"><img src="images/logoTlcPng.png" alt=""></span>
            </div>
        </div>

        <!-- Right Section -->
        <div class="w-full md:w-1/2 p-6 md:p-10 flex flex-col justify-center">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-blue-800">Sign In</h2>
                
            </div>
            <form>
                <div class="mb-4">
                    <label class="text-sm font-medium text-gray-700">Email Address</label>
                    <input type="email" placeholder="your.email@example.com" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400">
                </div>
                <div class="mb-4">
                    <label class="text-sm font-medium text-gray-700">Password</label>
                    <input type="password" placeholder="Your Password" class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-blue-400 focus:border-blue-400">
                </div>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <input type="checkbox" id="remember" class="mr-2">
                        <label for="remember" class="text-sm text-gray-600">Remember me</label>
                    </div>
                    <a href="#" class="text-sm text-blue-500">Forgot your password?</a>
                </div>
                <button class="w-full bg-blue-500 text-white py-3 rounded-lg hover:bg-blue-600 transition">Sign In</button>
            </form>
            <div class="text-center my-4 text-gray-500 text-sm">OR CONTINUE WITH</div>
            <div class="flex justify-center gap-4">
                
                <a href="#" class="p-3 w-12 h-12 rounded-full bg-red-500 text-white flex justify-center items-center shadow-md hover:bg-red-600">
                    <i class="fa-brands fa-google text-lg"></i>
                </a>
                
            </div>
            <p class="text-center mt-6 text-sm">
                New to our community? <a href="{{ route('register') }}" class="text-blue-500 font-semibold">Create an account</a>
            </p>
            
            
        </div>
    </div> --}}
    
    <div class="bg-white min-h-screen w-full flex items-center justify-center p-4">
        <div class="bg-gray-50 shadow-xl rounded-3xl overflow-hidden w-full max-w-4xl flex flex-col md:flex-row">
            <!-- kiri Section -->
            <div
                class="hidden md:flex flex-col justify-center items-center w-full md:w-1/2 bg-gradient-to-br from-blue-400 to-indigo-500 p-10 relative overflow-hidden">
                <!-- Dekorasi element -->
                <div class="absolute top-0 left-0 w-full h-full opacity-10">
                    <div class="absolute top-10 left-10 w-20 h-20 rounded-full bg-white"></div>
                    <div class="absolute bottom-20 right-10 w-32 h-32 rounded-full bg-white"></div>
                    <div class="absolute top-1/2 left-1/3 w-16 h-16 rounded-full bg-white"></div>
                </div>

                <h1 class="text-4xl font-bold text-white text-center relative z-10 mb-4">Selamat Datang</h1>
                <p class="text-blue-100 text-center mb-8">Welcome to our platform</p>
                <div
                    class="mt-6 w-40 h-40 bg-white bg-opacity-20 flex items-center justify-center rounded-2xl shadow-lg transform hover:scale-105 transition-transform duration-300">
                    <span class="text-gray-500"><img src="images/logoTlcPng.png" alt="Logo"
                            class="max-w-full"></span>
                </div>
            </div>

            <!-- kanan Section -->
            <div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
                <!-- Mobile version of title -->
                <div class="md:hidden text-center mb-8">
                    <h1 class="text-3xl font-bold text-blue-600">Selamat Datang</h1>
                    <p class="text-blue-500 text-sm">Welcome to our platform</p>
                </div>

                <div class="flex justify-between items-center mb-8">
                    <h2 class="text-2xl font-bold text-gray-800">Sign In</h2>
                    <div class="text-sm font-medium">
                        <span class="text-gray-500">New user?</span>
                        <a href="{{ route('register') }}"
                            class="ml-2 text-blue-600 hover:text-blue-800 transition">Register</a>
                    </div>
                </div>

                <form>
                    <div class="mb-6 group">
                        <label class="text-sm font-medium text-gray-700 block mb-2">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <input type="email" placeholder="your.email@example.com"
                                class="w-full pl-10 p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        </div>
                    </div>

                    <div class="mb-6 group">
                        <label class="text-sm font-medium text-gray-700 block mb-2">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                    </path>
                                </svg>
                            </div>
                            <input type="password" placeholder="Your Password"
                                class="w-full pl-10 p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition">
                        </div>
                    </div>

                    <div class="flex justify-between items-center mb-8">
                        <div class="flex items-center">
                            <input type="checkbox" id="remember"
                                class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500">
                            <label for="remember" class="ml-2 text-sm text-gray-600">Remember me</label>
                        </div>
                        <a href="#"
                            class="text-sm text-blue-600 hover:text-blue-800 hover:underline transition">Forgot
                            password?</a>
                    </div>

                    <button
                        class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 text-white py-4 rounded-xl hover:from-blue-700 hover:to-indigo-700 transition shadow-lg transform hover:translate-y-0.5 hover:shadow-xl">
                        Sign In
                    </button>
                </form>

                <div class="relative flex items-center justify-center my-8">
                    <div class="absolute inset-0 flex items-center">
                        <div class="w-full border-t border-gray-300"></div>
                    </div>
                    <div class="relative px-4 bg-gray-50">
                        <p class="text-sm text-gray-500 font-medium">OR CONTINUE WITH</p>
                    </div>
                </div>

                <div class="flex justify-center mb-6">
                    <a href="#"
                        class="flex items-center justify-center bg-red-500 text-white px-6 py-3 rounded-lg shadow-md hover:bg-red-600 transition transform hover:translate-y-0.5">
                        <i class="fa-brands fa-google text-lg mr-2"></i>
                        <span>Sign in with Google</span>
                    </a>
                </div>

                <p class="text-center text-sm text-gray-600">
                    New to our community? <a href="{{ route('register') }}"
                        class="text-blue-600 font-semibold hover:text-blue-800 hover:underline transition">Create an
                        account</a>
                </p>
            </div>
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

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section class="flex flex-col md:flex-row h-screen items-center">

        <div class="bg-blue-600 hidden lg:block w-full md:w-1/2 xl:w-1/2 h-screen">
            <img src="{{ asset('assets/img/loginPage.jpg') }}" alt="Background Image"
                class="w-full h-full object-cover">
        </div>

        <div
            class="bg-white w-full md:max-w-md lg:max-w-full md:mx-auto md:mx-0 md:w-1/2 xl:w-1/3 h-screen px-6 lg:px-16 xl:px-12
          flex items-center justify-center">

            <div class="w-full h-100">

                <div class="flex w-full justify-start items-center gap-4">
                    <h1 class="text-xl font-bold">Teaching Learning Certification</h1>
                    <img class="rounded-full w-20 h-20" src="{{ asset('assets/img/tlc.jpg') }}" alt="">
                </div>
                <h1 class="text-xl md:text-2xl font-bold leading-tight">Login</h1>

                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
                        role="alert">
                        <strong class="font-bold">Whoops!</strong>
                        <span class="block sm:inline">Username atau Password salah!</span>
                    </div>
                @endif

                <form class="mt-6" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="mb-7">
                        <label for="email-address-icon"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Email</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
                                    <path
                                        d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z" />
                                    <path
                                        d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z" />
                                </svg>
                            </div>
                            <input type="email" id="email" name="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@example.com">
                        </div>
                    </div>

                    <label for="password-icon"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" minlength="8"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Your Password">
                    </div>

                    <div class="text-right mt-2">
                        <a href="#"
                            class="text-sm font-semibold text-gray-700 hover:text-blue-700 focus:text-blue-700">Forgot
                            Password?</a>
                    </div>

                    <button type="submit"
                        class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                    px-4 py-3 mt-6">Log
                        In</button>
                </form>

                <hr class="my-6 border-gray-300 w-full">

                <p class="mt-8">
                    Belum Punya Akun?
                    <a href="{{ route('register') }}" class="text-blue-500 hover:text-blue-700 font-semibold">
                        Daftar!
                    </a>
                </p>

            </div>
        </div>
    </section>
</body>

</html> --}}
