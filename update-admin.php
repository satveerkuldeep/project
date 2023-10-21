<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>update admin</h1>
        <br><br>

        <?php

        //1- Get the id of slected admin
        $id = $_GET['id'];

        //2- Create sql qary to get the details
        $sql = "SELECT * FROM admin WHERE id = $id ";

        //3- Execute the query
        $resalt = mysqli_query($con, $sql);

        //4- Cheak the query exucute or not
        if ($resalt == TRUE) {
            $count = mysqli_num_rows($resalt);

            if ($count == 1) {
                // echo "admin available";
                $rows = mysqli_fetch_assoc($resalt);
                // $id = $rows['id'];
                $full_name = $rows['full_name'];
                $username = $rows['username'];
            } else {
                //redirect page
                header("location:" . siteurl . '/admin/manage-admin.php');
            }
        }


        ?>

        <form action="" method="post">
            <table class="tbl-30">

                <tr>
                    <td>full name:</td>
                    <td>
                        <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="update admin" class="btn-secondry">
                    </td>
                </tr>
            </table>


        </form>



    </div>
</div>

<?php
if (isset($_POST['submit'])) {
    // echo "buten cliked ";
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];

    $sql = "UPDATE admin SET
    full_name = '$full_name',
    username = '$username'
    WHERE id='$id'
    ";

    $resalt = mysqli_query($con, $sql);

    if ($resalt == true) {
        $_SESSION['update'] = "admin update seccessfuly";
        //redirect page
        header("location:" . siteurl . '/admin/manage-admin.php');
    } else {
        $_SESSION['update'] = "admin update not seccessfuly";
        //redirect page
        header("location:" . siteurl . '/admin/manage-admin.php');
    }
}
?>


<?php include "partials/footer.php"; ?>