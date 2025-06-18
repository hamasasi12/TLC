<!DOCTYPE html>
<html>
<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            width: 2000px;
            height: 1414px;
            position: relative;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('assets/sertifikat/sertifikat.png') }}');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .certificate-content {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .name {
            position: absolute;
            top: 590px; /* atur sesuai preview background */
            left: 50%;
            transform: translateX(-50%);
            font-size: 60px;
            font-weight: bold;
            color: #000;
            text-align: center;
            width: 1400px;
        }

        .date {
            position: absolute;
            top: 850px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 40px;
            color: #000;
            text-align: center;
            width: 1200px;
        }
    </style>
</head>
<body>
    <div class="certificate-content">
        <div class="name">hamas akif sanie</div>
        <div class="date">Tanggal: 18 Juni 2025</div>
    </div>
</body>
</html>
