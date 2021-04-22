<?php
   
function primeNumberFinder($n)
{
    $y = 1;
    for ($i = 2; $i < $n; $i++) {
        if ($n % $i === 0) {
            $y = 0;
            break;
        }
    }
    if($y === 0) {
        echo "The number is not prime number.";
    } else {
        echo "The number is prime number.";
    }
}
primeNumberFinder(48);
?>
