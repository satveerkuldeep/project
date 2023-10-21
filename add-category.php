<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Add category</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title">
                    </td>
                </tr>
                <tr>
                    <td>image:</td>
                    <td>
                        <input type="file" name="category_image" id="">

                    </td>
                </tr>

                <tr>
                    <td>Featured:</td>
                    <td>
                        <select name="featured" id="">
                            <option value=""></option>
                            <option value="active">active</option>
                            <option value="inactive">inactive</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="submit" value="add category" class="btn-secondry">
                    </td>
                </tr>
            </table>
        </form>

        <?php
    
        if (isset($_POST['submit'])) {

            $cat_image = $_FILES['category_image'];
            $file_name = $_FILES["category_image"]["name"];
            $file_tmp = $_FILES["category_image"]["tmp_name"];
            
           $img_path = "cat_image/" .$file_name;
            move_uploaded_file($file_tmp, $img_path);

            $category_name =  $_POST['title'];
            $featured = $_POST['featured'];

            $sql = "INSERT INTO category (category_name, image_name, featured) VALUES 
            ('$category_name', '$img_path', '$featured')";

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