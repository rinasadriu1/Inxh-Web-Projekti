<?php

include_once '../repository/AuditRepo.php';
include_once '../repository/ProductRepo.php';
include_once '../models/product.php';


if(isset($_POST['addBtn'])){
    if(empty($_POST['productName']) || 
    empty($_POST['authorName'])||
    empty($_POST['description'])||
    empty($_POST['price'])||
    empty($_POST['category'])){
        echo '<script>alert("Fill all fields!");</script>';
    }
    else{
        $pid =rand(1,100);
        $pname = $_POST['productName'];
        $aname = $_POST['authorName'];
        $pdesc = $_POST['description'];
        $price = $_POST['price'];
        $category = $_POST['category'];

        

        $product = new Product($pid,$pname,$aname,$pdesc,$price,$category);
        $prodR = new ProductRepo;
        $prodR->insertProduct($product);


}


?>