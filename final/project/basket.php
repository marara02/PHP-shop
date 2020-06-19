<?php
include_once 'Bakkery.php';
session_start();

$status=" ";
if (isset($_POST['action']) && $_POST['action']=="delete"){
    if(!empty($_SESSION["shopping_cart"])) {
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
        if($value['name'] === $_POST["name"]){
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
    <link type="text/css" href="CSS/login.css">
    <link type="text/css" href="CSS/registration.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script type="text/javascript">
            $(document).ready(function () {

                $('#pay').click(function() {
                    event.preventDefault();
                        var full_name = $('#full_name').val();
                        var email = $('#email').val();
                        var tel_num = $('#number').val();
                        var address = $('#address').val();
                        var cost = $('#cost').val();
                        $.ajax({
                            type: 'POST',
                            url: 'reg.php',
                            data:{full_name:full_name, email:email, tel_num:tel_num, address:address,cost:cost},
                            success: function (data) {
                              window.location.href = 'pay1.php';
                            },
                            error: function (data) {
                                Swal.fire(
                                    'ERRORS!',
                                    data,
                                    'error'
                                )
                            }
                        });
                    });
                });
    </script>
</head>
<body>
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
                            <input type='hidden' name='name' value="<?php echo $product["name"]; ?>" />
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
                                <option <?php if($product["quantity"]==6)?>
                                        value="6">6</option>
                            </select>
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
        </table>
            <form class='form'>
                <div class='f' style='float: left;margin-left: 25px'>
                    <input class='input' type='text' id = 'full_name' name='full_name' placeholder='Full Name'>
                    <input class='input'  type='email' id='email' name='email' placeholder='Email'>
                    <input class='input' type='text' id = 'address' name='address' placeholder='Street/house/apartment'>
                    <input class='input' type='text' id = 'number' name='number' placeholder= '+7 XXX-XXX-XX-XX'>
                    <input class='input' type='number'  id = 'cost' name = 'cost' value='<?php echo $total_price?>'>
                    <input type='checkbox' id='variant' name='variant' value='Card'>
                    <label for='variant'> By card</label>
                    <input type='checkbox' id='variant1' name='variant2' value='Cash'>
                    <label for='variant1'>Сash on delivery</label>
                    <div class = 'cartochka' style="display: none">
                    <input class="input" type="text" id = 'card' placeholder="0000-0000-0000-0000-0000" style="display: none">
                    <input class ='input' type="text" id = 'cv' placeholder="CCV">
                    <input class ='input' type="text" id = 'data' placeholder="MM/YY">
                    </div>
                    <input type='submit' id = 'pay' name = 'submit' style='display: block' value='BUY'>
                </div>
            </form>
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
