<?php
require('DatabaseLogin.php');

$sql = "CREATE TABLE Care(
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Plant_Name VARCHAR(30) NOT NULL,
Care VARCHAR(10000))";

if ($conn->query($sql) == TRUE){
	echo "Table created successfully";
} else {
	echo "Error creating table " . $conn->error;
}
$conn->close();
?>
