<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    <?php 
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>

<!-- Header Start -->
<div class="container-fluid fixed-top">
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <!-- Logo -->
            <a href="/duan1/views/index.php" class="navbar-brand">
                <h1 class="text-primary display-6">DIAMOND</h1>
            </a>

            <!-- Nút Toggle Menu (Mobile) -->
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>

            <!-- Menu Chính -->
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link active">Trang Chủ</a>
                    <a href="shop.php" class="nav-item nav-link">Cửa Hàng</a>
                    <a href="shop-detail.php" class="nav-item nav-link">Chi Tiết</a>

                    <!-- Dropdown Tin Tức -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tin Tức</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="cart.php" class="dropdown-item">Giỏ Hàng</a>
                            <a href="checkout.php" class="dropdown-item">Đặt Hàng</a>
                            <a href="testimonial.php" class="dropdown-item">Bài Viết</a>
                            <a href="404.php" class="dropdown-item">404 Page</a>
                        </div>
                    </div>

                    <a href="contact.php" class="nav-item nav-link">Liên Hệ</a>
                </div>

                <!-- Thanh Công Cụ Bên Phải -->
                <div class="d-flex m-3 me-0">
                    <!-- Tìm Kiếm -->
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal">
                        <i class="fas fa-search text-primary"></i>
                    </button>

                    <!-- Giỏ Hàng -->
                    <a href="cart.php" class="position-relative me-4 my-auto">
                        <i class="fa fa-shopping-bag fa-x" style="color: #001e63;"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" 
                              style="top: -5px; left: 15px; height: 20px; min-width: 20px;">0</span>
                    </a>

                    <!-- Tài Khoản Người Dùng -->
                    <?php if (isset($_SESSION['user'])): ?>
                        <div class="dropdown"></div>
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
<!-- Header End -->

<div class="giavang">
        <h2>Bảng Giá Vàng Hôm Nay</h2>
        <table>
            <thead>
                <tr>
                    <th>Loại Vàng</th>
                    <th>Giá Mua</th>
                    <th>Giá Bán</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vàng miếng SJC 999.9</td>
                    <td>9,880</td>
                    <td>10,130</td>
                </tr>
                <tr>
                    <td>Nhẫn Tròn PNJ 999.9</td>
                    <td>9,870</td>
                    <td>10,130</td>
                </tr>
                <tr>
                    <td>Vàng Kim Bảo 999.9</td>
                    <td>9,870</td>
                    <td>10,130</td>
                </tr>
                <tr>
                    <td>Vàng Phúc Lộc Tài 999.9</td>
                    <td>9,870</td>
                    <td>10,130</td>
                </tr>
                <tr>
                    <td>Vàng nữ trang 999.9</td>
                    <td>9,870</td>
                    <td>10,120</td>
                </tr>
                <tr>
                    <td>Vàng nữ trang 999</td>
                    <td>9,860</td>
                    <td>10,110</td>
                </tr>
                <tr>
                    <td>Vàng nữ trang 9920</td>
                    <td>9,799</td>
                    <td>10,049</td>
                </tr>
                <tr>
                    <td>Vàng nữ trang 99</td>
                    <td>9,779</td>
                    <td>10,029</td>
                </tr>
                <tr>
                    <td>Vàng 750 (18K)</td>
                    <td>7,355</td>
                    <td>7,605</td>
                </tr>
                <tr>
                    <td>Vàng 585 (14K)</td>
                    <td>5,685</td>

                    <td>5,935</td>
                </tr>
                <tr><td>Vàng 416 (10K)</td><td>3,975</td><td>4,225</td></tr>
                <tr><td>Vàng PNJ - Phượng Hoàng</td><td>9,870</td><td>10,130</td></tr>
                <tr><td>Vàng 916 (22K)</td><td>9,030</td><td>9,280</td></tr>
                <tr><td>Vàng 610 (14.6K)</td><td>5,938</td><td>6,188</td></tr>
                <tr><td>Vàng 650 (15.6K)</td><td>6,343</td><td>6,593</td></tr>
                <tr><td>Vàng 680 (16.3K)</td><td>6,647</td><td>6,897</td></tr>
                <tr><td>Vàng 375 (9K)</td><td>3,560</td><td>3,810</td></tr>
                <tr><td>Vàng 333 (8K)</td><td>3,105</td><td>3,355</td></tr>
            </tbody>
            </tbody>
        </table>

        <style>
  body {
            font-family: 'Open Sans', sans-serif;
           
            margin: 20px;
            background-color: #f9f9f9;
            padding: 70px 100px;
        }
        .giavang {
          
            width: 80%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
          
            color: #001e63;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
        }
        th, td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #001e63;
            color: white;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</body>
</html>