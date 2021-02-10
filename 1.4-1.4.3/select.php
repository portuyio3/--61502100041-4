<?php
$servername = "localhost";
$username = "webadmin";
$password = "1234";
$dbname = "MymovieDB";

$conn = new mysqli ($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: ".$conn->connect_error);
}

$sql = "SELECT id, moviename, showtime_date FROM ";
$result = $conn->query($sql);

if($result->num_rows>0) {
	while($row = $result->fetch_assoc()){
		echo "id: ".$row["id"], "- Name: " . $row["moviename"]. " " . $row["showtime_date"]. "<br>";
	}
} else {
	echo "0_results";
}
$conn->close();
?>