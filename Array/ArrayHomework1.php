<?php
$calculate = array(
    array(5, 12, 17, 9, 3),
    array(13, 4, 8, 14, 1),
    array(9, 5, 3, 7, 21)
);



for ($i = 0; $i < 3; $i++) {
    $avg = 0;
    $sum = 0;
    $min = $calculate[0][0];
    $max = $calculate[0][0];
    for ($j = 0; $j < 5; $j++) {
        $sum += $calculate[$i][$j];
        $avg = $sum / 5;
        if ($min > $calculate[$i][$j]) {
            $min = $calculate[$i][$j];
        }
        if ($max < $calculate[$i][$j]) {
            $max = $calculate[$i][$j];
        }
    }
    echo "group " . $i . " average is " . $avg . "<br>";
    echo "group " . $i . " sum is " . $sum . "<br>";
    echo "group " . $i . " min is " . $min . "<br>";
    echo "group " . $i . " max is " . $max . "<br>";
}
?>
