<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>manage category</h1>
        <br>
        <a href="add-category.php" class="btn-primry">add category</a>
        <br><br>
        <table class="tbl" >
            <tr>
                <th>s.n</th>
                <th>category img</th>
                <th>category name</th>
                <th>featured</th>
                <th>action</th>
            </tr>
            <?php

            $sql = "SELECT * FROM category";
            $resalt = mysqli_query($con, $sql);
            $count = mysqli_num_rows($resalt);

            if ($count > 0) {
                while ($row = mysqli_fetch_assoc($resalt)) {

                    $id = $row["id"];
                    $imgname = $row["image_name"];
                    $name = $row["category_name"];
                    $featured = $row["featured"];


            ?>
                    <tr >
                        
                        <td><?php echo $id ?></td>
                        <td><img src="<?php echo $imgname ?>" alt="" style=" width: 120px; height: 100px; " ></td>
                        <td><?php echo $name ?></td>
                        <td><?php echo $featured ?></td>
                        <td>
                            <a href="update_category.php?id=<?php echo $id ?> " class="btn-secondry">update category</a>
                            <a href="delete_category.php?id= <?php echo $id ?>"  class="btn-therd">delete category</a>
                        </td>
                    </tr>

            <?php
                }
            }
            ?>

        </table>
    </div>
</div>
<?php include "partials/footer.php"; ?>