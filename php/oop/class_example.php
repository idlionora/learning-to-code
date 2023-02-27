<?php

class Student {
//creating property
    var $first_name;
    var $last_name;
    var $country = 'None';

//define method
    function sayHello() {
        return "Hello, World!";
    }
    function fullName() {
        return $this->first_name . ' ' . $this->last_name;
    }
}

//object instance
$student1 = new Student;
$student2 = new Student;

$student1->first_name = 'Hakim';
$student1->last_name = 'Sembiring';
$student2->first_name = 'Luna';
$student2->last_name = 'Winardi';

echo "Nama student 1 adalah " . $student1->first_name . ".<br>";
echo "Nama student 2 adalah " . $student2->first_name . ".<br>";
echo "<br>";

//calling method
echo $student1->first_name . " say, '" . $student1->sayHello() . "'<br>";
echo $student2->first_name . " say: '" . $student2->sayHello() . "'<br>";
echo "<br>";
echo $student1->fullName() . "<br>";
echo $student2->fullName() . "<br>";
echo "<br>";

//print registered methods in Student class
$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo "<pre>";
print_r ($class_methods);
echo "</pre>";

if (method_exists('Student', 'sayHello')) {
    echo "Method sayHello tersedia.";
} else {
    echo "Method sayHello tidak tersedia.";
}

// //print registered variable in Student class
// $class_vars = get_class_vars('Student');
// echo "Properti milik Student: ";
// echo "<pre>";
// print_r($class_vars);
// echo "</pre>";

// if (property_exists('Student', 'first_name')) {
//     echo "Properti first_name tersedia.";
// } else {
//     echo "Properti first_name tidak tersedia.";
// }

// //echo every registered classes
// $classes = get_declared_classes();
// echo "Classes: " . implode(', ', $classes) . "<br>";

// //checking if class Student is registered
// $classNames = ['Product', 'Student', 'student'];
// foreach ($classNames as $className) {
//     if (class_exists($className)) {
//         echo "{$className} class ada.<br>";
//     } else {
//         echo "{$className} class tidak ada.<br>";
//     }
// }
?>
