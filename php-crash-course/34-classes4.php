<?php 

class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $num): float {
        return $num * $num;
    }
}

// access the field by prepending the name with a variable
// var_dump(
//     MathUtils::$pi,
//     MathUtils::square(4)
// );

// singleton: certain class should be created only once and you should not be able to create it again
// this is important if you have expensive resources

/*
class Connection {
    private static $instance = null;
    private function __construct() {} //make the constructor private

    public static function singleton() {
        if (null === Connection::$instance) {
             Connection::$instance = new Connection();
        }
        return Connection::$instance;
    }
}
// available since PHP 8.0+
// class cannot be creted using the 'new' operator
// but we can call this function from within the class
*/
// late static binding
// unless you have strong reasons for it, use the static keyword not the actual class name inside
class Connection {
    private static $instance = null;
    private function __construct() {} //make the constructor private

    public static function singleton() {
        if (null === static::$instance) {
             static::$instance = new static();
        }
        return static::$instance;
    }
}

$connection = Connection::singleton();
