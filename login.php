<?php include("../config/constant.php") ?>

<html>

<head>
    <title>login-food order system</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <div class="login">
        <h1 class="text-center">Login</h1><br><br>
        
        <?php
        if (isset($_SESSION['login'])) 
        {
            echo  $_SESSION['login'];
            unset($_SESSION['login']);
        }

        if (isset($_SESSION['no-login-massage'])) {
            echo  $_SESSION['no-login-massage'];
            unset($_SESSION['no-login-massage']);
        }
        ?>
<br><br>
        <form action="" method="post">

            <label for="username">username</label><br>
            <input type="text" name="username" placeholder="Enter Username"><br><br>

            <label for="password">password</label><br>
            <input type="text" name="password" placeholder="Enter Password"><br><br>

            <input type="submit" name="submit" value="Login" class="btn-primry"><br>
        </form><br>

        <p>created by - <span style="color: blue;">satveer kuldeep</span> </p>

    </div>
</body>

</html>

<?php
if (isset($_POST['submit']))
{
     $username = $_POST['username'];
     $password = md5($_POST['password']);

   echo $sql = "SELECT * FROM admin WHERE 'username'='$username' AND 'password'='$password'";

    $resalt = mysqli_query($con, $sql ) ;

    echo "Username: $username, Password: $password";

    $count = mysqli_num_rows($resalt);

    echo "Username: $username, Password: $password";

    if($count==0)
    {
        $_SESSION['login'] = "login successful";
        $_SESSION['user'] = $username;

        header('location:' . siteurl . 'admin/');
    }
    else
    {
        $_SESSION['login'] = "username or password did not match";
        header('location:' . siteurl . 'admin/login.php');
       
    }
}

?>