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
</head>
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"><a href ="main.php">Home</a></p></button>
        <div class="dropdown">
            <div id = "list">
                <button class="dropbtn"><img class="img" src ="image/line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
            <div class="dropdown-content">
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
        <button class="log"><a href="#" class="logtext">LogIn</a><p class="sign">/</p><a href="registration.php" class="regtext">Register</a></button>
        <form method="post">
            <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
            <input  type = "submit" class="sub" name = "submit" value ="&#128270;" onclick="check()">
        </form>
        <div><a href="basket.php" title="Basket"><img src="image/basket.png" class="basimg"></a></div>
    </div>
</header>
<hr style="color: black;">
</header>
</html>
<?php
include_once 'database/authorization.php';
if(isset($_POST['submit'])) {
    $str = $_POST['search'];
    $sql = "SELECT * FROM `product` WHERE product_name = '$str'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                echo "<div class ='product'>";
                echo "<br>";
                echo "<table style = 'text-align: center'>";
                echo "<tr>";
                echo  $row['product_name'];
                echo '<br>';
                echo $row['price']. '<small>tg</small>';
                echo "</tr>";
                echo "</table>";
                if($row['product_name'] == 'Red Velvet' && 'Voopie' && 'Cookie' && 'Cupcakes' && 'Bread' && 'Japanese cake'){
                    echo '<img src ="https://static.toiimg.com/photo/48201473/.jpg" alt ="bakery" height="26%" width="30%">';
                    echo '<p style ="font-family:Apple Chancery, cursive; font-size:30px; text-align:center;">Founded from list</p>';
                    echo '<p style ="font-size:25px;"><a href ="b2.php" style ="color:#4CAF50">Bakery products>>></a></p>';
                }
                elseif($row['product_name'] == 'Beef' && 'Whole Chicken' && 'Chicken Breast' && 'Chicken legs' && 'Sheep meat'){
                    echo '<img src ="image/beef.jpg" alt ="meat" height="26%" width="30%">';
                    echo '<p style ="font-family:Apple Chancery, cursive; font-size:30px; text-align:center;">Founded from list</p>';
                    echo '<p style ="color =#4CAF50"><a href ="meal.php" style ="color:#4CAF50">Meats>>></a></p>';
                }
            }
        } else {
            echo '<h3 style ="text-align:center; color:darkred">No results</h3>';
        }
                echo "</div>";

    }
    else{
        echo '<h3 style ="text-align:center; color:darkred">Not found, regarding to shop cart product can not found</h3>';
    }
}