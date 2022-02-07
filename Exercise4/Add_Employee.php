<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee | Add</title>
    <link rel="stylesheet" type="text/css" href="Add_Employee.css">
</head>

<body>
    <form action="./Create.php" method="POST">
        <div class="container">
            <h1>Add Employee</h1>
            <p>Please fill in this form to create an employee account.</p>
            <hr>


            <label for="Employee ID"><b>Employee ID</b></label>
            <input type="text" 
            placeholder="Enter Your Employee ID Here" 
            name="emp_id" id="emp_id" >

            <label for="Employee Name"><b>Employee Name</b></label>
            <input type="text" 
            placeholder="Enter Your Name Here" 
            name="emp_name" id="emp_name" >
            
            <label for="Employee's Company"><b>Name of the Company</b></label>
            <input type="text" 
            placeholder="Enter Your Company's Name Here" 
            name="emp_company" id="emp_company" >

            <label for="Employee Salary"><b>Salary</b></label>
            <input type="number" 
            placeholder="Enter Your Salary Here" 
            name="emp_salary" id="emp_salary" >

            <hr>
            <button type="submit" class="registerbtn" >Register</button>
        </div>

    </form>

</body>

</html>