<?php
// first assignment
function sum($x, $y)
{
    $z = $x + $y;
    if ($x >= 100 && $y <= 200) {
        return true;
    } else {
        return false;
    }
}
echo "<h3>First assignment</h3>";
var_dump(sum(100, 199));
echo "<br/>";
var_dump(sum(250, 300));
echo "<br/>";
var_dump(sum(105, 190));
echo "<br/>";
//second assignment
function sameSum($x, $y)
{
    $sum = $x + $y;
    if ($x === $y) {
        return $sum * 3;
    } else {
        return $sum;
    }
}
echo "<hr/>";
echo "<h3>Second Assignment</h3>";

echo sameSum(1, 2) . "<br/>";
echo sameSum(3, 2) . "<br/>";
echo sameSum(2, 2) . "<br/>";
echo "<hr/>";
echo "<h3>Third Assignment</h3>";
//third assignment
// {1,2,9,3}, 3
// {1,2,3,4,5,6}, 2
// {1,2,3,4,5,6}, 6
// {1,2,2,3}, 9
$array = array(1, 2, 9, 3, 5, 6);
$arrayNew = array(1, 2, 2, 3);
function checkFunction(array $first, array $second)
{
    //array_slice(array, start, length, preserve)
    $array = $first;
    $arrayNew = $second;
//   var_dump(array_slice($array,0,4));
    $array = array_slice($array, 0, 4);
    $arrayNew = array_slice($arrayNew, 0, 4);
    //in_array
    var_dump(in_array(3, $array));
    echo "<br/>";
    var_dump(in_array(2, $array));
    echo "<br/>";
    var_dump(in_array(6, $array));
    echo "<br/>";
    var_dump(in_array(9, $arrayNew));
}
echo checkFunction($array, $arrayNew);
echo "<hr/>";
//fourth assignment
echo "<h3>Fourth Assignment<h3/>";
// "abcdefgh", "abijsklm"
// "abcde", "osuefrcd"
// "pqrstuvwx", "pqkdiewx"
// Sample Output:
// 1
// 1
// 2
function countSameSubstrings($str1, $str2)
{
    preg_match_all('/(?=(..))/', $str1, $matches1);
    preg_match_all('/(?=(..))/', $str2, $matches2);
    //capture ab,cd,ef,..
    $substrings1 = $matches1[1];
    // var_dump($substrings1);
    $substrings2 = $matches2[1];
    $count = 0;
    foreach ($substrings1 as $substring) {
        if (in_array($substring, $substrings2)) {
            $count++;
        }
    }
    return $count;
}

$input1 = "abcdefgh";
$input2 = "abijsklm";
echo countSameSubstrings($input1, $input2) . "\n";

$input1 = "abcde";
$input2 = "osuefrcd";
echo countSameSubstrings($input1, $input2) . "\n";

$input1 = "pqrstuvwx";
$input2 = "pqkdiewx";
echo countSameSubstrings($input1, $input2) . "\n";
echo "<hr/>";
echo "<h3>Fifth Assignment<h3/>";
// 4, 5, 7
// 7, 4, 12
// 10, 13, 12
// 17, 12, 18
// Sample Output:
// 16
// 11
// 13
// 17
function exceptFun($x, $y, $z)
{
    $sum = 0;
    if ($x >= 10 && $x <= 20 && $x != 13 && $x != 17) {
        $x = 0;
    }
    if ($y >= 10 && $y <= 20 && $y != 13 && $y != 17) {
        $y = 0;
    }
    if ($z >= 10 && $z <= 20 && $z != 13 && $z != 17) {
        $z = 0;
    }
    $sum = $x + $y + $z;
    return $sum;

}
echo exceptFun(4, 5, 7) . "<br/>";
echo exceptFun(7, 4, 12) . "<br/>";
echo exceptFun(10, 13, 12) . "<br/>";
echo exceptFun(17, 12, 18) . "<br/>";
