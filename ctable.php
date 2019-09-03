<?php
$servername = "localhost";
$username = "ladiesin_dab2";
$password = "dab2@2019";
$dbname = "ladiesin_batch2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE car_news (
id INT(15) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
user_name VARCHAR(200),
password VARCHAR(175),
)"; 

$sql = "CREATE TABLE posts (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(111),
comment VARCHAR(175),
image LONGBLOB,
user_id VARCHAR(11)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>