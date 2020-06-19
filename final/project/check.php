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
                <a href = "drink.php">Mixed</a>
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
        <button class="loginn"><a href="login.php" class="log_text" style="text-decoration: none;color: white">LogIn</a><p class="signnn">/</p><a href="registration.php" class="reg_text" style="color: white;text-decoration: none">Register</a></button>
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
</body>
</body>
</html>
<?php
include_once 'database/authorization.php';

session_start();
$info="";
if (isset($_POST['id']) && $_POST['id']!=" "){
    $id = mysqli_real_escape_string($link, $_POST['id']);
    $query = "SELECT * FROM product WHERE product_id = ?";
    $stmt = mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt, $query)){
        echo "SQL statement failed.";
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
    $row = mysqli_fetch_assoc($result);
    $name = $row['product_name'];
    $id = $row['product_id'];
    $price = $row['price'];

    $cartArray = array(
        $id=>array(
            'name'=>$name,
            'id'=>$id,
            'price'=>$price,
            'quantity'=>1)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $info = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);  //return all elements which in array
        if(in_array($id,$array_keys)) {
            $info = "<div class='box'>
            Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $info = "<div class='box'>Product is added to your cart!</div>";
        }

    }
}
if(isset($_POST['submit'])) {
    $str = $_POST['search'];
    $sql = "SELECT * FROM `product` WHERE product_name = '$str'";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {
                 echo "
<div class = 'wrapper1'>
        <div class='box1' style='display: flex; flex-direction: column; color: #fff; border-radius: 5px; padding: 20px; font-size: 80%;'>
            <form method='post' action=''>
                <input type='hidden' name='id' value=".$row['product_id']." />
                <div class='name'>".$row['product_name']."</div>
                <div class='imageAll' style=' text-align: center;padding-left: 5px;padding-right: 5px;'><img src='".$row['img']."' width='100%' height='80%'></div>
                <div class='price'>".$row['price']."tg</div>
                <button type='submit' class='buy1'>Add to cart</button>
                                  <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
                <script >
                $(document) . ready(function () {
                    $('.buy1') . click(function () {
                        Swal . fire('Product added to basket:)');
                    });
                });
            </script >
            </form>
        </div>
        </div>
        ";
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