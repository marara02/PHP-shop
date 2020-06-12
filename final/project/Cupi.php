<?php
include 'bakery.php';

class Cupi extends bakery
{
    public function __construct($type, $cost, $recept)
    {
        parent::__construct($type, $cost, $recept);
        $this->cost = $cost;
        //print "'Cost:$cost'<small>per one cupcake</small>" ;
    }

    public function cu(){
$cup = <<<HEREDOC
<div class ="a">
<img src ="image/cap.jpg" alt ="Cookie" width ="35%" heigth = "26%">
</div>
HEREDOC;
print $cup;
}
}
$cupcakes = new Cupi("Cupcakes",450,"Flour, milk,cocoa, vanille cream");
$cupcakes->cu();