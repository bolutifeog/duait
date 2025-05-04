<?php
    require_once "config.php";

    class Db
    {
        private $dbname = DBNAME;
        private $dbhost =  DBHOST;
        private $dbuser = DBUSER;
        private $dbpass = DBPASS;

        protected function connect(){
            $dsn=  "mysql:host=$this->dbhost;dbname=$this->dbname;";
            #Specifying what type of data base you are using
            $option = [PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION];

            try{
                #$this->dbconn=new PDO($dsn, "username", "password", $option);
                $conn = new PDO($dsn, $this->dbuser,$this->dbpass,$option);
                return $conn;
            }catch(PDOException $e){
                // return $e->getMessage();
                return false;
            }
           
            
            
        }
    }

?>