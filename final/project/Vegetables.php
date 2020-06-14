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
                <button class="dropbtn"><img class="img" src ="image/line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
            <div class="dropdown-content">
                <a href = "drink.php">Mixed</a>
                <a href="b2.php"><img src ="image/cupi.png" alt ="cupi" width ="15px" height ="15px">Flour products</a>
                <a href="meal.php"><img src ="image/meal.png" alt ="meal" width ="15px" height ="15px">Meat</a>
                <a href="SeaFood.php"><img src ="image/fish.png" alt ="fish" width ="15px" height ="15px">SeaFood</a>
                <a href="Fruits.php"><img src ="image/fruit.png" alt ="fruit" width ="15px" height ="15px">Fruits</a>
                <a href="Vegetables.php"><img src ="image/vegan.png" alt ="Vegetables" width ="15px" height ="15px">Vegetables</a>
                <a href="Drinks.php"><img src ="image/drink.png" alt ="drinks" width ="15px" height ="15px">Drinks</a>
            </div>
        </div>
        <div class="dropdown">
            <div id = "list">
                <button class="contacts" onclick="carsFunction()"><p class="contacttext"><img src="image/phone.png" width="25" height="25" class="contactimg"> Contacts</p></button></div>
            <div class="dropdown-content">
                <a href="#"><p>Email:onlineshop@mail.ru</p></a>
                <a href="#"><p>Phone number:+7(777)-777-77-77</p></a>
            </div>
        </div>
        <button class="log"><a href="login.php" class="logtext">LogIn</a><p class="sign">/</p><a href="registration.php" class="regtext">Register</a></button>
        <form method="post" action="check.php">
            <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
            <button  type = "submit" class="sub" name = "submit" >&#128270;</button>
        </form>
        <div><a href="basket.php" title="Basket"><img src="image/basket.png" class="basimg"></a></div>
    </div>
</header>
<hr style="color: black;">
</header>
<body>
<a href ='main.php'><img src ="https://w7.pngwing.com/pngs/814/978/png-transparent-arrow-left-green-arrow-green-bordered-arrow-miscellaneous-angle-rectangle.png" alt ="Direction" width="50px" height="40px"></a>
<?php
include_once 'database/authorization.php';
$result = mysqli_query($link,"SELECT * FROM `product`WHERE category_id=5");
echo "<div class='wrapper1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "
        <div class='box1' style='display: flex; flex-direction: column; background-color: #239B56; color: #fff; border-radius: 5px; padding: 20px; font-size: 80%;'>
            <form method='post' action=''>
                <input type='hidden' name='id' value=".$row['product_id']." />
                <div class='imageAll' style=' text-align: center;padding-left: 5px;padding-right: 5px;'><img src='".$row['img']."' width='100%' height='90%'></div>
                <div class='name'>".$row['product_name']."</div>
                <div class='price'>".$row['price']."tg</div>
                <button type='submit' class='buy'>Add to cart</button>
            </form>
        </div>";
}
echo "</div>";
mysqli_close($link);
?>
</body>
</body>
</html>
