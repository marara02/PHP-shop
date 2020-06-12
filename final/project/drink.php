<?php
include_once 'Bakkery.php';
include_once 'database/authorization.php';
session_start();
$info="";
if (isset($_POST['id']) && $_POST['id']!=" "){
    $id = $_POST['id'];
    $result = mysqli_query($link, "SELECT * FROM `product` WHERE `category_id`='$id'");
    $row = mysqli_fetch_assoc($result);
    $name = $row['product_name'];
    $id = $row['category_id'];
    $price = $row['price'];
    $image = $row['img'];

    $cartArray = array(
        $id=>array(
            'name'=>$name,
            'code'=>$id,
            'price'=>$price,
            'quantity'=>1,
            'image'=>$image)
    );

    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);  //return all elements which in array
        if(in_array($id,$array_keys)) {
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
$result = mysqli_query($link,"SELECT * FROM `product`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='wrapper1'>
    <div class='box1'>
    <form method='post' action=''>
    <input type='hidden' name='id' value=".$row['category_id']." />
    <div class='imageAll' style='float:center'><img src='".$row['img']."' width='80%' height='60%'  />
    <div class='name'>".$row['product_name']."</div>
    <div class='price'>".$row['price']."tg</div>
    <button type='submit' class='buy'>Add to cart</button>
        </form>
    </div>
    </div>";
    //echo $status;
}
mysqli_close($link);
?>