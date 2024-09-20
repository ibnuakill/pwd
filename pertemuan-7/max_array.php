<?php
function nilaiMaksimum($arr)
{
    return max($arr);
}
$arr = [5, 3, 8, 2, 1];
$nilai = nilaiMaksimum($arr);
echo "Nilai maksimum dari array: " . $nilai;
