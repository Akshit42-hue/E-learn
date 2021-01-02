<?php
 session_start();
 unset($_SESSION["session"]);
       // require_once './connection.php';
        if (isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == 1) {
            if($_SESSION['as']=="Admin"){
                header('Location: ./adminpanel.php');
            } else {
                header('');
            }
        }//mamnu3 y3mal log in huwe w already login
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Final Project</title>
        <style type="text/css">
            div.toppanel{

                width: 100%;
                color:white;
                font-weight:bold;
                background-color:darkblue;
                height:80px;
              
                margin-top:0px;


            }



            div.background{

                background-position:center;
                width: 100%;
                height: 700px;
                background-color:lavender;
                margin-top:0px;

            }


            div.img{
                float:left;
            }
            .hn{
                color:midnightblue;

            }
            .hn1{
                color:midnightblue;
                font-size:45px;

            }
            .content{
                margin-right:200px ;
                float:right;
            }
            .img{
                float: left;  
            }
            .I3 {
                width:400px;
                height:25px; 
                border-radius:3px;

            }
            div.toppanel:hover{
                color:lightblue;
            }
            .I3:hover{
                background-color:lightblue;
            }
            .I1:hover{
                background-color:lightblue;
            }

            .b1{
                border-color:activeborder;



            }
            .b2{
                border-color:activeborder;
                background-color:activecaption;
                height: 30px;
                border-radius:3px;
                width:250px;
                border-color: lightgray;

            }
            .p1{
                  font-size:35px;
            }
           
           
        </style>
    </head>
    <body>
              

        <div class="background"> 

            <div class="toppanel">


                <div style="width: 30%; float: left; height: 90%; text-align: center; margin-top: 0px; ">
                    <p class="p1">E-learning</p>
                </div>

                <div style="width: 70%; float: left; margin-left: 0; text-align: center; margin-top: 25px;">

                    <form method="post" action="login.php">
                        <input class="I1" type="text" id="email"  name="Email" placeholder="email"  required 
                               />

                        <input class="I1" type="password" id="password"  name="password"  placeholder="password"  required
                               />
                        
                  
                        &emsp; &emsp;&emsp; &emsp;
                        <input class="b1" type="submit" id="login"  name="login" value="login" 
                               /> 
                       
                       </form>  
                </div>






            </div>




            <br>

            <div class="img">  
                <h3 class="hn">E-learning helps students and instructors communicate among each other   </h3>

                &emsp; &emsp;
            </div>

            <div class="content">


                <h1 class="hn1">Create an account</h1>
                <h3 class="hn">It's free and always will be.</h3>
                <br>
                <form method="post" action="./insert.php" >
                    <table class="table1">                     
                        <tr>
                        <input class="I3" type="text" id="name1"  name="name" placeholder="name"  required value = "">                  
                        </tr>
                        <br>
                        <br>

                        <tr>
                        <input class="I3" type="text" id="Email"  name="Email"  placeholder="Email" value = "">
                               </tr>  
                        <br>
                        <br>
  
                        <tr>
                        <input class="I3" type="password" id="password"  name="password"  placeholder="password" value="">          
                    </table>
                    <br>



                   


                    <br>
                    <br>
                    <br>
                    &emsp; &emsp; &emsp; &emsp;
                    <input class="b2" type="submit" id="signUp"  name="SignUp" value="SignUp" "/>


                </form> 



            </div> 
            </div>  
        <footer>
             <div>
            <center>
                <br><br><br><br>

                <a>Made by Akshit Patel</a>
                <a >Connect with me </a>
                <a href="https://github.com/Akshit42-hue" target="_blank"><img src="github-logo.png"</a>
                 <a href="https://www.linkedin.com/in/akshit-patel-7a33a11a4/" target="_blank"><img src="linkedin.png"</a>
            </center>      
            </div>
        </footer>

        <?php
       
      
       
        

        

       
       /*if(isset($_POST['SignUp'])){
           require_once './connection.php';
            if (isset($_POST['name1']) && isset($_POST['email1'])&& isset($_POST['passwod1'])) {
             if($_POST['name1'] && $_POST['password1'] && $_POST['email1'] ){
             $name = $_POST['name1'];
               $password = $_POST['password1'];
                $email = $_POST['email1'];
            }
            
            if(isset($_POST['LogInAs']))  
            {
                $query1 = "SELECT * FROM USERS WHERE EMAIL = '$email'";
                $res1 = mysqli_query($link, $query1);
                $row = mysqli_fetch_assoc($res);
                if (!$res) {
                    die("An error occured..");
                } elseif (mysqli_num_rows($res) == 1) {
                    alert("The email is already registered");
                }
                else {
                if ($_POST['LogInAs'] == "student"){
                $query = "INSERT INTO users(name, password, isInstructor,email)
                VALUES ('$name','$password',0,'$email')";}
           
                if ($_POST['LogInAs'] == "admin"){
                $query = "INSERT INTO users(name, password, isInstructor,email)
                VALUES ('$name','$password',1,'$email')";}
                
                $res = mysqli_query($link, $query);
                
                }

            }
           
        }
        }
      close connection
      mysqli_close($link);*/
         ?>
  
    </body>
    
    
            
</html>