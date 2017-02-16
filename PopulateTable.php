#!/usr/bin/php
<?php

require('DatabaseLogin.php');

$sql = "INSERT INTO Plants(ID, Plant_Name, DATE_ARRIVED, IN_STOCK, DEAD, SOLD, ORDERED, LOCATION)
VALUES ('1', 'Arbor Vitae', '2017-02-15', '50', '0', '0', '0', 'To be Changed')";

if ($conn->query($sql) == TRUE) {
	echo "New record made";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

