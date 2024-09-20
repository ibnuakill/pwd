<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Tarif Taksi</title>
</head>

<body>

    <form method="POST">
        <label for="jarak">Masukkan jarak tempuh (km):</label>
        <input type="number" id="jarak" name="jarak" step="0.01" required>
        <button type="submit">Hitung Tarif</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $jarak = $_POST['jarak'];

        // Tarif awal
        $tarif_awal = 5000;

        // Menghitung tarif berdasarkan jarak tempuh
        if ($jarak <= 1) {
            // Tarif untuk jarak <= 1 km
            $total_tarif = $tarif_awal;
        } else {
            // Tarif untuk jarak > 1 km
            $total_tarif = $tarif_awal + (($jarak - 1) * 2000);
        }

        // Menampilkan total tarif
        echo "Total tarif yang harus dibayarkan: Rp. " . number_format($total_tarif, 0, ',', '.') . "<br>";
    }
    ?>

</body>

</html>