<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konversi Suhu</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Konversi Suhu</h2>
        <form method="POST">
            <label for="suhu">Masukkan suhu:</label>
            <input type="number" id="suhu" name="suhu" step="any" required><br>

            <label for="satuan_asal">Pilih satuan suhu asal:</label>
            <select id="satuan_asal" name="satuan_asal" required>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select><br>

            <label for="satuan_tujuan">Pilih satuan suhu tujuan:</label>
            <select id="satuan_tujuan" name="satuan_tujuan" required>
                <option value="celsius">Celsius</option>
                <option value="fahrenheit">Fahrenheit</option>
                <option value="kelvin">Kelvin</option>
            </select><br>

            <button type="submit">Konversi</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $suhu = $_POST['suhu'];
            $satuan_asal = $_POST['satuan_asal'];
            $satuan_tujuan = $_POST['satuan_tujuan'];

            // Fungsi konversi suhu
            function konversi_suhu($suhu, $satuan_asal, $satuan_tujuan)
            {
                $hasil = 0;

                // Konversi suhu dari satuan asal ke Celsius
                if ($satuan_asal == 'fahrenheit') {
                    $suhu = ($suhu - 32) * 5 / 9;
                } elseif ($satuan_asal == 'kelvin') {
                    $suhu = $suhu - 273.15;
                }

                // Konversi suhu dari Celsius ke satuan tujuan
                if ($satuan_tujuan == 'fahrenheit') {
                    $hasil = $suhu * 9 / 5 + 32;
                } elseif ($satuan_tujuan == 'kelvin') {
                    $hasil = $suhu + 273.15;
                } else {
                    $hasil = $suhu;
                }

                return $hasil;
            }

            $hasil_konversi = konversi_suhu($suhu, $satuan_asal, $satuan_tujuan);

            // Menampilkan hasil konversi
            echo "<div class='result'>";
            echo "<h3>Hasil Konversi:</h3>";
            echo "<p>$suhu $satuan_asal diubah menjadi " . number_format($hasil_konversi, 2) . " $satuan_tujuan.</p>";
            echo "</div>";
        }
        ?>
    </div>
</body>

</html>