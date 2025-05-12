<?php
require_once "config.php";
class Db
{
    private $dbname = DBNAME;
    private $dbhost = DBHOST;
    private $dbuser = DBUSER;
    private $dbpass = DBPASS;

   protected function connect(){
    $dsn = "mysql:host=$this->dbhost;dbname=$this->dbname;";
    $option =[PDO:: ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION];

    try{
        $connection = new PDO($dsn, $this->dbuser, $this->dbpass, $option);
        return $connection;
    }catch(PDOException $e){
        return false;
    }

   }
}