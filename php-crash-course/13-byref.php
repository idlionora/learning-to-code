<?php 

function doubleValue(int &$number): int {
    $number *= 2;
    return $number;
}

$original = 5;
doubleValue($original);
var_dump($original);

// adding & sign to argument will modify the original variable
// this what passing by reference is
// don't use this for performance reasons. using references might be slower or use more memory
// just because something can be done doesn't mean that it should be done

