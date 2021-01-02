<?php

$con= mysqli_connect('localhost','root','','student');

if($con)
{
    //echo 'Connected Successfully';
}
 else    
 {
    mysqli_connect_error();
 }
 ?>