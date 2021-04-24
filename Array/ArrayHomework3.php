<?php
$input = array(
    array(5, 12, 17, 9, 13),
    array(13, 4, 8, 14, 1),
    array(9, 5, 3, 17, 21),
);
$avg = 0;
$sum = 0;
$min = $input[0][0];
$max = $input[0][0];

$counti = count($input);
$countj = count($input[0]);

for ($i = 0; $i < $counti; $i++) {
    for ($j = 0; $j < $countj; $j++) {
        $sum += $input[$i][$j];
        $avg = $sum / 15;
        if ($min > $input[$i][$j]) {
            $min = $input[$i][$j];
        }
        if ($max < $input[$i][$j]) {
            $max = $input[$i][$j];
        }
    }
}

echo "average is " . round($avg) . "<br>";
echo "sum is " . round($sum) . "<br>";
echo "min is " . round($min) . "<br>";
echo "max is " . round($max) . "<br>";
?>
