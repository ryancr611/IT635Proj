<?php
require('DatabaseLogin.php');


$sql ="Select Plant_Name, SOLD, ID FROM Plants ORDER BY SOLD DESC LIMIT 5";
echo "Top Sold Plants";
echo "<br>";
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
echo "_______________________________________________________________";
echo "<br>";
echo "<br>";
echo "<br>";
$sql ="Select Plant_Name, SOLD, ID FROM Plants ORDER BY SOLD ASC LIMIT 5";
echo "Lowest Sold Plants";
echo "<br>";
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
