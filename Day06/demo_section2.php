<!-- store in server -->
<?php 
//  start the session
session_start();
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
    <?php 
    //Set  session variables
    // $_SESSION['favcolor'] 
    // $_SESSION['favanimal'] 
    echo "<h5 class='text-center font-semibold'>  " . $_SESSION['favcolor']  . "<h5/>";
    print_r($_SESSION);//return array
    ?>
</body>
</html>