<?php 

$x = 10;
if ($x > 5) {
    echo "x is greater than 5 \n";
} //curly braces are not mandatory for one line expression but it's clearer to include them

$score = 85;

if ($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "F";
}

$num = 14;
if ($num > 0) {
    if ($num % 2 == 0) {
        echo "\nPostive even number";
    } else {
        echo "\nPositive odd number";
    }
} else {
    echo "\nNon-positive number";
} //you can also remove the curly braces out of those

$username = "admin";
$password = "password123";

if ($username == "admin" && $password == "password123") {
    echo "\nSuccess";
} else {
    echo "\nFailure";
}

