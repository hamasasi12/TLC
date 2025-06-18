<!DOCTYPE html>
<html>
<head>
    <style>
        /* Reset untuk konsistensi */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Ukuran tetap untuk sertifikat - sesuaikan dengan ukuran background image */
        body {
            width: 297mm; /* A4 landscape width */
            height: 210mm; /* A4 landscape height */
            position: relative;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('assets/sertifikat/sertifikat.png') }}');
            background-size: 100% 100%; /* Stretch untuk memenuhi container */
            background-repeat: no-repeat;
            background-position: center;
        }

        /* Container untuk semua konten */
        .certificate-content {
            position: relative;
            width: 100%;
            height: 100%;
        }

        /* Posisi nama - sesuaikan koordinat ini berdasarkan background image */
        .name {
            position: absolute;
            top: 120mm; /* Jarak dari atas - sesuaikan dengan posisi di background */
            left: 50%;
            transform: translateX(-50%); /* Center horizontal */
            font-size: 36px;
            font-weight: bold;
            color: #000;
            text-align: center;
            width: 200mm; /* Lebar area teks */
        }

        /* Posisi tanggal - sesuaikan koordinat ini berdasarkan background image */
        .date {
            position: absolute;
            top: 160mm; /* Jarak dari atas - sesuaikan dengan posisi di background */
            left: 50%;
            transform: translateX(-50%); /* Center horizontal */
            font-size: 14px;
            color: #000;
            text-align: center;
            width: 150mm; /* Lebar area teks */
        }

        /* Alternatif: Jika ingin posisi dari kanan atau koordinat spesifik */
        .alternative-positioning {
            /* Contoh positioning dari koordinat tertentu */
            /* top: 120mm; */
            /* left: 148.5mm; */ /* Tengah dari 297mm */
        }

        /* Media query untuk print/PDF */
        @media print {
            body {
                width: 297mm;
                height: 210mm;
            }
            
            .name, .date {
                -webkit-print-color-adjust: exact;
                color-adjust: exact;
            }
        }
    </style>
</head>
<body>
    <div class="certificate-content">
        <div class="name">hamas akif sanieasss</div>
        <div class="date">Tanggal: asdasdasda</div>
    </div>
</body>
</html>