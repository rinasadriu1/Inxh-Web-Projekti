<?php 
include_once('../repository/UserRepo.php');
$userId = $_GET['id'];
$userR = new UserRepo();
$userR->deleteUser($userId);
header('location:../dashboard/users.php');
?>

