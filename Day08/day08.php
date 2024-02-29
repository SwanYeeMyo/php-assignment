<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'php_projects';
//Crate Connection;
$conn = new mysqli($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "connection established";
// $sql = "CREATE TABLE php_projects.guests(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     email VARCHAR(50) ,
//     resgister_date DATETIME DEFAULT CURRENT_TIMESTAMP
// )";
// ==============insert query parameters============
// $sql = "INSERT INTO php_projects.guests(name,email) VALUES ('Moe thet ko ko','mtkk2002@gmail.com');";
// $sql .= "INSERT INTO php_projects.guests(name,email) VALUES ('Aung Khant Ko','akk2002@gmail.com');";
// $sql .= "INSERT INTO php_projects.guests(name,email) VALUES ('Htoo Aunt Lin','hal2002@gmail.com');";
// // $conn->query($sql)
// if ($conn->multi_query($sql) === true) {
//     // $last_id = $conn->insert_id;
//     // echo "New record created successfully .Last inserted ID is ".$last_id;
//     echo "New record created successfully";
// } else {
//     echo "Error creating database: " . $conn->error;
// }
// $conn->close();
// ====================
// data binding with form php
// $query = $conn->prepare("INSERT INTO guests (name,email) VALUES (?,?)");
// $query->bind_param('ss',$username,$email);
// $username = 'DiToTheMi';
// $email = 'DiToTheMi@gmail.com';
// $query->execute();
// echo "New recorad created successfully";
// $query->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Sql</title> 
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="container mx-auto" >
        <div class="relative overflow-x-auto">

       
    <?php
    // $sql = "SELECT * FROM guests WHERE name = 'Swan Yee Myo'";
    //  $conn->query("DELETE FROM guests WHERE id = 18 ");
  
    $sql = "SELECT * FROM guests ORDER BY id DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table class='flex items-center justify-center  p-5 ' border='1'><tr><th>ID</th><th>Name</th><th>Email</th><th>Register Date<th></tr>";
        // echo "<tr>";
        // echo "<th>ID</th>";
        // echo "<th>Name</th>";
        // echo "<th>Email</th>";
        // echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='px-6 py-4' >" . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['register_date'] . "</td>";
            echo "</tr>";    }
            echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
     </div>
     </div>
</body>
</html>
