<!DOCTYPE html>
<html lang="vi">
<head>
<meta content="" name="keywords">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chi tiết sản phẩm</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

  
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
        <link href="/DUAN1/public/css/style.css" rel="stylesheet">


</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f5f5f5;
}
</style>

<!-- Spinner End -->

<!-- Navbar -->
<div class="container-fluid fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="index.php" class="navbar-brand">
               <img src="/duan1/public/img/logoxin.png" style="height:50px;" alt="">
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
            <h1 class="text-center text-white display-6">Liên hệ</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <!-- <li class="breadcrumb-item"><a href="#"></a></li> -->
                <li class="breadcrumb-item active text-white">liên hệ</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Contact Start -->
        
            <div class="container py-5">
                <div class="p-5 bg-light rounded">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="text-center mx-auto" style="max-width: 700px;">
                                <h1 class="text-primary">Liên hệ</h1>
                                <p class="mb-4">Biểu mẫu liên hệ hiện không hoạt động. Nhận biểu mẫu liên hệ chức năng và hoạt động với Ajax & PHP trong vài phút. Chỉ cần sao chép và dán các tệp, thêm một chút mã và bạn đã hoàn tất. Tải xuống ngay .</a>.</p>
                            </div>
                        </div>
                        <div class="col-lg-12">
                        <div class="h-100 rounded">
                            <iframe class="rounded w-100" 
                                style="height: 400px;" 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.316421950552!2d106.62320227590456!3d10.853892357772075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752b6c59ba4c97%3A0x535e784068f1558b!2zVHLGsOG7nW5nIENhbyDEkMOgbmggRlBUIFBvbHl0ZWNobmlj!5e0!3m2!1svi!2s!4v1713682081326!5m2!1svi!2s"
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade"
                                allowfullscreen>
                            </iframe>
                            </div>

                        </div>
                        <div class="col-lg-7">
                            <form action="" class="">
                                <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Nhập Tên ">
                                <input type="email" class="w-100 form-control border-0 py-3 mb-4" placeholder="Nhập Email">
                                <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Lời nhắn"></textarea>
                                <button class="w-100 btn form-control border-secondary py-3  " style="background-color: #001e63;" type="submit">Đăng ký</button>
                            </form>
                        </div>
                        <div class="col-lg-5">
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Địa chỉ</h4>
                                    <p class="mb-2">QTSC 9 Building, Đ. Tô Ký, Tân Chánh Hiệp, Quận 12, Hồ Chí Minh, Việt Nam</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded mb-4 bg-white">
                                <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Email</h4>
                                    <p class="mb-2">giangphan.462005@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex p-4 rounded bg-white">
                                <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                                <div>
                                    <h4>Số Điện Thoại</h4>
                                    <p class="mb-2">+84 3456 7890</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
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

        <!-- Copyright End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>