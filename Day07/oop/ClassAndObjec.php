<?php
// class Fruit
// {
//     //properties
//     public $name;
//     public $color;
//     public function setName($name)
//     {
//         $this->name = $name;
//     }
//     public function getName()
//     {
//         return $this->name;
//     }
//     public function setColor($color)
//     {
//         $this->color = $color;
//     }
//     public function getColor()
//     {
//         return $this->color;
//     }
// } -->
// $apple = new Fruit();
// $apple->setName('Apple');
// $apple->setColor('Red');
// echo "Name :" . $apple->getName();
// echo "<br>";
// echo "Color  :" . $apple->getColor();
// echo "<hr>";
// $mango = new Fruit();
// $mango->setName('Mango');
// $mango->setColor('Green');
// echo "Name :" . $mango->getName();
// echo "<br>";
// echo "Color  :" . $mango->getColor();
// echo "<hr>";
// $banana = new Fruit();
// $banana->name = 'banana';
// $banana->color = 'Yellow';
// echo "Name :" . $banana->name;
// echo "<br>";
// echo "Color  :" . $banana->color;
// echo "<br>";
// //return bool value
// var_dump($apple instanceof Fruit);
 
// class Fruit
// {
//     //properties
//     public $name;
//     public $color;
//     function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function getName()
//     {
//         return $this->name;
//     }
//     public function getColor()
//     {
//         return $this->color;
//     }
// }
//     $apple = new Fruit("Apple",'Red');
//     echo "Name is " . $apple->name;
//     echo "<br>";
//     echo "color is " . $apple->color;
// class Fruit{
//       //properties
//     public $name;
//     public $color;
//     function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function __destruct(){
//         echo "The Fruit is {$this->name} and the color is {$this->color} .";
//         echo "<br>";
//     }
// }
// new Fruit('Appple','Red');
// new Fruit('Orange','orange');
// class Fruit {
//     public $name;
//     private $color;
//     public $weight;
//     public function setColor($color){
//             $this->color = $color;
//     }
//     public function setName($name){
//         $this->name = $name;
//     }
//     public function setWeight($weight){
//         $this->weight = $weight;
//     }
    
//     protected function getColor(){
//         return $this->color;
//     }
    
// }
// $apple = new Fruit();
// $apple->weight = '100';
// echo $apple->weight;
// $apple->setColor = "red";
// echo $apple->getColor();
// $apple->name = 'Apple';
// $apple->setColor = "Red";
// $apple->setWeight = '100';
// echo $apple->name;
// echo $apple->getColor();
// ===================
// class Fruit{
//       //properties
//     public $name;
//     public $color;
//     function __construct($name,$color){
//         $this->name = $name;
//         $this->color = $color;
//     }
//     public function intro(){
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }
// class Strawberry extends Fruit {
//    public function message(){
//     echo "Am I a Fruit or a berry";
//    }
// }
// $strawberry = new Strawberry('StrawBerrry','Red');
// $strawberry->message();
// $strawberry->intro();
// ==========
//  fclass Fruit{
//     //properties
//   public $name;
//   public $color;
//   function __construct($name,$color){
//       $this->name = $name;
//       $this->color = $color;
//   }
//   protected function intro(){
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }
// class Strawberry extends Fruit {
//  publicunction message(){
//   echo "Am I a Fruit or a berry";
//   //protected thel k har twe ko child k pl pyn call lo ya ml
//   $this->intro();
//  }
// }
// $strawberry = new Strawberry('StrawBerrry','Red');
// $strawberry->message();
// $strawberry->intro();
// =====================
//overwriting the function 
// class Fruit{
//         //properties
//       public $name;
//       public $color;
//       function __construct($name,$color){
//           $this->name = $name;
//           $this->color = $color;
//       }
//       protected function intro(){
//           echo "The fruit is {$this->name} and the color is {$this->color}.";
//       }
//     }
//     class Strawberry extends Fruit {
//         public $weight;
//         function __construct($name,$color,$weight){
//             $this->name = $name;
//             $this->color = $color;
//             $this->weight = $weight;
//         }
//      public function intro(){
//         echo "The fruit is {$this->name} , the color is {$this->color}, and the weight is {$this->weight} gram. ";
//      }
//     }
//     $strawBerry = new Strawberry('stawberry','red',50);
//     $strawBerry->intro();
// ======================================
    //final class so bl thu mha extends lok lox ma ya top fu
    // final class Fruit {
    //     //somecode
    // }
    // class Strawberry extends Fruit{
    //     //somecode
    // 
    // class Fruit{
    //     final public function intro(){
    //         //somecode
    //     }
    // }
    // class Strawberry extends Fruit {
    //     // wil result in error
    //     public function intro(){
    //         // some code 
    //     }
    // }
    // const
    // class Fruit{
    //     const MESSAGE = "Thank you fro buying fruits";
    // }
    // echo Fruit::MESSAGE;
    // class Order {
    //     const PAID = 6;
    //     const PENDING = 7;
    // }
    // echo Order::PENDING;
    class Fruit{
        const MESSAGE = "Thank You for buying Fruits";
        public function thankYou (){
            //function thel mha pl use yin self nae use 
            echo self::MESSAGE;
        }
    }
    $goodbye = new Fruit();
    $goodbye->thankYou();
    echo $goodbye::MESSAGGE;

    