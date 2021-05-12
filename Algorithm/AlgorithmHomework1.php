<?php
function partition(&$array, $left, $right) {
    $j = $left;
    for ($i = $j; $i < $right; $i++) {
        if ($array[$i] < $array[$right]) {
            $move = $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $move;
            $j++;
        }
    }
    $move2 = $array[$j];
    $array[$j] = $array[$right];
    $array[$right] = $move2;
    return $j;
}

function quicksort(&$array, $left, $right) {
    if ($left < $right) {
        $mid = partition($array, $left, $right);
        quicksort($array, $left, $mid - 1);
        quicksort($array, $mid + 1, $right);
    }
}

$arr = array(12, 11, 13, 5, 6); 
quicksort($arr, 0, count($arr) - 1);

$output = $arr[count($arr) - 1] + $arr[count($arr) - 2];

echo $output;
?>
