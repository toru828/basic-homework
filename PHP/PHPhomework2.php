<?php
  
function factorialOfNumber($n)
{
    $x = 1;
    for ($i = 1; $i <= $n; $i++) {
       $x *= $i;
    }
    return $x;
}

echo factorialOfNumber(10);
?>
