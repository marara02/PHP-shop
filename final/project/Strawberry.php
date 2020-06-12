<?php
include_once 'database/authorization.php';
include_once 'Bakkery.php';

$sql = "SELECT product_name,price,img FROM product WHERE product_name = 'Strawberries'";
$result = $link->query($sql);
$row = $result->fetch_assoc();
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
        <img src="<?php echo $row['img'] ?>" alt="Strawberry" width="350px" height="350px">
        <p id = "banana">Product name:<?php echo $row['product_name']?></p>
        <br><br>
        <p id ="bcost" style="padding-top:25px">Price:<?php echo $row['price']?><small>tg</small></p>
        <br>
        <p id = "banana">Delicious strawberries from Tashkent</p>
        <div id = "Binfo" style="display: none">
            <h3 id ="banana">More products</h3>
            <a href = "banana.php"><img src = "https://images-na.ssl-images-amazon.com/images/I/61fZ%2BYAYGaL._SX425_.jpg" alt ="banana" width="10%" height="45%"></a>
            <img src ="https://www.sillisprepveg.ie/wp-content/uploads/2020/04/pears.jpg" alt ="pears" width="10%" height="45%">
            <img src ="https://images.heb.com/is/image/HEBGrocery/000320625" alt ="apples" width="10%" height="45%">
            <img src ="https://3ner1e34iilsjdn1qohanunu-wpengine.netdna-ssl.com/wp-content/uploads/2018/11/grapefruit.jpg" alt ="grapefruit" width="10%" height="45%">
            <img src ="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c4/Orange-Fruit-Pieces.jpg/800px-Orange-Fruit-Pieces.jpg" alt ="Orange" width="10%" height="45%">
            <img src ="https://5.imimg.com/data5/RK/KV/XE/SELLER-100337308/black-sharad-seedless-grapes-500x500.jpg" alt ="Grapes" width="10%" height="45%">
        </div>
    </div>
</div>
<?php print '<form method ="post" class = "form">';
print '<select name="Weight">' ;
for ($tempmin = 0;$tempmin <=4; $tempmin += 1){
    print "<option>$tempmin</option>";}
print '</select>';
print '<input type="submit" id ="submit" name ="button" value ="Add to cart"></form>'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
<script>
    $(document).ready(function (){
        $('#submit').click(function () {
            $('.form').hide().delay(1000000);
            $('#Binfo').show(0).delay(10000000).hide(0);
        })
    })
</script>
</body>
</html>
