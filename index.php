<?php include "partials/header.php"; ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Deshboard</h1>
        <br>
        <?php
        if (isset($_SESSION['login'])) {
            echo  $_SESSION['login'];
            unset($_SESSION['login']);
        }
        ?>
        <br><br>
        <div class="con">
            <h1>5</h1>
            <br>
            category
        </div>
        <div class="con">
            <h1>5</h1>
            <br>
            category
        </div>

        <div class="con">
            <h1>5</h1>
            <br>
            category
        </div>

        <div class="con">
            <h1>5</h1>
            <br>
            category
        </div>

        <div class="con">
            <h1>5</h1>
            <br>
            category
        </div>

        <div class="con">
            <h1>5</h1>
            <br>
            category
        </div>
        <div class="clear"></div>
    </div>
</div>



<?php include "partials/footer.php"; ?>