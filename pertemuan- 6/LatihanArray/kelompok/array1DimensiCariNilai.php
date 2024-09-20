<!-- 
Program : array1DimensiCariNilai
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 1 dimensi
$angka = [10, 20, 30, 40, 50];
// Cari nilai 30 dalam array
$nilaiDicari = 30;
$ada = in_array($nilaiDicari, $angka);
if ($ada) {
    echo "Nilai $nilaiDicari ditemukan dalam array";
} else {
    echo "Nilai $nilaiDicari tidak ditemukan dalam array";
}
