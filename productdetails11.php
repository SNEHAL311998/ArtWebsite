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
            <img src="Img/cart.png" width="30px" height="30px">
        </div>

    </div>

    <!-- Single product details -->
    <div class="small-container single-product">
        <div class="row">
            <div class="col-2">
                <img src="Img/product-12.jpg">
            </div>
            <div class="col-2">
                <p>Painting</p>
                <h1>Red Painting</h1>
                <h4>$100.00</h4>
                <select name="" id="">
                    <option value="">Select Quantity</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                </select>
                <!-- <input type="number" value="1"> -->
            <a href="" class="btn">Add to Cart</a>
            </div>
            
            <!-- <div class="nextline">
                <h3>Product Details</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam adipisci id quod corrupti commodi
                    sapiente inventore animi quisquam eos libero et consequatur, debitis quaerat.</p>
            </div> -->
        </div>
    </div>

    <!-- Featured Products -->
    <div class="small-container">

        <div class="row">
            <h2 class="title">You May also Like</h2>
        </div>
        <div class="row">
            <div class="col-4">
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
            <div class="col-4">
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
            <div class="col-4">
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
            <div class="col-4">
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
            <div class="col-4">
                <a href="productdetails5.php"><img src="Img/product-5.jpg"></a>
                <h4>Painting 05</h4>
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
                <a href="productdetails6.php"><img src="Img/product-6.jpg"></a>
                <h4>Painting 06</h4>
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
                <a href="productdetails7.php"><img src="Img/product-7.jpg"></a>
                <h4>Painting 07</h4>
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
            <div class="col-4">
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
            <div class="col-4">
                <a href="productdetails10.php"><img src="Img/product-10.jpg"></a>
                <h4>Painting 10</h4>
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
            <div class="col-4">
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

    </div>
</body>

</html>