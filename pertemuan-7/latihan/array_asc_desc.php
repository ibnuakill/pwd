<?php
function urutkanArray($arr, $urut)
{
    if ($urut === 'asc') {
        sort($arr);
    } elseif ($urut === 'desc') {
        rsort($arr);
    } else {
        echo "Pilihan urutan tidak valid";
        return;
    }

    print_r($arr);
}
$angka = [3, 1, 4, 1, 5, 9, 2, 6, 5, 3];
urutkanArray($angka, 'desc');
