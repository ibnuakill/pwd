<!-- 
Program : array2DimensiUbahNilai
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 2 dimensi
$nilaiUjian = [
    ["Matematika", 80, 75],
    ["Fisika", 90, 85],
    ["Kimia", 75, 80]
];
// Ubah nilai Matematika (baris 1, kolom 1) menjadi 95
$nilaiUjian[0][0] = 95;
// Tampilkan isi array setelah diubah
print_r($nilaiUjian);
