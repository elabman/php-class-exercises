<?php
/**
 * 
 */

class Customer{
    private $id;
    private $name;
    public $email;
    private $phone;
    private $nid;

    /**
     * constructor
     */
    public function __construct($_name="",$_email="",$_phone="",$_nid=""){
        $this->nid= $_nid;
        $this->name = $_name;
        $this->email = $_email;
        $this->phone = $_phone;
        echo "I have executed ad the point of creating an object ".$this->name;
        return;
    }

    public function register(){
        echo "The new customer with Id".$this->nid." has been registered";
        //return;
        $this->nid = '345678954';
        for($i=0;$i<10;++$i){
            echo "Iam looping the numbers ".$i."<br />";
        }
    }

    public function setNid($nid){
        $this->nid = $nid;
    }

    public function getNid(){
        return $this->nid;
    }
}

//$customer = new Customer("noah","example@gmail.com","078738383","12345556544");
//$customer2 = new Customer("Noah","","","12345556544");
//echo $customer->_Nid();
/*$customer->email = "example@gmail.com";

$customer->setNid("123456");
//echo $customer->email;
  $customer->register();*/
?>