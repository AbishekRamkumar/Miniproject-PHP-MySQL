<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$first_name = $_POST['player_name'];
$score = $_POST['total_wickets'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO tbl_wickets (player_name, total_wickets)
VALUES ('" . $first_name . "', '" . $score . "')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New player registered</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
