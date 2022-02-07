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
    <form action="Backend/Create.php" method="post" name="myform" onsubmit="return allLetter()">
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
            <input type="email" 
            placeholder="Enter Your Email Here" 
            name="username" id="mail" class="mail"
            required>

            <label for="psw"><b>Password</b></label>
            <input type="password" 
            placeholder="Enter Your Password Here" 
            name="password" id="pass" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
            title="Must contain at least one number and one uppercase and lowercase letter, 
                   and at least 8 or more characters"
            required>

            <hr>
            <button type="submit" class="registerbtn">Register</button>
        </div>
        <div class="container signin">
            <p>Already have an account? <a href="./Login.php"  >Login</a>.</p>
        </div>
    </form>

<!--Input Validation for name-->

    <script>
      function allLetter(inputtxt)
      { 
      var letters = /^[A-Za-z]+$/; //Only letters are allowed
      if(document.getElementById('name').value.match(letters)) //Matching condition
      { 
        alert('Your name have accepted');
        document.getElementById('myform').submit(); //If satisfied,Submit form
        return true;
      }
      else
      {
        alert('Please input alphabets only');
        return false;
      }
      }
        </script>

</body>

</html>