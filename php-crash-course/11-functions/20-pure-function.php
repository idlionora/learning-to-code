<?php 

function add(int $a, int $b): int {
    return $a + $b;
}

var_dump(add(1, 3), add(1,3));

$total = 0;
function addToTotal($value) {
    global $total;
    $total += $value;
    return $total;
}
// function is not considered pure if it modified global function
// pure function : 
// 1) predictable, you always get the same output with the same input
// 2) easily reusable and easier to test
// 3) result of functions can be cached 

var_dump(addToTotal(3), addToTotal(3));
