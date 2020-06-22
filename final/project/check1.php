<?php

include_once 'database/authorization.php';
session_start();
$text = array();
if (!empty($_POST['user']) && !empty($_POST['pass1'])) {
    $user = $_POST['user'];
    $password = $_POST['pass1'];
    $query = "SELECT * FROM admins WHERE admin_name = ? AND admin_password = ?";
    $stmt = mysqli_stmt_init($link);
    if(!mysqli_stmt_prepare($stmt, $query)){
        echo "SQL statement failed.";
    } else {
        mysqli_stmt_bind_param($stmt, "ss", $user, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
    }
    $row = mysqli_fetch_assoc($result);
    if (!empty($row['admin_id'])) {
        $text = array("msg" => "success");
        $_SESSION['admin_id'] = $row['admin_id'];
    } else {
        $text = array("msg" => "error");
    }
} else {
    $text = array("msg" => "fill");
}
echo json_encode($text);