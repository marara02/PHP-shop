<!DOCTYPE html>
<html>
<head>
    <title>Meat</title>
    <style>
        .info{
            margin-left:50px ;
            margin-top: 20px;
            overflow: hidden;
        }
        select{
            margin-left: 60px;
        }
        .picture{
            display: inline-block;
            margin-left: 30px;
        }
        #jai{
            font-family: Bookman;
            font-size: 20px;
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
        span{
            color:#239B56;
            font-size: 20px;
        }
        .type2 li{
            display: inline-block;
            font-size: 20px;
            padding: 20px;
        }
    </style>
</head>
</html>
<?php
include 'Bakkery.php';

class meat{
    public $cost;
    public $country;
    public function __construct($cost,$country)
    {
        $this->cost = $cost;
        $this->country = $country;
        print '<div class = "info">';
        print "<p><b><span>Cost:</span>$cost tg</b></p>";
        print "<p><b><span>Country of production:</span>$country</b>";
        print '</div>';
    }
    public function __destruct()
    {
    }
    public function weight()
    {
        print '<div class ="picture">';
        print '</div>';
    }
}
