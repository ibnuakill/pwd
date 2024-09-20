<?php
$hari = "minggu";
$tanggal = 2;

if ($hari == "minggu") {
    if ($tanggal <= 10) {
        echo "Selamat berakhir pekan pada tanggal muda:)";
    } else {
        echo "Selamat berakhir pekan pada tanggal tua dan tetap semangat:)";
    }
} else {
    echo "Semoga hari anda menyenangkan";
    echo "Sampai jumpa diakhir pekan";
}
