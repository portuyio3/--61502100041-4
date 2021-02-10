<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "MymovieDB";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("Connection failed: ".$conn->connect_error);
}

$sql = "CREATE TABLE MovieG (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	moviename VARCHAR(30) NOT NULL,
	showtime_date DATETIME,
	username VARCHAR(30) NOT NULL,
	pin VARCHAR(30)
	)";

if($conn->query($sql)===TRUE){
	echo "Table MovieG created successfully";
}else{
	echo "Error creating table : ". $conn->error;
}

$conn->close();
?>