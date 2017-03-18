<?php

require('DatabaseLogin.php');
$Test = "hi";
$Parameter = $_POST['Update'];
$UpdateValue = $_POST['Update_Value'];
$UpdateValue = '"'.trim($UpdateValue, '"').'"';
$PlantID = $_POST['Plantid'];


$sql = "UPDATE Plants SET ".$Parameter." = ".$UpdateValue." WHERE ID = ".$PlantID."";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	echo "update complete";
}

$conn->close();

?>
