<?php
function kalender($bulan, $tahun)
{
    // Mendapatkan nama-nama hari dalam bentuk array
    $hari = array("Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min");
    // Mendapatkan jumlah hari pada bulan tersebut
    $jumlahHari = cal_days_in_month(CAL_GREGORIAN, $bulan, $tahun);
    // Mendapatkan hari pertama bulan tersebut (0 = Minggu, 1 = Senin, ...)
    $hariPertama = date('w', strtotime("$tahun-$bulan-01"));

    // Membuat tabel HTML
    echo "<table border='1'>";
    echo "<tr>";
    foreach ($hari as $h) {
        echo "<th>$h</th>";
    }
    echo "</tr>";
    // Inisialisasi variabel untuk mengisi sel dalam tabel
    $hariIni = 1;
    // Membuat baris-baris dalam tabel
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 7; $j++) {
            if ($i == 0 && $j < $hariPertama) {
                // Sel kosong sebelum hari pertama bulan
                echo "<td></td>";
            } elseif ($hariIni <= $jumlahHari) {
                // Isi sel dengan tanggal
                echo "<td>$hariIni</td>";
                $hariIni++;
            } else {
                // Sel kosong setelah hari terakhir bulan
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
kalender(12, 2023); // Menampilkan kalender Desember 2023