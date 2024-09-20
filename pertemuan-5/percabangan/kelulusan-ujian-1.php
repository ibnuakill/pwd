<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Kelulusan Ujian</title>
</head>

<body>

    <form method="POST">
        <label for="nilai">Masukkan Nilai Ujian:</label>
        <input type="number" id="nilai" name="nilai" min="0" max="100" required><br><br>
        <button type="submit">Cek Kelulusan</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $nilai = $_POST['nilai'];

        // Menentukan predikat dan status kelulusan
        if ($nilai >= 80) {
            $status = "Lulus";
            $predikat = "A";
        } elseif ($nilai >= 70) {
            $status = "Lulus";
            $predikat = "B";
        } elseif ($nilai >= 60) {
            $status = "Lulus";
            $predikat = "C";
        } else {
            $status = "Tidak Lulus";
            $predikat = "-";
        }

        // Menampilkan hasil
        echo "Nilai: " . $nilai . "<br>";
        echo "Status Kelulusan: " . $status . "<br>";
        echo "Predikat: " . $predikat . "<br>";
    }
    ?>

</body>

</html>