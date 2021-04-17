<?php
    
// Username is root
$username = 'id16626688_login';
$password = 'Pratham@1109';

// Database name is gfg
$database = 'id16626688_databaseall';

// Server is localhost with localhost:3306
// port number 3308
$servername='localhost';
$mysqli = new mysqli($servername, $username, $password, $database);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM userdata ORDER BY sno ASC ";
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
    <link rel="stylesheet" href="css_02a.css">
<link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
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
    margin: 1.5em;
    font-family: 'Josefin Sans', sans-serif;
      margin-left:1.5em;
}
.menu-items{
    display: flex;
    background-color: #40689c;
    font-family: 'RocknRoll One', sans-serif;
    color: cornsilk;
    height: 3em;
    align-items: center;
    justify-content: left;
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
    <title>Photo Gallery</title>
</head>
<body>
<header>
    <div class="navbar">
            <img  src="charity.png" alt="">
            <span class="logo-name">NGO : We are here for you </span>

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

  <main>
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
                margin:2em;
            }
        </style>
    </head>
    
    <body>
        <section>
            <h1>Alumini Details</h1>
            <!-- TABLE CONSTRUCTION-->
            <table>
                <tr>
                    <th>Index no.</th>
                    <th>Student Name</th>
                    <th>Graduation Year</th>
                    <th>Course</th>
                    <th>College Name</th>
                    <th>Specialisation</th>
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
                    <td><?php echo $rows['StudentName'];?></td>
                    <td><?php echo $rows['GraduationYear'];?></td>
                    <td><?php echo $rows['Course'];?></td>
                    <td><?php echo $rows['CollegeName'];?></td>
                    <td><?php echo $rows['Specialisation'];?></td>

                </tr>
                <?php
                    }
                ?>
            </table>
        </section>
    
    
  </main>

</body>
</html>