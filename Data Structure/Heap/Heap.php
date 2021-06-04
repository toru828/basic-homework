<?php

function MaxHeapify (&$data, $heapSize, $index) {
    $left = $index * 2 + 1;
    $right = $index * 2 + 2;
    $largest = 0;

    if ($left < $heapSize && $data[$left] > $data[$index]) {
        $largest = $left;
    } else {
        $largest = $index;
    }

    if ($right < $heapSize && $data[$right] > $data[$largest]) {
        $largest = $right;
    }

    if ($largest !== $index) {
        $temp = $data[$index];
        $data[$index] = $data[$largest];
        $data[$largest] = $temp;

        MaxHeapify($data, $heapSize, $largest);
    }
}

function HeapSortKLargest(&$data, $count, $k) {
    $heapSize = $count;
    $largest = [];
    for ($p = floor($heapSize / 2 - 1); $p >= 0; $p--) {
        MaxHeapify($data, $heapSize, $p);
    }

    for ($i = $count - 1; $i > $count-1-$k; $i--) {
        $temp = $data[$i];
        array_push($largest, $data[0]);
        $data[0] = $temp;

        $heapSize--;
        MaxHeapify($data, $heapSize, 0);
    }

    print_r($largest);
}

$array = array(20, 43, 65, 88, 11, 33, 56, 74);
HeapSortKLargest($array, 8, 3);
?>
