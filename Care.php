<?php
require('DatabaseLogin.php');

$sql ="Select * From Care";

if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care: ' .$row["Care"]."<br>";
	echo "<br>"; 
}
}
}

 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
