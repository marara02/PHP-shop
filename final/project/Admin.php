<?php
include_once 'database/authorization.php';

$result = mysqli_query($link,"SELECT * FROM `product`");

while($row = mysqli_fetch_assoc($result)){
    echo "<div class='wrapper1' style='display: none'>
    <div class='box1'>
    <form method='post' action=''>
    <input type='hidden' name='id' value=".$row['category_id']." />
    <div class='imageAll' style='float:center'><img src='".$row['img']."' width='80%' height='60%'  /></div>
    <div class='name'>".$row['product_name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Add to cart</button>
    <span id ='info'></span>
    <input type = 'text' name = 'name' id ='name' placeholder='Product name'>
    <input type = 'number' name = 'price' id = 'price' placeholder='Price'>
    <input type ='number' name ='id' id ='id' placeholder='Product_id'>
    <input type ='submit' class ='new' style='background-color: orange' value='Change'>
    </form>
    </div>
    </div>";
    echo $status;
}
mysqli_close($link);
?>
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
    <link rel="stylesheet" type="text/css" href="CSS/login.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
        $('.inputsub').click(function () {
        $.ajax({
            method:'POST',
            url:"check1.php",
            data: {
                user:$("#user").val(),
                password:$(".inputsub").val()
            },
            accepts: 'application/json; charset=utf-8',
                success:function (data) {
                    window.location.href = "mixed1.php";
                }
        });
        });
        });
    </script>
</head>
<div class="main">
    <form name="form" class="form">
        <div class="f">
            <input class="input"  type="text" id="user" name="user">
            <input class="input" type="password" name="pass1" id="pass1" minlength="8">
            <input class="inputsub" type="submit" name="submit" id="sub" value="Go">
</div>
        </div>
    </form>
</div>
</body>
</html>

