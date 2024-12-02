<?php 

$str = "Hello, World!";
// echo $str[0];
// echo $str[-1]; // index character from end of string

// echo substr($str, 0, 5);
// echo substr($str, 5);

// echo strtoupper($str);
echo ucfirst(strtolower($str)); // start the sentence with uppercase

$greeting = "Hello, " . "World";
$greeting .= " How are you?"; //uppend some texts
echo $greeting;
