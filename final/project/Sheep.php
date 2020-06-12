<?php
include 'meat.php';

class Sheep extends meat
{
public function weight()
{
    parent::weight();

    print '<div class ="picture">';
    print '<img src ="image/sheep.jpg" alt ="meat" width ="80%" height ="60%">';
    //print '<button id ="like"><img src = "like.png" alt = "Like" width = "20px" height ="20px"></button>';
    //print '<button id = "dislike"><img src = "dislike.png" alt = "Like" width = "15px" height ="15px"></button>';
    print '<article>';
    print '<select name="Weight">';
    for ($weightmin = 1; $weightmin <= 3; $weightmin += 1) {
        print "<option>$weightmin</option>";
    }
    print '</select>';
    print '<input type="submit" id ="button" value ="Add to basket"</input>';
    print '</article>';
    print '</div>';
}
}
$sheep = new Sheep(1500,"Kazakhstan");
$sheep->weight();