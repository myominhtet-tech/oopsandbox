<?php

class User {
    public $name;
    public $age;

    //runs when an object is created
    public function __construct($name, $age)
    {
      //  echo 'constructor';
      echo 'class '.__CLASS__.' instantiated';
      $this->name = $name;
      $this->age = $age;
    }
    public function sayHello() {
        return $this->name . ' says Hello';
    }
//called when no other reference to a certain object 
//used for cleanup, closing connection, etc.
    public function __destruct()
    {
        echo 'destructor';
    }
}

$user1 = new User('Brad', 36);

echo $user1->name . ' is ' .$user1->age . ' years old.';
echo '<br>';
echo $user1->sayHello();

echo '<br>';
$user2 = new User('Sara' , 25);
echo $user2->name . ' is ' .$user2->age . ' years old.';
echo '<br>';
echo $user2->sayHello();