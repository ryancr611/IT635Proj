#!/usr/bin/php
<?php
require('DatabaseLogin.php');

$sql = "CREATE TABLE Plants(
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Plant_Name VARCHAR(30) NOT NULL,
DATE_ARRIVED DATE,
IN_STOCK INT(6),
DEAD INT(6),
SOLD INT(6),
ORDERED INT(6),
LOCATION VARCHAR(30))";

if ($conn->query($sql) == TRUE){
	echo "Table created successfully";
} else {
	echo "Error creating table " . $conn->error;
}
$conn->close();
?>
