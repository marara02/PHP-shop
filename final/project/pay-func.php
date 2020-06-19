<?php


$cls = new Classs();

if (isset($_POST['submit'])) {
    $cls->Show();
}

class Classs
{
    private $cnum;
    private $cdate;
    private $cvc;

    function __construct()
    {
        $this->cnum = (isset($_POST['number']) ? $_POST['number'] : null);
        $this->cdate = (isset($_POST['expiry']) ? $_POST['expiry'] : null);
        $this->cvc = (isset($_POST['cvc']) ? $_POST['cvc'] : null);
    }

    function Show()
    {
        if (!empty($this->cnum) && !empty($this->cdate) && !empty($this->cvc)) {
            // need go to main page
            header('Location: pay1.php');
        } elseif (empty($this->cnum)) {
            require 'pay1.php';
            echo 'You need card number';
        } elseif (empty($this->cdate)) {
            require 'pay1.php';
            echo 'You need card date';
        } elseif (empty($this->cvc)) {
            require 'pay1.php';
            echo 'You need CVC';
        }
    }
}

