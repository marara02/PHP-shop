<?php
include_once('database/authorization.php');


if(isset($_POST)) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $tel_num = $_POST['number'];
    $cost = $_POST['cost'];
    $sql = "INSERT INTO `orders`( `Full_name`, `email`, `address`, `telnum` ,`Total_price`) VALUES (?,?,?,?,?)";

    $stmt = $link->prepare($sql);
    $stmt->bind_param("ssssi",$full_name,$email,$address,$tel_num,$cost);
    $result = $stmt->execute();
    $stmt->close();
    if ($result) {
        echo 'Successfully saved';
    } else {
        echo 'There were errors while saving the data.';
    }
}
else{
    echo 'No data';
}
?>