<?php
    require_once "Db.php";
    class Register extends Db
    {
        private $dbconn;

        public function __construct()
        {
            $this->dbconn=$this->connect();
        }

        public function signUp($fullname, $email, $password,$username){
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO users(user_fullname, user_email, user_password, username) VALUES(?,?,?,?)";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$fullname, $email, $hash, $username]);
            return $this->dbconn->lastInsertId();
        }

        public function signIn($email, $password){
            $sql = "SELECT * FROM users WHERE user_email = ? LIMIT 1 ";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$email]);
            $saved= $stmt->fetch(PDO::FETCH_ASSOC);

            if($saved){
                $hashed = $saved['user_password'];
                $check = password_verify($password, $hashed);

                if($check){
                    return $saved['user_id'];
                }else{
                    $_SESSION['errormsg']= "Incorrect Password";
                    return false;

                }
            }else{
                $_SESSION['errormsg']= "Invalid E-mail ";
                return false;
            }
        }

        public function userDashboard($id){
            $sql= "SELECT * FROM users WHERE user_id=?";
            $stmt = $this->dbconn->prepare($sql);
            $stmt->execute([$id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
    // $signup = new Register;
    // $signnup = $signup->signUp("Shukroh Boluwatife", "bolutifeogunbona@gmail.com","bolz@26","Shukrohhhh");
    // echo"<pre>";
    // print_r($signnup);
    // echo "</pre>";

    
?>