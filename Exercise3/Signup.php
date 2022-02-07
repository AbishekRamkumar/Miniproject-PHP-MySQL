<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="./signup.css">
</head>

<body>
    <form action="./Insert_Query.php" method="post" name="myform">
        <div class="container">
            <h1>Register</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Full Name</b></label>
            <input type="text" 
            placeholder="Enter Your Name Here" 
            name="name" id="name" 
            required>
            
            <label for="email"><b>Email</b></label>
            <input type="text" 
            placeholder="Enter Your Email Here" 
            name="username" id="mail" 
            required>

            <label for="psw"><b>Password</b></label>
            <input type="password" 
            placeholder="Enter Your Password Here" 
            name="password" id="pass" 
            required>

            <hr>
            <button type="submit" class="registerbtn" >Register</button>

    </form>

</body>

</html>