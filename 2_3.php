<?php 

//Define a class
    class User {
//properties (attributes)

        public $name = 'Brad';

//methods (functions)

        public function sayHello() {
            return $this->name .' say Hello';
        }
    }

    //instatiate a user object from the user class

    $user1 = new User();
    $user1->name = 'Brad';
    echo $user1->name;

    echo "<br>";

    echo $user1->sayHello();


    //create new user 
    $user2 = new User();
    $user2->name = 'Jeff';
    echo $user2->name;
    echo "<br>";
    echo $user2->sayHello();