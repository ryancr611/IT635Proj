<?php

require('DatabaseLogin.php');

$sql = "INSERT INTO Care(ID, Plant_Name, Care)
VALUES ('1', 'Arbor Vitae', 'After planting, create a water basin by making a ridge of soil around the outer circumference of the planting hole. Make the ridge about 3 inches high. Once you've created the ridge, cover the ground around the arborvitae with 2 to 3 inches of mulch, such as pine needles or bark chips. Mulch keeps the soil moist and helps maintain an even temperature around the roots. To prevent rot that often results from mulch piling up against the trunk, leave a 3- to 4-inch span unmulched. Water the arborvitae regularly throughout the first year. Provide enough water to soak the root zone, and then allow the top few inches of soil to dry before watering again.')";

if ($conn->query($sql) == TRUE) {
	echo "New record made";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

