<?php
require('DatabaseLogin.php');


$sql ="Select Plant_Name, SOLD, ID FROM Plants ORDER BY SOLD DESC";
echo "Top 5 Plants Sold";
echo "<br>";
if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Amount Sold: ' .$row["SOLD"]."<br>";
	echo "<br>"; 
	
}
}
}
 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql ="Select Plant_Name, SOLD, ID FROM Plants ORDER BY SOLD ASC";
echo "Lowest Sold Plants";
echo "<br>";
if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Amount Sold: ' .$row["SOLD"]."<br>";
	echo "<br>"; 
	
}
}
}
 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>
