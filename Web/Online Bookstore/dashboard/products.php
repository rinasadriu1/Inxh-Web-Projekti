<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    
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
            <a href="../dashboard/addProduct.php"><input type="submit" value="Add Products"></a>
            <a href="../dashboard/allProducts.php"><input type="submit" value="All Products"></a>
            
        </div>
    </div>
</main>
    
</body>
</html>