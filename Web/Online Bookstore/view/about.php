<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTPAGE</title>
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" href="..\css\aboutStyle.css">
</head><body>
    <?php
    include('../snippet/navbar.php');
    ?>
    
<main>

    <h1>Welcome to the Bookstore, <?php echo $_SESSION['username'] ?></h1>
    <div class="cont1">
        <img src="..\Img\books.jpg" alt="">
        <div class="text">
        <h1>About Us</h1>
        <p>We are a small startup company based in Kosovo. We belive that books are essential for human developement and are a great source of knowledge. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore ad possimus deserunt provident eveniet iusto! Provident magnam sit ad qui quod expedita consequatur minima optio iure illo. Nisi, neque quod?</p>
        <p><strong>Need more information?<a href="..\html\contact.html">  Contact us.</a></strong> </p>  
        </div>
        <br>
        
    </div>
</main>
  
<?php
include('../snippet/footer.php');
?>

</body>
</html