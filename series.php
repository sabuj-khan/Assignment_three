<?php

$firstValue = 0;
$secondValue = 1;
$newValue = 1;

for ( $i = 0; $i < 25; $i++ ) {
    echo $firstValue . " ";
    $secondValue = $newValue;
    $newValue = $secondValue + $firstValue;
    $firstValue = $secondValue;
}