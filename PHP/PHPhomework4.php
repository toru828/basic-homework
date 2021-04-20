<?php
function findPrimeNumberBetween($n)
{
    for ($m = 2; $m <= $n; $m++) {
        $y = 1;
        for ($i = 2; $i < $m; $i++) {
            if ($m % $i === 0) {
                $y = 0;
                break;
            }
        }
        if ($y !== 0) {
            echo "$m"."<br>";
        }
    }
}
findPrimeNumberBetween(48);
?>
