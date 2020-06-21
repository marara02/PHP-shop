<?php
 $lang = "ru";
 if(isset($_POST['lang'])){
     setcookie('languages',$lang,time()+3600,'/',"",0);
     header("Location:/drink.php");
 }