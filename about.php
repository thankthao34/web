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
        <div class="banner">
            <h1>about us</h1>
            </div>
        <div class="title2">
            <a href="home.php">home</a><span>/ about us</span>
            </div>
        <div class="about-category">
                <div> </div>
                <div></div>
                <div class="box">
                    <img src="image/3.jpg">
                    <div class="detail">
                        <span>Retro</span>
                        <h1>Máy chơi game</h1>
                        <a href="view_products.php" class="btn">shop now</a>
                    </div>
                </div>
                <div class="box">
                    <img src="image/about.jpg">
                    <div class="detail">
                    <span>Retro</span>
                    <h1>Radio</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                    <img src="image/1.jpg">
                    <div class="detail">
                    <span>Retro</span>
                    <h1>TV & màn CRT</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            <div class="box">
                    <img src="image/2.jpg">
                    <div class="detail">
                    <span>Retro</span>
                    <h1>Máy ảnh</h1>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
        </div>
        <section class="services">
            <div class="title">
                <img src="image/download.png" class="logo">
                <h1>why choose us</h1>
                <p>Mua về câu chuyện, lòng thêm vấn vương!</p>
            </div>
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
        <div class="about">
            <div class="row">
                <div class="img-box">
                    <img src="image/3.1.jpg">
                </div>
                <div class="detail">
                    <h1>Ghé thăm không gian trưng bày!</h1>
                    <p>Không gian trưng bày của chúng tôi thể hiện niềm đam mê của Retro Shop: 
                        sưu tầm và tái hiện những món đồ cổ từ thập niên 80 mang phong cách retro vintage độc đáo. 
                        Dù bạn đang tìm kiếm một chiếc máy chơi game cổ điển cho bộ sưu tập của mình, 
                        hay muốn làm sống lại ký ức xưa với radio và cassette, 
                        Retro Shop luôn sẵn sàng giúp bạn.</p>
                    <a href="view_products.php" class="btn">shop now</a>
                </div>
            </div>
            </div>
            <div class="testimonial-container">
                <div class="title">
                    <img src="image/download.png" class="logo">
                    <h1>what people say about us!</h1>
                    <p> Retro Shop mang đến không gian hoài cổ đầy cảm hứng cho những
                        ai yêu thích đồ cổ.
                    </p>
                </div>
                    <div class="container">
                        <div class="slider">
                        <div class="testimonial-item active">
                            <img src="image/01.jpg">
                            <h1>thank thao</h1>
                            <p>Tôi rất yêu thích các sản phẩm sưu tầm và tái hiện những món đồ độc đáo từ thập niên 80, đậm chất retro vintage của shop.</p>
                        </div>
                        <div class="testimonial-item">
                            <img src="image/01.jpg">
                            <h1>thano thank</h1>
                            <p>Tôi thực sự ấn tượng với bộ sưu tập đồ cổ tại Retro Shop! Những chiếc máy chơi game và radio từ thập niên 80 mang đậm phong cách retro vintage, khiến tôi như sống lại tuổi thơ của mình.</p>
                        </div>
                        <div class="testimonial-item">
                            <img src="image/01.jpg">
                            <h1>thao thao</h1>
                            <p>Tôi yêu cách Retro Shop tái hiện những món đồ từ thập niên 80! Mỗi sản phẩm đều mang một câu chuyện riêng, và tôi không thể cưỡng lại việc sưu tầm thêm một chiếc TV cổ cho bộ sưu tập của mình.</p>
                        </div>
                        <div class="left-arrow" onclick="nextSlide()"><i class="bx bxs-left-arrow-alt"></i></div>
                        <div class="right-arrow" onclick="prevSlide()"><i class="bx bxs-right-arrow-alt"></i></div>
                    </div>
                    </div>
                </div>
         <?php include 'components/footer.php'; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="script.js"></script>
    <?php include 'components/alert.php'; ?>
</body>
</html>