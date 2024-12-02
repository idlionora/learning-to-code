<?php 

$haystack = "The quick brown fox";
$pos = strpos($haystack, "quick"); //search from zero index
var_dump($pos);

var_dump(str_replace("quick", "lazy", $haystack)); // this doesn't do anyting to the orginal string

preg_match_all('/\w{5}/', $haystack, $matches);
var_dump($matches);
