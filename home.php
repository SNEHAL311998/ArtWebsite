<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location:signinsignup.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistry</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <h1>Artistry</h1>
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="products.php">All Products</a></li>
                        <li><a href="customer.php">Customer</a></li>
                        <li><a href="seller.php">Seller</a></li>
                        <li><a href="signinsignup.php">Logout</a></li>
                    </ul>
                </nav>
                <img src="images/cart.png" width="30px" height="30px">
            </div>
            <div class="row">
                <div class="col-2">
                    <h1>Welcome!<br><?php echo $_SESSION['username']; ?></h1>
                    <p>A Website for Art Enthusiast. Here you will find all art related products that you like.</p>
                    <!-- <a href=".categories" class="btn">Explore Now &#8594;</a> -->
                </div>
                <div class="col-2">
                    <img src="Img/header-img3.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- featured categories -->
    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3" data-aos="flip-left">
                    <img src="Img/category-2.jpg">
                </div>
                <div class="col-3" data-aos="flip-left">
                    <img src="Img/category-3.jpg">
                </div>
                <div class="col-3" data-aos="flip-left">
                    <img src="Img/category-4.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- featured products -->
    <div class="small-container">
        <h2 class="title">Featured Product</h2>
        <div class="row">
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails1.php"><img src="Img/product-1.jpg"></a>
                <h4>Painting 01</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails2.php"><img src="Img/product-2.jpg"></a>
                <h4>Painting 02</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails3.php"><img src="Img/product-3.jpg"></a>
                <h4>Painting 03</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails4.php"><img src="Img/product-4.jpg"></a>
                <h4>Painting 04</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
        </div>
        <h2 class="title">Latest Product</h2>
        <div class="row">
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails5.php"><img src="Img/product-5.jpg"></a>
                <h4>Painting 05</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails6.php"><img src="Img/product-6.jpg"></a>
                <h4>Painting 06</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails7.php"><img src="Img/product-7.jpg"></a>
                <h4>Painting 07</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails8.php"><img src="Img/product-8.jpg"></a>
                <h4>Painting 08</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails9.php"><img src="Img/product-9.jpg"></a>
                <h4>Painting 09</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails10.php"><img src="Img/product-10.jpg"></a>
                <h4>Painting 01</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails11.php"><img src="Img/product-11.jpg"></a>
                <h4>Painting 11</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails12.php"><img src="Img/product-12.jpg"></a>
                <h4>Painting 12</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
        </div>
        <h2 class="title">Art Tools</h2>
        <div class="row">
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails13.php"><img src="Img/product-13.jpg"></a>
                <h4>Painting 13</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails14.php"><img src="Img/product-14.jpg"></a>
                <h4>Painting 14</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails15.php"><img src="Img/product-15.jpg"></a>
                <h4>Painting 15</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4" data-aos="zoom-in">
                <a href="productdetails16.php"><img src="Img/product-16.jpg"></a>
                <h4>Painting 16</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
        </div>
    </div>

    <!-- Sale -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <!-- <div class="col-2">
                    <img src="Img/footer3.png" class="offer-img">
                </div> -->
                <div class="col-2">
                    <h1 class="footer-head" data-aos=zoom-out-left>Thank You</h1>
                    <p class="footer-para" data-aos=zoom-out-right>Made By Snehal</p>
                    <br>
                    <!-- <a href="" class="btn">Buy Now &#8594;</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- animate on scroll -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 300,
            duration: 1500,
            // easing: 'ease-out'
        });
    </script>
</body>

</html>