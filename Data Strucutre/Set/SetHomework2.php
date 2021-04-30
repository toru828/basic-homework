<?php

require 'SetHomework1.php';

$set = new Set();

$day1Words = array("Hello", "Hi", "Good morning", "Good night");
$day2Words = array("Hello", "Hi", "Good morning", "Good night", "Name", "Age");
$day3Words = array("Hello", "Hi", "Good morning", "Good night", "Name", "Age", "How are you", "Fine", "Thank");

$allDays = array($day1Words, $day2Words, $day3Words);

foreach ($allDays as $day) {
    foreach ($day as $word) {
        $set->add($word);
    }
}

print_r($set->get());

?>
