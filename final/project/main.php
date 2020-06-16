<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
	<title>onlineshop.kz</title>
	<!--<link rel="stylesheet" type="text/css" href="CSS.css">-->
	<link rel="stylesheet" type="text/css" href="CSS/main.css">
	  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
     <link rel="shortcut icon" href="shop.png" type="png">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Six+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link rel = "icon" href = "shop.png" type = "image/x-icon">
         <link rel="stylesheet" type="text/css" href="CSS/header.css">
      <script type="text/javascript" src="functions.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"
            integrity="sha256-1A78rJEdiWTzco6qdn3igTBv9VupN3Q1ozZNTR4WE/Y=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
           $("#check").click(function () {
               event.preventDefault();
               if($("#check").val()==="ru"){
                   window.location.href = "result.php";
                   $.cookie("language","ru",{expires: 60});
               }
               else{
                   window.location.href = "main.php";
                   $.cookie("language","en",{expires:60});
               }
           })
        })
    </script>
</head>
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"> Home</p></button>
  <div class="dropdowns">
    <div id = "lists">
        <button class="droppp"
        ><img class="img" src ="image/line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
         <div class="dropdown-contents">
             <a href="drink.php"><img src = "https://img.pngio.com/arrows-mix-mixed-random-shuffle-icon-mixed-png-512_512.png" width="15px" height="15px">Mixed</a>
      <a href="b2.php"><img src ="image/cupi.png" alt ="cupi" width ="15px" height ="15px">Flour products</a>
      <a href="meal.php"><img src ="image/meal.png" alt ="meal" width ="15px" height ="15px">Meat</a>
      <a href="SeaFood.php"><img src ="image/fish.png" alt ="fish" width ="15px" height ="15px">SeaFood</a>
      <a href="Fruits.php"><img src ="image/fruit.png" alt ="fruit" width ="15px" height ="15px">Fruits</a>
      <a href="Vegetables.php"><img src ="image/vegan.png" alt ="Vegetables" width ="15px" height ="15px">Vegetables</a>
      <a href="Drinks.php"><img src ="image/drink.png" alt ="drinks" width ="15px" height ="15px">Drinks</a>
    </div>
</div>
  <div class="dropdowns">
    <div id = "lists">
        <button class="contacts" onclick="carsFunction()"><p class="contacttext"><img src="image/phone.png" width="25" height="25" class="contactimg"> Contacts</p></button></div>
           <div class="dropdown-contents">
       <a href="#"><p>Email:onlineshop@mail.ru</p></a>
       <a href="#"><p>Phone number:+7(777)-777-77-77</p></a>
    </div>
</div>
        <button class="loginn"><a href="login.php" class="log_text" style="color: white;text-decoration: none">LogIn</a><p class="signnn">/</p><a href="registration.php" class="reg_text" style="color: white;text-decoration: none">Register</a></button>
        <form method="post" action="check.php">
            <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
            <input  type = "submit" class="sub" name = "submit" value ="&#128270;">
        </form>
        <div><a href="homepage.php" title="home page"><img src="image/homepage.png" class="homeimg"></a></div>
        <div><a href="basket.php" title="Basket"><img src="image/basket.png" class="basimg"></a></div>
    </div>

    </div>
 </header> 
<!--<hr style="color: black;">-->
</header>
<body>
<form action="result.php" method="post">
    <select name="lang">
        <option value="en"<?php if( $_COOKIE["language"] == "en" ) { echo " selected"; } ?>>En</option>
        <option value="ru"<?php if( $_COOKIE["language"] == "ru" ) { echo " selected"; } ?>>Ru</option>
    </select>
    <input type="submit" value="Select Language">
</form>

<div class="main">
  <div class="slideshow-container" style="margin-top:15px;
	text-align: center;
	vertical-align: middle;">

  <div class="my">
    <img src="image/shop1.png" alt ="1" width="800px" height="560px">
  </div>

  <div class="my">
    <img src="image/new.png" alt ="2" width="800px" height="560px">
  </div>

  <div class="my">
  	<img src="image/stay.png" alt ="3" width="800px" height="560px">
  </div>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  </div>
      <article>
<div class="gallery-image">
    <div class="img-box">
      <img src="https://images.pexels.com/photos/917302/pexels-photo-917302.jpeg?cs=srgb&dl=silver-fork-and-knife-on-round-plate-with-cupcake-917302.jpg&fm=jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p><a href ="b2.php">Bakery products</a></p>
          <p class="opacity-low">NEW catalog</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="https://images.pexels.com/photos/3772492/pexels-photo-3772492.jpeg?cs=srgb&dl=milk-and-honey-on-wooden-tray-3772492.jpg&fm=jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Natural Products</p>
          <p class="opacity-low">Eco system from villages 180 <small>tg</small></p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="https://picsum.photos/350/250/?image=431" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Columbia Coffee</p>
          <p class="opacity-low">New cost 1500 <small>tg per 1 kg</small></p>
        </div>
      </div>
    </div>
    <div class="img-box">
      <img src="image/fff.jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Sales to fruits and vegetables</p>
          <p class="opacity-low">50% of sale</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="https://images.pexels.com/photos/1417945/pexels-photo-1417945.jpeg?cs=srgb&dl=peppermint-tea-on-teacup-1417945.jpg&fm=jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Aromo tea from India</p>
          <p class="opacity-low">New Cost</p>
        </div>
      </div> 
    </div>
    <div class="img-box">
      <img src="https://images.pexels.com/photos/1022417/pexels-photo-1022417.jpeg?cs=srgb&dl=close-up-photo-of-hershey-s-bars-near-jars-1022417.jpg&fm=jpg" alt="" />
      <div class="transparent-box">
        <div class="caption">
          <p>Switzerland chocolate</p>
          <p class="opacity-low">Minimum cost 450<small>tg</small></p>
        </div>
      </div> 
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
  </div>
      </article>
</div>
  <script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("my");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
   for (i = 0; i < dots.length; i++) {
       dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 6000);
  }
  </script>
      </article>
<?php
include_once 'footer.php';
?>
  </body>
</html>