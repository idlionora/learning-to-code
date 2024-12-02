<?php 

$name = "Alice";
$age = 30;

printf("%s is %d years old.", $name, $age);

$csv = "apple,banana,cherry"; 
// csv is data you get from upload excel and others
$fruits = explode(",", $csv);
var_dump($fruits, implode(", ", $fruits));

$padded = str_pad("Hello", 10, '-', STR_PAD_BOTH);
echo $padded;

var_dump(trim("   Hello, World!    "));
// trimming is something you would do to user input and imported data, bc some users are just careless
