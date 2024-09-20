<!DOCTYPE html>
<html>

<head>
    <title>Konversi Nilai</title>
</head>

<body>
    <form method="post">
        Nilai Angka: <input type="number" name="nilai"><br>
        <input type="submit" value="Konversi">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function nilaiHuruf($nilai)
        {
            if ($nilai >= 90) {
                return "A";
            } elseif ($nilai >= 80) {
                return "B";
            } elseif ($nilai >= 70) {
                return "C";
            } elseif ($nilai >= 60) {
                return "D";
            } else {
                return "E";
            }
        }
        $nilaiAngka = $_POST['nilai'];
        $nilaiHuruf = nilaiHuruf($nilaiAngka);
        echo "<table>";
        echo "<tr><th>Nilai Angka</th><th>Nilai Huruf</th></tr>";
        echo "<tr><td>$nilaiAngka</td><td>$nilaiHuruf</td></tr>";
        echo "</table>";
    }
    ?>
</body>

</html>