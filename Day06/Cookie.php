<?php
 $cookie_name = 'user';
 $cookie_value = 'Dimitri';
 setcookie($cookie_name,$cookie_value,time() + (60),'/'); //set the cookie and can modified
// setcookie("user",'',time() - 3600);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="flex justify-center items-center  ">
        <!-- <?php 
        echo "cookie user is deleted"
        ?> -->
        <div class="max-w-sm shadow p-5 rounded-lg mt-52" >
        <?php
        if(count($_COOKIE) > 0 ) {
            echo "<h5 class='text-3xl line'>Cookies are enabled<h5/>";
        }else{
            echo "Cookies are disabled";
        }
     if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie name " . $cookie_name . "is not set !";
     }else{
        echo "Cookie " . $cookie_name . " is set! . <br> ";
        echo "Value is " . $_COOKIE[$cookie_name] . ".";
     }
     
     ?>
        </div>
     
    </div>
</body>
</html>