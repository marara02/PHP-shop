<?php
if(!empty($_POST['name']) && !empty($_POST['price'])&& !empty($_POST['id'])){
    $product_name = $_POST['name'];
    $price = $_POST['price'];
    $id = $_POST['id'];
    include_once 'database/authorization.php';
    if(isset($_POST['name']) && isset($_POST['price'])){
        $query = "UPDATE product SET product_name ='$product_name',price='$price' WHERE product_id ='$id'";
    }
    $statement = $link->prepare($query);
    $statement->bind_param("si",$product_name,$price);
    $statement->execute();
    $data = $statement->get_result();
    $row = $data->fetch_assoc();
    if($link->query($query) == TRUE){
        $result = array(
            'text'=>"Success"
        );
    }
    else{
        $result = array(
            'text'=>"Error!"
        );
    }
}
echo json_encode($result);