<?php
function tabelPerkalian($n)
{
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            echo $i * $j . "\t";
        }
        echo "\n";
    }
}
tabelPerkalian(5);
