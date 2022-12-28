<?php 
include_once('../repository/UserRepo.php');
$userId = $_GET['id'];
$userR = new UserRepo();
$user = $userR->getUserById($userId);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Users</title>
    
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
        <form action="" method="post">
                    <h1>Edit User</h1><br>
                        <input type="id" id="id" name="id" value="<?=$user['id'] ?>" readonly><br>
                        <input type="name" id="name" name="name" value="<?=$user['name'] ?>" ><br>
                        <input type="username" id="username" name="username" value= " <?=$user['username'] ?>" ><br>
                        <input type="email" id="email" name="email" value="<?=$user['email'] ?>"><br>            
                        <input type="password" id="password" name="password" value="<?=$user['password'] ?>"><br>
                        <input type="role" id="role" name="role" value="<?=$user['role'] ?>"><br>
                        <input type="submit" value="Save" class="btn" id="saveBtn" name="saveBtn"><br><br>
                
                </form>
            </div>
            </div>
</main>
    
</body>
</html>

<?php
if(isset($_POST['saveBtn'])){
    $id=$user['id'];
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['role'];

    $userR->updateUser($id,$name,$username,$email,$password,$role);
    header('location:../dashboard/users.php');
}


?>