<?php
function jumlahHari($bulan, $tahun)
{
    // Cek apakah tahun kabisat
    if ($bulan == 2) {
        return ($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0) ? 29 : 28;
    } else {
        // Bulan dengan 31 hari
        if (
            $bulan == 1 || $bulan == 3 || $bulan == 5 || $bulan == 7 ||
            $bulan == 8 || $bulan == 10 || $bulan == 12
        ) {
            return 31;
        } else {
            return 30;
        }
    }
}
echo "Jumlah hari pada bulan Februari 2024: " . jumlahHari(2, 2024);
