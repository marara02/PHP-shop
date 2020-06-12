<?php
include_once 'Bakkery.php';
session_start();
$status=" ";
if (isset($_POST['action']) && $_POST['action']=="remove"){
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
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<div id ="log" style="text-align: center">
    <a href="logout.php"><button id = "logout" value="Log out"></button></a>
    <br>
    <?php
    if(isset($_COOKIE["User"])){
        echo '<h1>Welcome, be safe and be with us</h1>';
    }
    ?>
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
                <td>Times</td>
                <td>Price</td>
                <td>Total</td>
            </tr>
            <?php
            foreach ($_SESSION["shopping_cart"] as $product){
                ?>
                <tr>
                    <td><?php echo $product["name"]; ?><br />
                        <form method='post' action=''>
                            <input type='hidden' name='code' value="<?php echo $product["id"]; ?>" />
                            <input type='hidden' name='action' value="remove" />
                            <button type='submit' class='remove'>Remove Item</button>
                        </form>
                    </td>
                    <td>
                        <form method='post' action=''>
                            <input type='hidden' name='code' value="<?php echo $product["id"]; ?>" />
                            <input type='hidden' name='action' value="change" />
                            <select name='quantity' class='quantity' onChange="this.form.submit()">
                                <option <?php if($product["quantity"]==1) echo "selected";?>
                                    value="1">1</option>
                                <option <?php if($product["quantity"]==2) echo "selected";?>
                                    value="2">2</option>
                                <option <?php if($product["quantity"]==3) echo "selected";?>
                                    value="3">3</option>
                                <option <?php if($product["quantity"]==4) echo "selected";?>
                                    value="4">4</option>
                                <option <?php if($product["quantity"]==5) echo "selected";?>
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
        echo "<h3>Your cart is empty!</h3>";
    }
    ?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
    <button onclick="pay()">BUY</button>
</div>
</body>
</html>
