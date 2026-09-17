<?php
require_once('orderTemplate.php');

class Order implements orderTemplate{
    private $orderId;
    private  $data = [["Id" =>1, "name"=>"Eric", "phone"=>"078683738"],["Id" =>2, "name"=>"John", "phone"=>"078683737"]];
    
    public function register(){
        array_push($this->data, ["Id"=>3, "name"=>"Jean Luc", "phone" => "072298383"]);
        return $this->data;
    }

    public function getAll(){
        return $this->data;
    }

    public function getById($id){
        //
        return $this->data;
    }
}

$order = new Order();
$data = $order->register();
print_r($data);

?>