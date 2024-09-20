<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Restoran</title>
</head>

<body>

    <form method="POST">
        <label for="menu">Pilih Menu:</label><br>
        <select id="menu" name="menu">
            <option value="1">1. Nasi Goreng (Rp. 15.000)</option>
            <option value="2">2. Mie Goreng (Rp. 12.000)</option>
            <option value="3">3. Ayam Bakar (Rp. 20.000)</option>
            <option value="4">4. Ikan Bakar (Rp. 18.000)</option>
        </select><br><br>
        <button type="submit">Pilih</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input pilihan dari pelanggan
        $menu = $_POST['menu'];

        // Menangani pilihan menu dengan switch
        switch ($menu) {
            case "1":
                $nama_menu = "Nasi Goreng";
                $harga = 15000;
                break;
            case "2":
                $nama_menu = "Mie Goreng";
                $harga = 12000;
                break;
            case "3":
                $nama_menu = "Ayam Bakar";
                $harga = 20000;
                break;
            case "4":
                $nama_menu = "Ikan Bakar";
                $harga = 18000;
                break;
            default:
                $nama_menu = "Pilihan tidak valid";
                $harga = 0;
        }

        // Menampilkan nama menu dan harganya
        if ($harga > 0) {
            echo "Anda memilih: " . $nama_menu . "<br>";
            echo "Harga: Rp. " . number_format($harga, 0, ',', '.');
        } else {
            echo $nama_menu;
        }
    }
    ?>

</body>

</html>