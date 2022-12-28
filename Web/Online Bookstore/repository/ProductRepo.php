<?php
include_once '../database/dbConnect.php';

class ProductRepo{
    private $connection;

    function __construct(){
        $conn = new dbConnect;
        $this->connection=$conn->connectDB();
    }

    function insertProduct($product){
        $conn = $this->connection;

        $pid=$product->getPid();
        $pname=$product->getProductName();
        $aname=$product->getAuthorName();
        $pdesc=$product->getDescription();
        $price=$product->getPrice(); 
        $category=$product->getCategory();
        
        $sql = "INSERT INTO product (pid,pname,aname,pdesc,price,category) VALUES (?,?,?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$pid,$pname,$aname,$pdesc,$price,$category]);
        
        echo '<script>alert("Product added!");</script>';
    }

    function getProducts(){
        $conn= $this->connection;

        $sql= "SELECT * FROM product";

        $statement= $conn->query($sql);
        $products = $statement->fetchAll();
        return $products;
    }

    function getProductById($pid){
        $conn= $this->connection;

        $sql= "SELECT * FROM product WHERE pid='$pid'";

        $statement= $conn->query($sql);
        $product = $statement->fetch(PDO::FETCH_ASSOC);
        return $product;
    }
    function getBestSeller(){
        $conn= $this->connection;

        $sql= "SELECT * FROM product where category= 'Best Seller'";

        $statement= $conn->query($sql);
        $products = $statement->fetchAll();
        return $products;
    }

    function getComingSoon(){
        $conn= $this->connection;

        $sql= "SELECT * FROM product where category= 'Coming Soon'";

        $statement= $conn->query($sql);
        $products = $statement->fetchAll();
        return $products;
    }

    function updateProduct($pid,$pname,$aname,$pdesc,$price,$category){
        $conn= $this->connection;

        $sql = "UPDATE product SET pname=?, aname=?, pdesc=?, price=?, category=? where pid=?";
        
        $statement= $conn->prepare($sql);
        $statement->execute([$pname,$aname,$pdesc,$price,$category,$pid]);
        

        echo '<script>alert("Updated!");</script>';
    }

    function deleteProduct($pid){
        $conn= $this->connection;

        $sql = "DELETE FROM product where pid=?";
        
        $statement= $conn->prepare($sql);
        $statement->execute([$pid]);
        

        echo '<script>alert("Deleted!");</script>';
    }
 
} 



?>