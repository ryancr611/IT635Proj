#!/usr/bin/php
<?php
$servername = "localhost";
$username = "root";
$password = "gaming611";

$connect = new mysqli($servername, $username, $password);

if ($connect->connect_error){
	die("Connection failed: " . $connection->connect_error);
}

$sql = "CREATE DATABASE IT635Proj";
if ($connect->query($sql) == TRUE) {

	echo "Database created";
} else {
	echo "Failed to make database " . $conn->error;
}

$connect->close();
?>

