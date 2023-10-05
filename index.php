<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    include('config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];
   $sql = "SELECT * FROM `info` WHERE email = '$email' AND  password=' $password'";
    $result = mysqli_query($con,$sql);
    if($result){
   
        $num = mysqli_num_rows($result);
        if($num > 0){
     
            // echo "login success";
            header('location:desbord.php');
           
        }else{
            echo "login invalide";
            
        }
    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<center><h1>SIGNUP FORM</h1>


    <form action="" method="POST">
       
        Email:<input type="email" name="email"><br><br>
        Password:<input type="password" name="password"><br><br>
        <button type="submit" name="submit">Login</button>
    </form>
    <a href="registration.php">Signup</a>
    </center> 
</body>
</html>
