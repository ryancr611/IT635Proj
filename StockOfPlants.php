
<html>
<body>
<?php

require('DatabaseLogin.php');

$sql ="Select Plant_Name, IN_STOCK FROM Plants Where IN_Stock > 0";

if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Stock Count: ' .$row["IN_STOCK"]."<br>"; 
	
}
}
}
 else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
</body>
</html>
