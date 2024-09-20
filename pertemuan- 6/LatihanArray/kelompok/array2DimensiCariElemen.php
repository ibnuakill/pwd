<!-- 
Program : array2DimensiCariElemen
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Buat array 2 dimensi
$nilai = [
    ["Matematika", 80, 75],
    ["Fisika", 90, 85],
    ["Kimia", 75, 80]
];
// Cari nilai 85 dalam array
$nilaiDicari = 85;
$ada = false;
for ($i = 0; $i < count($nilai); $i++) {
    for ($j = 0; $j < count($nilai[$i]); $j++) {
        if ($nilai[$i][$j] == $nilaiDicari) {
            $ada = true;
            break;
        }
    }
}
if ($ada) {
    echo "Nilai $nilaiDicari ditemukan dalam array";
} else {
    echo "Nilai $nilaiDicari tidak ditemukan dalam array";
}
