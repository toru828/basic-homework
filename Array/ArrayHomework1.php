<?php

$calculate = array(5, 12, 17, 9, 3);

$avg = 0;
$sum = 0;
$min = $calculate[0];
$max = $calculate[0];

$count = count($calculate);

for ($i = 0; $i < $count; $i++) {
    $sum += $calculate[$i];
    if ($min > $calculate[$i]) {
        $min = $calculate[$i];
    }
    if ($max < $calculate[$i]) {
        $max = $calculate[$i];
    }
}
$avg = $sum / 5;

echo "average is " . $avg . "<br>";
echo "sum is " . $sum . "<br>";
echo "min is " . $min . "<br>";
echo "max is " . $max . "<br>";

?>
