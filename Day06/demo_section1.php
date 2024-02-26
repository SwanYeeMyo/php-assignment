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
    $_SESSION['favcolor'] = "Yellow";
    $_SESSION['favanimal'] = 'dog';
    echo "<h5 class='text-center text-3xl font-mono font-semibold mt-52'>Session variables are set.</h5>";
    ?>
   
</body>
</html>