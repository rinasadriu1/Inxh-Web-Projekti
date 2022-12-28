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
        <table>

                <tr>

                    <th>ID</th>
                    <th>USER</th>
                    <th>ACTIVITY</th>
                    <th>CHANGED ITEM</th>
                    <th>TIME</th>
                   



                </tr>

                <?php
                include_once '../repository/AuditRepo.php';
             
                $auditR = new AuditRepo();
                $logs = $auditR->getAudit(); 

                foreach ($logs as $auditlog) {
                    echo
                    "
                        <tr>
                            <td>$auditlog[id]</td>
                            <td>$auditlog[user]</td>
                            <td>$auditlog[activityType] </td>
                            <td>$auditlog[changedItem] </td>
                            <td>$auditlog[time]</td>
                        
                        </tr>
   
                    ";
                }
            
                ?>
            </table>
            </div>
    </div>
</main>

<?php
include_once('../controller/productController.php');

?>
    
</body>
</html>