<?php
   
function primeNumberFinder($n)
{
    $x = 0;
    $y = 1;
    for ($i = 2; $i < $n; $i++) {
        $x = $n % $i;
        $y *= $x;
    }
    if($y == 0) {
        echo "The number is not prime number.";
    } else {
        echo "The number is prime number.";
    }
}
primeNumberFinder();
?>