<!DOCTYPE html>
<html lang="en" class="scroll-pt-24 scroll-smooth focus:scroll-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'TLC')</title>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="icon" href="{{ asset('assets/img/tlc.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-abu">

    @yield('content')

</body>

</html>
