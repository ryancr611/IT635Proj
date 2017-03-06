#!/usr/bin/php
<?php
require('DatabaseLogin.php');

$sql = "CREATE TABLE Admin(
Username VarChar(15) NOT NULL,
Password VARCHAR(15) NOT NULL)";

if ($conn->query($sql) == TRUE){
	echo "Table created successfully";
} else {
	echo "Error creating table " . $conn->error;
}
$conn->close();
?>
