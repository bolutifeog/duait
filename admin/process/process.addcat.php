<?php
    session_start();
    require_once "../classes/Category.php";
    require_once "../classes/Library.php";
    
    if(isset($_POST['btnn'])){
        
        $name = sanitize($_POST['category']);
        $des = sanitize($_POST['description']);

        if(trim($name)==""|| trim($des)==""){
            $_SESSION['errormsg']="Please complete the fields";
            header("location:../addcat.php");
            exit();

        }else{
            $addcat1= new Category;
            $addcat2= $addcat1->addCategory($name, $des);

            // var_dump($addcat2);
            // exit();
        }

        if($addcat2){
            //Storing the below into session
            $_SESSION['cat_id']= $addcat2;
            $_SESSION['cat_name']= $name;
            $_SESSION['description']= $des;
            $_SESSION['feedback']= "You have successfully added a category";
            header("location:../dashboard.php");
            exit();
            
        }else{
            $_SESSION['errormsg'] = "An error uploading";
            header("location:../addcat.php");
            exit(); 
        }
    }else{
        $_SESSION['errormsg'] = "All fields required";
        header("location:../addcat.php");
        exit(); 
    }
?>