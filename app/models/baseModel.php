<?php
/**
 * Base model for establishing connection to database
 */
abstract class BaseModel{
    protected $db;

    public function __construct(){
        $this->db = new PDO(DB_DRIVER.':host='.DB_HOST.';dbname='.DB_NAME, DB_USER,DB_PASSWORD,[PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION]);
    }

    abstract function save();
}
?>