<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>add admin</h1>
        <br>

        <?php
        if (isset($_SESSION['add'])) {
            echo  $_SESSION['add'];
            unset( $_SESSION['add']);
        }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>full name:</td>
                    <td>
                        <input type="text" name="full_name" id="" placeholder="enter your name" required>
                    </td>
                </tr>

                <tr>
                    <td>username:</td>
                    <td>
                        <input type="text" name="username" id="" placeholder="enter username"required>
                    </td>
                </tr>

                <tr>
                    <td>password:</td>
                    <td>
                        <input type="password" name="password" id="" placeholder="enter your password"required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="add admin" class="btn-secondry">
                    </td>
                </tr>
            </table>

        </form>


    </div>
</div>

<?php include "partials/footer.php"; ?>

<?php
if (isset($_POST['submit'])) {
    // 1 - get tha data from form
    $full_name =  $_POST['full_name'];
    $username = $_POST['username'];
    $password =  md5($_POST['password']);

    // 2 - sql query save tha data info database
    $sql = "INSERT INTO admin SET
    full_name = '$full_name',
    username = '$username',
    password = '$password'
    ";
    
    // secend mathed of insert
    // $sql  = "Insert into admin(full_name,username,password)
    //     values
    //     ('" . $_POST['full_name'] . "','" . $_POST['username'] . "','" . $_POST['password'] . "',)";

    $resalt = mysqli_query($con, $sql);

    if ($resalt == TRUE) {
        // echo "data insert";
        $_SESSION['add']="admin added seccessfuly";
        //redirect page
        header("location:".siteurl.'/admin/manage-admin.php');
    } else {
        // echo "data not ensert";
        $_SESSION['add']="faild admin added";
        //redirect page
        header("location:".siteurl.'/admin/manage-admin.php');
    }
}

?>