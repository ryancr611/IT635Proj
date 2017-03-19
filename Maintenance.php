<?php
require('DatabaseLogin.php');

$sql ="Select Plant_Name,ID, MAINTENANCE FROM Plants Where IN_Stock > 0";

if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Schedule: ' .$row["MAINTENANCE"]."<br>";
	echo "<br>"; 
}
}
}

 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
