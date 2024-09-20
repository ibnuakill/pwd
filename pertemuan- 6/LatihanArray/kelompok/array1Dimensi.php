<!-- 
Program : array1Dimensi
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 1 dimensi
$buah = ["Apel", "Mangga", "Pisang", "Jeruk"];
// Tampilkan isi array dengan perulangan for
for ($i = 0; $i < count($buah); $i++) {
    echo $buah[$i] . ", ";
}
