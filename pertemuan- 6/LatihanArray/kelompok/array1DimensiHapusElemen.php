<!-- 
Program : array1DimensiHapusElemen
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 1 dimensi
$huruf = ["A", "B", "C", "D", "E"];
// Hapus elemen "C" dari array
unset($huruf[2]);
// Tampilkan isi array setelah dihapus
print_r($huruf);
