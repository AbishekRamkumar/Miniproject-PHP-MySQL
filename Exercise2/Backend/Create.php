<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$user_name=$_POST['name'];
$user_email=$_POST['username'];
$user_password=$_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_users (name,username,password)
VALUES ('".$user_name."','".$user_email."','".$user_password."')";

if ($conn->query($sql) === TRUE) {
echo "<h1>New user registered</h1>";
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
