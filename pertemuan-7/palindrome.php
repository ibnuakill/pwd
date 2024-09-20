<?php
function isPalindrome($string)
{
    $reverse = strrev($string);
    return $string == $reverse;
}

$string = "malah";
if (isPalindrome($string)) {
    echo "String adalah palindrome";
} else {
    echo "String bukan palindrome";
}
