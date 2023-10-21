<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>manage admin</h1>
        <br>
        <a href="add-admin.php" class="btn-primry">add admin</a>
        <br><br>

        <?php
        if (isset($_SESSION['add'])) {
            echo  $_SESSION['add']; //display session message 
            unset($_SESSION['add']); //moving session message
        }

        if (isset($_SESSION['delete'])) {
            echo  $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if (isset($_SESSION['update'])) {
            echo  $_SESSION['update'];
            unset($_SESSION['update']);
        }
        if (isset($_SESSION['admin-not-found'])) {
            echo  $_SESSION['admin-not-found'];
            unset($_SESSION['admin-not-found']);
        }
        if (isset($_SESSION['password-not-match'])) {
            echo  $_SESSION['password-not-match'];
            unset($_SESSION['password-not-match']);
        }

        if (isset($_SESSION['pass-chenge'])) {
            echo  $_SESSION['pass-chenge'];
            unset($_SESSION['pass-chenge']);
        }
        ?>

        <table class="tbl">
            <tr>
                <th>s.n</th>
                <th>fullname</th>
                <th>username</th>
                <th>action</th>
            </tr>

            <?php
            $sql = "SELECT * FROM admin";
            $resalt = mysqli_query($con, $sql);

            if ($resalt == true) {
                $count = mysqli_num_rows($resalt);

                $sn = 1;

                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($resalt)) {
                        $id = $rows['id'];
                        $full_name = $rows['full_name'];
                        $username = $rows['username'];

            ?>
                        <tr>
                            <td><?php echo $sn++; ?></td>
                            <td><?php echo $full_name; ?></td>
                            <td><?php echo $username; ?></td>
                            <td>
                                <a href="<?php echo siteurl; ?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primry">change password</a>
                                <a href="<?php echo siteurl; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="btn-secondry">update admin</a>
                                <a href="<?php echo siteurl; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="btn-therd">delete admin</a>
                            </td>
                        </tr>
            <?php
                    }
                }
            }

            ?>

        </table>

    </div>
</div>
<?php include "partials/footer.php"; ?>