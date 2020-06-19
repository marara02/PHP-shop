<?php
include 'head.php';
include 'team.php';
session_start();
$Team = new team();
$Team->setFullName("MNZ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Team Members</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<h1 class = "display-4" style="text-align: center;padding-bottom: 10px; margin-top: 20px">MNZ team</h1>
<ul class="list-unstyled list-inline text-center" style="padding-bottom: 20px">
    <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"><img src="image/mar.jpg" class="rounded-circle" width="200px" height="190px"</i>
        </a>
    </li>

    <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"><a href = "https://www.instagram.com/n_marara/"><img src="image/zaure.png" class="rounded-circle" width="200px" height="190px"></a>
            </i>
        </a>
    </li>
    <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"><img src="image/nur.png" class="rounded-circle" width="200px" height="190px"> </i>
        </a>
    </li>
</ul>
<div class="container">
    <div class="jumbotron" style="background-color: #ABEBC6">
        <h1>Who they are?</h1>
        <p><?php $Team->setPosition("Authors")?></p>
        <p><?php $Team->advice()?></p>
        <p style="text-decoration: none;font-weight: bold"><?php $Team->members("Nurgissa","Zaure","Marzhan")?></p>
        <br>
        <h6 class="text-uppercase font-weight-bold">For help</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 65px;">
        <p>
            <i class="fas fa-home mr-3"></i>Nur-Sultan, KZ</p>
        <p>
            <i class="fas fa-envelope mr-3"></i>eatRealFood@.kz</p>
        <p>
            <i class="fas fa-phone mr-3"></i> + 777 77 77 77</p>
        <p>
            <i class="fas fa-print mr-3"></i> + 777 78 78 78</p>

    </div>
    </div>
</div>
</body>
</html>