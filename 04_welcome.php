<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: 03_login.php");
}
?>
<?php
  
  // Username is root
  $username = 'id16626688_login';
  $password = 'Pratham@1109'; 
    
  // Database name is gfg
  $database = 'id16626688_databaseall'; 
    
  // Server is localhost with
  // port number 3308
  $servername='localhost';
  $mysqli = new mysqli($servername, $username, 
                  $password, $database);
    
  // Checking for connections
  if ($mysqli->connect_error) {
      die('Connect Error (' . 
      $mysqli->connect_errno . ') '. 
      $mysqli->connect_error);
  }
    
  // SQL query to select data from database
  $sql = "SELECT * FROM announcement ORDER BY sno DESC ";
  $result = $mysqli->query($sql);
  $mysqli->close(); 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_01.css">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css-welcome.css">
    <title>Document</title>
    <style>
         body{font-family: 'RocknRoll One', sans-serif;} 
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
    </style>
</head>
<body>
<header>
<div class="navbar">
            <img  src="building.png" alt="">
            <span class="logo-name">NGO </span>

            <span class="social-media">
              <img src="facebook.png" class="facebook" alt="">
              <img src="instagram.png" class="instagram" alt="">
              <img src="linkedin.png" class="linkedin" alt="">
              <img src="youtube-logotype.png" class="youtube" alt="">
            </span>
    </div>
    <div class="menu-items">
        <div class="item-access"><a href="index.php" > Home</a></div>
        <div class="item-access"><a href="aboutus.php" >About Us</a></div>
        
        <div class="dropdown">
          <button class="dropbtn">Photo Gallery
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="gallery_1.php">Student Fun Sessions</a>
            <a href="gallery_2.php">Nagpur Shibir</a>
            <a href="gallery_3.php">Industrial Visit</a>
          </div>
        </div>
        
        <div class="dropdown">
          <button class="dropbtn">Activities
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="monthlyreport.php">Monthly Report</a>
              <a href="befrankreport.php">Be Frank Report</a>
              <!-- <a href="#">Current Student Details</a> -->
              <a href="aluminidetails.php">Alumini Details</a>
              <!-- <a href="#">Annual Day</a> -->
              <a href="allbranches.php">All Branches</a>
            </div>
          </div>

        <div class="item-access"><a href="#" target="_blank">Donate Us</a></div>
        <div class="dropdown">
          <button class="dropbtn"> Help
            <i class="fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            
            <a href="signup_process_eng.php">SignUp Process (English)</a>
            <a href="signup_process_mar.php">SignUp Process (मराठी)</a>
            <a href="signup_process_hin.php">SignUp Process (हिन्दी )</a>
            <a href="faq.php">FAQ</a>
          </div>
        </div>
        <div class="item-access"><a href="guidelines.php" >Guidelines</a></div>
    <div class="log-out"><a href="05_logout.php">log out </a></div>
</header>
<br>
<div class="containermt">
        <?php echo "Welcome ". $_SESSION['username']?>! You can now use this website
</div>

<section>
            <h1>Special Announcements</h1>
            <!-- TABLE CONSTRUCTION-->
            <table>
                <tr>
                    <th>Index no.</th>
                    <th>Announcement</th>
                    <th>Created At</th>
                   
                </tr>
                <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                <?php // LOOP TILL END OF DATA
                    while($rows=$result->fetch_assoc())
                    {
                ?>
                <tr>
                    <!--FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN-->
                    <td><?php echo $rows['sno'];?></td>
                    <td><?php echo $rows['announcement'];?></td>
                    <td><?php echo $rows['created'];?></td>
                </tr>
                <?php
                    }
                ?>
            </table>
        </section>


</div>

<style>
            table {
                margin: 0 auto;
                font-size: large;
                border: 1px solid black;
            }
    
            h1 {
                text-align: center;
                color: rgb(55,45,255);
                font-size: xx-large;
                font-family: 'Gill Sans', 'Gill Sans MT',
                ' Calibri', 'Trebuchet MS', 'sans-serif';
                margin:2em;
            }
    
            td {
                background-color: #E4F5D4;
                border: 1px solid black;
            }
    
            th,
            td {
                font-weight: bold;
                border: 1px solid black;
                padding: 10px;
                text-align: center;
            }
    
            td {
                font-weight: lighter;
            }
            section{
                margin:3em;
            }
            </style>

</body>
</html>