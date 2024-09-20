<?php
function isPalindromePangram($kata)
{
    // Mengubah kata menjadi huruf kecil semua dan menghapus spasi
    $kata = strtolower(str_replace(' ', '', $kata));

    // Memeriksa palindrom
    $reverse = strrev($kata);
    if ($kata !== $reverse) {
        return false; // Bukan palindrom
    }

    // Memeriksa pangram (mengandung semua huruf alfabet)
    $alfabet = 'abcdefghijklmnopqrstuvwxyz';
    for ($i = 0; $i < strlen($alfabet); $i++) {
        if (strpos($kata, $alfabet[$i]) === false) {
            return false; // Bukan pangram
        }
    }

    return true; // Palindrom dan pangram
}
$kata = "kasur rusak";
if (isPalindromePangram($kata)) {
    echo "$kata adalah palindrom dan pangram";
} else {
    echo "$kata bukan palindrom dan/atau bukan pangram";
}
