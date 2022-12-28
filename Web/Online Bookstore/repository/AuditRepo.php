<?php

include_once '../database/dbConnect.php';

class AuditRepo{   

    private $connection;


    function __construct(){
        $conn = new dbConnect;
        $this->connection=$conn->connectDB();
    }}


    function auditlog($user,$activityType,$changedItem){

        $conn = $this->connection;

        $datetime = date("d/m/Y g:i a");
        $sql = "INSERT INTO auditlog (user,activityType,changedItem,time) values (?,?,?,?)";

        $statement = $conn->prepare($sql);

        $statement->execute([$user,$activityType,$changedItem,$datetime]);



    }

    
    function getAudit(){
        $conn= $this->connection;

        $sql= "SELECT * FROM auditlog";

        $statement= $conn->query($sql);
        $auditlog = $statement->fetchAll();
        return $auditlog;
    }

?>