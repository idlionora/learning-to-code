<?php 

class User {
    var $firstName;
    var $lastName;
    var $userName;

    function fullName(){
        return $this->firstName . " " . $this->lastName;
    }
}

class Customer extends User {
}

$customer1 = new Customer;
$customer1->firstName = "Budi";
$customer1->lastName = "Hermawan";

echo $customer1->fullName() . "<br>";

//check if Customer is Subclass of User
if (is_subclass_of($customer1, "User")) {
    echo "Instance Customer adalah subclass dari Class User.<br>";
}

//check what is/are the parent class(es) of Customer
$customerParents = class_parents($customer1); //this is an array
echo "Parent dari Customer adalah kelas " . implode(", ", $customerParents) . ".<br>";
?>
