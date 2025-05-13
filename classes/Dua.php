<?php
    require_once "Db.php";

    class Dua extends Db
    {
        private $dbconn;
        public function __construct(){
            $this->dbconn=$this->connect();
        }

        public function addDua($title, $content, $userId, $catId){
            $sql= "INSERT INTO duas(dua_title, dua_content,user_id,cat_id)VALUES(?,?,?,?)";
            $stmt=$this->dbconn->prepare($sql);
            $stmt->execute([$title, $content, $userId, $catId]);
            return $this->dbconn->lastInsertId();

        }
    }

    // $addNewDua= new Dua;
    // $dua2 = $addNewDua->addDua("Healing from Emotional Pain","O Allah, I seek Your comfort and healing from the emotional pain that weighs on my heart. Ease the burdens of sorrow and grant me peace of mind. Help me to release all the hurt, and fill my soul with Your light and mercy. Guide me to find strength through patience, and restore tranquility to my heart. Protect me from despair and grant me the serenity to move forward with hope.","1", "1");
    // echo "<pre>";
    // print_r($dua2);
    // echo"</pre>";

?>