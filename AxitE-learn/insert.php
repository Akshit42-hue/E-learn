<?php

include 'Stud_connect.php';

if(isset($_POST['index']))
{
    $name=$_POST['name'];
    $email=$_POST['Email'];
    $password=$_POST['password'];
    
    //echo $email,$name,$contact,$desig,$dept,$gender,$pwd;
    
//    if((!empty($name)) && (!empty($email)) && (!empty($contact)) && (!empty($designation)) && (isset($dept)) && (isset($gender)) && (!empty($pwd)))
    if((!empty($_POST['name'])) && (!empty($_POST['Email']))  && (!empty($_POST['password'])))
    {
        if(!preg_match("/^[a-zA-Z]+$/",$name))         
        {
            echo 'Insert Name in Proper Format.';
        }
        else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
        {
            echo 'Email Is not in Proper format.';
        }
        else if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password))
        {
            echo 'password is invalid. ';
        }
        
        else 
        {
            $query="insert into student_info values('".$name."','".$email."','".$password."')";
            $result=mysqli_query($con,$query);
        
            if($result)
            {
                 echo '<br>Registered Successfully<br>Use Your Email as Username while logging in.';
                 echo '<br><a href="">Login</a>';
            }
            else
            {
                echo '<br> Enter valid emailNot Inserted.';
            } 
        }  
    }
    else 
    {
        echo '<br>All Fields Are mandatory.';
    }
}
else
{
    echo 'First Fill The Form.';
}
?>