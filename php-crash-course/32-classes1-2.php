<?php 
// Class -> Tesla Y
// Object -> my Tesla Y or your Tesla Y

class Person {
    // public string $name;
    // public int $age;

    // public function __construct(string $name, int $age) {
    //     $this->name = $name;
    //     $this->age = $age;
    // }
    // php 8: constructor property promotion was introduced
    // you don't have to do the above $this->, you can just add visibility keywords next to the constructor arguments
    // also doesn't need to define before the __construct

    public function __construct(
        public string $name,
        public int $age
    ) {}

    public function introduce(): string {
        return "Hi, I'm {$this->name} and I'm {$this->age} years old\n";
    }
}

$person = new Person("Alice", 30);
echo $person->introduce();

$person2 = new Person("Piotr", 37);
echo $person2->introduce();

class Employee extends Person {
    public function __construct(
        public string $name,
        public int $age,
        public string $position
    ) {}

    public function introduce(): string {// override a method
        return parent::introduce() . "I work as a {$this->position}.\n";
    }
}

$people = [
    new Employee("Jerry", 45, "Manager"),
    new Person("Piotr", 37)
];

function introduce(Person $person) {
    echo $person->introduce() . "\n";
}
// polymorphism: when we have common parent class, we can treat objects of different classes as if they are the same parent class

foreach ($people as $person) {
    introduce($person);
}
