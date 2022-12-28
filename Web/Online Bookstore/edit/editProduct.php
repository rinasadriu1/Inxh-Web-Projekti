<?php 
include_once('../repository/ProductRepo.php');
$prodId = $_GET['pid'];
$prodR = new ProductRepo();
$product = $prodR->getProductById($prodId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Products</title>
    
    <link rel="stylesheet" href="../css/addProduct.css">
    <style>
        table,th,td {
            border:solid 1px;
            color:#000;
        }
        td>a{
            color:#000;
        }
        
    </style>
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
    <form action="" method="post">
            <h2>Edit Product</h2><br>
            <input type="pid" id="pid" name="pid" value="<?=$product['pid'] ?>" readonly><br>
            <input type="pname" id="pname" name="pname" value="<?=$product['pname'] ?>" ><br>
            <input type="aname" id="aname" name="aname" value="<?=$product['aname'] ?>" ><br>
            <input type="pdesc" id="pdesc" name="pdesc" value="<?=$product['pdesc'] ?>"><br>            
            <input type="price" id="price" name="price" value="<?=$product['price'] ?>"><br>
            <input type="category" id="category" name="category" value="<?=$product['category'] ?>"><br>
            <input type="submit" value="Save" class="btn" id="saveBtn" name="saveBtn"><br><br>

        </form>
            </div>
            </div>
</main>
    
</body>
</html>

<?php
if(isset($_POST['saveBtn'])){
    $pid=$product['pid'];
    $pname=$_POST['pname'];
    $aname=$_POST['aname'];
    $pdesc=$_POST['pdesc'];
    $price=$_POST['price'];
    $category=$_POST['category'];

    $prodR->updateProduct($pid,$pname,$aname,$pdesc,$price,$category);
    header('location:../dashboard/allProducts.php');
}


?>