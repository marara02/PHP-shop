<?php
include_once 'header.php';
session_start();

$status=" ";

if(!empty($_SESSION["shopping_cart"])) {
if (isset($_POST['action']) && $_POST['action']=="delete"){
        foreach($_SESSION["shopping_cart"] as $key => $value) {
            if($_POST["id"] == $key){
                unset($_SESSION["shopping_cart"][$key]);
                $status = "<div class='box' style='color:darkred;'>
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
            $value['quantity'] = $_POST["item"];
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
    <link type="text/css" href="CSS/login.css">
    <link type="text/css" href="CSS/registration.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
<?php
$inform = "Hello";
setcookie("Inform",$inform,time()+10,"/");
?>
<?php
if(isset($_COOKIE['inform'])){
    echo $inform;
}
?>
<div class="cart">
    <?php
    if(isset($_SESSION["shopping_cart"])){
        $total_price = 0;
        ?>
        <div class="basket">
        <table class="table">
            <tbody>
            <tr>
                <td>Product_name</td>
                <td>Amount/kg</td>
                <td>Price</td>
                <td>Total</td>
            </tr>
            <?php
            foreach ($_SESSION["shopping_cart"] as $product){
                ?>
                <tr>
                    <td><?php echo $product["name"];?><br />
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
                            <form name='quantity' class='quantity' onChange="this.form.submit()">
                                <?php
                                $product['quantity'] = isset($_POST['item']) ? $_POST['item'] : 1;
                                if(isset($_POST['increase'])){
                                    $product['quantity'] += 1;
                                }

                                     if (isset($_POST['decrease'])) {
                                         $product['quantity'] -= 1;
                                 }
                                ?>
                                <button name='increase' class="increase">+</button>
                                <input type='text' size='1' name='item' maxlength="1"  value='<?= $product['quantity']; ?>'/>
                                <button name='decrease' class="decrease">-</button>
                            </form>
                        </form>
                    </td>
                    <td><?php echo $product["price"]."tg" ?></td>
                    <td><?php echo $product["price"]*$product["quantity"]."tg"; ?></td>
                </tr>
                <?php
                $total_price += ($product["price"] * $product["quantity"]);
            }
            ?>
            <tr>
                <td colspan="5" align="right">
                    <strong>TOTAL:</strong><i><?php echo $total_price."tg"; ?></i>
                </td>
            </tr>
            </tbody>
            <a href = "registration.php" style="text-decoration: none"><input type='submit' id = 'pay' name = 'submit' style='display: block' value='Order>>'></a>
        </table>
        </div>
        <?php
    }else{
        echo "<h3 style='text-align: center;color: darkred;font-size: 30px'>Your cart is empty!</h3>";
        echo "<script>
        $(document).ready(function() {
          $('#pay').css('display','hidden');
        });
</script>";
    }
    ?>
</div>

<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
    <?php echo $status; ?>
</div>
</body>
</html>
