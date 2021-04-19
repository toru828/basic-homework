<?php
function findPrimeNumberBetween($n)
{
    for ($m = 2; $m <= $n; $m++) {
        $x = 0;
        $y = 1;
        for ($i = 2; $i < $m ; $i++) {
            $x = $m % $i;
            $y *= $x;
        }
        if($y != 0) {
        echo "$m"."<br>";
        }
    }
}
findPrimeNumberBetween();
?>
