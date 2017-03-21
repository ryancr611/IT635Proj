<?php

require('DatabaseLogin.php');

$sql = "INSERT INTO Plants(ID, Plant_Name, DATE_ARRIVED, IN_STOCK, DEAD, SOLD, ORDERED, LOCATION, MAINTENANCE)
VALUES ('15', 'Cypress', '2017-03-1', '10', '2', '3', '0', 'Back Right Corner of Lot', 'Water Daily')";

if ($conn->query($sql) == TRUE) {
	echo "New record made";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

