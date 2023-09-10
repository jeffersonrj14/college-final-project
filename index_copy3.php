<?php
session_start(); //start session

//connect database
require_once("./data/data_connect.php");

//connect product_type table
// $sql = "SELECT * FROM product_type";
// $result = mysqli_query($con,$sql);
$_SESSION['login'] = 0;
$email_1 = '';
if (isset($_SESSION['email'])) {
    $email_1 = $_SESSION['email'];
}
// else{
//     $_SESSION['email']='';
// }

$sql_1 = "SELECT first_name FROM customers where email = '$email_1' and login = 2;";
$result_1 = $con->query($sql_1);
$count = mysqli_num_rows($result_1);
if ($count != 1) {
    unset($_SESSION['email']);
    $email_1 = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ozon Shopping Site</title>
    <link rel="stylesheet" href="./css/style3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;600&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css"> -->


    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="./img/OSONE_LOGO__1_-removebg-preview.png" width="125px">
                </div>
                <nav>
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index_copy3.php" class="nav-link">
                                <span class="nav-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="product-copy3.html" class="nav-ink">
                                <span class="nav-text">Product</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="About.html" class="nav-link">
                                <span class="nav-text">About</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">
                                <span class="nav-text">Contact</span>
                            </a>
                        </li>
                        <li class="" nav-item>
                            <a href="./Login_v1/change_page.php" class="" nav-link>
                                <span class="nav-text">Account</span>
                            </a>
                        </li>
                    </ul>
                        <a href="./cart3/cart.php"><i class='bx bx-cart'></i></a>
                </nav>
            </div>
            <!--Search-->
            <form class="search-cont" action="./action_page.php" method="post">
                <div class="search">
                    <input class="searchTerm" type="text" id="product_name" name="tutorial_name" placeholder="What are you looking for?">
                    <button type="submit" class="searchButton">
                        <i class='bx bx-search'></i>
                    </button>
                </div>
            </form>

            <div class="row">
                <div class="col-2">
                    <?php if ($count == 1) { ?>
                        <?php while ($row1 = mysqli_fetch_assoc($result_1)) { ?>
                            <?php $_SESSION['login'] = 2;?>
                            <h1> welcome <?php echo $row1['first_name']; ?></h1>
                        <?php } ?>
                    <?php } else { ?>
                        <h1> welcome to OSONE</h1>
                    <?php } ?>
                    <h1>高速、 安全、 安心!</h1>
                    <a href="" class="btn">Explore now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="./img/Family.png" alt="">

                </div>
            </div>

        </div>
    </div>

    <!-- featured category --><br>
    <div class="featurep">

        <img src="./img/product1-removebg-preview.png">
        <img src="./img/product2-removebg-preview.png">
        <img src="./img/product3-removebg-preview.png">
        <img src="./img/product4-removebg-preview.png">
        <img src="./img/OSONE_LOGO__1_-removebg-preview.png" alt="">
        <img src="./img/product5-removebg-preview.png">
        <img src="./img/product6-removebg-preview.png">
        <img src="./img/product7-removebg-preview.png">
        <img src="./img/product8-removebg-preview.png">
    </div>
    <!-- featured product -->
    <div class="small-container">
        <h2 class="title">Featured</h2>
        <div class="row">
            <div class="col-10">

                <img src="./img/product1.jpg">
                <h4>Adidas Printed T-Shirt</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>￥2,000</p>
            </div>
            <div class="col-10">
                <img src="./img/product2.jpg">
                <h4>Adidas Printed Earphone</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <p>￥16,000</p>
            </div>
            <div class="col-10">
                <img src="./img/product3.jpg">
                <h4>Adidas Printed Jacket</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>￥10,000</p>
            </div>
            <div class="col-10">
                <img src="./img/product4.jpg">
                <h4>Adidas Printed Bottle</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <p>￥5,000</p>
            </div>
        </div>

        <!-- Latest Product -->
        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-10">
                <img src="./img/product8.jpg">
                <h4>Adidas Ultraboost</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>￥17,000</p>
            </div>
            <div class="col-10">
                <img src="./img/product7.jpg">
                <h4>Adidas Backpack</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <p>￥16,000</p>
            </div>
            <div class="col-10">
                <img src="./img/product6.jpg">
                <h4>Adidas Printed Cap</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>￥5,000</p>
            </div>
            <div class="col-10">
                <img src="./img/product5.jpg">
                <h4>Blue Sunglasses</h4>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bx-star'></i>
                </div>
                <p>￥7,000</p>
            </div>
        </div>
    </div>
    <!-- offer -->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="./img/product7-removebg-preview.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Exclusively Available on OzoneStore</p>
                    <h1>Compact Backpack</h1>
                    <small>Compact Backpack with a waterproof designed. Limited Edition and Limited color available</small>
                    <a href="" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- testimonial -->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class='bx bxs-quote-left'></i>
                    <p>this is the testimonial test</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <img src="./img/user-1.jpeg">
                    <h3>Sean</h3>
                </div>
                <div class="col-3">
                    <i class='bx bxs-quote-left'></i>
                    <p>this is the testimonial test</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <img src="./img/bob.jpg">
                    <h3>Bob</h3>
                </div>
                <div class="col-3">
                    <i class='bx bxs-quote-left'></i>
                    <p>this is the testimonial test</p>
                    <div class="rating">
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bxs-star'></i>
                        <i class='bx bx-star'></i>
                    </div>
                    <img src="./img/mark.jpg">
                    <h3>Mark</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- brands -->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="./img/OSONE_LOGO__1_-removebg-preview.png">
                </div>
                <div class="col-5">
                    <img src="./img/58482363cef1014c0b5e49c1-removebg-preview.png">
                </div>
                <div class="col-5">
                    <img src="./img/master.jpg">
                </div>
                <div class="col-5">
                    <img src="./img/HJkACWmL_400x400.jpg">
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Please Rate our website</h3>
                    <p>Rating does means a lot to us</p>


                </div>
                <div class="footer-col-2">
                    <img src="./img/OSONE_LOGO__1_-removebg-preview.png">
                    <p>Our Purpose is to make sure that Ozone online shop is fast, secure, and reliable.</p>
                </div>
                <div class="footer-col-3">
                    <h3>useful links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-10" id="contact">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="https://www.facebook.com">Facebook</a></li>
                        <li><a href="https://twitter.com/?lang=en">Twitter</a></li>
                        <li><a href="https://www.instagram.com">Instagram</a></li>
                        <li><a href="https://www.youtube.com">Youtube</a></li>

                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright 2022</p>
        </div>
    </div>
    <!-- search -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" src="./tst.js"></script>
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script> -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('.featurep').slick({
                slidesToShow: 3,
                slidesToScroll: 2,
                autoplay: true,
                autoplaySpeed: 980,
            });
        });
    </script>
</body>

</html>