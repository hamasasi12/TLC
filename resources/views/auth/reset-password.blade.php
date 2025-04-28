<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 min-h-screen flex flex-col items-center justify-center">
    <div class="w-full max-w-md p-6">
        <!-- Logo -->
        <div class="mb-12">
            <h1 class="text-2xl font-bold text-teal-500">MySkill</h1>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-lg p-6 shadow-sm">
            <!-- Back to Login -->
            <div class="mb-8">
                <a href="#" class="flex items-center text-teal-500 hover:text-teal-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Kembali ke Login
                </a>
            </div>

            <!-- Title -->
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Lupa Password?</h2>

            <!-- Instruction text -->
            <p class="text-center text-gray-600 mb-8">
                Silahkan masukkan alamat email kamu pada form dibawah. Jika email terdaftar, maka kami akan mengirimkan email untuk mereset password kamu.
            </p>

            <!-- Form -->
            <form>
                <div class="mb-4">
                    <input 
                        type="email" 
                        placeholder="Email" 
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent"
                        required
                    >
                </div>
                <button 
                    type="submit" 
                    class="w-full py-3 px-4 bg-gray-200 text-gray-500 rounded-md hover:bg-gray-300 transition duration-200"
                >
                    Reset Password
                </button>
            </form>
        </div>
    </div>
</body>
</html>