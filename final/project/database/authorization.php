<?php
include_once 'Database.php';
include_once 'configuration.php';

try{
    $conn = new Database(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
    $link = $conn->connect();
    if($link == false){
        throw new Exception("Oops something went wrong");
    }
}
catch(MySQLException $e){
  $e->getMessage();
}
catch (Exception $e){
    print "Oops something went wrong, check database";
}
