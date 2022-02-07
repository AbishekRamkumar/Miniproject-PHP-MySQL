<?php
$id = $_GET['id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_miniproject";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql query to select a record
$sql = "SELECT * from employee where emp_id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) { //fetches all the tuple's data
        $emp_id = $row["emp_id"];
        $emp_name = $row["emp_name"];
        $emp_comp = $row["emp_company"];
        $emp_sal = $row["emp_salary"];
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <link rel="stylesheet" type="text/css" href="./Update_Employee.css">
</head>

<body>
    <form method="post" action="Update.php">
        <div class="container">
            <h1>Update Employee Details</h1>
            <p>Update your employee details here.</p>

            <hr>

            <label for="Employee ID"><b>Employee ID</b></label>
            <input type="text" 
            placeholder="Enter Your Employee ID Here" 
            name="emp_id" 
            id="emp_id"
            value="<?php echo $emp_id; ?>"
            readonly>

            <label for="Employee Name"><b>Employee Name</b></label>
            <input type="text" 
            placeholder="Enter Your Name Here" 
            name="emp_name" 
            id="emp_name"
            value="<?php echo $emp_name; ?>">

            <label for="Employee's Company"><b>Name of the Company</b></label>
            <input type="text" 
            placeholder="Enter Your Company's Name Here" 
            name="emp_company" 
            id="emp_company"
            value="<?php echo $emp_comp; ?>">

            <label for="Employee Salary"><b>Salary</b></label>
            <input type="number" 
            placeholder="Enter Your Salary Here" 
            name="emp_salary" 
            id="emp_salary"
            value="<?php echo $emp_sal; ?>">

            <hr>

            <button type="submit" class="registerbtn">Update Now</button>
        </div>
    </form>

</body>

</html>