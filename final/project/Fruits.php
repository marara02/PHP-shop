<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>onlineshop.kz</title>
    <!--<link rel="stylesheet" type="text/css" href="CSS.css">-->
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
    <link rel="shortcut icon" href="/shop.png" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=ZCOOL+QingKe+HuangYou&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Six+Caps&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
    <link rel = "icon" href = "shop.png" type = "image/x-icon">
    <link rel="stylesheet" type="text/css" href="header.css">
    <script type="text/javascript" src="functions.js"></script>
    <style>
        .wrapper1 {
            text-align: center;
            margin-left:15%;
            margin-right: 15%;
            margin-top: 4%;
            padding: 0;
            display:grid;
            grid-template-columns: 300px 300px 300px;
            grid-gap: 17px;
            background-color: white;
            color: #444;
        }

        .box {
            display: flex;
            flex-direction:column;
            background-color: #239B56;
            color: #fff;
            border-radius: 5px;
            padding: 20px;
            font-size: 100%;
        }
        div.img{
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
        }
        #t{
            font-style: italic;
            font-family: Apple Chancery, cursive;
        }
    </style>
</head>
<body style="background-color:white">
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"><a href ="main.php">Home</a></p></button>
        <div class="dropdown">
            <div id = "list">
                <button class="dropbtn"><img class="img" src ="line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
            <div class="dropdown-content">
                <a href="b2.php"><img src ="cupi.png" alt ="cupi" width ="15px" height ="15px">Flour products</a>
                <a href="meal.php"><img src ="meal.png" alt ="meal" width ="15px" height ="15px">Meat</a>
                <a href="SeaFood.php"><img src ="fish.png" alt ="fish" width ="15px" height ="15px">SeaFood</a>
                <a href="Fruits.php"><img src ="fruit.png" alt ="fruit" width ="15px" height ="15px">Fruits</a>
                <a href="Vegetables.php"><img src ="vegan.png" alt ="Vegetables" width ="15px" height ="15px">Vegetables</a>
                <a href="Drinks.php"><img src ="drink.png" alt ="drinks" width ="15px" height ="15px">Drinks</a>
            </div>
        </div>
        <div class="dropdown">
            <div id = "list">
                <button class="contacts" onclick="carsFunction()"><p class="contacttext"><img src="phone.png" width="25" height="25" class="contactimg"> Contacts</p></button></div>
            <div class="dropdown-content">
                <a href="#"><p>Email:onlineshop@mail.ru</p></a>
                <a href="#"><p>Phone number:+7(777)-777-77-77</p></a>
            </div>
        </div>
        <button class="log"><a href="login.php" class="logtext">LogIn</a><p class="sign">/</p><a href="registration.php" class="regtext">Register</a></button>
        <form method="post">
            <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
            <button  type = "submit" class="sub" name = "submit" >&#128270;</button>
        </form>
        <div><a href="basket.html" title="Basket"><img src="basket.png" class="basimg"></a></div>
    </div>
</header>
<hr style="color: black;">
</header>
<body>
<a href ='main.php'><img src ="https://w7.pngwing.com/pngs/814/978/png-transparent-arrow-left-green-arrow-green-bordered-arrow-miscellaneous-angle-rectangle.png" alt ="Direction" width="50px" height="40px"></a>
<div class="wrapper1">
    <div class="box"><img src ="https://images-na.ssl-images-amazon.com/images/I/61fZ%2BYAYGaL._SX425_.jpg" alt ="banana" width= 100% >
        <a href = "banana.php"><p id = "t">Banana<br>600tg</p></a>
        <form method="post">
            <input type="text" name = "add_cart" value ="1">
            <input type = "hidden" name = "hidden_name1" value=""
            <input type="submit" name = "add_cart1" value="Add to cart">
    </form>
    </div>
    <div class="box"><img src = "https://allmanhall.co.uk/wp-content/uploads/2019/06/Strawberries-on-white-background.jpg" alt ="strawberry" width="100%" height="80%"><a href = "Strawberry.php"><p id ="t">Strawberries<br>3500tg</p></a></div>
    <div class="box"><img src ="https://www.sillisprepveg.ie/wp-content/uploads/2020/04/pears.jpg" alt ="pears" width="100%" height="80%"><a href = "#"><p id ="t">Pears<br>2000tg</br></p></a></div>
    <div class="box"><img src ="https://images.heb.com/is/image/HEBGrocery/000320625" alt ="apples" width="100%" height="90%"><a href = "#"><p id ="t">Apples<br>1800tg</br></p></a></div>
    <div class="box"><img src ="https://3ner1e34iilsjdn1qohanunu-wpengine.netdna-ssl.com/wp-content/uploads/2018/11/grapefruit.jpg" alt ="grapefruit" width="100%" height="90%"><a href = "#"><p id ="t">Grapefruit<br>2300tg</br></p></a></div>
    <div class="box"><img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Orange-Fruit-Pieces.jpg/800px-Orange-Fruit-Pieces.jpg" alt ="Orange" width="100%" height="90%"><a href = "#"><p id = "t">Orange<br>1500tg</br></p></a></div>
    <div class="box"><img src ="https://5.imimg.com/data5/RK/KV/XE/SELLER-100337308/black-sharad-seedless-grapes-500x500.jpg" alt ="Grapes" width="100%" height="90%"><a href = "#"><p id = "t">Grapes<br>1700tg</br></p></a></div>
</div>
</body>
</body>
</body>
</html>