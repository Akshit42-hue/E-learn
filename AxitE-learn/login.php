<?php
session_start();
unset($_SESSION["session"]);

include 'Stud_connect.php';

if(isset($_POST['login']))
{
    $email=$_POST['Email'];
    $password=$_POST['password'];
    
    $query="select * from student_info where Email='".$email."' and password='".$password."'";
    $result= mysqli_query($con,$query);
    
    if(mysqli_num_rows($result) > 0)
    {
        $x= mysqli_fetch_array($result);
        $_SESSION['Email'] = $email;
        
        //echo 'LogIn Successful.';
        header('location:home.php');
    }
    else
    {
        echo 'Invalid Username or Password';
    }
}

else
{
    echo 'First Login';
}

?>