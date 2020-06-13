<?php
if(!empty($_POST['id']) && !empty($_POST['cost'])){
    $id = $_POST['id'];
    $price = $_POST['price'];
    include_once 'database/authorization.php';

    if(isset($_POST['id']) && isset($_POST['cost'])){
        $query = "UPDATE product SET price='$price' WHERE product_id ='$id'";
    }
    $statement = $link->prepare($query);
    $statement->bind_param("i",$price);
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