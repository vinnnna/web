<?php

class User
{
    // data member / atribut
    public $name;
    public $age;
    
    // constructor
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

// inisialisasi object

$user1 = new User("", 17);

echo $user1->name = "Alvina ";
echo $user1->age = 17;

?>