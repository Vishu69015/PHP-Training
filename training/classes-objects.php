<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes Objects</title>
</head>

<body>



    <?php
    class Fruit
    {
        // Properties
        public $name;
        public $color;

        // Methods
        function set_name($name)
        {
            $this->name = $name;
        }
        function get_name()
        {
            return $this->name;
        }

        function set_color($color)
        {
            $this->color = $color;
        }
        function get_color()
        {
            return $this->color;
        }

        public function intro()
        {
            echo "{$this->name} is a fruit and color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit
    {
        public function message()
        {
            echo "Am i a Fruit or Berry?";
        }
    }

    $strawberry = new Strawberry();

    $apple = new Fruit();
    $banana = new Fruit();
    $mango = new Fruit();

    $strawberry->set_name('Strawberry');
    $strawberry->set_color("Red");

    $apple->set_name('Apple');
    $apple->set_color("Red");

    $banana->set_name('Banana');
    $banana->set_color('Yellow');

    $mango->set_name("Mango");
    $mango->set_color("Yellow");

    $strawberry->message();
    // echo "<br>";
    $strawberry->intro();

    echo "<br><br>";

    echo "Name : " . $apple->get_name();
    // echo "<br>";
    echo "  /  Color : " . $apple->get_color();
    echo "<br>";
    echo "Name : " . $banana->get_name();
    // echo "<br>";
    echo "  /  Color : " . $banana->get_color();
    echo "<br>";
    echo "Name : " . $mango->get_name();
    // echo "<br>";
    echo "  / Color : " . $mango->get_color();
    echo "<br>";

    echo "Name : " . $strawberry->get_name();
    // echo "<br>";
    echo "  / Color : " . $strawberry->get_color();
    ?>



    <br><br>Name :

    <?php

    class second
    {
        function first()
        {
            echo "Vishal";
        }
        function second()
        {
            echo " Mehta";
        }
    }

    $obj = new second();
    $obj->first();
    $obj->second();


    ?>

    <br><br>

    <?php

    class construct_distruct
    {
        public $x = 1;

        function __construct()
        {
            echo "__construct gets executed first when we call a class";
            echo "<br><br>";
        }

        function normal()
        {
            echo "Normal functions are called in beetween & and you have to call the normal methods manually with '->' ";
            echo "<br><br>";
            echo ++$this->x;
            echo "<br><br>";
        }

        function __destruct()
        {
            echo "<br><br> __destruct gets executed last when we call a class";
            echo "<br><br>";
        }
    
    }
    $obj = new construct_distruct();
    $obj->normal();

    ?>

<h2>Interfaces</h2>


<?php
// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}

?>

</body>

</html>