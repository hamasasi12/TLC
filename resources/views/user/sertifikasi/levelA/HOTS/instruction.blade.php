<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>HOTS instruction</p>

    <form action="{{ route('asesi.sertifikasi.level.a.start') }}" method="post">
        @csrf
        <input type="hidden" name="category_id" value="1">
        <button type="submit">mulai ujian</button>
    </form>
</body>
</html>