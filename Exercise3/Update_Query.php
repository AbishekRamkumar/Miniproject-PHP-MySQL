<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE tbl_users SET password='KishoreKumar20' 
WHERE username='kishore@gmail.com'"; // update query

if ($conn->query($sql) === TRUE) {
    echo "<h1>Record updated successfully</h1>";
} else {
    echo "<h1> Error on updating the record: </h1>" . $conn->error;
}
$conn->close();
