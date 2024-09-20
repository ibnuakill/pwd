<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mencari Bilangan Prima</title>
</head>

<body>

    <form method="POST">
        <label for="start">Masukkan angka mulai:</label>
        <input type="number" id="start" name="start" required><br><br>
        <label for="end">Masukkan angka akhir:</label>
        <input type="number" id="end" name="end" required><br><br>
        <button type="submit">Cari Bilangan Prima</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $start = $_POST['start'];
        $end = $_POST['end'];

        // Fungsi untuk memeriksa bilangan prima
        function is_prime($num)
        {
            if ($num <= 1) return false;
            if ($num <= 3) return true;
            if ($num % 2 == 0 || $num % 3 == 0) return false;
            for ($i = 5; $i * $i <= $num; $i += 6) {
                if ($num % $i == 0 || $num % ($i + 2) == 0) return false;
            }
            return true;
        }

        echo "<h2>Bilangan Prima dari $start sampai $end:</h2>";
        for ($i = $start; $i <= $end; $i++) {
            if (is_prime($i)) {
                echo $i . " ";
            }
        }
    }
    ?>

</body>

</html>