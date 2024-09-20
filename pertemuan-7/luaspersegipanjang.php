<?php
function hitungLuasPersegiPanjang($panjang, $lebar)
{
    $luas = $panjang * $lebar;
    return $luas;
}
$panjang = 10;
$lebar = 5;
$luas = hitungLuasPersegiPanjang($panjang, $lebar);
echo "Luas persegi panjang: " . $luas;
