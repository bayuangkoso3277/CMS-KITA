<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nota Kecil</title>

    <?php
    $style = '
    <style>
        * {
            font-family: "consolas", sans-serif;
        }
        p {
            display: block;
            margin: 3px;
            font-size: 10pt;
        }
        .text-center {
            text-align: center;
        }
        .text-right {
            text-align: right;
        }
        .nomor{
            font-size: 50pt;
        }
        @media print {
            @page {
                margin: 0;
                size: 75mm
            }
        }
    ';
    ?>
    <?php
    // $style .=
    //     ! empty($_COOKIE['innerHeight'])
    //         ? $_COOKIE['innerHeight'] .'mm; }'
    //         : '}';
    ?>
    <?php
    $style .= '
            html, body {
                width: 70mm;
            }
            .btn-print {
                display: none;
            }
        }
    </style>
    ';
    ?>

    {!! $style !!}
</head>
<body>
    <div class="text-center">
        <h3 style="margin-bottom: 5px;">Clinic Management System</h3>
        <p>jl. golf gunung geulis Rt 001/002</p>
    </div>
    <p class="text-center">-----------------------------------</p>
    <div>
        <p style="float: left;">Tangal : {{ date('d-m-Y') }}</p>
        <p style="float: right">Jam : {{ date('h:i:s') }}</p>
    </div>
    <div class="clear-both" style="clear: both;"></div>
    <div>
        <p>Pasien : Lama</p>
        <p>No &nbsp; &nbsp; : 001-123-234</p>
        <p>Nama &nbsp; : Indra </p>
    </div>
    <div class="clear-both" style="clear: both;"></div>
    <p class="text-center">-----------------------------------</p>

    <div style="text-align:center">
        <span>Nomor Antrian</span>
        <br>
        <span class="nomor">A1</span>
        <p>Simpan nomor antrian Anda</p>
        <p style="font-size:9pt">No. Antrian menjadi no panggil untuk tindakan selanjutnya.</p>
    </div>


    <p class="text-center">===================================</p>
    <p class="text-center">TERIMA KASIH ATAS KUNJUNGAN ANDA</p>

    <script>
        let body = document.body;
        let html = document.documentElement;
        let height = Math.max(
                body.scrollHeight, body.offsetHeight,
                html.clientHeight, html.scrollHeight, html.offsetHeight
            );
        document.cookie = "innerHeight=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
        document.cookie = "innerHeight="+ ((height + 50) * 0.264583);
    </script>
</body>
</html>
