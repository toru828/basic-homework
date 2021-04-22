<?php

$calculate = array(5, 12, 17, 9, 3);

$avg = 0;
$sum = 0;
$min = $calculate[0];
$max = $calculate[0];

for ($i = 0; $i < 5; $i++) {
    $sum += $calculate[$i];
    $avg = $sum / 5;
    if ($min > $calculate[$i]) {
        $min = $calculate[$i];
    }
    if ($max < $calculate[$i]) {
        $max = $calculate[$i];
    }
}

echo "average is " . $avg . "<br>";
echo "sum is " . $sum . "<br>";
echo "min is " . $min . "<br>";
echo "max is " . $max . "<br>";

?>
