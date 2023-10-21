<?php include "partials/header.php"; ?>

<?php
include("../config/constant.php");

$id = $_GET['id'];

$sql = "DELETE FROM admin WHERE id =$id";

$resalt = mysqli_query($con, $sql);

if ($resalt == TRUE) {
    // echo "delete admin";
    $_SESSION['delete'] = "admin delete seccessfuly";
    //redirect page
    header("location:" . siteurl . '/admin/manage-admin.php');
} 
else {
    // echo "faild to delete admin";
    $_SESSION['delete'] = " faild to delete admin ";
    //redirect page
    header("location:" . siteurl . '/admin/manage-admin.php');
}
