<?php
$servername = "localhost";
$username = "root";
$password = "gaming611";

$connect = new mysqli($servername, $username, $password);

if ($connection->connect_error){
	die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE DATABASE IT635Proj";
if ($conn->query($sql) == TRUE) {

	echo "Database created";
} else {
	echo "Failed to make database " . $conn->error;
}

$conn->close();
?>

