<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center><h1>SIGNUP FORM</h1>


    <form method="POST">
        Name:<input type="text" name="name"><br><br>
        Email:<input type="email" name="email"><br><br>
        Password:<input type="password" name="password"><br><br>
        <button type="submit" name="submit">Signup</button>
    </form><br>
    <a href="index.php">Login</a>
    </center>  
</body>
</html>


<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){


    include('config.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO  `info` (name , email ,password) VALUES ('$name' , '$email' ,' $password')";
    $result = mysqli_query($con , $sql);
    if(!$result){
   
        die(mysqli_error($con));
    }
    // else{
   
    //     die(mysqli_error($con));
    // }
}
?>
