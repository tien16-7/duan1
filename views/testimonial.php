<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>DIAMOND</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="/DUAN1/public/lib/lightbox/css/lightbox.min.css">
        <link href="/DUAN1/public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/DUAN1/public/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/DUAN1/public/css/style.css" rel="stylesheet">
        <style>
        span,i{
            color:#001e63
        }
        i{
            color: #fff
        }
        body{
          
            overflow-x: hidden;
        }
        .fruite .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.fruite .col-md-6.col-lg-4.col-xl-3 {
    flex: 0 0 23%; /* Đảm bảo 4 sản phẩm trên một hàng */
    max-width: 23%;
}

.fruite-item {
    border-radius: 10px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    height: 400px; /* Đặt chiều cao cố định cho box */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Định dạng ảnh sản phẩm */
.fruite-img img {
    width: 100%;
    height: 200px; /* Đặt chiều cao cố định cho ảnh */
    object-fit: cover; /* Giữ tỷ lệ ảnh, không bị méo */
    border-radius: 10px;
}

/* Giới hạn chiều cao mô tả */
.fruite-item p {
    height: 50px; /* Đảm bảo mô tả không quá dài */
    overflow: hidden; /* Cắt bớt văn bản nếu quá dài */
    text-overflow: ellipsis;
    white-space: nowrap;
}

/* Nút Mua Ngay cố định vị trí */
.fruite-item .p-4 {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Responsive */
@media (max-width: 1200px) {
    .fruite .col-md-6.col-lg-4.col-xl-3 {
        flex: 0 0 31%;
        max-width: 31%;
    }
}

@media (max-width: 768px) {
    .fruite .col-md-6.col-lg-4.col-xl-3 {
        flex: 0 0 48%;
        max-width: 48%;
    }
}

@media (max-width: 576px) {
    .fruite .col-md-6.col-lg-4.col-xl-3 {
        flex: 0 0 100%;
        max-width: 100%;
    }
}

        </style>
    </head>

    <body>

        <!-- Spinner Start -->
        
<?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
 ?>
<!-- Spinner -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Navbar -->
<div class="container-fluid fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="index.php" class="navbar-brand">
               <img src="/duan1/public/img/logoxin.png" height="50px" alt="">
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                    <a href="./shop.php" class="nav-item nav-link">Cửa Hàng</a>
                    <a href="./shop-detail.php" class="nav-item nav-link">Chi Tiết</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tin Tức</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="./cart.php" class="dropdown-item">Giỏ Hàng</a>
                            <a href="./checkout.php" class="dropdown-item">Đặt Hàng</a>
                            <a href="testimonial.php" class="dropdown-item">Bài Viết</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Liên Hệ</a>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search text-primary"></i>
                    </button>
                    <a href="cart.php" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-x" style="color: #001e63;"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">0</span>
                    </a>

                  <!-- Kiểm tra đăng nhập -->
                    <?php if (isset($_SESSION['user'])): ?>
                        <div class="dropdown">
                            <a class="btn border-0 my-auto dropdown-toggle d-flex align-items-center" role="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user fa-x me-2" style="color: #001e63;"></i>
                                <span><?php echo htmlspecialchars($_SESSION['user']['username']); ?></span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/DUAN1/views/product/list.php">Admin</a></li>
                                <li><a class="dropdown-item" href="/DUAN1/views/admin/logout.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                    <?php else: ?>
                        <a href="/DUAN1/views/admin/login.php" class="my-auto">
                            <i class="fas fa-user fa-x" style="color: #001e63;"></i>
                        </a>
                    <?php endif; ?>

                </div>
            </div>
        </nav>
    </div>
</div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->

<br><br>
        <!-- Single Page Header start -->
        <div class=" py-5">
            <h1 class="text-center text-white display-6">Bài viết</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Tin tức</a></li>
                <li class="breadcrumb-item active text-white">Bài viết</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Tastimonial Start -->
           
   <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />


    <div class="container py-5">
        <div class="testimonial-header text-center">
            <h2 class="text-primary">Tin tức</h2>
        </div>

        <!-- Swiper Container -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Ô tin tức 1 -->
                <div class="swiper-slide">
                    <div class="item text-center">
                        <a href="/duan1/views/blog/giavang.php">
                            <img src="/DUAN1/public/img/giavang.png" alt="" class="img-fluid">
                        </a>
                        <h5>Giá vàng hôm nay</h5>
                    </div>
                </div>
                <!-- Ô tin tức 2 -->
                <div class="swiper-slide">
                    <div class="item text-center">
                    <a href="/duan1/views/blog/tintuc1.php">
                            <img src="/DUAN1/public/img/tintuc.png" alt="" class="img-fluid">
                        </a>
                        <h5>Trang sức cưới mới</h5>
                    </div>
                </div>
                <!-- Ô tin tức 3 -->
                <div class="swiper-slide">
                    <div class="item text-center">
                        <img src="/DUAN1/public/img/tintuc2.png" alt="" class="img-fluid">
                        <h5>Xu hướng trang sức</h5>
                    </div>
                </div>
                <!-- Ô tin tức 4 -->
            
                <div class="swiper-slide">
                    <div class="item text-center">
                        <img src="/DUAN1/public/img/2banner_top_img.webp" style=" height: 300px;" alt="" class="img-fluid">
                        <h5>Top mẫu nhẫn đá</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="item text-center">
                        <img src="/DUAN1/public/img/z6513240410132_f6acafd1e2958146275296449293036f.jpg" style=" height: 300px;" alt="" class="img-fluid">
                        <h5>Xu hướng trang sức</h5>
                    </div>
                </div>
                
                
            </div>
            
            <!-- Nút điều hướng -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <br>
            <!-- Thanh phân trang -->
            <div class="swiper-pagination"></div>
        </div>

        <div class="text-center mt-4">
            <a href="../views/blog/blog.php" class="btn btn-primary" style="color: #fff; border-radius: 30px;">Xem tất cả</a><hr>
        </div>
    </div>
</>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,  // Hiển thị 3 ô tin tức cùng lúc
        spaceBetween: 10,  // Khoảng cách giữa các ô
        loop: true,  // Lặp vô hạn
        autoplay: {
            delay: 1000,  // Tự động trượt sau 3 giây
            disableOnInteraction: false
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        breakpoints: {
            768: { slidesPerView: 3 },
            576: { slidesPerView: 1 }
        }
    });
</script>


<!-- CSS để căn giữa nội dung và kiểu dáng -->
<style>
   .testimonial-header h4 {
    font-size: 24px;
    color: #001e63;
}

.item {
    text-align: center;
    position: relative; /* Giữ nguyên vị trí ảnh */
    overflow: hidden; /* Tránh ảnh phóng to bị tràn */
}

.item img {

    width: 300px; /* Để ảnh tự co giãn theo khung */
    height: auto;
    object-fit: cover;
    transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    position: relative;
    z-index: 1;
}

.item h5 {
    margin-top: 10px; /* Đảm bảo chữ không bị ảnh hưởng */
    font-size: 18px;
    color: #333;
    position: relative;
    z-index: 2; /* Đưa chữ lên trên ảnh */
}

/* Hiệu ứng hover: ảnh to lên nhưng không đè chữ */
.item:hover img {
    transform: scale(1.1);
    opacity: 0.9;
}

/* Giảm khoảng cách giữa các ảnh */
.swiper-wrapper {
    display: flex;
    align-items: center;
}

.swiper-slide {
    margin: 0 5px; /* Giảm khoảng cách giữa các ảnh */
}

.btn-primary {
    background-color: #001e63;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    transition: 0.3s;
}

.btn-primary:hover {
    background-color: #001e63;
}
.swiper-button-next{
    margin-right: -10px;
}


</style>

        <!-- Tastimonial End -->


        <footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="logo">
                <img src="/DUAN1/public/img/logoxin.png" style="" alt="Diamond Shop">
            </div>
            <p style="color:#555;"  class="tagline">Nơi tỏa sáng vẻ đẹp của bạn</p>
        </div>
        <div class="footer-content">
        <div class="footer-section newsletter">
                <h4>Đăng ký nhận tin</h4>
                <p>Nhận ngay thông tin khuyến mãi và sản phẩm mới nhất</p>
                <form action="#">
                    <input type="email" placeholder="Nhập email của bạn" required >
                    <button type="submit" style="border-radius: 30px; width: 115px;">Đăng ký</button>
                </form>
            </div>
            <div class="footer-section">
                <h4>Về chúng tôi</h4>
                <ul>
                    <li><a href="#">Giới thiệu</a></li>
                    <li><a href="#">Tuyển dụng</a></li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Hỗ trợ khách hàng</h4>
                <ul>
                    <li><a href="#">Chính sách bảo hành</a></li>
                    <li><a href="#">Chính sách đổi trả</a></li>
                    <li><a href="#">Hướng dẫn mua hàng</a></li>
                    <li><a href="#">Câu hỏi thường gặp</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Liên hệ</h4>
                <p>Địa chỉ: 170E Phan Đăng Lưu, P.4, Q.Phú Nhuận, TP.HCM</p>
                <p>Điện thoại: 028 3995 1703</p>
                <p>Email: support@diamondshop.com</p>
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f" style="color: #000000;"></i></a>
                    <a href="#"><i class="fab fa-instagram" style="color: #000000;"></i></a>
                    <a href="#"><i class="fab fa-youtube" style="color: #000000;"></i></a>
                    <a href="#"><i class="fab fa-twitter" style="color: #000000;"></i></a>
                    
                </div>
            </div>
            
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Diamond Shop. All Rights Reserved.</p>
        </div>
    </div>
</footer>

<style>
.footer {
    /* background: linear-gradient(to bottom, #001e63, #001e63);     */
    color: #eee;
    font-family: 'Montserrat', sans-serif;
    padding: 50px 0 20px;
}
.footer .container {
    max-width: 1200px;
    margin: auto;
    padding: 0 20px;
}
.footer-top {
    text-align: center;
    margin-bottom: 30px;
}
.footer-top .logo img {
    width: 120px;
    filter: brightness(150%);
}
.footer-top .tagline {
    font-size: 16px;
    color: #ccc;
    margin-top: 10px;
}
.footer-content {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
}
.footer-section {
    flex: 1;
    min-width: 220px;
}
.footer-section h4 {
    margin-bottom: 15px;
    font-size: 18px;
    color: #001e63;
}
.footer-section ul {
    list-style: none;
    padding: 0;
}
.footer-section ul li a {
    color: black;
    text-decoration: none;
    margin-bottom: 8px;
    display: block;
    transition: 0.3s ease;
}
.footer-section ul li a:hover {
    color: #f4b400;
    transform: scale(1.05);
}
.footer-section p {
    color: black;
}
.social-icons a {
 
    font-size: 20px;
    margin-right: 10px;
    transition: transform 0.3s;
}


.newsletter input {
    width: 90%;
    padding: 10px;
    border-radius: 5px;
 
    margin-bottom: 10px;
}
.newsletter button {
    background: #001e63;
    color: #111;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    color: #fff;
}
.footer-bottom {
    margin-top: 30px;
    border-top: 1px solid #555;
    padding-top: 15px;
    text-align: center;
    color: #999;
}
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        text-align: center;
    }
}
</style>

      



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/DUAN1/public/lib/easing/easing.min.js"></script>
    <script src="/DUAN1/public/lib/waypoints/waypoints.min.js"></script>
    <script src="/DUAN1/public/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/DUAN1/public/lib/owlcarousel/owl.carousel.js"></script>

    <script src="/DUAN1/public/js/main.js"></script>


    </body>

</html>