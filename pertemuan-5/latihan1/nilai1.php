<?php
$nama = $_POST['nama'];
$algo = $_POST['algo'];
$db = $_POST['db'];
$inggris = $_POST['inggris'];
$jv = $_POST['jv'];

$total = $algo + $db + $inggris + $jv;
$rata = $total / 4;

if ($rata >= 85) {
    $grade = 'A Kompeten';
} elseif ($rata >= 75) {
    $grade = 'B Kompeten';
} elseif ($rata >= 65) {
    $grade = 'C Kompeten';
} elseif ($rata >= 55) {
    $grade = 'D Tidak Kompeten';
} else {
    $grade = 'E Tidak Kompeten';
}
echo "<center> 
<table border='1' cellspacing='0' cellpadding='10' width='500'>
<tr>
<td>Nama</td>
<td>$nama</td>
</tr>
<tr>
<td>Nilai Algoritma</td>
<td>$algo</td>
</tr>
<tr>
<td>Nilai Database</td>
<td>$db</td>
</tr>
<tr>
<td>Nilai B. Inggris</td>
<td>$inggris</td>
</tr>
<tr>
<td>Nilai Pemrograman Java1</td>
<td>$jv</td>
</tr>
<tr>
<td>Nilai Total</td>
<td>$total</td>
</tr>
<tr>
<td>Rata-Rata</td>  
<td>$rata</td>
</tr>
<tr>
<td>Grade</td>
<td>$grade</td>
</tr>   
</table>
</center>";
