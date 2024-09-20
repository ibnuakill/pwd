<?php
function tampilkanBilanganPrima()
{
    for ($i = 2; $i <= 100; $i++) {
        if (isPrima($i)) { // Memanggil fungsi isPrima
            echo $i . " ";
        }
    }
}
tampilkanBilanganPrima();
