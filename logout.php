<?php
 include("../config/constant.php"); 
 session_destroy(); 
 header('location:'.siteurl.'admin/login.php');
?>
