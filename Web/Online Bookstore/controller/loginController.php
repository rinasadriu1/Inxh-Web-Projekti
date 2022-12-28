<?php
include_once '../repository/UserRepo.php';

if(isset($_POST['loginBtn'])){
    $userRepository = new UserRepo();
    $userRepository->login();
    
}
?>