
<?php
require_once "01_config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

$server= "localhost";
$username= "root" ;
$password= "" ;

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
    
    $sql = "SELECT id FROM users_details WHERE username = ?";       //1
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
                die("Username Already taken");
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
 }
 else{
     echo "ERROR.$sql.<br> $connection->error";
 }

 $connection->close();

?>