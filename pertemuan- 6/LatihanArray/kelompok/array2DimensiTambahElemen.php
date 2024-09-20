<!-- 
Program : array2DimensiTambahElemen
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 2 dimensi
$data = [
    ["Nama", "NIM", "Jurusan"],
    ["Budi", "A12345", "Teknik Informatika"],
    ["Ani", "B23456", "Desain Komunikasi Visual"],
];
// Tambahkan elemen baru (Caca, C34567, Manajemen)
$dataBaru = ["Caca", "C34567", "Manajemen"];
array_push($data, $dataBaru);
// Tampilkan isi array setelah ditambahkan
print_r($data);
