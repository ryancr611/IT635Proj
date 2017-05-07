<?php

require('DatabaseLogin.php');

$sql = "INSERT INTO Care(ID, Plant_Name, Care)
VALUES ('15', 'Cypress', 'Young outdoor cypress trees will need supplemental watering during dry weather. It is best to stop watering them if the ground freezes. Weeding near cypress trees helps their overall health because they do not have to compete for water and nutrients. Leyland cypress tolerates heavy trimming, so you can shape it into a hedge or windscreen. In very windy areas, such as areas near the coast, you can prevent wind damage by wrapping the trees in burlap when a storm is on the way.')";

if ($conn->query($sql) == TRUE) {
	echo "New record made";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

