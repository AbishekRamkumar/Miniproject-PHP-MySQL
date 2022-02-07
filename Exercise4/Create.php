<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$emp_id = $_POST['emp_id'];
$emp_name = $_POST['emp_name'];
$emp_comp = $_POST['emp_company'];
$emp_sal = $_POST['emp_salary'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO employee (emp_id,emp_name,emp_company,emp_salary)
VALUES ('" . $emp_id . "','" . $emp_name . "','" . $emp_comp . "','" . $emp_sal . "')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New employee added </h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
