<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penentuan Jumlah Hari dalam Sebulan</title>
</head>

<body>

    <form method="POST">
        <label for="bulan">Masukkan nomor bulan (1-12):</label><br>
        <input type="number" id="bulan" name="bulan" min="1" max="12" required><br><br>
        <label for="tahun">Masukkan tahun:</label><br>
        <input type="number" id="tahun" name="tahun" required><br><br>
        <button type="submit">Tentukan Jumlah Hari</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input dari pengguna
        $bulan = $_POST['bulan'];
        $tahun = $_POST['tahun'];
        $jumlah_hari = 0;
        $nama_bulan = "";

        // Fungsi untuk mengecek apakah tahun kabisat
        function isKabisat($tahun)
        {
            return ($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0);
        }

        // Menggunakan switch untuk menentukan jumlah hari berdasarkan bulan
        switch ($bulan) {
            case 1:
                $nama_bulan = "Januari";
                $jumlah_hari = 31;
                break;
            case 2:
                $nama_bulan = "Februari";
                if (isKabisat($tahun)) {
                    $jumlah_hari = 29;
                } else {
                    $jumlah_hari = 28;
                }
                break;
            case 3:
                $nama_bulan = "Maret";
                $jumlah_hari = 31;
                break;
            case 4:
                $nama_bulan = "April";
                $jumlah_hari = 30;
                break;
            case 5:
                $nama_bulan = "Mei";
                $jumlah_hari = 31;
                break;
            case 6:
                $nama_bulan = "Juni";
                $jumlah_hari = 30;
                break;
            case 7:
                $nama_bulan = "Juli";
                $jumlah_hari = 31;
                break;
            case 8:
                $nama_bulan = "Agustus";
                $jumlah_hari = 31;
                break;
            case 9:
                $nama_bulan = "September";
                $jumlah_hari = 30;
                break;
            case 10:
                $nama_bulan = "Oktober";
                $jumlah_hari = 31;
                break;
            case 11:
                $nama_bulan = "November";
                $jumlah_hari = 30;
                break;
            case 12:
                $nama_bulan = "Desember";
                $jumlah_hari = 31;
                break;
            default:
                echo "Nomor bulan tidak valid. Masukkan nomor bulan antara 1-12.";
                exit();
        }

        // Menampilkan hasil
        echo "Bulan: " . $nama_bulan . "<br>";
        echo "Jumlah hari: " . $jumlah_hari . "<br>";
    }
    ?>

</body>

</html>