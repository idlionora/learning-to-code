<?php 

function factorial(int $n): int {
    echo "$n\n";
    if ($n === 0 || $n === 1) {
        return 1;
    } // this will stop the recursion
    return $n * factorial($n - 1);
}

var_dump(factorial(5));
