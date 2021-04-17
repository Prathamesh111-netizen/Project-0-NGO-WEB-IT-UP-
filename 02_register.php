<?php
require_once "01_config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
$server= "localhost";
$username= "id16626688_login" ;
$password= "Pratham@1109" ;

$connection= mysqli_connect($server,$username,$password);           

if(!$connection)
{
    die("connection to this database failed due to". mysqli_connect_error());
}
else
{
    // echo "Succesfully connected to the database";
}

if(trim($_POST["Secret_code"]) != "Rajesh"){
    $username_err = "Wrong_registration_code";
    echo "Wrong_registration_code ";
}
if(empty(trim($_POST["username"]))){
    $username_err = "Username cannot be blank";
}
else{
    
    $sql = "SELECT id FROM users_details WHERE username = ?";   
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "s", $param_username);

        // Set the value of param username
        $param_username = trim($_POST['username']);

        // Try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1)
            {
                $username_err = "This username is already taken"; 
                echo '<script>alert("This username is already taken")</script>';
                header("Refresh:0");
            
            }
            else{
                $username = trim($_POST['username']);
            }
        }
        else{
            echo "Something went wrong";
        }
    }
}

mysqli_stmt_close($stmt);
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}

if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{$student_name=$_POST['student_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$college=$_POST['college'];
$username=$_POST['username'];
$password=$_POST['password'];
$password=password_hash($password, PASSWORD_DEFAULT);

$sql=  "INSERT INTO `login`.`users_details` ( `name`, `email`, `mobile`,`college`,`username`,`password`) VALUES ('$student_name', '$email', '$mobile','$college','$username','$password' )";}

// echo $sql;
 if($connection->query($sql)==true)
 {
     echo "Succesfully Inserted";
     header("location: 03_login_aftr_reg.php");
 }
 else{
     echo "ERROR.$sql.<br> $connection->error";
 }
 $connection->close();}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css_01.css">
    <link rel="stylesheet" href="css_02a.css">
    <style>
        #login-page-toggle1{
            margin-left:70%;
        }
        .sign-up-form a{ color:black;}
    </style>
    <title>Registration Page</title>
</head>
<body>
<header>
    <div class="navbar">
            <img  src="charity.png" alt="">
            <span class="logo-name">NGO </span>

            <span class="social-media">
              <img src="facebook.png" class="facebook" alt="">
              <img src="instagram.png" class="instagram" alt="">
              <img src="linkedin.png" class="linkedin" alt="">
              <img src="youtube-logotype.png" class="youtube" alt="">
            </span>
    </div>
    <div class="menu-items">
        <div class="item-access"><a href="index.php" > Return to Home</a></div>
        <div id="login-page-toggle1"><a href="03_login_normal.php">Already Registered? Login here</a></div>
    </div>
  </header>


<div class="form-register">
        <form action="" method="post">
        <div id="form-heading"><h2>Enter General Details</h2></div>
        <input class="sign-up-form" type="text" name="student_name" id="student_name" placeholder="Student name*"> <br>
        
        <input class="sign-up-form" type="email" name="email" id="email" placeholder="Email ID"><br>
        
       <input class="sign-up-form" type="tel" name="mobile" id="mobile" placeholder="Enter Phone Munber"><br>
       
       <input class="sign-up-form" type="text" name="username" id="username" placeholder="Create Username*"> <br>
             
       <input class="sign-up-form" type="text" name="college" id="college" placeholder="College name and Address*"> <br>

       <input class="sign-up-form" type="password" name="password" id="password" placeholder="Create Password*"><br>
        
        <input class="sign-up-form" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password*"><br>

        <input  class="sign-up-form" type="text" name="Secret_code" id="Secret_code" placeholder="Referral Code*"><br>


        <button class="sign-up-form" id="sign-up-toggle" type="submit">Register</button>
        <div class="sign-up-form" id="login-page-toggle" ><a href="03_login_normal.php">Already Registered? Login here</a></div>

        </form>
 
</div>
<style>
      *{
    margin:0;
    padding:0;
    box-sizing: border-box;
}
 
html { 
  width: 100%; 
  min-height: 100%; 
} 

body { 
  /* width: inherit; 
  min-height: inherit;  */
  margin: 0; 
  padding: 0; 
} 
header{
  position:sticky;
  top:0;
  z-index: 100;
  
}
.navbar{
    display: flex;
    background-color: white;
    /* background-image: linear-gradient(rgb(255, 115, 0), yellow);  */
    font-family: 'Pacifico', cursive;
    align-items: center;
    width:100%;
    height:4.0em;
    padding-left: 2em;
}
.navbar img{
  width:3.5em;
}
.social-media{
  /* margin-left: 60em; */
  position: absolute;
  left:90%;
}
.social-media img {
width:1.5em;
}
.facebook:hover{
  background-color: rgb(108, 108, 255);
  width:3em;
}
.instagram:hover{
  border-radius: 1.0em;
  width:3em;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
}
.linkedin:hover{
  background-color: rgb(162, 162, 255);
  width:3em;
}
.youtube:hover{
  background-color: rgb(255, 47, 47);
  border-radius: 4.0em;
  width:3em;
}
.logo-name{
    font-size: 2.0em;
    /* margin: 1.5em; */
}
.menu-items{
    display: flex;
    background-color: #40689c;
    font-family: 'RocknRoll One', sans-serif;
    color: cornsilk;
    height: 3em;
    align-items: center;
    justify-content: space-evenly;
}

.menu-items a{
    text-decoration: none;
    color: azure;
    font-family: 'RocknRoll One', sans-serif;
}

/*  */
.menu-items a:hover{
  color: #ff9844;
}
form{
    font-family: 'RocknRoll One', sans-serif;
}
#sign-up-toggle{
    display:flex;
    background-color:black;
    color:wheat;
 justify-content:space-evenly;
    align-items:center;
}
</style>
</body>
</html>
