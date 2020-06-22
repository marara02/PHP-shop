<?php

$db_user = "mnz";
$db_pass = "123456789";
$db_name = "project1";

$db = new PDO('mysql:host=localhost;dbname='. $db_name .';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION );
?>