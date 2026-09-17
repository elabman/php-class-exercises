<?php
define("DB_NAME", "money_lending_db");
//echo DB_NAME;
$db_name = "money_lending_db";
//echo $db_name;
/*
$day = "Thursday";
switch($day){
    case "Monday":
    case "Tuesday":
        echo "First two days of the week <br />";
        break;
    case "Wednesday":
    case "Thursday":
        echo "Still in the week <br />";
        break;
    default:
        echo "Unknown";
}*/
//indexed
$customers = ["Noah","Eric","Baraka","Kimenyi"]; 

print_r($customers);
array_push($customers, "Grace");

//associative array

$customers2 = [["id"=>1,"name"=>"Noah","phone"=>"078374848","email"=>"example@gmail.com"],
["id"=>2,"name"=>"Kimenyi","phone"=>"0374848","email"=>"example@gmail.com"],
["id"=>3,"name"=>"Brenda","phone"=>"0783748","email"=>"example3@gmail.com"],
["id"=>4,"name"=>"Grace","phone"=>"098498494","email"=>"exampl2@gmail.com"]];
print_r($customers2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="1">
        <thead><th>No</th><th>Name</th><th>phone</th>email<th></thead>
      <!--  <tr><td>1</td><td>Noah</td></tr>
        <tr><td>2</td><td>Kimenyi</td></tr>
        <tr><td>3</td><td>Sandra</td></tr>
        <tr><td>4</td><td>Baraka</td></tr>
        <tr><td>5</td><td>Grace</td></tr> -->
        <?php
           /* $i = 0;
            foreach($customers as $customer){
                $i += 1;
                ?>
                <tr><td><?=$i?></td><td><?=$customer?></td></tr>
                <?php
            } */
            foreach($customers2 as $customer){
                ?>
                <tr><td><?=$customer["id"]?></td>
                <td><?=$customer["name"]?></td>
                <td><?=$customer["phone"]?></td>
                <td><?=$customer["email"]?></td>
            </tr>
                <?php
            }

        ?>
    </table>
</body>
</html>
