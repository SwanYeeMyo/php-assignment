<?php
$servername = 'localhost';
$username = 'root';
$password = '';
//Crate Connection
$conn = new mysqli($servername, $username, $password);
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
//data binding with form php
// $query = $conn->prepare("INSERT INTO php_projects.guests (name,email) VALUES (?,?)");
// $query->bind_param('ss',$username,$email);
// $username = 'DiToTheMi';
// $email = 'DiToTheMi@gmail.com';
// $query->execute();
// echo "New recorad created successfully";
// $query->close();

$sql = "SELECT * FROM php_projects.guests";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    // echo "<tr>";
    // echo "<th>ID</th>";
    // echo "<th>Name</th>";
    // echo "<th>Email</th>";
    // echo "</tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";    }
} else {
    echo "0 results";
}
$conn->close();
