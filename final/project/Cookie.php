<?php
include 'bakery.php';

class Cookie extends bakery
{
    public function dis()
    {
        $c = <<<HEREDOC
<div class ="a">
<img src ="image/cook.jpg" alt ="Cookie" width ="35%" heigth = "10%">
</div>
HEREDOC;
        print $c;
    }
}
$cookie = new Cookie("Cookie",500,"MilkyShake, Flour and chocolate");
$cookie->dis();