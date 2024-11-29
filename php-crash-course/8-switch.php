<?php 

$size = "L";

switch ($size) {
    case "S":
    case "M":
        echo "Small or Medium size\n";
        break;
    case "L":
    case "XL":
        echo "Large or Extra Large size\n";
        break;
    default: 
    echo "Unknown size\n";
}
// switch statement in php is exactly the same as in C++
// not using break generally considered as a bad practice but sometimes it may also come handy because of its fall-through nature. (controversial)

if ("M" == $size || "S" == $size) {
    echo "Small or Medium size\n";
} elseif ("L" == $size || "XL" == $size) {
    echo "Large or Extra Large size\n";
} else {
    echo "Unknown size\n";
}


// example
$badAttempts = 2;
switch ($badAttempts) {
    case 3:
        echo "You are blocked!\n";
    default: 
        echo "Bad attempt detected!\n";
}
// watchout for fallback structure like this, some would say bad practice 
