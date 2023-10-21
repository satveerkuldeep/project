<?php
if(!isset($_SESSION['user']))
{
    $_SESSION['no-login-massage']='please login to access admin panal';
    header('location:' . siteurl . 'admin/login.php');
}
?>