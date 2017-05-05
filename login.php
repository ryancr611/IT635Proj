<?php
require('DatabaseLogin.php');
$table_user = "";
$table_pass = "";
$username = ($_POST['username']);
$password = ($_POST['password']);
$hash = hash('sha256',$password);



$sql = "Select Username, Password From Admin";

if ($conn->query($sql) == TRUE) {
	$result = $conn->query($sql);
	if ($result->num_rows > 0){
	while($row = $result->fetch_assoc()) 
	{
		$table_user = $row['Username'];

		$table_pass = $row['Password'];
	}
	
	if(($username == $table_user) && ($hash == $table_pass))
	{
	header("location: home.html");
	}
	else
	{
	echo "Invalid Login Try Again";
	}
}
}
?>
