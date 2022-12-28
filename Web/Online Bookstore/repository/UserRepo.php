<?php
include_once '../database/dbConnect.php';

class UserRepo{
    private $connection;

    function __construct(){
        $conn = new dbConnect;
        $this->connection=$conn->connectDB();
    }

    function insertUser($user){
        $conn = $this->connection;

        $id=$user->getId();
        $name=$user->getName();
        $username=$user->getUsername();
        $email=$user->getEmail();
        $password=$user->getPassword(); 
        $role='customer'; 
        
        $sql = "INSERT INTO user (id,name,username,email,password,role) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$id,$name,$username,$email,$password,$role]);
        
        echo '<script>alert("Registered!");</script>';
    }

    function getUsers(){
        $conn= $this->connection;

        $sql= "SELECT * FROM user";

        $statement= $conn->query($sql);
        $users = $statement->fetchAll();
        return $users;
    }

    function getUserById($id){
        $conn= $this->connection;

        $sql= "SELECT * FROM user WHERE id='$id'";

        $statement= $conn->query($sql);
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    function updateUser($id,$name,$username,$email,$password,$role){
        $conn= $this->connection;

        $sql = "UPDATE user SET name=?, username=?, email=?, password=?, role=? where id=?";
        
        $statement= $conn->prepare($sql);
        $statement->execute([$name,$username,$email,$password,$role,$id]);
        

        echo '<script>alert("Updated!");</script>';
    }
    function deleteUser($id){
        $conn= $this->connection;

        $sql = "DELETE FROM user where id=?";
        
        $statement= $conn->prepare($sql);
        $statement->execute([$id]);
        

        echo '<script>alert("Deleted!");</script>';
    }

    function login(){

        $conn = $this->connection;
        $email=$_POST['email'];
        $password=$_POST['password'];
           $sql = "SELECT username, role, password FROM user WHERE email='$email'";
        $statement = $conn->query($sql);
           $user = $statement->fetch(PDO::FETCH_ASSOC);

        if($statement->rowCount() < 1){
               echo "<script> alert('Email entered incorrectly!'); </script>";
        }
        else{
            if ($password != $user['password']) {
                echo "<script> alert('Password entered incorrectly!'); </script>";
            }
            else{
                session_start();
                $_SESSION['username'] = $user['username'];
                $_SESSION['role']= $user['role'];
                
                header("location:../view/main.php");

                }
        
            }
            
        }
    }
    





?>