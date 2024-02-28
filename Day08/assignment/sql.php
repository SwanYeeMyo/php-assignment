<?php 
    $servername = 'localhost';
    $username = 'root';
    $conn = new mysqli($servername,$username,'');
    if($conn->connect_error){
        die('Connection error: ' . $conn->connect_error);
    }
?>