<?php
include_once('database/authorization.php');


if(isset($_POST)) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $tel_num = '10000';
    $cost = $_POST['cost'];
    try{
    $sql = "INSERT INTO `orders`( `Full_name`, `email`, `address`, `telnum` ,`Total_price`) VALUES (?,?,?,?,?)";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("ssssi",$full_name,$email,$address,$tel_num,$cost);
    $result = $stmt->execute();
    $stmt->close();
    if ($result) {
        echo 'Successfully saved';
    } else {
        throw new Exception("Something went wrong");
    }
}
catch (Exception $exception){
        print "An Exception occurred. Message:" .$exception->getMessage();
    }
    catch (Error $error){
        print "An error occurred. Message:".$error->getMessage();
    }
}
else{
    echo 'No data';
}
?>