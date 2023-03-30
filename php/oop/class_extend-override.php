<?php
class Vehicle {
    var $color;
    var $wheels;
    var $door;

    function isGoodForRain() {
        return true;
    }
}

class Motorcycle extends Vehicle {
    var $wheels = 2;
    var $door = 0;

    //override Vehicle's isGoodForRain
    function isGoodForRain() {
        return false;
    }
}

class Car extends Vehicle {
    var $wheels = 4;
    var $door = 4;
    //extend new variable
    var $convertible = false;

    //override isGoodForRain
    function isGoodForRain() {
        return !$this->convertible;
    }
}
?>
