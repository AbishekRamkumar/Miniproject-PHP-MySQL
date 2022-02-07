<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql query to delete a record
$sql = "DELETE FROM tbl_users 
WHERE username='kishore@gmail.com'";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Record deleted successfully</h1>";
} else {
    echo "<h1>Record not found</h1>" . $conn->error;
}
$conn->close();
?>