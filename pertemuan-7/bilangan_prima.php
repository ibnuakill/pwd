<?php
function isPrima($bilangan)
{
    if ($bilangan <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($bilangan); $i++) {
        if ($bilangan % $i == 0) {
            return false;
        }
    }
    return true;
}
echo isPrima(5);
