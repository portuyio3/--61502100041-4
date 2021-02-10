<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$conn = new mysqli ($servername, $username, $password);

if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}
echo "connnected successfully";

$sql = "CREATE DATABASE MymovieDB";
if($conn->query($sql)===TRUE)   {
    echo "Database created succesfully";
}else{
    echo "Error creating database: ".$conn->error;
}

$conn->close();

?>