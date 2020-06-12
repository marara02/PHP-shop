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
class honey extends bakery
{
    public function display()
    {
        $ppp = <<<HEREDOC
<div class ="a">
<img src ="https://i.ytimg.com/vi/v9nI6pdw-HQ/maxresdefault.jpg" alt ="Red velvet" width ="35%" heigth = "10%">
</div>
HEREDOC;
        print $ppp;
    }
}
$cake1 = new honey("Japanese cake",1500,"Honey and milkShake");
$cake1->display();
