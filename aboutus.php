
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_01.css">
    <link rel="stylesheet" href="css_02a.css">
<link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
  <style> .logo-name{
      font-family: 'Josefin Sans', sans-serif;
      margin-left:1.5em;
    }</style> 
<style>

</style>
    <title>About Us</title>
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
 <div class="container-ab-us-vis">
 <p class="title-ab-us"><img class="prayer"src="prayer.png" alt="">Our Vision:</p>
 <ul class="content-ab-us"><li> Empowered Students, Empowered Nation.</li></ul>
 
  </div>

  <div class="container-ab-us-about">
  <p class="title-ab-us"><img class="prayer" src="prayer.png" alt="">About Us:</p>
 <ul class="content-ab-us"><li> Enable needy and deserving students to pursue the education of their choice and help them realize their potential.</li> 
 <li>
Inculcate values such as self sufficiency and sensitivity towards society in students to help them become responsible citizens.

 </li> <li>

     Encourage active participation from all sections of society to contribute to a better world
 </li></ul>
  </div>
  </main>
<style>
    .prayer{
        width:2em;
    }
    .title-ab-us{
        font-size:2em;
        font-weight:bold;
        font-family: 'Enriqueta', serif;
    }
    .container-ab-us-vis,.container-ab-us-about{   
 margin:2em;
font-size: 1.2em;
padding: 1em;
background-color: rgb(250, 243, 221);}

.content-ab-us{
        font-family: 'Enriqueta', serif;
    margin-left:5rem;  font-size:1.2em; 
}
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


</body>
</html>