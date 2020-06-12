<!DOCTYPE html>
<html>
<head>
    <title>Beef</title>
    <style>
        .in{
            display:block;
        }
    </style>
</head>
</html>
<?php
include 'meat.php';

class beef extends meat
{
    public function weight()
    {
        parent::weight();

         print '<div class ="picture">';
         print '<img src ="image/beef.jpg" alt ="meat" width ="80%" height ="60%">';
         //print '<button id ="like"><img src = "like.png" alt = "Like" width = "20px" height ="20px"></button>';
         //print '<button id = "dislike"><img src = "dislike.png" alt = "Like" width = "15px" height ="15px"></button>';
        print '<article>';
        print '<select name="Weight">';
         for ($weightmin = 1; $weightmin <= 10; $weightmin += 1) {
             print "<option>$weightmin</option>";
         }
         print '</select>';
         print '<a href ="drink.php"><input type="submit" id ="button" value ="Add to basket"</input></a>';
         print '</article>';
         print '</div>';
    }
}
$beef = new beef(2800,"Kazakhstan");
$beef->weight();