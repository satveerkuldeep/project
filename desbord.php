<?php
session_start();
if(!isset($_SESSION['email'])){


    // header('location:registration.php');
}




?>

<?php
require "header.php";
include "sidenav.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="import" href="component.html">
    <link rel="stylesheet" href="@import url('https://fonts.googleapis.com/css2?family=Sigmar&display=swap');">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
   
</head>

<body>
   
    <div class="food">
        <div class="item-card">
            <img src="food img/pexels-ash-376464 (1).jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-alberta-studios-9738994.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-brett-jordan-2297961.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-cats-coming-1731535.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-dana-tentis-691114.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-engin-akyurt-2347311.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-flat-hito-862949.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-flat-hito-904349.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-jan-n-g-u-y-e-n-🍁-699953.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-sydney-troxell-718742.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-mali-maeder-233305.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>

        <div class="item-card">
            <img src="food img/pexels-steve-3789885.jpg" alt="Item Image">
            <h3 class="item-title">Delicious Burger</h3>
            <p class="item-description">A juicy burger with fresh lettuce, tomatoes, and melted cheese.</p>
            <div class="item-info">
                <p class="item-price">$9.99</p>
                <div class="item-actions">
                    <button class="btn btn-add-to-cart">Add to Cart</button>
                    <button class="btn btn-view-details">View Details</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php
require "footer.php";
?>

