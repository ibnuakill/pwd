<!-- 
Program : array2DimensiHapusElemen
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 2 dimensi
$peserta = [
    ["Andi", 21, "Malang"],
    ["Budi", 22, "Surabaya"],
    ["Caca", 20, "Yogyakarta"],
    ["Doni", 23, "Semarang"],
];
// Hapus elemen baris ke-2 (Budi, 22, Surabaya)
unset($peserta[1]);
// Tampilkan isi array setelah dihapus
print_r($peserta);
