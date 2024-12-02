<?php 

$set1 = [1, 2, 3, 4, 5];
$set2 = [3, 4, 5, 6, 7];

var_dump(
    array_intersect($set1, $set2),
    array_intersect($set2, $set1),
    array_diff($set1, $set2),
    array_diff($set2, $set1)
);

$associativeArray = [
    'name' => 'John',
    'age' => 30,
    'city' => 'New York',
    'country' => "USA"
];

// $keys = array_keys($associativeArray);
$keys = array_map(
    fn($key) => ucfirst($key),
    array_keys($associativeArray)
);
$values = array_values($associativeArray);

var_dump($keys, $values);

var_dump(
    array_key_exists('name', $associativeArray),
    in_array('John', $associativeArray) // not limited to assiciative arrays
);

$fruits = ['apple', 'banana', 'orange'];
$fruitString = implode(', ', $fruits);
$backToArray = explode(', ', $fruitString);


var_dump($fruitString, $backToArray);

// var_dump(
//     array_unique(array_merge($set1, $set2)),
//     array_slice($set1, 1, 3),
//     array_merge($set1, $set2), // just adding both array
//     array_merge($associativeArray, ['country' => 'DE']), // in associative arrays value of the same keys will be overwritten
//     $set1 + $set2, // only showing first array
//     $associativeArray + ['county' => 'DE'], // country is not replaced
//     [...$set1, ...$set2], // same result as array_merge
//     [...$associativeArray, ...['country' => 'DE']] // same result as array_merge
// );
// union operator (+) works on keys, and if there were same keys, it will not be modified

var_dump(
    array_search('banana', $fruits)
);


