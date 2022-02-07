<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
// sql query to select a record
$sql = "SELECT * from employee";

//Display the results in a table structure
echo "<h2>EMPLOYEE DETAILS</h2>";
echo'<table border="1" cellspacing="2" cellpadding="2">
<tr>
<th>EMP_ID</th>
<th>NAME</th>
<th>COMPANY</th>
<th>SALARY</th>
<th colspan=2>CONTROLS</th>
</tr>';

$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) { //fetches all the tuple's data
$id=$row["emp_id"];
$name=$row["emp_name"];
$comp=$row["emp_company"];
$sal=$row["emp_salary"];

echo'<tr>
<td>'.$id.'</td>
<td>'.$name.'</td>
<td>'.$comp.'</td>
<td>'.$sal.'</td>
<td> <a href=Update_Employee.php?id='.$id.'>UPDATE</a></td>
<td> <a href=Delete.php?id='.$id.'>DELETE</a></td>
</tr>';
}
}
else {
echo "Error selecting the Records , No results found";
}
$conn->close();
?>