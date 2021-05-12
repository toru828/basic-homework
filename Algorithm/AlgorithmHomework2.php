<?php
// Re-use quicksort source code
function partition(&$array, $left, $right) {
    $pivot = $array[$right];
    $i = $left -1;
    for ($j = $left; $j < $right; $j++) {
          if(($array[$j] < $pivot)){
            $i++;
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
          }
    }
    $temp = $array[$i + 1];
    $array[$i + 1] = $array[$right];
    $array[$right] = $temp;
    return ($i + 1);
}

function quicksort(&$array, $left, $right) {
    if($left < $right) {
        $pivotIndex = partition($array, $left, $right);
        quicksort($array,$left,$pivotIndex -1 );
        quicksort($array,$pivotIndex, $right);
    }
}

$arr1 = [11, 7, 1];
$arr2 = [4, 6, 2, 8];

$k = 8;

quicksort($arr1, 0, count($arr1) - 1);
quicksort($arr2, 0, count($arr2) - 1);

function findSmallestPairs($array1, $array2, $k) {
    if ($k > count($array1) * count($array2)) {
        echo "They don't have more than ".$k."pairs".".";
        return;
    }
    $x = 0;
    for ($l = 2; $l<= (end($array1) + end($array2)); $l++) {
        for ($j = 0; $j < count($array2); $j++) {
            for ($i = 0; $i < count($array1); $i++) {
                if ($l === $array1[$i] + $array2[$j]) {
                    echo "[".$array1[$i].", ".$array2[$j]."] ";
                    $x++;
                    if ($x === $k) {
                        return;
                    }
                }
            }
        }
    }
}

findSmallestPairs($arr1, $arr2, $k);

?>
