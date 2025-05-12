<?php
    require_once "Db.php";
 class Register extends Db
 {
    private $dbconn; //This property is created to store database connection
    public function __construct()
    {
        $this->dbconn= $this->connect(); // This is where i stored the database connection coming from db.php to $dbconn property. So, instead of having to call function connect everytime i need it, i will use dbconn instead.
    }

    public function adminSignIn($email, $password){
    $sql= "SELECT * FROM admins WHERE email = ? LIMIT 1";
    $stmt = $this->dbconn->prepare($sql);
    $stmt->execute([$email]);
    $saved = $stmt->fetch(PDO::FETCH_ASSOC);

    if($saved){
        $hashed = $saved['password'];
        $check = password_verify($password, $hashed);

        if($check){
            return $saved;
        }else{
            $_SESSION['errormsg']= "Incorrect Password";
            return false;
        }
    }else{
        $_SESSION['errormsg']="Invalid E-mail";
        return false;
    }
    }

    function signOut(){
        session_destroy();
    }

 }  

 
?>