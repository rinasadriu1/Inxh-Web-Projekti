<?php session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="navcont">
        <div class="navbar">
            <div class="logo">
                <img src="..\img\logo.png" alt="">
            </div>
            <nav>
                <ul id="menuItems">
                    <li><a href="../view/main.php">Home</a></li>
                    <li><a href="">Books</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="../view/about.php">About Us</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </nav>
        
            <img src="../Img/search.png" class="searchIcon" alt="" onclick="searchToggle()">
            <a href=""><img src="../Img/cart.png" alt=""></a>
            <img src="../Img/user.png" class="userIcon" alt="" onclick="userToggle()">

            <div class="dropdown-content">


<?php
    if(!isset($_SESSION['username'])){
    echo "<div class=\"userItems\">
            <ul id=\"userItems\">
                <li><a href=\"../view/login.php\">Log In</a></li>
                

            </ul>
        </div>"; 
    }
    elseif ($_SESSION['role']=="admin"){
        echo "<div class=\"userItems\">
                <ul id=\"userItems\">
                    
                    <li><a href=\"../dashboard/dashboard.php\">Dashboard</a></li>
                    <li><a href=\"../controller/logout.php\">Log Out</a></li>
                </ul>
            </div>"; 
    }  
    else{
        echo "<div class=\"userItems\">
                <ul id=\"userItems\">
                    <li><a href=\"../controller/logout.php\">Log Out</a></li>
                </ul>
            </div>"; 
    }  
?>

    </div>

            <img src="..\Img\menuIcon.png" alt="" class="menuIcon" onclick="menuToggle()">
        </div>
    </div>

    <div class="searchItems">
        <ul id="searchItems">
            <li> 
                <input class="searchbar" type="text" placeholder="Search" style="font-size: 15px; padding-left: 15px; color:black;">
            </li>
        </ul>
    </div>

    <script src="../js/indexJS.js"></script>
</body>
</html>

