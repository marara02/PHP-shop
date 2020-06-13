<!DOCTYPE html>
<html>
<head>
    <title>Online Shop</title>
    <style>
        .main{
            margin-top:80px;
            margin-left: 40%;
        }
        select {
            width: 10%;
        //text-align: center;
            font-size: 20px;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2) inset, 0 -1px 0 rgba(0, 0, 0, .05) inset;
        }
        input[type = submit]{
            font-size:20px;
            border-radius: 10px;
            background-color: #239B56;
        }
        input[type = "submit"]:hover {
            box-shadow: 0 0 0 1px #4CAF50 inset, 0 1px 2px rgba(0, 0, 0, .2) inset;
        }
        img{
            margin-top:-100px;
            margin-left: 50px;
        }
        .type{
            margin-left:26px;
        }
        .type2 li{
            display: inline-block;
            font-size: 20px;
            padding: 20px;
        }
        .b{
            font-size: 25px;
            font-family: Apple Chancery, cursive;
            text-align: center;
            color:#4CAF50
        }
    </style>
</head>
</html>

<?php
include 'Bakkery.php';
include_once 'database/authorization.php';
class bakery{
     public $type;
     public $cost;

     public function __construct($type,$cost)
     {
         $this->$type = $type;
         $this->$cost = $cost;
     }

     public function __destruct()
     {
     }

}