<?php 
// arrow functions were introduced in PHP 7.4
// it's a more concise way of writing a short single expression functions.
$numbers = [1, 2, 3, 4, 5];
$multiplier = 3;

$squared = array_map(function ($n) use ($multiplier) {
    return $n * $multiplier;
}, $numbers);

$squared2 = array_map(
    fn ($n) => $n * $multiplier,
    $numbers
);
// arrow function just inherit variables from the parent scope

var_dump($numbers, $squared, $squared2);
