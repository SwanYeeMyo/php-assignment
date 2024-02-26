<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="max-w-sm mx-auto mt-5 text-center shadow rounded-md p-5">
    <table>
    <!-- <tr>
        <td>Filter name</td>
        <td>Filter ID</td>
    </tr> -->
    <?php 
    //call back function a thone myrr
    // foreach(filter_list() as $id => $filter){
    //     echo '<tr><td>' .$filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    // }
    // ============
    // $str = "<h1>Hello World<h1/>";
    // echo filter_var($str,FILTER_SANITIZE_STRING);
    // ===============
    $int = 10;
    $ip = '127.0.0.255';
    $email = 'swanyeemyo2001@gmail.com';


    // if(filter_var($int,FILTER_VALIDATE_INT) === 0 ||  !filter_var($int,FILTER_VALIDATE_INT) === false){
    //     echo "Integer is  valid";
    // }else{
    //     echo "Integer is not valid";
    // }
    // ===============
    // if(!filter_var($ip,FILTER_VALIDATE_IP) === false){
    //     echo "$ip is a valid IP address";
    // }else{
    //     echo ("$ip is not a valid IP address");
    // }
        //Remove all illegal characters from email
        // =====================
    // $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    // if(!filter_var($email,FILTER_VALIDATE_EMAIL) === false){
    //     echo "$email is a valid email address";
    // }else{
    //     echo "$email is not a vlid email address";
    // }
    // ========================
    // function myCallback($item){
    //     return strlen($item);
    // }

    // $strings = ['Apple','Orange','Banana','Coconut'];
    // $length = array_map('myCallback',$strings);
    // print_r($length);{
    // ===========user define Function
    // function exclaim($str){
    //     return $str . " !";
    // }
    // function ask($str){
    //     return $str . " ?";
    // }
    // function printMessage($message,$format){
    //     //calling the $format callback function
    //     echo $format($message);
    // }
    // printMessage('Happy New Year','ask');
    // printMessage('Happy New Year','exclaim');

    // // ==========================
    // $number = [1,2,4,6];
    // $ans = array_map(function($n){
    //     return $n * $n;
    // },$number);
    // print_r($ans);

    $ages = array("Peter" => 35, 'Ben' => 37, "Jon" => 43);
    $cars = array('BMW','HONDA',"TOYOTA");
    //change the json format data with json_encode
    // echo json_encode($ages);
    // echo json_encode($cars);
    $jsonObj = '{"Peter":35 ,"Ben" : 37 , "John":43}';
    $obj = json_decode($jsonObj);
    $arr = json_decode($jsonObj,true);//return array
    // var_dump(json_decode($jsonObj));
    // //true lok yin associate array a ny nae pyn yout lr ml
    // var_dump(json_decode($jsonObj,true));
    // var_dump($arr);
    // echo $arr['Peter'];
    // echo $arr['Ben'];
    // echo $arr['John'];
    foreach ($obj as $key => $value) {
        echo $key . "=>" .$value . "<br>";
    }

    ?>


     <table>
    </div>
  
</body>
</html>