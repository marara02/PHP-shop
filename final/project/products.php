<?php
include_once 'database/authorization.php';

 abstract class products{
    public $category;
    public function __construct($category)
    {
        $this->category=$category;
    }

    public function AboutProduct(){
        echo "<h2 id ='category'>$this->category.</h2>";
    }

    public function go_to_another(){

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
 }