<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percabangan</title>
</head>

<body>
    <center>
        <form action="nilai1.php" method="post">
            <h1>Daftar Nilai Mahasiswa</h1>
            <h3>STMIK IKMI CIREBON</h3>
            <table border="0" width="500" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td>Nilai Algoritma</td>
                    <td><input type="text" name="algo" placeholder="Algoritma.."></td>
                </tr>
                <tr>
                    <td>Nilai Database</td>
                    <td><input type="text" name="db" placeholder="Database.."></td>
                </tr>
                <tr>
                    <td>Nilai B. Inggris</td>
                    <td><input type="text" name="inggris" placeholder="Inggris.."></td>
                </tr>
                <tr>
                    <td>Nilai Pemrograman Java1</td>
                    <td><input type="text" name="jv" placeholder="Javaa"></td>
                </tr>
            </table>
            <input type="submit" value="Hasil" style="margin-top: 20px;">
        </form>
    </center>
</body>

</html>