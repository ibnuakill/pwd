<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Akhir Mahasiswa</title>
</head>

<body>
    <center>
        <form action="nilai2.php" method="post">
            <h1>Nilai Akhir Mahasiswa</h1>
            <h3>STMIK IKMI CIREBON</h3>
            <table border="0" width="500" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" placeholder="Nama"></td>
                </tr>
                <tr>
                    <td>Nilai Tugas</td>
                    <td><input type="text" name="tugas" placeholder="Tugas..."></td>
                </tr>
                <tr>
                    <td>Nilai Quiz</td>
                    <td><input type="text" name="quiz" placeholder="Quiz..."></td>
                </tr>
                <tr>
                    <td>UTS</td>
                    <td><input type="text" name="uts" placeholder="UTS..."></td>
                </tr>
                <tr>
                    <td>UAS</td>
                    <td><input type="text" name="uas" placeholder="UAS..."></td>
                </tr>
            </table>
            <input type="submit" value="Hasil" style="margin-top: 20px;">
        </form>
    </center>
</body>

</html>