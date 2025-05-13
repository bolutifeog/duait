<?php
   require_once "Db.php";

   class Category extends Db
   {
        private $dbconn;

        public function __construct(){
            $this->dbconn=$this->connect();
        }

        public function addCategory($name, $description){
            $sql= "INSERT INTO categories(cat_name,description)VALUES(?,?)";
            $stmt=$this->dbconn->prepare($sql);
            $stmt->execute([$name, $description]);
            return $this->dbconn->lastInsertId();
        }

        public function fetchAllCategory(){
            // public function fetchCategory($Id){
            //Adding a parameter is used when i only what to fetch a category by ID and not the list of categories.
            $sql = "SELECT * FROM categories";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute();
            $saved = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $saved;
        }
   }

//    $addcat1= new Category;
//    $addcat2 = $addcat1->addCatigory("Healing", "Pour out your dua for dealing- of body, heart and soul.....");
//    echo "<pre>";
//    print_r($addcat2);
//    echo"</pre>";

?>