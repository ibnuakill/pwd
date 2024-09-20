<?php
$nama = $_POST['nama'];
$tugas = $_POST['tugas'];
$quiz = $_POST['quiz'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

// Calculate the weighted final score
$nilai_akhir = ($tugas * 0.2) + ($quiz * 0.1) + ($uts * 0.3) + ($uas * 0.4);

// Determine grade and keterangan
if ($nilai_akhir >= 80 && $nilai_akhir <= 100) {
    $index = 'A';
    $keterangan = 'SANGAT BAIK';
} elseif ($nilai_akhir >= 70 && $nilai_akhir < 80) {
    $index = 'B';
    $keterangan = 'BAIK';
} elseif ($nilai_akhir >= 60 && $nilai_akhir < 70) {
    $index = 'C';
    $keterangan = 'CUKUP';
} elseif ($nilai_akhir >= 50 && $nilai_akhir < 60) {
    $index = 'D';
    $keterangan = 'KURANG';
} else {
    $index = 'E';
    $keterangan = 'SANGAT KURANG';
}

// Display the results
echo "<center>
<table border='1' cellspacing='0' cellpadding='10' width='500'>
<tr>
<td>Nama</td>
<td>$nama</td>
</tr>
<tr>
<td>Nilai Tugas</td>
<td>$tugas</td>
</tr>
<tr>
<td>Nilai Quiz</td>
<td>$quiz</td>
</tr>
<tr>
<td>Nilai UTS</td>
<td>$uts</td>
</tr>
<tr>
<td>Nilai UAS</td>
<td>$uas</td>
</tr>
<tr>
<td>Nilai Akhir</td>
<td>$nilai_akhir</td>
</tr>
<tr>
<td>Index</td>
<td>$index</td>
</tr>
<tr>
<td>Keterangan</td>
<td>$keterangan</td>
</tr>
</table>
</center>";
