<?php
//child class must use parent function in interface
interface Animal
{
    public function makeSound();
}
class Cat implements Animal
{
    public function makeSound()
    {
        echo "Meow";
    }
}
class Dog implements Animal
{
    public function makeSound()
    {
        echo "wolf wolf";
    }
}
class Mouse implements Animal
{
    public function makeSound()
    {
        //class yae name ko pyn use yin
        echo get_class($this) . " make sound 'Squeak";
    }
}
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);
foreach ($animals as $animal) {
    echo "<br>";
    $animal->makeSound();
}
