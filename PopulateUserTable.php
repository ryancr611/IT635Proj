
<?php

require('DatabaseLogin.php');

$sql = "INSERT INTO Admin(Username, Password)
VALUES ('Admin', 'password')";

if ($conn->query($sql) == TRUE) {
	echo "New record made";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

