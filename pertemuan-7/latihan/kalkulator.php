<!DOCTYPE html>
<html>

<head>
    <title>Kalkulator Sederhana</title>
</head>

<body>
    <form method="post">
        Angka 1: <input type="number" name="angka1"><br>
        Angka 2: <input type="number" name="angka2"><br>
        Operasi:
        <select name="operasi">
            <option value="tambah">+</option>
            <option value="kurang">-</option>
            <option value="kali">*</option>
            <option value="bagi">/</option>
        </select><br>
        <input type="submit" value="Hitung">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        function hitung($angka1, $angka2, $operasi)
        {
            switch ($operasi) {
                case 'tambah':
                    return $angka1 + $angka2;
                case 'kurang':
                    return $angka1 - $angka2;
                case 'kali':
                    return $angka1 * $angka2;
                case 'bagi':
                    return $angka1 / $angka2;
            }
        }
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operasi = $_POST['operasi'];
        $hasil = hitung($angka1, $angka2, $operasi);
        echo "<table>";
        echo "<tr><th>Angka 1</th><th>$angka1</th></tr>";
        echo "<tr><th>Angka 2</th><th>$angka2</th></tr>";
        echo "<tr><th>Operasi</th><th>$operasi</th></tr>";
        echo "<tr><th>Hasil</th><th>$hasil</th></tr>";
        echo "</table>";
    }
    ?>
</body>

</html>