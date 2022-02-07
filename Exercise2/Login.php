<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="./login.css">
</head>

<body>
    <form method="post" action="Backend/Authentication.php" name="myform">
        <div class="container">
            <h1>Log In</h1>
            <p>Login using your credentials.</p>

            <hr>
            
            <label for="email"><b>Email</b></label>
            <input type="text" 
            placeholder="Enter Email" 
            name="username" id="username" 
            required>

            <label for="psw"><b>Password</b></label>
            <input type="password" 
            placeholder="Enter Password" 
            name="password" id="password" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one  number and one uppercase and lowercase letter, 
                and at least 8 or more characters">
            <hr>

            <button type="submit" class="registerbtn" > Sign In</button>
        </div>
    </form>
</body>
</html>