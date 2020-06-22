<?php
include_once 'database/authorization.php';

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$image = $_POST['image'];
$category_id = $_POST['category_name'];

if(!$product_name || !$price || !$image || !$category_id || !$amount){
    $array = array("msg" => "fill");
}
else {
    $sql = "INSERT INTO `product`(`product_name`, `price`, `amount`, `category_id`, `img`) VALUES (?,?,?,?,?)";
    $statement = $link->prepare($sql);
    $statement->bind_param("siiis", $product_name, $price, $amount, $category_id, $image);
    $statement->execute();
    $statement->close();
    $array = array("msg" => "success");
}

echo (json_encode($array));
