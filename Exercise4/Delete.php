<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$id = $_GET['id'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM employee 
WHERE emp_id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully ";
    } else {
    echo "Error on deleting the record: " . $conn->error;
    }
    header("Location:Read.php");
    $conn->close();

?>
