<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Register')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

</head>

<body class="bg-white flex items-center justify-center min-h-screen p-4">
    @yield('content')
</body>

</html>
