<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username,password FROM tbl_users";

echo '<table border="1" cellspacing="2" cellpadding="2">
<tr>
<th>EMAIL</th>
<th>PASSWORD</th>
</tr>';

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { //fetches all the tuple's data
        $user_email = $row["username"];
        $user_password = $row["password"];
        echo '<tr>
<td>' . $user_email . '</td>
<td>' . $user_password . '</td>
</tr>';
    }
} else {
    echo "Error selecting the Records , No results found";
}
$conn->close();
