<?php
    if(isset($_POST['loginBtn'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo "<script>alert(\"Fill all fields!\");</script>";
        }
        else{
           $username = $_POST['username'];
           $password = $_POST['password'];
           include_once 'users.php';
           $i=0;
           foreach($users as $user){
               $i++;
               if($username == $user['username']&& $password == $user['password']){
                   echo $username;
                   echo $password;

                   session_start();
                   $_SESSION['username']= $username;
                   $_SESSION['password']= $password;
                   $_SESSION['role']= $user['role'];
                   
                   header("location:../view/main.php");

                   exit();
               }
               else{
                   if($i==sizeof($users)){
                    echo "Incorrect Username or Password";
                    exit();
                   }
               }
           }
        }
    }
?>