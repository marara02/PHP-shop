<?php


$cls = new Classs();

if (isset($_POST['submit'])) {
    $cls->Show();
}

class Classs
{

    private $fname;
    private $sname;
    private $cnum;
    private $cdate;
    private $cvc;
    private $add;
    private $city;
    private $zip;
    private $email;

    function __construct()
    {
        $this->fname = (isset($_POST['first-name']) ? $_POST['first-name'] : null);
        $this->sname = (isset($_POST['last-name']) ? $_POST['last-name'] : null);
        $this->cnum = (isset($_POST['number']) ? $_POST['number'] : null);
        $this->cdate = (isset($_POST['expiry']) ? $_POST['expiry'] : null);
        $this->cvc = (isset($_POST['cvc']) ? $_POST['cvc'] : null);
        $this->add = (isset($_POST['streetaddress']) ? $_POST['streetaddress'] : null);
        $this->city = (isset($_POST['city']) ? $_POST['city'] : null);
        $this->zip = (isset($_POST['zipcode']) ? $_POST['zipcode'] : null);
        $this->email = (isset($_POST['email']) ? $_POST['email'] : null);
    }

    function Show()
    {
        if (!empty($this->fname) && !empty($this->sname) && !empty($this->cnum) && !empty($this->cdate) && !empty($this->cvc) && !empty($this->add) && !empty($this->city) && !empty($this->zip) && !empty($this->email)) {
            // need go to main page
            header('Location: pay1.php');
        } elseif (empty($this->fname)) {
            require 'pay1.php';
            echo 'You need first name';
        } elseif (empty($this->sname)) {
            require 'pay1.php';
            echo 'You need last name';
        } elseif (empty($this->cnum)) {
            require 'pay1.php';
            echo 'You need card number';
        } elseif (empty($this->cdate)) {
            require 'pay1.php';
            echo 'You need card date';
        } elseif (empty($this->cvc)) {
            require 'pay1.php';
            echo 'You need CVC';
        } elseif (empty($this->add)) {
            require 'pay1.php';
            echo 'You need street address';
        } elseif (empty($this->city)) {
            require 'pay1.php';
            echo 'You need City';
        } elseif (empty($this->zip)) {
            require 'pay1.php';
            echo 'You need zipcode';
        } elseif (empty($this->email)) {
            require 'pay1.php';
            echo 'You need email';
        }

    }
}

