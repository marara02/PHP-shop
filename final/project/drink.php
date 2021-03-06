<!DOCTYPE html>
<html lang="en">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
    <title>Onlineshop.kz</title>
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
</head>
<header>
    <div class="topnav">
        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"> Home</p></button>
        <div class="dropdowns">
            <div id = "lists">
                <button class="droppp"><img class="img" src ="image/line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>
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
        <form method="post" action="check.php">
            <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
            <input  type = "submit" class="sub" name = "submit" value ="&#128270;">
        </form>
        <div><a href="homepage.php" title="home page"><img src="image/homepage.png" class="homeimg"></a></div>
        <div class="basket"><a href="basket.php" title="Basket"><img src="image/basket.png" class="basimg">
                <span class="badge">0</span></a></div>
    </div>
    </div>
</header>
<hr style="color: black;">
</header>
<?php
include_once 'database/authorization.php';
session_start();

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
        $array_keys = array_keys($_SESSION["shopping_cart"]);
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
$result = mysqli_query($link,"SELECT * FROM `product`");
echo "<div class='wrapper1'>";
while($row = mysqli_fetch_assoc($result)){
    echo "
        <div class='box1' style='display: flex; flex-direction: column; color: #fff; border-radius: 5px; padding: 20px; font-size: 80%;'>
            <form method='post' action=''>
                <input type='hidden' name='id' value=".$row['product_id']." />
                <div class='name'>".$row['product_name']."</div>
                <div class='imageAll' style=' text-align: center;padding-left: 5px;padding-right: 5px;'><img src='".$row['img']."' width='100%' height='80%'></div>
                <div class='price'>".$row['price']."tg</div>
                <button type='submit' name='add' class='buy'>Add to cart</button>
            </form>
        </div>
        ";
}
echo "</div>
  <script src=\"https://code.jquery.com/jquery-3.5.1.js\" crossorigin=\"anonymous\"></script>
    <script>
        $(document).ready(function(){
            $(\".buy\").click(function () {
            var value = parseInt($('.basket').find('.badge').text());
            $(\".basket\").find(\".badge\").text(value+1).delay(3600);
        });
        });
    </script>";
mysqli_close($link);
?>
<span class = "message_box"  style="margin:10px 0px;">
<?php echo $info?>
</span>
</html>