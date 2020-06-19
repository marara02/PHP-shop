<?php
session_start();

$con = mysqli_connect('localhost','root', '');
mysqli_select_db($con, 'project1');
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$telnum = $_POST['telnum'];
$address = $_POST['address'];
$s = "SELECT * FROM registration where email = '$email'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
if($num == 1){
    echo "ERROR";
}else{
    $reg = "INSERT into registration(full_name,email,telnum,password) values ('$full_name','$email','$telnum','$address')";
    mysqli_query($con,$reg);
    header('location:pay1.php');
}
?>





