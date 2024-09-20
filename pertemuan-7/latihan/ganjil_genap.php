<?php
function tampilkanGanjilGenap()
{
    for ($i = 1; $i <= 10; $i++) {
        if ($i % 2 == 0) {
            echo "$i adalah bilangan genap<br>";
        } else {
            echo "$i adalah bilangan ganjil<br>";
        }
    }
}
tampilkanGanjilGenap();
