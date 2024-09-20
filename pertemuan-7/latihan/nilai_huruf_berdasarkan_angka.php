<?php
function nilaiHuruf($nilai)
{
    if ($nilai >= 90) {
        return "A";
    } elseif ($nilai >= 80) {
        return "B";
    } // ... dst.
}
$nilai = 100;
$huruf = nilaiHuruf($nilai);
