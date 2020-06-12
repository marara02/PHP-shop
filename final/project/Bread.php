<?php
include 'bakery.php';

class Bread extends bakery
{
    public function bbb(){
        $br = <<<HEREDOC
<div class ="a">
<img src ="https://www.biggerbolderbaking.com/wp-content/uploads/2020/04/Hearty-Yeast-Free-Bread-WS-Thumbnail.jpg" alt ="Cookie" width ="35%" heigth = "26%">
</div>
HEREDOC;
        print $br;
    }
    public function choose(){
        $b = <<<Hr
<aside class ="type">
<ul class ="type2">
<form action='' method='POST'>
<li><input type ="submit" name ="first" value ="Roll"></li>
<li><input type ="submit" name ="second" value="Lozenge"</input></li>
<li><input type ="submit" name ="third" value="Buns"</input></li>
</ul>
</form>
</aside>
Hr;
        print $b;
        if(isset($_POST["first"])){
            echo 'Cost is:90<small>tg</small>';
        }
        elseif (isset($_POST["second"])){
            echo 'Cost is:180<small>tg</small>';
        }
        else {
            echo 'Cost is:200 <small>tg</small>';
        }
    }
}
$bread = new Bread("Flour products",100,"Flour and milk,sugar");
$bread->bbb();
$bread->choose();