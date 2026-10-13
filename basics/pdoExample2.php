<?php
/**
 * connect to a database in mariadb named students_db with username as uid_student and password as _N0password using pdo
 */
error_reporting(E_ALL);
ini_set('display_errors',1);
require_once('dbConfig.php');
try{
$cnx = new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASSWORD,[PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION]);
    echo 'Connection successful';
}
catch(PDOException $e){
    echo 'connection failed with error:  '.$e->getMessage();
}
?>