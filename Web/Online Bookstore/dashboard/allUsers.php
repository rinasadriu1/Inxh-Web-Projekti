<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Products</title>
    
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

        <table>
        <tr>
            <th>User ID</th>
            <th>Name</th>
            <th>Username</th>
            <th>Email</th>
            
            <th>Role</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        <?php
        
        include_once '../repository/UserRepo.php';

        $userR = new UserRepo();
        $users = $userR->getUsers();
        foreach($users as $user){
            echo
            "
            <tr>
                <td>$user[id]</td>
                <td>$user[name]</td>
                <td>$user[username]</td>
                <td>$user[email]</td>
                
                <td>$user[role]</td>
                <td><a href='../edit/editUser.php?id=$user[Id]'>Edit</a></td>
                <td><a href='../edit/deleteuSER.php?id=$user[Id]'>Delete</a></td>
            </tr>
            
            ";
        }
        
        ?>
    </table>
        </div>
        
    </div>
</main>
    
</body>
</html>