<?php
include 'meat.php';

class Horse extends meat
{
public function weight()
{
    parent::weight();
    print '<article class ="picture">';
    print '<img src ="image/horse.jpg" alt ="meat" width ="50%" height ="50%">';
    //print '<button id ="like"><img src = "like.png" alt = "Like" width = "20px" height ="20px"></button>';
    //print '<button id = "dislike"><img src = "dislike.png" alt = "Like" width = "15px" height ="15px"></button>';
    print '<select name="Weight">';
    for ($weightmin = 1; $weightmin <= 4; $weightmin += 1) {
        print "<option>$weightmin</option>";
    }
    print '</select>';
    print '<input type="submit" id ="button" value ="Add to basket"</input>';
    print '</article>';
}
}
$horse = new Horse(1450,"Kazakhstan");
$horse->weight();