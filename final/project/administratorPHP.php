<?php
include_once 'database/authorization.php';
session_start();

$array = array();
if(isset($_POST['change'])){
	$change = $_POST['change'];
	if($change=="Delete"){
		$id = $_POST['id'];
		$query = "DELETE FROM `product` WHERE `product_id` = ?";
		$stmt = mysqli_stmt_init($link);
	    if(!mysqli_stmt_prepare($stmt, $query)){
	    	$array = array("msg" => "SQL statement failed.");
	    } else {
	        mysqli_stmt_bind_param($stmt, "i", $id);
	        mysqli_stmt_execute($stmt);
	        $array = array("msg" => "del");
	    }
	}
	
	if($change=="Update"){
		$id = $_POST['id'];
		$cost = $_POST['cost'];
		$query = "UPDATE `product` SET `price`=? WHERE `product_id` = ?";
		$stmt = mysqli_stmt_init($link);
	    if(!mysqli_stmt_prepare($stmt, $query)){
	    	$array = array("msg" => "SQL statement failed.");
	    } else {
	        mysqli_stmt_bind_param($stmt, "ii", $cost, $id);
	        mysqli_stmt_execute($stmt);
	        $array = array("msg" => "upd");
	    }
		
	}
}

echo json_encode($array);
?>