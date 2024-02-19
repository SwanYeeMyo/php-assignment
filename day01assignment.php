<?php
//array key exist
$students = array('name' => 'Swan Yee Myo','age' => 22);
if (array_key_exists('names', $students)) {
    echo 'It exist'. $students['name'] .'';
}else{
    echo "It doesn't exist";
}
//array_diff_assoc
$carsToyota= array("name"=> "Mark X","brand"=> "Toyota","price"=> 800,"model" => 2001);
$carsBmw = array("name"=> "BMW X3000","brand"=> "BMW","price"=> 1200,"model" => 2012);
$comparision = array_diff_assoc($carsToyota, $carsBmw);
//output the Differences
print_r($comparision);
echo "<br>";
//array combine
$key = array('Apple','Banana','Orange');
$value = array(350,500,800);
$combine = array_combine($key, $value);
print_r($combine);
//count
echo "return the length of array" . count($carsToyota);