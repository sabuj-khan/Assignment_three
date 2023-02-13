<?php

function isEven( $number ) {
    if ( $number % 2 == 0 ) {
        return true;
    }
    return false;
}

$a = 25;
if ( isEven( $a ) ) {
    echo "{$a} is a even number";
} else {
    echo "{$a} is a even number";
}