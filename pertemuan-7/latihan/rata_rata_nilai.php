<!DOCTYPE html>
<html>

<head>
    <title>Hitung Rata-rata</title>
</head>

<body>
    <form method="post">
        Masukkan nilai (pisahkan dengan koma): <input type="text"
            name="nilai"><br>
        <input type="submit" value="Hitung">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function hitungRataRata($nilaiString)
        {
            $nilaiArray = explode(',', $nilaiString);
            $jumlahNilai = array_sum($nilaiArray);
            $banyakNilai = count($nilaiArray);
            return $jumlahNilai / $banyakNilai;
        }
        $nilaiString = $_POST['nilai'];
        $rataRata = hitungRataRata($nilaiString);
        echo "<table>";
        echo "<tr><th>Nilai</th></tr>";
        foreach (explode(',', $nilaiString) as $nilai) {
            echo "<tr><td>$nilai</td></tr>";
        }
        echo "<tr><th>Rata-rata</th><td>$rataRata</td></tr>";
        echo "</table>";
    }
    ?>
</body>

</html>