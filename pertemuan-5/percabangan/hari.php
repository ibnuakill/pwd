<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Hari dalam Seminggu</title>
</head>

<body>

    <form method="POST">
        <label for="nomor_hari">Masukkan nomor hari (1-7):</label><br>
        <input type="number" id="nomor_hari" name="nomor_hari" min="1" max="7" required><br><br>
        <button type="submit">Tentukan Hari</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input nomor hari dari pengguna
        $nomor_hari = $_POST['nomor_hari'];

        // Menangani input dengan switch
        switch ($nomor_hari) {
            case 1:
                $hari = "Minggu";
                break;
            case 2:
                $hari = "Senin";
                break;
            case 3:
                $hari = "Selasa";
                break;
            case 4:
                $hari = "Rabu";
                break;
            case 5:
                $hari = "Kamis";
                break;
            case 6:
                $hari = "Jumat";
                break;
            case 7:
                $hari = "Sabtu";
                break;
            default:
                $hari = "Nomor hari tidak valid. Masukkan nomor antara 1-7.";
        }

        // Menampilkan hasil
        echo "Hari: " . $hari;
    }
    ?>

</body>

</html>