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
include_once 'database/authorization.php';

class cake extends bakery
{
    public function display()
    {
        $pp = <<<HEREDOC
<div class ="a">
<img src ="image/r.jpg" alt ="Red velvet" width ="35%" heigth = "10%">
</div>
HEREDOC;
        print $pp;
    }
}
if(isset($_POST['button'])) {
    $sql = "SELECT * FROM `product` WHERE product_name = 'Red Velvet'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $cc = $row['price'];
        }
    }
}
    $cake = new cake("Cake", 2000, "Mild cocoa flavor,Tangy buttermilk,Sweet vanilla,Very buttery");
    $cake->display();
?>