<!DOCTYPE html>
<html>
<head>
    <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"
            integrity=\"sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=\"
            crossorigin=\"anonymous\"></script>
    <script>
        $(document).ready(function () {
            $('.new').click(function () {
                event.preventDefault();
                //$('#name').css('type','text');
                // $('#price').css('type','number');
                $.ajax('update.php',{
                    type:'POST',
                    data:{product_name:$('#name').val(),
                        price:$('#price').val(),
                        id:$('#id').val()},
                    accepts: 'application/json; charset=utf-8',
                    success:function (data) {
                        if(data.text === 'Success'){
                            window.location.href = "insertpage.php";
                            $('#info').text("Updated successfully");
                        }
                    }
                    error:function(data) {
                        if(data.==='Error!'){
                            $('#info').text('Error!');
                        }
                    }
                });
            });
        });
    </script>
</head>
</html>
<?php

include_once 'Bakkery.php';
include_once 'database/authorization.php';
session_start();
$info = "";
if (isset($_POST['id']) && $_POST['id'] != " ") {
    $id = $_POST['id'];
    $result = mysqli_query($link, "SELECT * FROM `product` WHERE `category_id`='$id'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['product_name'];
    $id = $row['category_id'];
    $price = $row['price'];
    $image = $row['img'];

    $cartArray = array(
        $id => array(
            'name' => $name,
            'code' => $id,
            'price' => $price,
            'quantity' => 1,
            'image' => $image)
    );

    if (empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    } else {
        $array_keys = array_keys($_SESSION["shopping_cart"]);  //return all elements which in array
        if (in_array($id, $array_keys)) {
            $status = "<div class='box' style='color:green;'>
 Product is already added to your cart!</div>";
        } else {
            $_SESSION["shopping_cart"] = array_merge(
                $_SESSION["shopping_cart"],
                $cartArray
            );
            $status = "<div class='box'>Product is added to your cart!</div>";
        }

    }
}
$result = mysqli_query($link, "SELECT * FROM `product`");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='wrapper1'>
    <div class='box1'>
    <form method='post' action=''>
    <input type='hidden' name='id' value=" . $row['category_id'] . " />
    <div class='imageAll' style='float:center'><img src='" . $row['img'] . "' width='80%' height='60%'  /></div>
    <div class='name'>" . $row['product_name'] . "</div>
    <div class='price'>" . $row['price'] . "tg</div>
    <button type='submit' class='buy'>Add to cart</button>
    <span id ='info'></span>
    <input type = 'text' name = 'name' id ='name' placeholder='Product name'>
    <input type = 'number' name = 'price' id = 'price' placeholder='Price'>
    <input type ='number' name ='id' id ='id' placeholder='Product_id'>
    <input type ='submit' class ='new' style='background-color: orange' value='Change'>
        </form>
    </div>
    </div>";
    //echo $status;
}
mysqli_close($link);
?>
