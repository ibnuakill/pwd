<!DOCTYPE html>
<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <?php
    // Simulasi data mahasiswa (ganti dengan input dari form)
    $mahasiswa = array(
        array('nama' => 'Andi', 'nim' => '12345', 'nilai' => 85),
        array('nama' => 'Budi', 'nim' => '67890', 'nilai' => 90),
        // ...
    );
    echo "<table>";
    echo "<tr><th>Nama</th><th>NIM</th><th>Nilai</th></tr>";
    foreach ($mahasiswa as $m) {
        echo
        "<tr><td>{$m['nama']}</td><td>{$m['nim']}</td><td>{$m['nilai']}</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>