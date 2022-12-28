<?php
include_once '../repository/UserRepo.php';
include_once '../models/user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['name']) || 
    empty($_POST['username'])||
    empty($_POST['email'])||
    empty($_POST['password'])){
        echo '<script>alert("Fill all fields!");</script>';
    }
    else{
        $id =rand(100,999);
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role='customer';

        

        $user = new User($id,$name,$username,$email,$password,$role);
        $userR = new UserRepo;
        $userR->insertUser($user);       
    }
}

?>