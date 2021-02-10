<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบโรงหนัง</title> 
</head>
<body>

<?php
    require_once("connect_db.php");
    session_start();
    if(isset($_POST['login'])) {
        $sql = "SELECT * FROM MovieG = '{$_POST['username']}' AND pin = '{$_POST['pin']}'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $_SESSION["username"] = $row['username'];
        } else {
            echo "<p>รหัสผิด</p>";
        }
    }

    if(isset($_POST['logout'])) {
        session_unset();
    } //log-out

    if(isset($_SESSION['username'])) {
        require_once("table1.php");
    } else {
        require_once("login.php");
    }
?>

</body>
</html>