@extends('layouts.app')

@section('title', 'Lupa Password')

@section('content')
    <header>
        <nav class="fixed w-full z-20 top-0 start-0">
            <div class=" flex flex-wrap items-center justify-between mx-auto py-3 px-6">
                <!-- Brand Section -->
                <div class="flex items-center space-x-4">
                    <img src="{{ asset('assets/img/tlc.png') }}" class="h-8 w-8 md:h-12 md:w-12" alt="TLC Logo">
                    <div>
                        <h1 class="text-lg md:text-xl font-bold text-gray-800 tracking-wide capitalize">TLC Program</h1>
                        <p class="text-xs md:text-sm text-gray-500 font-medium capitalize">
                            Teaching & Learning Certification
                        </p>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    
    <section class="bg-gray-50 min-h-screen pt-20">
        <div class="flex items-center justify-center h-[calc(100vh-200px)]">
            <div class="w-full max-w-xl p-4">
                <!-- Form Container -->
                <div class="p-6">
                    <!-- Back to Login -->
                    <div class="mb-8">
                        <a href="{{ route('login') }}" class="flex items-center text-blue-500 hover:text-blue-600 font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            Kembali ke Login
                        </a>
                    </div>

                    <!-- Title -->
                    <h2 class="sm:text-3xl text-2xl font-bold text-center text-gray-700 mb-3">Lupa Password?</h2>

                    <!-- Instruction text -->
                    <p class="sm:text-center text-justify text-gray-600 mb-8 sm:text-base text-sm">
                        Silahkan masukkan alamat email kamu pada form dibawah. Jika email terdaftar, maka kami akan mengirimkan
                        email untuk mereset password kamu.
                    </p>

                    <!-- Form -->
                    <form action="{{ route('forgot.password.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <input id="email" type="email" placeholder="Email" name="email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required>
                        </div>
                        <button id="resetButton" type="submit"
                            class="w-full py-3 px-4 bg-gray-200 text-gray-500 rounded-md hover:bg-gray-300 transition duration-200">
                            Reset Password
                        </button>
                    </form>
                    @if ($errors->any())
                        <div class="mt-4 text-red-600 text-sm">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="mt-4 text-green-600 text-sm">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <script>
        const emailInput = document.getElementById('email');
        const resetButton = document.getElementById('resetButton');
    
        emailInput.addEventListener('input', function () {
            if (emailInput.value.trim() !== '') {
                resetButton.classList.remove('bg-gray-200', 'text-gray-500', 'hover:bg-gray-300', 'shadow-blue-400', 'shadow-sm');
                resetButton.classList.add('bg-blue-500', 'text-white', 'hover:bg-blue-600', 'transition', 'duration-200', 'shadow-sm', 'shadow-blue-400');
            } else {
                resetButton.classList.remove('bg-blue-500', 'text-white', 'hover:bg-blue-600', 'shadow-blue-400', 'shadow-sm', 'transition', 'duration-200');
                resetButton.classList.add('bg-gray-200', 'text-gray-500', 'hover:bg-gray-300');
            }
        });
    </script>
    
@endsection