<?php 

function greet($name) {
    return 
    "Hello, $name!\n";
}

echo greet('Alice');

function greetWithTime($name, $time = "day") {
    return "Good $time, $name\n";
}
// you cannot write optional argument before the required ones

echo greetWithTime("Bob");
echo greetWithTime("Charlie", "evening");
