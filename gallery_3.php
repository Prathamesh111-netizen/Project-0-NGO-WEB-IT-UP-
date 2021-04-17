<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css_01.css">
    <link rel="stylesheet" href="css_02a.css">
    <link rel="stylesheet" href="gallery.css">
<link href="https://fonts.googleapis.com/css2?family=Enriqueta&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
<style> 
body{
    font-family: 'RocknRoll One', sans-serif;

}
.logo-name{
      font-family: 'Josefin Sans', sans-serif;
      margin-left:1.5em;
    }
    
.instagram:hover{
  border-radius: 1.0em;
  width:3em;
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
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
<style>

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

  <p class="hover-inst">Hover to see our real colours</p>

<div class="photo-gal-container">

   
<div class="photo-gal-items"><img class="photo-gal-itemsy" src="factory.png" alt=""> </div>
    <div class="photo-gal-items"><img class="photo-gal-itemsx" src="industrial-visits-1.png" alt=""> <p>Motorcycle Industry</p></div>
    <div class="photo-gal-items"><img class="photo-gal-itemsx" src="industrial-visits-2.jpg" alt=""> <p>Chemical Factory</p></div>
    <div class="photo-gal-items"><img class="photo-gal-itemsx" src="industrial-visits-3.jpg" alt=""> <p>Industrial visit at WIPRO</p></div>
    <div class="photo-gal-items"><img class="photo-gal-itemsx" src="industrial-visits-4.jpg" alt=""> <p>Steel Factory</p></div>
    <div class="photo-gal-items"><img class="photo-gal-itemsx" src="industrial-visits-5.jpg" alt=""> <p>Chemical Labs</p></div>


</div>
</body>
</html>