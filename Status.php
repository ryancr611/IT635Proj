<?php

require('DatabaseLogin.php');


$sql ="Select Plant_Name, DATE_ARRIVED, IN_STOCK, DEAD, SOLD From Plants Where ID='{$_POST[Plantid]}'";

if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'Name: ' .$row["Plant_Name"]."<br>";
	echo 'Date_Arrived: ' .$row["DATE_ARRIVED"]."<br>";
	echo 'Number of Plants in Stock: ' .$row["IN_STOCK"]."<br>";
	echo 'Number of Plants Dead: ' .$row["DEAD"]."<br>";
	echo 'Number of Plants Sold: ' .$row["SOLD"]."<br>";
	
}
}
}
 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
