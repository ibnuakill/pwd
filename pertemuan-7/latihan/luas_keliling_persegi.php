<!DOCTYPE html>
<html>

<head>
    <title>Hitung Luas dan Keliling</title>
</head>

<body>
    <form method="post">
        Panjang: <input type="number" name="panjang"><br>
        Lebar: <input type="number" name="lebar"><br>
        <input type="submit" value="Hitung">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function hitungLuasKeliling($panjang, $lebar)
        {
            $luas = $panjang * $lebar;
            $keliling = 2 * ($panjang + $lebar);
            return array($luas, $keliling);
        }
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        list($luas, $keliling) = hitungLuasKeliling($panjang, $lebar);
        echo "<table>";
        echo "<tr><th>Luas</th><th>Keliling</th></tr>";
        echo "<tr><td>$luas</td><td>$keliling</td></tr>";
        echo "</table>";
    }
    ?>
</body