
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Projekti Selmin & Ereza - Bookstore</title>
    <link rel="stylesheet" href="../css/style.css">
  

</head>

<body>

<?php
include('../snippet/navbar.php');
?>

<div class="slider">
        <div class="slider-content">
            <img src="../Img/banner.jpg" alt="">
        </div>
        <div class="slider-content">
            <img src="../Img/banner2.jpg" alt="">
        </div>
        <div class="slider-content">
            <img src="../Img/banner4.jpg" alt="">
        </div>
    </div>


    <br><br>
    
    <div class="bestseller">
    <h2><span>Best Sellers</span></h2>
    <br>
    <div class="products">
        <?php
        include_once "../repository/ProductRepo.php";

        $prodR = new ProductRepo;

        $products = $prodR->getBestSeller(); 

        foreach($products as $product): 
        ?>
                
                    <a href="productPage.php?pid=<?=$product['pid']?>" >
                    <div class="productblock">
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
                                    <img src="../Img\wishlist.png" alt="">
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    </a>
            
            <?php endforeach; ?>
    </div>
    </div>
    
<!------------------------------------------------------>
<br>

    <div class="comingMain">    
    <h2><span>Coming Soon</span></h2><br>
            <div class="comingHead">
            <?php
                include_once "../repository/ProductRepo.php";

                $prodR = new ProductRepo;

                $products = $prodR->getComingSoon(); 

                foreach($products as $product): 
            ?>
            
                
                <div class="comingBlock">
                    <img src="../Img/<?=$product['pname']?>.jpg" alt="">
                        <div class="comingText">
                            <p id="productName"><?=$product['pname']?></p>
                            <p id="author"><?=$product['aname']?></p>
                            <p id="textDesc"><Strong><?=$product['pdesc']?></Strong></p>
                            
                        </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>       
        <!------------------------------------------------------>
        
        <div class="reviews">
            
            <h2><span>Happy Customers</span></h2>
            <br>
            <div class="reviewsBlock">
                <div class="r">
                    <img src="..\Img\user1.jpg" alt="">
                    <h4>Name #1</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore saepe possimus accusamus accusantium delectus odio eius placeat ea atque! Nesciunt quibusdam placeat impedit corrupti, autem soluta tenetur! Quia, ipsum sed.</p>
                    <h4>&#11088;4.5</h4>
                </div>
                <div class="r">
                    <img src="..\Img\user2.png" alt="">
                    <h4>Name #2</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore saepe possimus accusamus accusantium delectus odio eius placeat ea atque! Nesciunt quibusdam placeat impedit corrupti, autem soluta tenetur! Quia, ipsum sed.</p>
                    <h4>&#11088;4.5</h4>
                </div>
                <div class="r">
                    <img src="..\Img\user3.jpg" alt="">
                    <h4>Name #3</h4>
                    <br>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore saepe possimus accusamus accusantium delectus odio eius placeat ea atque! Nesciunt quibusdam placeat impedit corrupti, autem soluta tenetur! Quia, ipsum sed.</p>
                    <h4>&#11088;4.5</h4>
                </div>
            </div>
        </div>
        <!------------------------------------------------------>
        <br>
        <br>
        <div class="newsletter">
            <div class="newsText">
                <h3 id="no-style">Subscribe to our Newsletter</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque tenetur numquam sapiente accusamus? Odit dolor voluptatem ut, ipsa blanditiis ipsam, atque officiis eos, accusamus aliquid quisquam ab maxime vel quam!</p>
                <div class="newsSearch">
                    <input type="text" id="textbox" placeholder="Enter a avalid email address:" style="font-size: 15px; padding-left: 15px; color:black;">
                    <a href=""><button id="submit">Submit</button></a>
                </div>
            </div>
            
            <img src="..\Img\newsletter.jpg" alt="">
        </div>
        

    

   
<?php
include('../snippet/footer.php');
?>

<script src="../js/indexJS.js"></script>
</body>

</html>
