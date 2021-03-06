<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:signinsignup.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistry</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>" >
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="logo">
                <h1>Artistry</h1>
            </div>
            <nav>
                <ul>
                <li><a href="home.php">Home</a></li>
                    <li><a href="products.php">All Products</a></li>
                    <li><a href="">Customer</a></li>
                    <li><a href="">Seller</a></li>
                    <li><a href="signinsignup.php">Logout</a></li>
                </ul>
            </nav>
            <img src="images/cart.png" width="30px" height="30px">
        </div>

    </div>


    <!-- Featured Products -->
    <div class="small-container">
        
        <div class="row">
            <h2 class="title">All Products</h2>
        </div>
        <div class="row">
                <div class="col-4" >
                    <a href="productdetails13.php"><img src="Img/product-13.jpg"></a>
                    <h4>Red Printed T-Shirt</h4>
                    <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div>
                    <p>$100</p>
                </div>
            
            <div class="col-4">
                <a href="productdetails14.php"><img src="Img/product-14.jpg"></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails15.php"><img src="Img/product-15.jpg"></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails16.php"><img src="Img/product-16.jpg"></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails17.php"><img src="Img/product-17.jpg"></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails18.php"><img src="Img/product-18.jpg"></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails19.php"><img src="Img/product-19.jpg"></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <a href="productdetails20.php"><img src="Img/product-20.jpg"></a>
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <!-- <div class="col-4">
                <img src="Img/product-9.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <img src="Img/product-10.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <img src="Img/product-11.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div>
            <div class="col-4">
                <img src="Img/product-12.jpg">
                <h4>Red Printed T-Shirt</h4>
                <div class="rating">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                </div>
                <p>$100</p>
            </div> -->
        </div>
        <div class="page-btn">
            <a href="products.php"><span>1</span></a>
            <a href="products1.php"><span>2</span></a>
            <!-- <span>3</span> -->
            <!-- <span>&#8594;</span> -->
        </div>
    </div>
</body>

</html>