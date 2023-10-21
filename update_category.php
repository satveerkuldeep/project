<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>update category</h1>

        <?php

        $id = $_GET["id"];

        $sql = "SELECT * FROM category WHERE id = $id ";

        $resalt = mysqli_query($con, $sql);

        if ($resalt == TRUE) {
            $count = mysqli_num_rows($resalt);

            if ($count == 1) {

                $row = mysqli_fetch_assoc($resalt);

                $imgname = $row['image_name'];
                $cat_name = $row['category_name'];
                $featured = $row['featured'];
            } else {
                //redirect page
                header("location:" . siteurl . '/admin/manage-admin.php');
            }
        }


        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" value="<?php echo $cat_name ?>">
                    </td>
                </tr>
                <tr>
                    <td>image:</td>
                    <td>
                        <input type="file" name="category_image" id="" value="<?php echo $imgname ?>">

                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <select name="featured">
                            <option value=""></option>
                            <option value="active" <?php if ($featured == "active") echo "selected"; ?>>active</option>
                            <option value="inactive" <?php if ($featured == "inactive") echo "selected"; ?>>inactive</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="update category" class="btn-secondry">
                    </td>
                </tr>
            </table>
        </form>

        <?php

        if (isset($_POST['submit'])) {

            $cat_image = $_FILES['category_image'];
            $file_name = $_FILES["category_image"]["name"];
            $file_tmp = $_FILES["category_image"]["tmp_name"];

            $img_path = "cat_image/" . $file_name;
            move_uploaded_file($file_tmp, $img_path);

            $category_name =  $_POST['title'];
            $featured = $_POST['featured'];

            $sql = " update  category (category_name, image_name, featured) VALUES 
            ('$category_name', '$img_path', '$featured') id = $id";

            $result = mysqli_query($con, $sql);


            if ($resalt == TRUE) {

                header("location:" . siteurl . '/admin/manage-category.php');
            } else {

                header("location:" . siteurl . '/admin/manage-category.php');
            }
        }

        ?>
    </div>
</div>

<?php include "partials/footer.php"; ?>