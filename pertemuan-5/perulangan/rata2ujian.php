<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Rata-Rata Nilai Ujian</title>
</head>

<body>

    <form method="POST">
        <?php
        // Menampilkan form untuk 5 nilai ujian
        for ($i = 1; $i <= 5; $i++) {
            echo "Nilai siswa ke-" . $i . ": <input type='number' name='nilai[]' required><br>";
        }
        ?>
        <button type="submit">Hitung Rata-Rata</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai = $_POST['nilai'];
        $total = 0;
        $jumlah_siswa = count($nilai);

        // Menghitung total nilai dengan looping for
        for ($i = 0; $i < $jumlah_siswa; $i++) {
            $total += $nilai[$i];
        }

        // Menghitung rata-rata
        $rata_rata = $total / $jumlah_siswa;

        // Menampilkan hasil
        echo "Total Nilai: " . $total . "<br>";
        echo "Rata-Rata Nilai: " . number_format($rata_rata, 2) . "<br>";
    }
    ?>

</body>

</html>