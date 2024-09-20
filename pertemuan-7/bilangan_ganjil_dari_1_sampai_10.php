<?php
function tampilkanBilanganGanjil()
{
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 != 0) {
            echo $i . " ";
        }
    }
}
tampilkanBilanganGanjil();
