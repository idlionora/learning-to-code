<?php

use Customer as GlobalCustomer;
use User as GlobalUser;

class User {
    public $firstName;
    public $lastName;
    public $userName;

    protected $regID = 1001;
    private $level = 'User';

    public function fullName(){
        return $this->firstName . " " . $this->lastName;
    }

    protected function sayProtect() {
        return "Hello, Protected";        
    }

    private function sayPrivate() {
        return "Hello, Private";
    }
}

class Customer extends User {
    public function sayParent() {
        return $this->sayProtect();
    }
}

$user2 = new User;
$user2->firstName = 'User';
$user2->lastName = 'Class';

// protected and private visibility cannot be called by object instance 
// echo $user2->regID . "<br/>";
// echo $user2->level . "<br/>";
echo $user2->fullName() . "<br/>";
// echo $user2->sayProtect() . "<br/>";
// echo $user2->sayPrivate() . "<br/>";

$customer2 = new Customer;
$customer2->firstName = 'Customer';
$customer2->lastName = 'Doe';

echo $customer2->fullName() . "<br/>";
echo $customer2->sayParent() . "<br/>";
?>
