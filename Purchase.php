<?php

require('DatabaseLogin.php');

$ArborVitae = $_POST['ArborVitae'];
$Marigold = $_POST['Marigold'];
$DawnRedwood = $_POST['DawnRedwood'];
$WhiteDogwood = $_POST['WhiteDogwood'];
$Forsythia = $_POST['Forsythia'];
$Magnolia = $_POST['Magnolia'];
$JapaneseMaple = $_POST['JapaneseMaple'];
$BlueSpruce = $_POST['BlueSpruce'];
$BlackPine = $_POST['BlackPine'];
$DragonLily = $_POST['DragonLily'];
$Alder = $_POST['Alder'];
$Hemlock = $_POST['Hemlock'];
$Holly = $_POST['Holly'];
$AppleTree = $_POST['AppleTree'];
$Cypress = $_POST['Cypress'];

$Cost = ($ArborVitae * 50) + ($Marigold * 2) + ($DawnRedwood * 70) + ($WhiteDogwood * 60) + ($Forsythia * 30) + ($Magnolia * 40) + ($JapaneseMaple * 80) + ($BlueSpruce * 40) + ($BlackPine * 50) + ($DragonLily * 20) + ($Alder * 100) + ($Hemlock * 70) + ($Holly * 50) + ($AppleTree * 80) + ($Cypress * 70);

echo "Your Purchase Cost is:   $";
echo $Cost;
echo "<br>";
echo "<br>"; 
echo "<br>";

echo "Care Instructions";
echo "<br>"; 
echo "<br>";  

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Arbor Vitae' and ".$ArborVitae." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>";
	 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Marigold' and ".$Marigold." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Redwood' and ".$DawnRedwood." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'White DogWood' and ".$WhiteDogwood." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Forsythia' and ".$Forsythia." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Magnolia' and ".$Magnolia." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Japanese Maple' and ".$JapaneseMaple." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Blue Spruce' and ".$BlueSpruce." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Black Pine' and ".$BlackPine." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}


$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Dragon Lily' and ".$DragonLily." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Alder' and ".$Alder." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Hemlock' and ".$Hemlock." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Holly' and ".$Holly." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Apple Tree' and ".$AppleTree." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}

$sql = "SELECT ID,Plant_Name,Care FROM Care Where Plant_Name = 'Cypress' and ".$Cypress." > 0";


if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) {
	echo 'ID: ' .$row["ID"]."<br>";
	echo 'Plant: ' .$row["Plant_Name"]."<br>";
	echo 'Care Instructions: ' .$row["Care"]."<br>";
	echo "<br>"; 
	
}
}
}



$conn->close();

?>
