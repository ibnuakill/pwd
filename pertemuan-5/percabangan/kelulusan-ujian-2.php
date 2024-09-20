<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Kelulusan Ujian</title>
</head>

<body>

    <form method="POST">
        <label for="kehadiran">Nilai Kehadiran (%):</label>
        <input type="number" id="kehadiran" name="kehadiran" min="0" max="100" required><br><br>

        <label for="tugas">Nilai Tugas (%):</label>
        <input type="number" id="tugas" name="tugas" min="0" max="100" required><br><br>

        <label for="uts">Nilai UTS (%):</label>
        <input type="number" id="uts" name="uts" min="0" max="100" required><br><br>

        <label for="uas">Nilai UAS (%):</label>
        <input type="number" id="uas" name="uas" min="0" max="100" required><br><br>

        <button type="submit">Hitung Nilai Akhir</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $kehadiran = $_POST['kehadiran'];
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];

        // Menghitung Nilai Akhir
        $nilai_akhir = (0.10 * $kehadiran) + (0.20 * $tugas) + (0.30 * $uts) + (0.40 * $uas);

        // Menentukan predikat dan status kelulusan
        if ($nilai_akhir >= 85) {
            $status = "Lulus";
            $predikat = "A";
        } elseif ($nilai_akhir >= 75) {
            $status = "Lulus";
            $predikat = "B";
        } elseif ($nilai_akhir >= 65) {
            $status = "Lulus";
            $predikat = "C";
        } else {
            $status = "Remedial";
            $predikat = "-";
        }

        // Menampilkan hasil
        echo "Nilai Akhir: " . number_format($nilai_akhir, 2) . "<br>";
        echo "Status Kelulusan: " . $status . "<br>";
        echo "Predikat: " . $predikat . "<br>";
    }
    ?>

</body>

</html>