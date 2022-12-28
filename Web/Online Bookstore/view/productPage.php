
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Projekti Selmin & Ereza - Bookstore</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/productPage.css">

  

</head>

<body>

<?php
include('../snippet/navbar.php');
?>
    <div >
    
    <br>
    <div class="products">

    <?php
        include_once "../repository/ProductRepo.php";

        $prodR = new ProductRepo;
        $prodID = $_GET['pid'];
        $product = $prodR->getProductById($prodID); 

        
        ?>
    <div class="product">
    <img src="../Img/<?=$product['pname']?>.jpg" alt="">

    <div class="productRight">
                <div class="productText">
                    <p id="productName"><?=$product['pname']?></p>
                    <p id="author"><?=$product['aname']?></p>
                    <p id="textDesc"><Strong><?=$product['pdesc']?> 
                        </Strong></p>
                </div>
                <div class="price">
                    <p id="price"><strong><?=$product['price']?></strong></p><br>
                    <div class="buttons">
                        <button id="submit">Add to Cart</button>
                        
                    </div>
                </div>
            </div>
    </div>
    </div>

        </div>
    </div>
    
   

<?php
include('../snippet/footer.php');
?>
</body>

</html>
