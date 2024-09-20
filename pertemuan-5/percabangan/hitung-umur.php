<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Umur</title>
</head>

<body>

    <form method="POST">
        <label for="usia">Masukkan usia:</label>
        <input type="number" id="usia" name="usia" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari form
        $usia = $_POST['usia'];

        // Menentukan kategori berdasarkan usia
        if ($usia < 17) {
            echo "Kategori: Anak-anak";
        } elseif ($usia >= 17 && $usia <= 30) {
            echo "Kategori: Remaja";
        } elseif ($usia >= 31 && $usia <= 59) {
            echo "Kategori: Dewasa";
        } elseif ($usia >= 60) {
            echo "Kategori: Lansia";
        } else {
            echo "Input tidak valid.";
        }
    }
    ?>

</body>

</html>