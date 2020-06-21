<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>onlineshop.kz</title>
    <!--<link rel="stylesheet" type="text/css" href="CSS.css">-->
    <link rel="stylesheet" type="text/css" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
    <link rel="shortcut icon" href="shop.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Six+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link rel = "icon" href = "shop.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="CSS/header.css">
    <script type="text/javascript" src="functions.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body style="background-color:white">
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"><a href ="main.php" style="text-decoration: none;color:white;">Home</a></p></button>
        <div class="dropdowns">
            <div id = "lists">
                <button class="droppp"><img class="img" src ="image/line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
            <div class="dropdown-contents">
                <a href = "drink.php" style="font-family: 'Bebas Neue', cursive"><img src = "https://img.pngio.com/arrows-mix-mixed-random-shuffle-icon-mixed-png-512_512.png" width="15px" height="15px">Mixed</a>
                <a href="b2.php" style="font-family: 'Bebas Neue', cursive"><img src ="image/cupi.png" alt ="cupi" width ="15px" height ="15px">Flour products</a>
                <a href="meal.php" style="font-family: 'Bebas Neue', cursive"><img src ="image/meal.png" alt ="meal" width ="15px" height ="15px">Meat</a>
                <a href="SeaFood.php" style="font-family: 'Bebas Neue', cursive"><img src ="image/fish.png" alt ="fish" width ="15px" height ="15px">SeaFood</a>
                <a href="Fruits.php" style="font-family: 'Bebas Neue', cursive"><img src ="image/fruit.png" alt ="fruit" width ="15px" height ="15px">Fruits</a>
                <a href="Vegetables.php" style="font-family: 'Bebas Neue', cursive"><img src ="image/vegan.png" alt ="Vegetables" width ="15px" height ="15px">Vegetables</a>
                <a href="Drinks.php" style="font-family: 'Bebas Neue', cursive"><img src ="image/drink.png" alt ="drinks" width ="15px" height ="15px">Drinks</a>
            </div>
        </div>
        <div class="dropdowns">
            <div id = "lists">
                <button class="contacts" onclick="carsFunction()"><p class="contacttext"><img src="image/phone.png" width="25" height="25" class="contactimg"> Contacts</p></button></div>
            <div class="dropdown-contents">
                <a href="https://mail.google.com/mail/u/0/#inbox" style="font-family: 'Bebas Neue', cursive"><p>Email:onlineshop@mail.ru</p></a>
                <a href="https://web.whatsapp.com/" style="font-family: 'Bebas Neue', cursive"><p>Phone number:+7(777)-777-77-77</p></a>
            </div>
        </div>
        <form method="post" action="check.php">
            <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
            <button  type = "submit" class="sub" name = "submit" >&#128270;</button>
        </form>
        <div><a href="basket.php" title="Cart"><img src="image/basket.png" class="basimg"></a></div>
    </div>
</header>
<hr style="color: black;">
</html>
