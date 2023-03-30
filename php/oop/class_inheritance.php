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
    var $city;
    var $country;

    //extending new function
    function location() {
        return $this->city . ', ' . $this->country;
    }

    //override fullName
    function fullName(){
        return $this->firstName . " " . $this->lastName . " (customer)";
    }
}

$customer1 = new Customer;
$customer1->firstName = "Budi";
$customer1->lastName = "Hermawan";
$customer1->city = 'Cirebon';
$customer1->country = 'Indonesia';

echo $customer1->fullName() . "<br>";
echo $customer1->location() . "<br>";

$user1 = new User;
$user1->firstName = "Hakim";
$user1->lastName = "Sembiring";
// $user1->city = 'Cirebon';
// $user1->country = 'Indonesia';
//^location() method is undefined in User^

echo $user1->fullName() . "<br>";
// echo $user1->location() . "<br>";

//check if Customer is Subclass of User
if (is_subclass_of($customer1, "User")) {
    echo "Instance Customer adalah subclass dari Class User.<br>";
}

//check what is/are the parent class(es) of Customer
$customerParents = class_parents($customer1); //this is an array
echo "Parent dari Customer adalah kelas " . implode(", ", $customerParents) . ".<br>";
?>
