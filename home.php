<?php
  include 'components/connection.php';
  session_start();
  if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    } else {
        $user_id = '';
    }
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
?>
<style type ="text/css">
    <?php include 'style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Retro Shop - home page</title>
</head>
<body>
    <?php include 'components/header.php'; ?>
    <div class="main">
        <section class="home-section">
        <div class="slider">
            <div class="slider_slider slide1">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>Welcom to my shop </h1>
                    <p>Ký Ức Còn – Mua Một Món, Ôn Một Chuyện!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->
            <div class="slider_slider slide2">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>welcome to my shop</h1>
                    <p>Mua về câu chuyện, lòng thêm vấn vương!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->
            <div class="slider_slider slide3">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>welcome to my shop</h1>
                    <p>Mua về câu chuyện, sống lại thời thâu!</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->
            <div class="slider_slider slide4">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>welcome to my shop</h1>
                    <p>Mỗi món đồ đều chứa đựng một ký ức sâu</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->
            <div class="slider_slider slide5">
                <div class="overlay"></div>
                <div class="slide-detail">
                    <h1>welcome to my shop</h1>
                    <p>Đậm phong cách, đậm hoài niệm! </p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="hero-dec-top"></div>
                <div class="hero-dec-bottom"></div>
            </div>
            <!-- slide end -->
            <div class="left-arrow"><i class="bx bxs-left-arrow"></i></div>
            <div class="right-arrow"><i class="bx bxs-right-arrow"></i></div>
        </div>
        </section>
         <!-- home slider end-->
        <section class="thumb">
            <div class ="box-container">
                <div class="box">
                    <img src="image/thumb2.png">
                    <h3>Máy chơi game</h3>
                    <p>Đậm phong cách, đậm hoài niệm! </p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="image/thumb0.png">
                    <h3>Máy ảnh</h3>
                    <p>Đậm phong cách, đậm hoài niệm! </p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="image/thumb1.png">
                    <h3>Radio & cassette</h3>
                    <p>Đậm phong cách, đậm hoài niệm! </p>
                    <i class="bx bx-chevron-right"></i>
                </div>
                <div class="box">
                    <img src="image/thumb.png">
                    <h3>TV & màn hình CRT</h3>
                    <p>Đậm phong cách, đậm hoài niệm! </p>
                    <i class="bx bx-chevron-right"></i>
                </div>
            </div>
        </section>
        <section class="container">
            <div class="box-container">
                <div class="box">
                    <img src="image/about-us 1.png">
                </div>
                <div class="box">
                    <img src="image/download.png">
                    <span>have fun</span>
                    <h1>save up to 50% off</h1>
                    <p>Hân hạnh được phục vụ, niềm vui của các bạn là niềm vinh hạnh của chúng tôi
                    </p>
                </div>
            </div>
        </section>
        <section class="shop">
            <div class="title">
                <img src="image/download.png">
                <h1>Trending Products</h1>
            </div>
            <div class="row">
                <img src="image/aboutt.jpg">
                <div class="row-detail">
                <img src="image/basil.jpg">
                <div class="top-footer">
                    <h1>.....text.....</h1>
                </div>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <img src="image/card.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="image/card0.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="image/card.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="image/card.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="image/card.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
                <div class="box">
                    <img src="image/card.jpg">
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            </section>
            <section class="shop-category">
                <div class="box-container">
                    <div class="box">
                    <img src="image/6.jpg">
                    <div class="detail">
                        <span>BIG OFFERS</span>
                        <h1>EXTRA 15% off</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                    </div>
                    <div class="box">
                    <img src="image/7.jpg">
                    <div class="detail">
                        <span>new in taste</span>
                        <h1>retro shop</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                    </div>
                </div>
        </section>
        <section class="services">
            <div class="box-container">
                <div class="box">
                    <img src="image/icon2.png">
                    <div class="detail">
                        <h3>great savings</h3>
                        <p>save big every order</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon1.png">
                    <div class="detail">
                        <h3>24*7 support</h3>
                        <p>one-onone support</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon0.png">
                    <div class="detail">
                        <h3>gift vouchers</h3>
                        <p>voucher on every festivals</p>
                    </div>
                </div>
                <div class="box">
                    <img src="image/icon.png">
                    <div class="detail">
                        <h3>worldwide delivery</h3>
                        <p>dropship worldwide</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="brand">
            <div class="box-container">
                <div class="box">
                <img src="image/brand (1).png">
                </div>
                <div class="box">
                <img src="image/brand (2).png">
                </div>
                <div class="box">
                <img src="image/brand (3).png">
                </div>
                <div class="box">
                <img src="image/brand (4).png">
                </div>
                <div class="box">
                <img src="image/brand (5).png">
                </div>
            </div>
            </section>
         <?php include 'components/footer.php'; ?>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>