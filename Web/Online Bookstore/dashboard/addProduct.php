<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    
    <link rel="stylesheet" href="../css/addProduct.css">
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
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <h2>Add Products</h2><br>
            <input type="text" name="productName" id="pname" placeholder="Product Name"><br>
            <input type="text" name="authorName" id="aname" placeholder="Author Name"><br>
            <input type="text" name="description" id="pdesc" placeholder="Description"><br>
            <input type="text" name="price" id="price" placeholder="Price"><br>
            <input type="text" name="category" id="category" placeholder="Category"><br>

            <input type="submit" value="Add Product" class="btn" id="addProd" name="addBtn">
        </form>
        </div>
        
    </div>
</main>

<?php
include_once('../controller/productController.php');

?>
    
</body>
</html>