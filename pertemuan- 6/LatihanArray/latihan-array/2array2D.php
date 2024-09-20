<?php
$siswa = array(
    array("1314114590", "Doni", "Teknik Informatika"),
    array("1314114592", "Didi", "Sistem Informasi"),
    array("1314114593", "Reza", "RPL")
);

echo '<table border=1>
<tr>
    <th>NPM</th>
    <th>NAMA</th>
    <th>JURUSAN</th>
</tr>';

for ($i = 0; $i < 3; $i++) {
    echo '<tr>';
    for ($j = 0; $j < 3; $j++) {
        echo '<td>' . $siswa[$i][$j] . '</td>';
    }
    echo '</tr>';
}

echo '</table>';
