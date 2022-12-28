<?php
include_once '../database/dbConnect.php';
class User extends dbConnect{
    private $id;
    private $name;
    private $username;
    private $email;
    private $password;
    private $role;
    private $dbconn;
   

    public function __construct($id,$name,$username,$email,$password,$role){
        $this->id=$id;
        $this->name=$name;
        $this->username=$username;
        $this->email=$email;
        $this->password=$password;
        $this->role=$role;

        $this->dbconn=$this->connectDB();
     }

    public function setId($id){
        $this->id=$id;
    }
    public function getId(){
        return $this->id;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function getName(){
        return $this->name;
    }
    public function setUsername($username){
        $this->username=$username;
    }
    public function getUsername(){
        return $this->username;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password=$password;
    }
    public function getPassword(){
        return $this->password;
    }
    public function setRole($role){
        $this->role=$role;
    }
    public function getRole(){
        return $this->role;
    }
    
}

?>
