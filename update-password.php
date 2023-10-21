<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>change password</h1>
        <br><br>

        <?php
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        ?>

        <form action="" method="post">
            <table class="tbl-30">

                <tr>
                    <td>current password</td>
                    <td>
                        <input type="text" name="current_password" value="">
                    </td>
                </tr>

                <tr>
                    <td>new password:</td>
                    <td>
                        <input type="text" name="new_password" value="">
                    </td>
                </tr>
                <tr>
                    <td>confirm password:</td>
                    <td>
                        <input type="text" name="confirm_password" value="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="change password" class="btn-secondry">
                    </td>
                </tr>
            </table>

        </form>
    </div>
</div>

<?php

if(isset($_POST['submit'])) 
{

    $id = $_POST['id'];
    $current_password = md5($_POST['current_password']);
    $new_password = md5($_POST['new_password']);
    $confirm_password = md5($_POST['confirm_password']);

    $sql = "SELECT * FROM admin WHERE id=$id AND password='current_password' ";

    $resalt = mysqli_query($con, $sql);

    if ($resalt==true) {
        $count = mysqli_num_rows($resalt);

        if ($count==1) 
        {
             echo "admin found";
            if ($new_password == $confirm_password) 
            {
                // echo "password match";
                $sql2 = "UPDATE admin SET
                    password  = '$new_password ',
                     WHERE id=$id
                  ";
                  $resalt2 = mysqli_query($con, $sql2);

                  if ($resalt2 == true) {
                    $_SESSION['pass-chenge'] = "Password change seccessfuly";
                    //redirect page
                    header("location:" . siteurl . '/admin/manage-admin.php');
                } else {
                    $_SESSION['pass-chenge'] = "password change not seccessfuly";
                    //redirect page
                    header("location:" . siteurl . '/admin/manage-admin.php');
                }
            } 
            else {
                $_SESSION['password-not-match'] = "password-not-match";
                header("location:" . siteurl . '/admin/manage-admin.php');
            }
        } 
        else
        {
            $_SESSION['admin-not-found'] = "admin-not-found";
            header("location:" . siteurl . '/admin/manage-admin.php');
        }
    }
}

?>
<?php include "partials/footer.php"; ?>