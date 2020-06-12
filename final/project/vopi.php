<!DOCTYPE html>
<html>
<head>
    <title>Online Shop</title>
    <style>
        img{
            margin-top:-100px;
            margin-left: 50px;
        }
    </style>
</head>
<body>
</body>
</html>
<?php
include "bakery.php";
class vopi extends bakery{
    public function More(){
            $p = <<<HEREDOC
<div class ="a">
<img src ="https://www.kingarthurflour.com/sites/default/files/recipe_legacy/1058-3-large.jpg" alt ="Whoopie" width ="35%" heigth = "10%">
</div>
HEREDOC;
        print $p;
    }
}
$v = new vopi("Voopie",3000,"Chocolate,Mild cocoa flavor,Tangy buttermilk,Sweet vanilla");
$v->More();
