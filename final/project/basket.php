<?php
include_once 'Bakkery.php';
session_start();

$status=" ";
if (isset($_POST['action']) && $_POST['action']=="delete"){
    if(!empty($_SESSION["shopping_cart"])) {
        foreach($_SESSION["shopping_cart"] as $key => $value) {
            if($_POST["id"] == $key){
                unset($_SESSION["shopping_cart"][$key]);
                $status = "<div class='box' style='color:red;'>
            Product is removed!</div>";
            }
            if(empty($_SESSION["shopping_cart"]))
                unset($_SESSION["shopping_cart"]);
        }
    }
}

if (isset($_POST['action']) && $_POST['action']=="change"){
    foreach($_SESSION["shopping_cart"] as &$value){
        if($value['id'] === $_POST["id"]){
            $value['quantity'] = $_POST["quantity"];
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Shop</title>
</head>
<body>
<div id ="log" style="text-align: center">
    <a href="logout.php"><button id = "logout" value="Log out"></button></a>
    <br>
</div>
<div class="cart">
    <?php
    if(isset($_SESSION["shopping_cart"])){
        $total_price = 0;
        ?>
        <table class="table">
            <tbody>
            <tr>
                <td>Product_name</td>
                <td>Quantity</td>
                <td>Price</td>
                <td>Total</td>
            </tr>
            <?php
            foreach ($_SESSION["shopping_cart"] as $product){
                ?>
                <tr>
                    <td><?php echo $product["name"]; ?><br />
                        <form method='post' action=''>
                            <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
                            <input type='hidden' name='action' value="delete"/>
                            <button type='submit' class='remove'>Delete</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action=''>
                            <input type='hidden' name='id' value="<?php echo $product["id"]; ?>" />
                            <input type='hidden' name='action' value="change"/>
                            <select name='quantity' class='quantity' onChange="this.form.submit()">
                                <option <?php if($product["quantity"]==1)?>
                                    value="1">1</option>
                                <option <?php if($product["quantity"]==2)?>
                                    value="2">2</option>
                                <option <?php if($product["quantity"]==3)?>
                                    value="3">3</option>
                                <option <?php if($product["quantity"]==4)?>
                                    value="4">4</option>
                                <option <?php if($product["quantity"]==5)?>
                                    value="5">5</option>
                            </select>
                        </form>
                    </td>
                    <td><?php echo $product["price"]."tg" ?></td>
                    <td><?php echo $product["price"]*$product["quantity"]."tg"; ?></td>
                </tr>
                <?php
                $total_price += ($product["price"]*$product["quantity"]);
            }
            ?>
            <tr>
                <td colspan="5" align="right">
                    <strong><i>TOTAL: <?php echo $total_price."tg"; ?></i></strong>
                </td>
            </tr>
            </tbody>
        </table>
        <?php
    }else{
        echo "<h3 style='text-align: center;color: darkred;font-size: 30px'>Your cart is empty!</h3>";
        echo "<script> document.getElementById(\"pay\").style.display = 'none' </script>";
    }
    ?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
    <button id = "pay" onclick="pay()">BUY</button>
</div>
</body>
</html>
