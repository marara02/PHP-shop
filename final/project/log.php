<?php
include_once 'Bakkery.php';
if(!isset($_COOKIE['User'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<body>
<?php
if(isset($_COOKIE['User'])){
    echo '<h1 style="text-align: center">Be with us</h1>';
}
?>
<button a href="logout.php">Log out</button>
</body>
</html>
