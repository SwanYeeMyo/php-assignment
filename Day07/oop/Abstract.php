<?php 

abstract class Car{
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro();
}
class Audi extends Car{
    public function intro(){
        return "Choose German quality ! I'm an $this->name! ";
    }
}
class Volvo extends Car{
    public function intro(){
        return "Proud to be Swedish ! I'm a $this->name";
    }
}
class Citroen extends  Car{
    public function intro(){
        return "French extravagance! I'm a $this->name!";
    }
}
$audiCar = new Audi("Audi");
echo $audiCar->intro();
$audiCar = new Volvo("Volvo");
echo $audiCar->intro();
$audiCar = new Citroen("Citroen");
echo $audiCar->intro();
echo "<hr>";
abstract class ParentClass{
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass{
    public function prefixName($name,$separator = '.',$greet = "Dear"){
        if($name == "Aung Aung"){
            $prefix = "Mr";
        }elseif($name == "Aye Aye"){
            $prefix = "Ms";
        }else{
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator}{$name}";
    }
}
$child = new ChildClass();
echo $child->prefixName('Aye Aye');

//protected khan htr tae kg twe k child class k pl pyn call thone lo ya 
//abstract class thel mha abstract function 1 khu shi ya ml