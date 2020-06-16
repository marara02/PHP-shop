<?php
include_once 'database/authorization.php';

$product_name = $_POST['product_name'];
$price = $_POST['price'];
$amount = $_POST['amount'];
$image = $_POST['image'];
$category_id = $_POST['category_id'];

if(!$product_name || !$price || !$image || !$category_id || !$amount){
    echo '<alert>Fill all gaps</alert>';
}
else {
    $sql = "INSERT INTO (product product_name,price,amount,img,category_id) VALUES (?,?,?,?,?)";
    $statement = $link->prepare($sql);
    $statement->bind_param("siisi", $product_name, $price, $amount, $image, $category_id);
    if ($statement->execute()) {
        $result = 1;
        $data = array(
            'product_name' => $product_name,
            'price' => $price,
            'amount' => $amount,
            'image' => $image,
            'category_id' => $category_id
        );
    }
}
echo $result;
echo (json_encode($data));
$link->close();