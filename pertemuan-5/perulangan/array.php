<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Elemen Array</title>
</head>

<body>

    <h2>Menampilkan Elemen Array Bilangan</h2>
    <?php
    $bilangan = array(10, 20, 30, 40, 50);

    // Menampilkan elemen array bilangan
    echo "<ul>";
    foreach ($bilangan as $elemen) {
        echo "<li>" . $elemen . "</li>";
    }
    echo "</ul>";
    ?>

    <h2>Menampilkan Elemen Array Kata</h2>
    <?php
    $kata = array("Merah", "Kuning", "Hijau", "Biru", "Ungu");

    // Menampilkan elemen array kata
    echo "<ul>";
    foreach ($kata as $elemen) {
        echo "<li>" . $elemen . "</li>";
    }
    echo "</ul>";
    ?>

    <h2>Menampilkan Elemen Array Data</h2>
    <?php
    $data = array(1, "Belajar", 3.14, true, false);

    // Menampilkan elemen array data
    echo "<ul>";
    foreach ($data as $elemen) {
        // Menangani tipe data dengan menampilkan tipe data juga
        echo "<li>" . (is_bool($elemen) ? ($elemen ? "true" : "false") : $elemen) . " (" . gettype($elemen) . ")</li>";
    }
    echo "</ul>";
    ?>

</body>

</html>