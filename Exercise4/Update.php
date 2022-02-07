<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$id = $_POST['emp_id'];
$name = $_POST['emp_name'];
$comp = $_POST['emp_company'];
$sal = $_POST['emp_salary'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// sql query to update a record
$sql = "UPDATE employee SET emp_name='$name', emp_company='$comp', emp_salary=$sal 
WHERE emp_id=$id"; 

if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error on updating the record: " . $conn->error;
}
$conn->close();
header("Location:Read.php");
?>
