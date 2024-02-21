<?php
// $ans = 6;
// // $result = $ans > 4 ? 'Correct' : 'Not Correct';
// $result = ($ans <= 4) ? $ans :  10;
// echo $result;

// ======================= random
// $roll = rand(1,6);
// echo "You rolled a dice " . $roll;
// if($roll === 6){
//     echo "You Win";
// }
// ========================= if else if
// $date = date("D M Y");
// echo $date;
// if ($date == "Mon") {
//     echo $date;
// } elseif ($date == "Fri") {
//     echo "it's super firday";
// } else {
//     echo "Have a nice Day";
// }
// ============================== switch
// $date = date('D');
// switch ($date) {
//     case "Mon":
//         echo "Today is Monday";
//         break;
//     case "Tue":
//         echo "Today is Tuesday";
//         break;
//     case "Wes":
//         echo "Today is Wesday";
//         break;
//     case "Thu":
//         echo "Today is Thusday";
//         break;
//     case "Fri":
//         echo "Today is Friday";
//         break;
//     case "Sat":
//         echo "Today is Satday";
//         break;
//     case "Sun":
//         echo "Today is Sunday";
//         break;
//     default:
//         echo "wonder which day it is ?";
// }
// ====================== Numeric arrays & Associative arrays alwasy use S in arrayName
// $cars = array('Honda', 'Toyota', 'BMW');
// foreach ($cars as $car) {
//     echo "<h5>$car<h5/>";
// }
// $ages = array('Swan Yee Myo' => 23, 'Aung Khant Ko' => 22, 'Moe Thet Ko Ko' => 21);
// foreach ($ages as $name => $age) {
//     echo "<h5>$name is $age years old.<h5/>";
// }
// =======================
$marks = array("mohammad" => array("physics" => 30, "math" => 35, "chemistry" => 45),
    "Dimitri" => array("physics" => 30, "Math" => 35, "Chemistry" => 55));

// print_r($marks);
foreach ($marks as $name => $subjects) {
    echo "<h1>Mark for $name<h1/>";  
    foreach ($subjects as $subject => $mark) {
        echo "<h3>$subject is  $mark <h3/>"; 
        
    }
    echo "<hr>";
}
// echo "<br/>Swan Yee Myo is " . $ages['Swan Yee Myo'];
