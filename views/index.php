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


        
       
        <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active rounded">
                    <img src="/DUAN1/public/img/TOP-BANNER-DESK-BF.webp" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                    
                </div>
                <div class="carousel-item rounded">
                    <img src="/DUAN1/public/img/SlideBanner2_PC.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                  
                </div>
               
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

      


        <!-- dịch vụ cửa hàng -->
        <div class="container-fluid featurs py-5">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto" style="background-color: #001e63;">
                                <i class="fas fa-car-side fa-3x " ></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Miễn phí vận chuyển
                                    </h5>
                                <p class="mb-0">Miễn phí khi đặt hàng trên 1.000.000 VND</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto"style="background-color: #001e63;">
                                <i class="fas fa-user-shield fa-3x " ></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Thanh toán bảo mật
                                    </h5>
                                <p class="mb-0">Thanh toán bảo mật 100%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto" style="background-color: #001e63;">
                                <i class="fas fa-exchange-alt fa-3x "></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>30 ngày trở về
                                    </h5>
                                <p class="mb-0">Đảm bảo tiền 30 ngày</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="featurs-item text-center rounded bg-light p-4">
                            <div class="featurs-icon btn-square rounded-circle bg-secondary mb-5 mx-auto" style="background-color: #001e63;">
                                <i class="fa fa-phone-alt fa-3x "></i>
                            </div>
                            <div class="featurs-content text-center">
                                <h5>Hỗ trợ 24/7
                                    </h5>
                                <p class="mb-0">Hỗ trợ mọi lúc nhanh chóng</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

          <?php
            require_once '../models/ProductModel.php'; // Đảm bảo đường dẫn đúng
            $products = getAllProducts();
            ?>

 
            
                        
            <?php if (!empty($products)): ?>
                <?php foreach ($products as $product): ?>     
                   
                
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <div class="col-lg-4 text-start">
                <h1>Danh Sách Sản Phẩm</h1>
            </div>
        <div class="tab-class text-center">
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4"> <!-- Đặt tất cả sản phẩm vào cùng một hàng -->
                        
                            <div class="col-md-6 col-lg-4 col-xl-3">              
                                <div class="rounded position-relative fruite-item border 3px">
                                    <div class="fruite-img">
                                        <img src="/DUAN1/public/img/<?= htmlspecialchars($product['image']) ?>"  class="img-fluid" alt="Ảnh sản phẩm">
                                    </div>
                                    <div class="p-4 ">    
                                        <h3><?= htmlspecialchars($product['name']) ?></h3>
                                        <p><?= htmlspecialchars($product['description']) ?></p>
                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                            <p>Giá: <?= number_format($product['price']) ?> VNĐ</p>
                                            <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary" style="background-color: #001e63; color:#fff !important"> Mua Ngay</a>
                                        </div>
                                    </div>
                                </div>    
                            </div>
                        
                    </div> 
                </div>
            </div>
        </div>  
    </div>
</div>

                    
                <?php endforeach; ?>
                <?php else: ?>
                    <p>Không có sản phẩm nào.</p>
                <?php endif; ?>
          
 </div>          
      <!--Sản phẩm-->
      <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center" >
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h1>Danh Mục Sản Phẩm</h1>
                        </div>
                        <div class="col-lg-8 text-end">
                            <ul class="nav nav-pills d-inline-flex text-center mb-5">
                            <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                                        <span class="text-dark" style="width: 115px;">Tất cả</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex py-2 m-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-2">
                                        <span class="text-dark" style="width: 115px;">Nhẫn</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-3">
                                        <span class="text-dark" style="width: 115px;">Dây Chuyền</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-4">
                                        <span class="text-dark" style="width: 115px;">Bông tai</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex m-2 py-2 bg-light rounded-pill" data-bs-toggle="pill" href="#tab-5">
                                        <span class="text-dark" style="width: 115px;">Đồng Hồ</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                   
        <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">      
                                        <div class="col-md-6 col-lg-4 col-xl-3"> 
                                            <form action="../controllers/mua.php" method="POST">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">                                                        
                                                        <img src="/DUAN1/public/img/sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="Product Image">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 8px;">Hot</div>
                                                    <div class="p-4">
                                                        <h4>Nhẫn cưới</h4>
                                                        <p>Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                            <p class="text-dark fs-5 fw-bold mb-0">4.032.000 ₫</p>
                                                            <input type="hidden" name="id" value="123">
                                                            <input type="hidden" name="name" value="Nhẫn cưới">
                                                            <input type="hidden" name="price" value="4032000">
                                                            <input type="hidden" name="description" value="Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau">                                                      
                                                            <input type="hidden" name="image" value="sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">
                                                                Mua Ngay
                                                            </button>
                                                        </div>
                                                    </div> 
                                            </div>
                                            </form>   
                                        </div>
                                        
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Hot</div>
                                                    <div class="p-4">
                                                        <h4>Bông tai</h4>
                                                        <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney Cinderella</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                            <p class="text-dark fs-5 fw-bold mb-0">5.779.000 ₫</p>
                                                            <input type="hidden" name="id" value="002">
                                                            <input type="hidden" name="name" value="Bông tai">
                                                            <input type="hidden" name="price" value="5779000">
                                                            <input type="hidden" name="description" value="Bông tai Vàng trắng 14K đính đá Synthetic Disney Cinderella">
                                                            <input type="hidden" name="image" value="gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/sp-gbxmxmw003084-bong-tai-vang-trang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4">
                                                        <h4>Bông tai</h4>
                                                        <p>Bông tai Vàng trắng 14K đính đá ECZ PNJ Audax Rosa</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                            <p class="text-dark fs-5 fw-bold mb-0">8.079.000 ₫</p>
                                                            <input type="hidden" name="id" value="003">
                                                            <input type="hidden" name="name" value="Bông tai">
                                                            <input type="hidden" name="price" value="8079000">
                                                            <input type="hidden" name="description" value="Bông tai Vàng trắng 14K đính đá ECZ PNJ Audax Rosa">
                                                            <input type="hidden" name="image" value="sp-gbxmxmw003084-bong-tai-vang-trang-14k-dinh-da-ecz-pnj-1.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>


                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                                <form action="../controllers/mua.php" method="POST">
                                                    <div class="rounded position-relative fruite-item">
                                                        <div class="fruite-img">
                                                            <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                        </div>
                                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                        <div class="p-4">
                                                            <h4>Đồng hồ</h4>
                                                            <p>Đồng hồ Orient Star Nam RE-AV0125S00B Dây Kim Loại 41</p>
                                                            <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 ₫</p>
                                                                <input type="hidden" name="id" value="004">
                                                                <input type="hidden" name="name" value="Đồng hồ">
                                                                <input type="hidden" name="price" value="6120000">
                                                                <input type="hidden" name="description" value="Đồng hồ Orient Star Nam RE-AV0125S00B Dây Kim Loại 41">
                                                                <input type="hidden" name="image" value="sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png">
                                                                <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>


                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                <form action="../controllers/mua.php" method="POST">
                                                    <div class="rounded position-relative fruite-item">
                                                        <div class="fruite-img">
                                                            <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                        </div>
                                                        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                        <div class="p-4">
                                                            <h4>Đồng hồ</h4>
                                                            <p>Đồng hồ Orient Star Nam RE-AV0125S00B Dây Kim Loại 41</p>
                                                            <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 ₫</p>
                                                                <input type="hidden" name="id" value="001">
                                                                <input type="hidden" name="name" value="Đồng hồ">
                                                                <input type="hidden" name="price" value="6120000">
                                                                <input type="hidden" name="description" value="Đồng hồ Orient Star Nam RE-AV0125S00B Dây Kim Loại 41">
                                                                <input type="hidden" name="image" value="sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png">
                                                                <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="col-md-6 col-lg-4 col-xl-3">
                                                    <form action="../controllers/mua.php" method="POST">
                                                        <div class="rounded position-relative fruite-item">
                                                            <div class="fruite-img">
                                                                <img src="/DUAN1/public/img/sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                            </div>
                                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Hot</div>
                                                            <div class="p-4">
                                                                <h4>Đồng hồ</h4>
                                                                <p>Đồng hồ Disney & Marvel Nam M-5040W Dây Cao su 52 mm</p>
                                                                <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                                    <p class="text-dark fs-5 fw-bold mb-0">2.550.000 ₫</p>
                                                                    <input type="hidden" name="id" value="002">
                                                                    <input type="hidden" name="name" value="Đồng hồ">
                                                                    <input type="hidden" name="price" value="2550000">
                                                                    <input type="hidden" name="description" value="Đồng hồ Disney & Marvel Nam M-5040W Dây Cao su 52 mm">
                                                                    <input type="hidden" name="image" value="sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png">
                                                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                    <form action="../controllers/mua.php" method="POST">
                                                        <div class="rounded position-relative fruite-item">
                                                            <div class="fruite-img">
                                                                <img src="/DUAN1/public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="img-fluid w-100 rounded-top" alt="">
                                                            </div>
                                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Sale</div>
                                                            <div class="p-4">
                                                                <h4>Dây chuyền</h4>
                                                                <p>Dây chuyền Vàng trắng 10K PNJ Synthetic</p>
                                                                <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                                    <p class="text-dark fs-5 fw-bold mb-0">4.433.000 ₫</p>
                                                                    <input type="hidden" name="id" value="003">
                                                                    <input type="hidden" name="name" value="Dây chuyền">
                                                                    <input type="hidden" name="price" value="4433000">
                                                                    <input type="hidden" name="description" value="Dây chuyền Vàng trắng 10K PNJ Synthetic">
                                                                    <input type="hidden" name="image" value="gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png">
                                                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="col-md-6 col-lg-4 col-xl-3">
                                                    <form action="../controllers/mua.php" method="POST">
                                                        <div class="rounded position-relative fruite-item">
                                                            <div class="fruite-img">
                                                                <img src="/DUAN1/public/img/gd0000y000952day-chuyen-vang-18k-p-nj-001.png" class="img-fluid w-100 rounded-top" alt="">
                                                            </div>
                                                            <div class="p-4">
                                                                <h4>Dây chuyền</h4>
                                                                <p>Dây chuyền Vàng 18K PNJ Audax Rosa</p>
                                                                <div class="d-flex justify-content-between flex-lg-wrap align-items-center">
                                                                    <p class="text-dark fs-5 fw-bold mb-0">6.340.000 ₫</p>
                                                                    <input type="hidden" name="id" value="004">
                                                                    <input type="hidden" name="name" value="Dây chuyền">
                                                                    <input type="hidden" name="price" value="6340000">
                                                                    <input type="hidden" name="description" value="Dây chuyền Vàng 18K PNJ Audax Rosa">
                                                                    <input type="hidden" name="image" value="gd0000y000952day-chuyen-vang-18k-p-nj-001.png">
                                                                    <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/sp-gnxmxmw005485-nhan-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                    <div class="p-4 ">
                                                        <h4>Nhẫn cưới</h4>
                                                        <p>Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">5.932.000 ₫</p>
                                                            <input type="hidden" name="id" value="485">
                                                            <input type="hidden" name="name" value="Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau">
                                                            <input type="hidden" name="price" value="5932000">
                                                            <input type="hidden" name="description" value="Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau">
                                                            <input type="hidden" name="image" value="sp-gnxmxmw005485-nhan-vang-10k-dinh-da-ecz-pnj-1.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                    <div class="p-4 ">
                                                        <h5>Nhẫn cưới</h5>
                                                        <p>Nhẫn cưới nam Vàng trắng 10K Đính đá ECZ PNJ</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">4.232.000 ₫</p>
                                                            <input type="hidden" name="id" value="1718">
                                                            <input type="hidden" name="name" value="Nhẫn cưới nam Vàng trắng 10K Đính đá ECZ PNJ">
                                                            <input type="hidden" name="price" value="4232000">
                                                            <input type="hidden" name="description" value="Nhẫn cưới nam Vàng trắng 10K Đính đá ECZ PNJ">
                                                            <input type="hidden" name="image" value="sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Sale</div>
                                                    <div class="p-4">
                                                        <h4>Dây chuyền</h4>
                                                        <p>Dây chuyền Vàng trắng 10K PNJ Synthetic</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">4.433.000 ₫</p>
                                                            <input type="hidden" name="id" value="072">
                                                            <input type="hidden" name="name" value="Dây chuyền Vàng trắng 10K PNJ Synthetic">
                                                            <input type="hidden" name="price" value="4433000">
                                                            <input type="hidden" name="description" value="Dây chuyền Vàng trắng 10K PNJ Synthetic">
                                                            <input type="hidden" name="image" value="gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/gd0000y000952day-chuyen-vang-18k-p-nj-001.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4">
                                                        <h4>Dây chuyền</h4>
                                                        <p>Dây chuyền Vàng 18K PNJ Audax Rosa</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">7.340.000 ₫</p>
                                                            <input type="hidden" name="id" value="952">
                                                            <input type="hidden" name="name" value="Dây chuyền Vàng 18K PNJ Audax Rosa">
                                                            <input type="hidden" name="price" value="13340000">
                                                            <input type="hidden" name="description" value="Dây chuyền Vàng 18K PNJ Audax Rosa">
                                                            <input type="hidden" name="image" value="gd0000y000952day-chuyen-vang-18k-p-nj-001.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                    <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Hot</div>
                                                    <div class="p-4">
                                                        <h4>Bông tai</h4>
                                                        <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney Cinderella</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">5.779.000 ₫</p>
                                                            <input type="hidden" name="id" value="016">
                                                            <input type="hidden" name="name" value="Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella">
                                                            <input type="hidden" name="price" value="5779000">
                                                            <input type="hidden" name="description" value="Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella">
                                                            <input type="hidden" name="image" value="gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <form action="../controllers/mua.php" method="POST">
                                                <div class="rounded position-relative fruite-item">
                                                    <div class="fruite-img">
                                                        <img src="/DUAN1/public/img/sp-gbxmxmw003084-bong-tai-vang-trang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                    </div>
                                                    <div class="p-4">
                                                        <h4>Bông tai</h4>
                                                        <p>Bông tai Vàng trắng 14K đính đá ECZ PNJ Audax Rosa</p>
                                                        <div class="d-flex justify-content-between flex-lg-wrap">
                                                            <p class="text-dark fs-5 fw-bold mb-0">9.498.000 ₫</p>
                                                            <input type="hidden" name="id" value="084">
                                                            <input type="hidden" name="name" value="Bông tai Vàng trắng 14K đính đá ECZ PNJ Audax Rosa">
                                                            <input type="hidden" name="price" value="12498000">
                                                            <input type="hidden" name="description" value="Bông tai Vàng trắng 14K đính đá ECZ PNJ Audax Rosa">
                                                            <input type="hidden" name="image" value="sp-gbxmxmw003084-bong-tai-vang-trang-14k-dinh-da-ecz-pnj-1.png">
                                                            <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" style="width: 115px; background-color: #001e63; color:#fff !important">Mua Ngay</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                <div class="p-4 ">
                                                    <h4>Đồng hồ</h4>
                                                    <p>Đồng hồ Orient Star Nam AV0125S Dây Kim Loại 41mm</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">6.120.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Hot</div>
                                                <div class="p-4 ">
                                                    <h4>Đồng hồ</h4>
                                                    <p>Đồng hồ Disney & Marvel Nam M-5040W Dây Cao su 52 mm</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">2.550.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-wfdiqfw0m25.0016-dong-ho-disney-watch-nu-mk-11607w-day-kim-loai-25-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Sale</div>
                                                <div class="p-4 ">
                                                    <h4>Đồng hồ</h4>
                                                    <p>Đồng hồ Disney Watch Nữ MK-11607W Dây Kim Loại 25 mm</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">2.050.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-gnxmxmw005485-nhan-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                <div class="p-4 ">
                                                    <h4>Nhẫn cưới</h4>
                                                    <p>Nhẫn cưới Vàng trắng 10K đính đá ECZ PNJ Trầu Cau </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">5.932.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important"> Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                <div class="p-4 ">
                                                    <h5>Nhẫn cưới </h5>
                                                    <p>Nhẫn cưới nam Vàng trắng 10K Đính đá ECZ PNJ </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">4.232.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Sale</div>
                                                <div class="p-4 ">
                                                    <h4>Dây chuyền</h4>
                                                    <p>Dây chuyền Vàng trắng 10K PNJ Synthetic </p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">4.433.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/gd0000y000952day-chuyen-vang-18k-p-nj-001.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 ">
                                                    <h4>Dây chuyền</h4>
                                                    <p>Dây chuyền Vàng 18K PNJ  Audax Rosa</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">13.340.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Hot</div>
                                                <div class="p-4 ">
                                                    <h4>Bông tai</h4>
                                                    <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">5.779.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-gbxmxmw003084-bong-tai-vang-trang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 ">
                                                    <h4>Bông tai</h4>
                                                    <p>Bông tai Vàng trắng 14K đính đá ECZ PNJ Audax Rosa</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">12.498.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">New</div>
                                                <div class="p-4 ">
                                                    <h4>Đồng hồ</h4>
                                                    <p>Đồng hồ Orient Star Nam RE-AV0125S00B Dây Kim Loại 41 mm</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">6.120.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Hot</div>
                                                <div class="p-4 ">
                                                    <h4>Đồng hồ</h4>
                                                    <p>Đồng hồ Disney & Marvel Nam M-5040W Dây Cao su 52 mm</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">2.550.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="/DUAN1/public/img/sp-wfdiqfw0m25.0016-dong-ho-disney-watch-nu-mk-11607w-day-kim-loai-25-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Sale</div>
                                                <div class="p-4 ">
                                                    <h4>Đồng hồ</h4>
                                                    <p>Đồng hồ Disney Watch Nữ MK-11607W Dây Kim Loại 25 mm</p>
                                                    <div class="d-flex justify-content-between flex-lg-wrap">
                                                        <p class="text-dark fs-5 fw-bold mb-0">2.050.000 ₫</p>
                                                        <a href="./cart.php" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!--  End-->

       
        <!-- Featurs Start -->
        <div class="container-fluid service py-5"> 
           
            <div class="container py-5"> <div class="col-lg-4 text-start">
            <h1>Sản Phẩm Giảm Giá</h1>
        </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-secondary rounded border 3px">
                                <img src="/DUAN1/public/img/sp-glxmxmw000428-lac-tay-vang-trang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="">Lắc tay Vàng Trắng 10K đính đá ECZ PNJ</h5>
                                        <h5 class="mb-0">10% OFF</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-secondary rounded border 3px">
                                <img src="/DUAN1/public/img/sp-gcxmxmw000485-day-co-vang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 ">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="">Dây cổ Vàng trắng 14K đính đá ECZ PNJ</h5>
                                        <h5 class="mb-0">14% OFF</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <a href="#">
                            <div class="service-item bg-secondary rounded border 3px">
                                <img src="/DUAN1/public/img/sp-gixm00y000177-hat-charm-vang-18k-dinh-da-cz-pnj-1.png" class="img-fluid rounded-top w-100" alt="">
                                <div class="px-4 rounded-bottom">
                                    <div class="service-content bg-primary text-center p-4 rounded">
                                        <h5 class="">Hạt charm Vàng 18K đính đá CZ PNJ</h5>
                                        <h5 class="mb-0">18% OFF</h5>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featurs End -->

<!-- Vesitable Shop Start-->
<div class="container-fluid vesitable py-5">
            <div class="container py-5">
                <h1 class="mb-0">Sản Phẩm Nổi Bật</h1>
                <div class="owl-carousel vegetable-carousel justify-content-center">
            
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/sp-gbxmxmw003084-bong-tai-vang-trang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4 ">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/sp-glxmxmw000428-lac-tay-vang-trang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4 ">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4 ">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4 ">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/sp-gixm00y000177-hat-charm-vang-18k-dinh-da-cz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4 ">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4 ">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                    <div class="border border-primary rounded position-relative vesitable-item border 3px">
                        <div class="vesitable-img">
                            <img src="/DUAN1/public/img/sp-gcxmxmw000485-day-co-vang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                        <div class="p-4 ">
                            <h4>Bông tai</h4>
                            <p>Bông tai Vàng trắng 14K đính đá Synthetic Disney|PNJ Cinderella</p>
                            <div class="d-flex justify-content-between flex-lg-wrap">
                                <p class="text-dark fs-5 fw-bold mb-0">6.120.000 đ</p>
                                <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vesitable Shop End -->
       


        <!-- Banner Section Start-->
        <div class="container-fluid banner bg-secondary my-5">
            <div class="container py-5">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <div class="py-4">
                            <h1 class="display-3 ">Gemstone Jewelry </h1>
                            <p class="fw-normal display-3 text-dark mb-4">
                            in Our Store</p>
                            <p class="mb-4 text-dark">KIM CƯƠNG được tạo ra luôn không có sự lặp lại, sự hài hước được tiêm vào hoặc những từ không đặc trưng, ​​v.v.</p>
                            <a href="#" class="banner-btn btn border-2 border-white rounded-pill text-dark py-3 px-5"style=" background-color: #001e63 ;color:#fff !important; height 40px; width: 180px;">Mua Ngay</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <img src="/DUAN1/public/img/Banner-Slide-Web-1972x640-Mois-1024x332.png" class="img-fluid w-100 rounded" alt="">
                          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  End -->


        <!-- SẢN PHẨM BÁN CHẠY-->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                    <h1 class="display-7">Sản Phẩm Bán Chạy</h1>
                    
                </div>
                <div class="row g-4">
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/sp-gcxmxmw000485-day-co-vang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>4.040.000 đ</p>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star "></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/sp-gixm00y000177-hat-charm-vang-18k-dinh-da-cz-pnj-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-whitetext-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star "></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/sp-gd0000y000241-day-chuyen-vang-18k-pnj-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4">
                        <div class="p-4 rounded bg-light">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <img src="/DUAN1/public/img/sp-gnxmxmw005485-nhan-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid rounded-circle w-100" alt="">
                                </div>
                                <div class="col-6">
                                    <a href="#" class="h5">Bông tai</a>
                                    <div class="d-flex my-3">
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    <h5>4.040.000 đ</h5>
                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"style="width: 115px; background-color: #001e63 ;color:#fff !important">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bestsaler Product End -->


       
   <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="testimonial-header text-center">
            <h4 class="text-primary">Tin Tức</h4>
        </div>
<br>
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
</div>

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




            <!-- Nút điều hướng -->


        <!-- Tastimonial Start -->
       


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


        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        <!-- Footer End -->

        


           

        
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