<?php
include_once 'database/authorization.php';
class Vacancy extends head{

    public function setPosition($position)
    {
        parent::setPosition($position); // TODO: Change the autogenerated stub
    }
    public function getPosition()
    {
        return parent::getPosition(); // TODO: Change the autogenerated stub
    }

    public function setSalary($salary)
    {
        parent::setSalary($salary); // TODO: Change the autogenerated stub
    }
    /*public function ShortDescription(){
        echo "<p>We are waiting you, join our team</p>";
        if($this->getPosition() == "SMM manager"){
            echo "  <div class=\"jumbotron\" style=\"background-color: #ABEBC6\">
                     <p>The Social Media Manager is a highly motivated, creative individual with experience and a passion for connecting with current and future customers. That passion comes through as she/he engages with customers on a daily basis, with the ultimate goal of:
                     -Turning fans into customers.
                     -Turning customers into advocates.</p></div>";
        }
    }*/
    public function getSalary()
    {
        return parent::getSalary(); // TODO: Change the autogenerated stub
    }
    public function setDescription($description)
    {
        parent::setDescription($description); // TODO: Change the autogenerated stub
    }
    public function getDescription()
    {
        return parent::getDescription(); // TODO: Change the autogenerated stub
    }
}