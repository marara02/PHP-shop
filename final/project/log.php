<?php

session_start();

$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'project1');
$email = $_POST['email'];
$password = $_POST['pass1'];
$s = "SELECT * FROM registration where email = '$email' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    $query = "SELECT full_name FROM registration";
    $result2 = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result2);
    $fullname = $row['full_name'];
    $_SESSION['fullname'] = $fullname;
    header('location:homepage.php');
} else {
    $message = "ERROR";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('location:login.php');
}

