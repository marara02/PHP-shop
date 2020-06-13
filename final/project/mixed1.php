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
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
</head>
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"> Home</p></button>
        <div class="dropdown">
            <div id = "list">
                <button class="dropbtn"><img class="img" src ="image/line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
            <div class="dropdown-content">
                <a href="drink.php"><img class ="img" src = "https://img.pngio.com/arrows-mix-mixed-random-shuffle-icon-mixed-png-512_512.png" width="15px" height="15px">Mixed</a>
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
            <input  type = "submit" class="sub" name = "submit" value ="&#128270;">
        </form>
        <div><a href="homepage.php" title="home page"><img src="image/homepage.png" class="homeimg"></a></div>
        <div><a href="basket.php" title="Basket"><img src="image/basket.png" class="basimg"></a></div>
    </div>
    </div>
</header>
<hr style="color: black;">
</header>
</html>
<?php
include_once 'database/authorization.php';
session_start();
$info="";
if (isset($_POST['id']) && $_POST['id']!=" "){
    $id = $_POST['id'];
    $result = mysqli_query($link, "SELECT * FROM `product` WHERE `product_id`='$id'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['product_name'];
    $id = $row['product_id'];
    $price = $row['price'];
    $image = $row['img'];

    $cartArray = array(
        $id=>array(
            'name'=>$name,
            'code'=>$id,
            'price'=>$price,
            'quantity'=>1,
            'image'=>$image)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $info = "<div class='message_box'><div class='box'>Product is added to your cart!</div></div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);  //return all elements which in array
        if(in_array($id,$array_keys)) {
            $info = "<div class='message_box'><div class='box'>
            Product is already added to your cart!</div></div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $info = "<div class='message_box'><div class='box'>Product is added to your cart!</div></div>";
        }

    }
}
$result = mysqli_query($link,"SELECT * FROM `product`");
echo "<div class='wrapper1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "
        <div class='box1' style='display: flex; flex-direction: column; background-color: #239B56; color: #fff; border-radius: 5px; padding: 20px; font-size: 80%;'>
            <form method='post' action=''>
            <span id ='infor'></span>
                <input type='hidden' name='id' value=".$row['product_id']." />
                <div class='imageAll' style=' text-align: center;padding-left: 5px;padding-right: 5px;'><img src='".$row['img']."' width='100%' height='80%'></div>
                <div class='name'>".$row['product_name']."</div>
                <div class='price'>".$row['price']."tg</div>
                <input type='number' class='id' name='id' placeholder='id'>
                <input type='number' class='cost' name='cost' placeholder='New cost'>
                <button type='submit' class='change' name='change'>Update</button>
            </form>
        </div>";
}
echo "</div>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\"></script>
            <script>
            $(document).ready(function() {
                $('.change').click(function() {
                  event.preventDefault();
                $.ajax('update.php',{
                    type:'POST',
                    data:{
                        id:$('.id').val(),
                        price:$('.cost').val()},
                        accepts:'application/json; charset=utf-8',
                        success:function(data) {
                          if(data.text=='Success'){
                              $('#infor').html('Updated successfully');
                          }
                        }
                });
                });
            });
</script>";
mysqli_close($link);
?>