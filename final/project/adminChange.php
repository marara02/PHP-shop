<?php  
include_once 'database/authorization.php';
session_start();

if(!isset($_SESSION['admin_id'])){
	header("Location: main.php");
}
$change = "";
$id = "";
$cost = "";


if($_GET){
	$change = $_GET['change'];
	$id = $_GET['id'];
	$cost = $_GET['cost'];
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>adminPanel</title>
</head>
<body>
	<form>
		<input type="text" name="change" id="change" value="<?php echo $change ?>">
		<input type="text" name="id" id="id" value="<?php echo $id ?>">
		<input type="text" name="cost" id="cost" value="<?php echo $cost ?>">
		<h1>Do you want to save changes?</h1>
		<input type="submit" name="submit" id="submit" value="Yes">
		<a href="mixed1.php">No</a><br>
		<span id="infor">ss</span>
	</form>

	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script>
		$(document).ready(function() {
                $("#submit").click(function() {
	                event.preventDefault();
	                $.ajax('administratorPHP.php',{
	                    type:'POST',
	                    data:{
	                    	change:$('#change').val(),
	                        id:$("#id").val(),
	                        cost:$("#cost").val()
	                    },
	                    accepts:'application/json; charset=utf-8',
	                        success:function(data) {
	                        	var data = JSON.parse(data);
	                            if(data.msg=='del'){
	                                $("#infor").html('Deleting successfully');
	                            }
	                            if(data.msg=='upd'){
	                                $("#infor").html('Update successfully');
	                            }
	                        }
	                });
                });
            });
	</script>
</body>
</html>