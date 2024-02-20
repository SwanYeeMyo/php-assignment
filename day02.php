<?php
// function xc(array $a)//must be array type
// {

// // }try {
// //     xc(4);
// // } catch (Exception $e) {
// //     echo $e->getMessage();
// // }
// function inverse($x)
// {
//     if (!$x) {
//         throw new Exception('Division by zero.');
//     }
//     return 1 / $x;
// }
// function getHello() {
//     echo "Hello";
// }
// try {
//     echo inverse(5) . "<br/>";
//     echo inverse(0) . "<br/>";
//     // echo inverse(5) . "<br/>";
//     getHello();

// } catch (Exception $e) {
//     echo 'Caught exception:', $e->getMessage(), "<br/>";
// }
// echo "Hello World";
//Array Itmes
// function myFunction(){
//     echo "This text comes from a function";
// }
// //calling function must be in
// $myArr = array('Volvo',15,['Apples','bananas'],'myFunction');

// // echo $myArr[0];
// $myArr[3]();

// ==========================

//count
// echo count($myArr);
// print_r($myArr) . "<br/>";
// var_dump($myArr);

// ==========================

// $cars = array('Volvo','BMW','Toyota');
// $cars[1] = 'Ford';
// $cars[8] = "SuzuKi";
// $cars[9] = "BMW";
// // can push multiple item with push
// array_push($cars,"Honda","Marcides");
// var_dump($cars);

// ==========================

// $cars = array('brand' => 'Ford' , 'model' => 'Mustang' ,'year' => 1964);
// $cars['year'] = 2024;
// // var_dump($cars);
// foreach ($cars as $key => $car) {
//     echo "$key-> $car <br/>";
// }

// ======================

// add multiple item to associative Array
// $cars = array('brand' => 'Ford' , "model" => 'Mustang');
// $cars += ['color' => 'red','year'=>1964];
// var_dump($cars);

// =====================
//array_splice()

// $cars = array('Volvo','BMW','Toyota');
// //shae k array a lel ka index a nout k bl 2 khu pht ma lel so tr
// array_splice($cars, 1 , 2);
// array_push($cars,'Honda Civic','Suzuki','MiSuBiShi');
// var_dump($cars);

// unset($cars["model"]);
// // array_push($cars,'Honda Civic','Suzuki');
// var_dump($cars);

// =====================

//unset does not rearrange
// unset($cars[1]);
// var_dump($cars);

// =====================

//Take value as parameters not keys

$oldArray = array('brand' => 'Ford', 'model' => 'Mustang', 'year' => 1964);
// $newArray = array_diff($oldArray, ['Mustang', 1964]);
arsort($oldArray);
var_dump($oldArray);
echo "<br/>";

// var_dump($newArray);

// ===================== delete the last item

$cars = array('Volvo','BMW','Toyota');
//pop
// array_pop($cars);
// var_dump($cars);
//shift delete the first item
// array_shift($cars);
// var_dump($cars);
//sroting
$numbers = array(4,6,22,2,11);
sort($numbers);
var_dump($numbers);
// =====================
