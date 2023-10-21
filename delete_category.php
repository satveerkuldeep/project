<?php
 include "partials/header.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $Sql ="DELETE FROM category WHERE id = $id";
    $Result = mysqli_query($con, $Sql);

    if ($Result) {
        // Category deleted successfully
        // You can add a success message here
        header("location:" . siteurl . '//admin/manage-category.php'); // Redirect to a category list page or another appropriate page
    } else {
        // Database deletion failed, handle the error
    }
}
?>
