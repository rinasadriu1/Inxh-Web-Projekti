<?php 
include_once('../repository/ProductRepo.php');
$prodId = $_GET['pid'];
$prodR = new ProductRepo();
$prodR->deleteProduct($prodId);
header('location:../dashboard/allProducts.php');
?>

