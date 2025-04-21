<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Additional</title>
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
                        {{-- <span class="block sm:inline">{{ $errors->first() }}</span> --}}
                    </div>
                @endif

                <form class="mt-6" action="{{ route('register') }}" method="POST">
                    @csrf

                    {{-- Nama Depan --}}
                    <div>
                        <label class="block text-gray-700">Nama Lengkap</label>
                        <input type="text" name="name" id="name" placeholder="Enter Nama Lengkap"
                            class="w-full p-3 rounded-lg mt-2 border focus:border-blue-500 focus:bg-white focus:outline-none"
                            autofocus autocomplete required aria-label="Email Address" value="{{ old('name') }}">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Email --}}
                    <div class="mt-4">
                        <label class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter Email" minlength="6"
                            class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none"
                            required aria-label="Password" value="{{ old('email') }}">
                    </div>

                    {{-- Password --}}
                    <div class="mt-4">
                        <label class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter Password"
                            minlength="6"
                            class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none"
                            required aria-label="Password" autocomplete="new-password" value="{{ old('password') }}">
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    {{-- Confirm Password --}}
                    <div class="mt-4">
                        <label class="block text-gray-700">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation"
                            placeholder="Enter Password" minlength="6"
                            class="w-full px-4 py-3 rounded-lg mt-2 border focus:border-blue-500
                        focus:bg-white focus:outline-none"
                            required aria-label="Password">
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <button type="submit"
                        class="w-full block bg-blue-500 hover:bg-blue-400 focus:bg-blue-400 text-white font-semibold rounded-lg
                      px-4 py-3 mt-6">Register</button>
                </form>

                {{-- <hr class="my-6 border-gray-300 w-full"> --}}
                <p class="mt-8">
                    Sudah Punya Akun?
                    <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700 font-semibold">
                        Masuk
                    </a>
                </p>
            </div>
        </div>
    </section>

</body>
</html>
