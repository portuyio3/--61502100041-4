<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "MymovieDB";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}

var_dump($_POST);
$sql = "INSERT INTO MovieG (moviename, showtime_date)
	VALUES ('".$_POST['moviename']."','".$_POST['showtime_date']."')";

if ($conn->query($sql)===TRUE) {
	echo"New record created successfully";
} else {
	echo"Error: ". $sql . "<br>" . $conn->error;
}

$conn->close();
?>
