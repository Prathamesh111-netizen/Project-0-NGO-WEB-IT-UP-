<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: 04_welcome.php");
    exit;
}
require_once "01_config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users_details WHERE username = ?";       //3
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: 04_welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_01.css">
    <link rel="stylesheet" href="css_02a.css">
    <style>
#username{grid-area:username; height:2em;}
#password { grid-area:password;  height:2em;}
#login{grid-area:login ; width:5em; margin-left:6em; height:2em}
.form-login-singup{
    grid-template-areas:
    ". username . "
    ". password .  "
    ". login . "
}
.reg-con-par{
    font-weight:bold;
    margin-top:3em;
    margin-left:2em;
    color:rgb(255,0,0);
}
    </style>
    <title>Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

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
        
       
    </div>
  </header>
  <p class="reg-con-par">Your Registration Completed, You can now log in to your account</p>
        <form class="form-login-singup" action="" method="post">
        <input class="login-typo-det" type="text" name="username" id="username" placeholder="Enter Username"> <br>
        <input class="login-typo-det" type="text" name="password" id="password" placeholder="Enter Password"><br>
        <!-- // <input type="text" name="confirm_password" id="confirm_password" placeholder="Confirm Password"><br> -->
        <button  class="login-typo-det" id="login" type="login">login</button>
        
        </form>
</body>
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
body{
    font-family: 'RocknRoll One', sans-serif;
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

#login{
    display:flex;
    background-color:black;
    color:wheat;
 justify-content:space-evenly;
    align-items:center;
}
</style>
</html>
