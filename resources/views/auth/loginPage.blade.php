 @extends('layouts.login')

 @section('title', 'Login')

 @section('content')
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
                     <span class="text-gray-500"><img src="images/logoTlcPng.png" alt="Logo" class="max-w-full"></span>
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

                 <form action="{{ route('login.post') }}" method="POST">
                     @csrf
                     @method('POST')
                     <div class="mb-6 group">
                         <label class="text-sm font-medium text-gray-700 block mb-2">Email Address</label>
                         <div class="relative">
                             <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                 <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                     </path>
                                 </svg>
                             </div>
                             <input type="email" placeholder="your.email@example.com"
                                 class="w-full pl-10 p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition"
                                 required accept="email" name="email" value="{{ old('email') }}">
                             @error('email')
                                 <div class="text-red-500 text-sm mt-1">
                                     {{ $message }}
                                 </div>
                             @enderror
                         </div>
                     </div>

                     <div class="mb-6 group">
                         <label class="text-sm font-medium text-gray-700 block mb-2">Password</label>
                         <div class="relative">
                             <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                 <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                     xmlns="http://www.w3.org/2000/svg">
                                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                         d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                     </path>
                                 </svg>
                             </div>
                             <input type="password" placeholder="Your Password"
                                 class="w-full pl-10 p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition "
                                 name="password" required>
                             @error('password')
                                 <div class="text-red-500 text-sm mt-1">
                                     {{ $message }}
                                 </div>
                             @enderror
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
                     <a href="{{ route('google.redirect') }}"
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
 @endsection
