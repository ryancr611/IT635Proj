#!/usr/bin/php
<?php

$servername = "localhost";
$username = "root";
$password = "gaming611";

$conn =  mysqli_connect($servername, $username, $password, "IT635Proj");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected Successfully";
?>

