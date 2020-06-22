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
    <link rel="stylesheet" type="text/css" href="CSS/registration.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $(".inputsub").click(function () {
                event.preventDefault();
                var product_name = $('#product_name').val();
                var price = $('#price').val();
                var amount = $('#amount').val();
                var image = $('#image').val();
                var category_name = $('#category_name').val();
                    $.ajax({
                        method: "POST",
                        url:    "insert.php",
                        data: { product_name: product_name, price: price, amount: amount, image:image,category_name:category_name},
                        accepts: 'application/json; charset=utf-8',
                        success:function (data) {
                            var data = $.parseJSON(data);
                            if(data.msg == "success"){
                                $('#msg').css('color','green');
                                $('#msg').text("Product added successfully");
                            }
                            else{
                                $('#msg').css('color','red');
                                $('#msg').text("Error!");
                            }
                        }
                        }) });
        });
    </script>

</head>
<?php include_once("header.php"); ?>
<body>
<hr style="color: black;">
<div class="main">
    <form name="form" class="form">
        <div id ="msg">sss</div>
    <div class="f">
        <label for="product_name">Product Name</label>
        <input class="input" type="text" id="product_name" name="product_name" placeholder="Product Name">
        <label for="price">Price</label>
        <input class="input"  type="number" id="price" name="price">
        <label for="amount">Amount</label>
        <input class="input" type="number" id = "amount" name ="amount">
        <label for="image">Image</label>
        <input class="input" type="text" name="image" id ="image">
        <label for="category_name">Category</label>
        <input class="input" type="number" name="category_name" id = "category_name">
        <input class="inputsub" type="submit" name="submit" id="sub" value="Submit">
    </div>
    </form>
</div>
</body>
</html>
