<?php
include 'meat.php';

class Duck extends meat
{
public function weight()
{
    parent::weight();
    print '<article class ="picture">';
    print '<img src ="image/duck.jpg" alt ="meat" width ="50%" height ="40%">';
    //print '<button id ="like"><img src = "like.png" alt = "Like" width = "20px" height ="20px"></button>';
    //print '<button id = "dislike"><img src = "dislike.png" alt = "Like" width = "15px" height ="15px"></button>';
    print '<input type="submit" id ="button" value ="Add to basket"</input>';
    print '</article>';
}
}
$duck = new Duck("890","Kazakhstan");
$duck->weight();