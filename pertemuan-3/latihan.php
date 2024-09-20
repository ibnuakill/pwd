<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Pertama</title>
</head>

<body>
    <h1>Data Pribadi Saya</h1>
    <?php
    $nama_saya = "Ibnu Akil";
    $jurusan = "Rekaysa Perangkat Lunak";
    $semester = "III";
    $nim = "42230135";
    $umur = "19";
    $berat_badan = "60.00";

    echo ("Nama saya $nama_saya<br>");
    echo "Sekarang semester $semester di Prodi $jurusan dan nim saya $nim<br>";
    echo "Umur saya $umur Sekarang adalah ' . $umur . ' tahun<br>";
    echo "Berat badan saya $berat_badan kg<br>";
    ?>
</body>

</html>