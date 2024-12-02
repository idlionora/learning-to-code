<?php 

function greet(string $name, string $greeting = "Hello", bool $shout = false): string {
    $message = "$greeting, $name!";
    return $shout ? strtoupper($message) : $message;
}

echo greet("Alice") . "\n";
echo greet("Alice", "Hi") . "\n";
echo greet("Alice", "Hey", true) . "\n";

// it's a good practice to create functions that do not have a lot of arguments.
// if you have ten arguments, you are probably doing something wrong and should separate that into a couple functions

echo greet(name: "David", shout: false); // you can skip the second argument if you provide positional arguments


