<?php
include 'meat.php';
class chicken extends meat
{
    public function weight()
    {
        parent::weight();
        print '<article class ="picture">';
        print '<img src ="chicken.jpg" alt ="meat" width ="50%" height ="40%">';
        //print '<button id ="like"><img src = "like.png" alt = "Like" width = "20px" height ="20px"></button>';
        //print '<button id = "dislike"><img src = "dislike.png" alt = "Like" width = "15px" height ="15px"></button>';
        print '<select name="Weight">';
        for ($weightmin = 1; $weightmin <= 3; $weightmin += 1) {
            print "<option>$weightmin</option>";
        }
        print '</select>';
        print '<input type="submit" id ="button" value ="Add to basket"</input>';
        print '</article>';
    }
    public function type(){
    $f = <<<Hr
<aside class ="type">
<ul class ="type2">
<form action='' method='POST'>
<li><input type ="submit" name ="first" value ="Whole Chicken"></li>
<li><input type ="submit" name ="second" value="Breast"</input></li>
<li><input type ="submit" name ="third" value="Chicken legs"</input></li>
</ul>
</form>
</aside>
Hr;
print $f;
if(isset($_POST["first"])){
    echo 'Cost is:900<small>tg</small>';
}
elseif (isset($_POST["second"])){
    echo 'Cost is:1200<small>tg</small>';
}
else {
    echo 'Cost is:1000 <small>tg</small>';
}
    }
}
$chicken = new chicken("900","Kazakhstan, Almaty");
$chicken->weight();
$chicken->type();