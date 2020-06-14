<?php
if(!empty($_POST["fname"])){
$fname = $_POST["fname"];
$username = $_POST["username"];

require_once "database/authorization.php";

if (isset($_POST['fname']) && isset($_POST['username'])){
$sql = "UPDATE product SET price = '$fname',WHERE product_name = '$username' ";
}
$stmt = $link->prepare($sql);
$stmt->bind_param("i", $fname);
$stmt->execute();
$result = $stmt->get_result();

$row = $result->fetch_assoc();
if ($link->query($sql) === TRUE) {
$return = array(
'message' => "success"
);
} else {
$return = array(
'message' => "Error updating record: . $link->error'"
);
}
}else{
$return = array(
'errorMessage' => "All fields are required!"
);
}
echo json_encode($return);
