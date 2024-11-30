<?php 

$person = "John";
$client = &$person; // now both $person and $client is pointing to the same memory space

var_dump($person, $client);

$client = "Robert";

var_dump($person, $client);

$person = "Harry";

var_dump($person, $client);

// do not use reference for just optimization. php is already pretty optimized.
// using references is actually more dangerous bc you can accidentally modify the value
// do not default to using references
