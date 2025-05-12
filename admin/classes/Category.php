<?php
    require_once "Db.php";

    class Category extends Db
    {
        private $dbconn;

        public function __construct(){
            $this->dbconn= $this->connect();
        }


        public function addCategory()
    }

?>