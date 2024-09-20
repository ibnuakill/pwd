<?php
function isKabisat($tahun)
{
    if (($tahun % 4 == 0 && $tahun % 100 != 0) || $tahun % 400 == 0) {
        return true;
    } else {
        return false;
    }
}
echo isKabisat(2024);
