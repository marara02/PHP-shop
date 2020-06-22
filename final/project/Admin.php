<?php
include_once 'database/authorization.php';
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
            <style>
                #errorMsg{
                    color: #fff;
                    font-weight: 700;
                    padding: 4px 8px;
                    background-color: rgba(0,0,0,0.5);

                }
            </style>
    <script>
        $(document).ready(function () {
            $('.inputsub').click(function () {
                event.preventDefault();
                $.ajax({
                    method:'POST',
                    url:"check1.php",
                    data: {
                        user:$("#user").val(),
                        pass1:$("#pass1").val()
                    },
                    accepts: 'application/json; charset=utf-8',
                        success:function (data) {
                            var data = JSON.parse(data);
                            if(data.msg === "success"){
                                window.location.href = "mixed1.php";
                            }
                            if(data.msg === "error"){
                                $('#errorMsg').html("Wrong password/login");
                            }
                            if(data.msg === "fill"){
                                $('#errorMsg').html("Not all fields are filled");
                            }
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
            <span id="errorMsg"></span>
</div>
        </div>
    </form>
</div>
</body>
</html>

