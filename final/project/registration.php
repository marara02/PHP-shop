<?php

require_once('config.php');

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

    <link href  ="https://fonts.googleapis.com/css?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">

    <link rel = "icon" href = "shop.png" type = "image/x-icon">

    <link rel="stylesheet" type="text/css" href="CSS/header.css">

    <script type="text/javascript" src="functions.js"></script>

    <link rel="stylesheet" type="text/css" href="CSS/registration.css">



</head>

<header>

    <div class="topnav">

        <button class="home" onclick="homeFunction()"><img src="shop.png" class="animation" align="left" width="25"><p style="font-size:185%"> Home</p></button>

        <div class="dropdown">

            <div id = "list">

                <button class="dropbtn"><img class="img" src ="image/line.png" alt="left" width ="25" height="25"><p class="catalogtext">Catalog</p></button></div>

            <div class="dropdown-content">
                <a href="b2.php"><img src ="image/cupi.png" alt ="cupi" width ="15px" height ="15px">Flour products</a>
                <a href="meal.php"><img src ="image/meal.png" alt ="meal" width ="15px" height ="15px">Meals</a>
                <a href="SeaFood.php"><img src ="image/fish.png" alt ="fish" width ="15px" height ="15px">SeaFood</a>
                <a href="Fruits.php"><img src ="image/fruit.png" alt ="fruit" width ="15px" height ="15px">Fruits</a>
                <a href="Vegetables.php"><img src ="image/vegan.png" alt ="Vegetables" width ="15px" height ="15px">Vegetables</a>
                <a href="#"><img src ="image/drink.png" alt ="drinks" width ="15px" height ="15px">Drinks</a>

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
        <form method="post">
            <input class="search" type = "text" style ="float:right;" name="search" placeholder="Search">
            <button  type = "submit" class="sub" name = "submit" >&#128270;</button>
        </form>
        <div><a href="basket.php" title="Basket"><img src="image/basket.png" class="basimg"></a></div>

    </div>

</header>

<div>



</div>

<body>

<hr style="color: black;">

<div class="main">

    <form class="form" method="post" action="registration.php">

        <div class="f">

            <h1>Registration</h1>

            <input class="input" type="name" id="full_name" name="full_name" placeholder="Full Name" required>

            <input class="input"  type="Email" id="email" name="email" placeholder="Email" required>

            <input class="input" type="tel" name="telnum" id="telnum" placeholder="8(XXX)-XXX-XX-XX" minlength="11" maxlength="11" required>

            <input class="input" type="password" name="password" placeholder="Password" id="password" minlength="8" required>

            <input class="input" type="password" name="pass2" placeholder="Resset Password" id="pass2" minlength="8" required>

            <input class="inputsub" type="submit" name="register" id="register" value="Submit">

        </div>

    </form>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">

    $(function(){

        $('#register').click(function(e) {

            var valid = this.form.checkValidity();

            if(valid) {

                var full_name = $('#full_name').val();

                var email = $('#email').val();

                var telnum = $('#telnum').val();

                var password = $('#password').val();

                e.preventDefault();

                $.ajax({

                    type: 'POST',

                    url: 'reg.php',

                    data:{full_name:full_name, email:email, telnum:telnum, password:password,},

                    success: function (data) {

                        Swal.fire(

                            'Congratulations!',

                            data,

                            'success'

                        )
                    },
                    error: function (data) {
                        Swal.fire(
                            'ERRORS!',
                            data,
                            'error'
                        )
                    }
                });
            }else{
            }
        });

    });
    </script>
<footer class="fot" style="">
    <br>

    <p>follow us on instagram:@onlineshop</p>

</footer>

</body>

</html>
