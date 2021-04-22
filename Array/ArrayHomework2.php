<?php

$inputA = array(1, 2, 3, 4, 5);
$inputB = array(4, 5, 3, 2, 10);
$outputC = array();

for ($i = 0; $i < 5; $i++) {
    $outputC[$i] = $inputA[$i] + $inputB[$i];
}

print_r($outputC);

?>
