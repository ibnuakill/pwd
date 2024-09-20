<!-- 
Program : array2Dimensi
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 2 dimensi
$mahasiswa = [
    ["Budi", 23, "Teknik Informatika"],
    ["Ani", 21, "Desain Komunikasi Visual"],
    ["Caca", 22, "Manajemen"]
];
// Tampilkan isi array dengan perulangan for
for ($i = 0; $i < count($mahasiswa); $i++) {
    for ($j = 0; $j < count($mahasiswa[$i]); $j++) {
        echo $mahasiswa[$i][$j] . " | ";
    }
    echo "\n";
}
