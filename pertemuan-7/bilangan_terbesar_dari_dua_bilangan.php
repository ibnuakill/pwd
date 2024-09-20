<?php
function bilanganTerbesar($bil1, $bil2)
{
    if ($bil1 > $bil2) {
        return $bil1;
    } else {
        return $bil2;
    }
}
$bilangan1 = 25;
$bilangan2 = 18;
$terbesar = bilanganTerbesar($bilangan1, $bilangan2);
echo "Bilangan terbesar: " . $terbesar;
