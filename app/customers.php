<?php
    require_once('config/database.php');
    require_once('models/baseModel.php');
    require_once('models/customerModel.php');

    if(isset($_POST['register'])){
        $cm = new CustomerModel("",$_POST['name'], $_POST['email'],$_POST['phone'],$_POST['dob'],$_POST['pa'],$_POST['nid']);

        $result = $cm->save();
        if($result["status"] ==="success")
            echo "customer saved successfuly with Id: ".$result["message"];
        else
            echo "An error occured ".$result["message"];
    }
?>