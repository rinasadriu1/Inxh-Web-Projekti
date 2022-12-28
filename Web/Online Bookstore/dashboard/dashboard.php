<?php 
session_start();
if($_SESSION['role']!= "admin" ){
    header("location: ../view/main.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    <link rel="stylesheet" href="..\css\dashboard.css">
</head>
<body>
    <header>
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="..\img\logo.png" alt="">
                </div>
               
               
                <img src="..\Img\menuIcon.png" alt="" class="menuIcon" onclick="menuToggle()">
            </div>
        </div>
    </header>
<main>
    <?php 
        include('../dashboard/dashLeft.php');
    ?>
    <div class="rightMenu">
        <div class="cont1">
            <a href="../dashboard/products.php"><input type="submit" value="Products"></a>
            <a href="../dashboard/users.php"><input type="submit" value="Users"></a>
            
        </div>
    </div>
</main>
    
</body>
</html>
