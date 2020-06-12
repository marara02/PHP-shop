<?php
include_once 'database/authorization.php';
include_once 'Bakkery.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Eat real food</title>
    <meta charset="UTF-8">
    <style>
        select {
            width: 10%;
        //text-align: center;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2) inset, 0 -1px 0 rgba(0, 0, 0, .05) inset;
        }
        input[type = submit]{
            font-size:20px;
            border-radius: 10px;
            background-color: #239B56;
        }
        input[type = "submit"]:hover {
            box-shadow: 0 0 0 1px #4CAF50 inset, 0 1px 2px rgba(0, 0, 0, .2) inset;
        }
    </style>
</head>
<body>
<div class = "basic">
<div id = "image">
    <img src="<?php echo $row['img'] ?>" alt="Banana" width="350px" height="350px">
    <p id = "banana">Product name:<?php echo $row['product_name']?></p>
    <br><br>
    <p id ="bcost" style="padding-top:25px">Price:<?php echo $row['price']?><small>tg</small></p>
    <p id ="banana">Desert bananas from Ecuador</p>
    <br>
    <div id = "Binfo" style="display: none">
        <h3 id ="banana">More products</h3>
        <a href = "Strawberry.php"></a><img src = "https://allmanhall.co.uk/wp-content/uploads/2019/06/Strawberries-on-white-background.jpg" alt ="strawberry" width="10%" height="45%"></a>
        <img src ="https://www.sillisprepveg.ie/wp-content/uploads/2020/04/pears.jpg" alt ="pears" width="10%" height="45%">
        <img src ="https://images.heb.com/is/image/HEBGrocery/000320625" alt ="apples" width="10%" height="45%">
        <img src ="https://3ner1e34iilsjdn1qohanunu-wpengine.netdna-ssl.com/wp-content/uploads/2018/11/grapefruit.jpg" alt ="grapefruit" width="10%" height="45%">
        <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Orange-Fruit-Pieces.jpg/800px-Orange-Fruit-Pieces.jpg" alt ="Orange" width="10%" height="45%">
        <img src ="https://5.imimg.com/data5/RK/KV/XE/SELLER-100337308/black-sharad-seedless-grapes-500x500.jpg" alt ="Grapes" width="10%" height="45%">
    </div>
    </div>
</div>
    <form method ="post" class = "form">
    <input type="text" name="quantity" value = "1">
      <input type="hidden" name="hidden_name" value="<?php echo $row["name"]?>"/>
      <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>"/>
      <input type="hidden" name="hidden_id" value="<?php echo $row["id"]; ?>" />
      <input type="submit" id ="submit" name ="button" value ="Add to cart"></form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){  //Add here ajax to directly card
        $('#submit').click(function () {
            $('.form').hide(1000);
            $('#Binfo').show(1600);
        })
    })
</script>
</body>
</html>
