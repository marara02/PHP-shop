<?php
include 'Bakkery.php';
include_once 'database/authorization.php';

class bakery{
     public $product_name;
     public $cost;

     public function __construct($product_name,$cost)
     {
         $this->$product_name = $product_name;
         $this->$cost = $cost;
     }

    /**
     * @param mixed $cost
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
    }

    /**
     * @return mixed
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param mixed $product_name
     */
    public function setProductName($product_name)
    {
        $this->product_name = $product_name;
    }
    /**
     * @return mixed
     */
     public function getProductName()
    {
        return $this->product_name;
    }

     public function display1(){

     }
     public function __destruct()
     {
     }

}