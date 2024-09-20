<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan Bilangan Ganjil dan Genap</title>
</head>

<body>

    <h2>Bilangan Ganjil dari 1 sampai 100</h2>
    <?php
    // Menampilkan bilangan ganjil dengan looping for
    for ($i = 1; $i <= 100; $i += 2) {
        echo $i . " ";
    }
    ?>

    <h2>Bilangan Genap dari 1 sampai 100</h2>
    <?php
    // Menampilkan bilangan genap dengan looping while
    $i = 2;
    while ($i <= 100) {
        echo $i . " ";
        $i += 2;
    }
    ?>

</body>

</html>