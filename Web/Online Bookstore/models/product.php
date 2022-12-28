<?php
include_once '../database/dbConnect.php';
class Product extends dbConnect{
    private $pid;
    private $pname;
    private $aname;
    private $pdesc;
    private $price;
    private $category;

    
    private $dbconn;
   

    public function __construct($pid,$pname,$aname,$pdesc,$price,$category){
        $this->pid=$pid;
        $this->pname=$pname;
        $this->aname=$aname;
        $this->pdesc=$pdesc;
        $this->price=$price;
        $this->category=$category;

        $this->dbconn=$this->connectDB();
     }

    public function setPid($pid){
        $this->pid=$pid;
    }
    public function getPid(){
        return $this->pid;
    }
    public function setProductName($pname){
        $this->pname=$pname;
    }
    public function getProductName(){
        return $this->pname;
    }
    public function setAuthorName($aname){
        $this->aname=$aname;
    }
    public function getAuthorName(){
        return $this->aname;
    }
    public function setDescription($pdesc){
        $this->pdesc=$pdesc;
    }
    public function getDescription(){
        return $this->pdesc;
    }
    public function setPrice($price){
        $this->price=$price;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setCategory($category){
        $this->category=$category;
    }
    public function getCategory(){
        return $this->category;
    }

    
}

?>
