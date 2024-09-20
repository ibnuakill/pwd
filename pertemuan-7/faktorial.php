<?php
function faktorial($n)
{
    if ($n == 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }
}
$faktorial = faktorial(5);
echo "Faktorial dari 5: " . $faktorial;
