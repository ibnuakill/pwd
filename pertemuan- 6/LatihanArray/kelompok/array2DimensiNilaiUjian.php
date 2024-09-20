<!-- 
Program : array2DimensiTambahElemen
Dibuat Oleh : Ibnu Akil
NIM : 42230135
Prodi : Rekayasa Perangkat Lunak
-->
<?php
// Data nilai ujian
$nilaiUjian = [
    ["Matematika", 70, 85, 90, 86],
    ["Fisika", 80, 92, 78, 60],
    ["Kimia", 85, 77, 95, 72],
];

// Jumlah siswa
$jumlahSiswa = count($nilaiUjian[0]) - 1; // Karena kolom pertama adalah nama mata pelajaran

// Array untuk menyimpan total nilai setiap siswa
$totalNilaiSiswa = array_fill(0, $jumlahSiswa, 0);

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Mata Pelajaran</th><th>Rata-rata Nilai</th></tr>";

// Menghitung rata-rata nilai ujian untuk setiap mata pelajaran
foreach ($nilaiUjian as $mapel) {
    $namaMapel = $mapel[0];
    $totalNilaiMapel = 0;

    for ($i = 1; $i <= $jumlahSiswa; $i++) {
        $totalNilaiMapel += $mapel[$i];
        $totalNilaiSiswa[$i - 1] += $mapel[$i]; // Menambah nilai ke total siswa
    }

    $rataRataMapel = $totalNilaiMapel / $jumlahSiswa;
    echo "<tr><td>$namaMapel</td><td>" . number_format($rataRataMapel, 2) . "</td></tr>";
}

echo "</table>";

echo "<br><table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Siswa</th><th>Rata-rata Nilai</th></tr>";

// Menghitung rata-rata nilai ujian untuk setiap siswa
for ($i = 0; $i < $jumlahSiswa; $i++) {
    $rataRataSiswa = $totalNilaiSiswa[$i] / count($nilaiUjian);
    echo "<tr><td>Siswa " . ($i + 1) . "</td><td>" . number_format($rataRataSiswa, 2) . "</td></tr>";
}

echo "</table>";
