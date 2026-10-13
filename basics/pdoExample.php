<?php
/**
 * Establish connectionto db using PDO
 * connect to a db named money_lending_db with username as root and pasword as wordpass
 */
error_reporting(E_ALL);
ini_set('display_errors',1);
//ini_set('upload_max_filesize','20M');
 $dsn = "mysql:host=localhost;dbname=money_lending_db";
 try{
 $cnx = new PDO($dsn,"root", "W0rdpa5%",[ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    echo 'Connection successful';
 }
 catch(PDOException $e){
    //echo $e->getMessage();
    echo 'Cannot access database, contact admin';
 }


?>