<?php 

$simpleArray = [1, 2, 3, 4, 5];
$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York'
];

// echo $simpleArray[0];
// echo $associativeArray['name'];

$simpleArray[] = 6; // element is added at the end of index array
$associativeArray['country'] = 'USA';

$matrix = [
    [1, 2, 3],
    [4, 5, 6]
];

// echo $matrix[1][1];

$fruits = ['apple', 'banana', 'orange'];
// var_dump(count($fruits));
// sort($fruits);
// var_dump($fruits);
// rsort($fruits); // modifies the variable
// var_dump($fruits);

var_dump($associativeArray);
asort($associativeArray); // sorting by value
var_dump($associativeArray);
ksort($associativeArray); // sorting by keys
var_dump($associativeArray);

$numbers = range(1, 5);
var_dump($numbers);
$squared = array_map(fn($n) => $n ** 2, $numbers);
var_dump($squared);

$evenNumbers = array_filter(
    $numbers,
    fn($n) => $n % 2 == 0
);

var_dump($evenNumbers);

$sum = array_reduce(
    $numbers,
    fn($carry, $n) => $carry + $n,
    0
);
// this also doesn't modify the original array
var_dump($sum);

$moreNumbers = [0, ...$numbers, 6]; //array unpacking
var_dump($moreNumbers);

[$first, , $second] = $fruits;
var_dump($first, $second);
