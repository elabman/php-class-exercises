<?php
require_once('customer.php');
class CustomerOrder extends Customer{

    public function __construct(){
        echo "This is the constructor of the child class";
        parent::__construct();
    }

    public function register(){
        
    }
}
?>