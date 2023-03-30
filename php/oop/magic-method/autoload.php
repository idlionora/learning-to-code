<?php

function myAutoload($class) {
    if (preg_match('/\A\w+\Z/', $class)) {
        include 'classes/' . $class . ".php";
        //calling directory if $class match A to Z 
    }
}

spl_autoload_register('myAutoload');

$cat = new Cat();
//autoload kicks in when we call undefined classes
echo $cat->name;
?>
