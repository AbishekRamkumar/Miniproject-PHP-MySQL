<?php      
     
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "db_pmc";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }   
    
    $username = $_POST['Email'];  
    $password = $_POST['Password'];  
      
        $sql = "select * from tbl_users where Email = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header('location:success.php');  
        }  
        else{  
            header('location:failed.php');  
        }
