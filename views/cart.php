<?php
require_once '../models/ProductModel.php'; // Đảm bảo đường dẫn đúng

// Lấy danh sách sản phẩm
$products = getAllProducts() ?? []; // Nếu NULL thì gán thành mảng rỗng

?>
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
            color: #ffc107;
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
            <a href="cart.php" class="navbar-brand">
                <h1 class="text-primary display-6">DIAMOND</h1>
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

<?php
require_once '../models/ProductModel.php'; 
$products = getAllProducts();
?>
   
        <!-- Cart Page Start -->
        <div class="container-fluid py-5"> 
           
            <div class="container py-5"> 
                <div class="giohang">
            <h1 class="text-center text-white display-6">Giỏ Hàng</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="./index.php">Trang Chủ</a></li>
                <li class="breadcrumb-item"><a href="./shop-detail.php">Sản Phẩm</a></li>
                <li class="breadcrumb-item active text-white">Giỏ Hàng</li>
            </ol>
        </div>
                <div class="table-responsive">
                <table class="table">
    <thead>
        <tr>
            <th scope="col">Ảnh</th>
            <th scope="col">Tên</th>
            <th scope="col">Giá</th>
            <th scope="col">Số Lượng</th>
            <th scope="col">Tổng Tiền</th>
            <th scope="col">Xóa</th>
        </tr>
    </thead>
    <?php if (!empty($products)): ?>
        <tbody>
        <?php foreach ($products as $product): ?>
            <tr data-price="<?= htmlspecialchars($product['price']) ?>">
                <td>
                    <img src="/DUAN1/public/img/<?= htmlspecialchars($product['image']) ?>" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="Ảnh sản phẩm">
                </td>
                <td>
                    <p class="mb-0 mt-4"><?= htmlspecialchars($product['name']) ?></p>
                </td>
                <td>
                    <p class="mb-0 mt-4 price"><?= number_format($product['price']) ?>đ</p>
                </td>
                <td>
                    <div class="input-group quantity mt-4" style="width: 100px;">
                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-minus rounded-circle bg-light border">
                                <i class="fa fa-minus"></i>
                            </button>
                        </div>
                        <input type="number" name="quantity" class="form-control form-control-sm text-center border-0 quantity-input" value="1" min="1">

                        <div class="input-group-btn">
                            <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="mb-0 mt-4 total-price"><?= number_format($product['price']) ?>đ</p>
                </td>
                <td>
                   
                <a href="/DUAN1/views/product/delete.php?id=<?= $product['id'] ?>&return=<?= urlencode($_SERVER['REQUEST_URI']) ?>"
                    onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                    <button class="btn btn-md rounded-circle bg-light border mt-4" type="submit">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    </a>

                
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    <?php else: ?>
        <p>Không có sản phẩm nào.</p>
    <?php endif; ?>
</table> 
</div>
                <div class="mt-5">
                <div class="container">
 
                        <form  id="voucherForm" action="/config/apply_voucher.php" method="POST">
                            <input type="text"class="border-0 border-bottom rounded me-5 py-3 mb-4" name="voucher_code" placeholder="Nhập mã giảm giá..." required>
                            <button class="btn border-secondary rounded-pill px-4 py-3 text-primary" type="button">Áp Dụng</button>
                            
                        </form>
                        <p id="result"></p>
                    </div>
                 
                </div>
                <div class="row g-4 justify-content-end">
    <div class="col-8"></div>
    <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
        <div class="bg-light rounded">
            <div class="p-4">
                <h1 class="display-6 mb-4"><span class="fw-normal">Thành Tiền</span></h1>
                <div class="d-flex justify-content-between mb-4">
                    <h5 class="mb-0 me-4">Tổng Tiền Hàng</h5>
                    <p class="mb-0" id="total-cart-price">0 đ</p> <!-- Cập nhật tổng tiền giỏ hàng -->
                </div>
                <div class="d-flex justify-content-between">
                    <h5 class="mb-0 me-4">Phí vận chuyển</h5>
                    <div class="">
                        <p class="mb-0" id="shipping-fee">100.000 đ</p>
                    </div>
                </div>
                <p class="mb-0 text-end">Đơn hàng giá trị cao</p>
            </div>
            <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                <h5 class="mb-0 ps-4 me-4">Tổng Cộng</h5>
                <p class="mb-0 pe-4" id="grand-total">0 đ</p> <!-- Cập nhật tổng cộng -->
            </div>
            <a href="./checkout.php">
                <button class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4" type="button">
                    Đặt Hàng
                </button>
            </a>
        </div>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    function updateCartTotal() {
        let totalCart = 0;
        document.querySelectorAll("tr[data-price]").forEach(row => {
            let price = parseInt(row.dataset.price); // Lấy giá sản phẩm
            let quantityInput = row.querySelector(".quantity-input");
            let quantity = parseInt(quantityInput.value) || 1; // Nếu không hợp lệ, mặc định 1
            let totalPriceElement = row.querySelector(".total-price");

            // Cập nhật tổng tiền từng sản phẩm
            let totalItemPrice = price * quantity;
            totalPriceElement.innerText = new Intl.NumberFormat('vi-VN').format(totalItemPrice) + " đ";

            // Cộng dồn vào tổng giỏ hàng
            totalCart += totalItemPrice;

            // Lưu số lượng vào localStorage
            localStorage.setItem(`cart-item-${row.dataset.id}`, quantity);
        });

        let shippingFee = 100000; // Phí vận chuyển cố định
        let grandTotal = totalCart + shippingFee;

        document.getElementById("total-cart-price").innerText = new Intl.NumberFormat('vi-VN').format(totalCart) + " đ";
        document.getElementById("grand-total").innerText = new Intl.NumberFormat('vi-VN').format(grandTotal) + " đ";
    }

    function loadCartFromStorage() {
        document.querySelectorAll("tr[data-price]").forEach(row => {
            let savedQuantity = localStorage.getItem(`cart-item-${row.dataset.id}`);
            if (savedQuantity) {
                row.querySelector(".quantity-input").value = savedQuantity;
            }
        });
        updateCartTotal(); // Cập nhật tổng tiền sau khi khôi phục
    }

    // Khi nhập số lượng trực tiếp
    document.querySelectorAll(".quantity-input").forEach(input => {
        input.addEventListener("input", function () {
            let quantity = parseInt(this.value);
            if (isNaN(quantity) || quantity < 1) {
                this.value = "1"; // Nếu nhập không hợp lệ, đặt lại 1
            }
            updateCartTotal();
        });
    });

    // Xử lý nút tăng số lượng
    document.querySelectorAll(".btn-plus").forEach(button => {
        button.addEventListener("click", function () {
            let input = this.closest("tr").querySelector(".quantity-input");
            let quantity = parseInt(input.value) || 1;
            input.value = quantity + 1; // Tăng số lượng
            updateCartTotal();
        });
    });

    // Xử lý nút giảm số lượng
    document.querySelectorAll(".btn-minus").forEach(button => {
        button.addEventListener("click", function () {
            let input = this.closest("tr").querySelector(".quantity-input");
            let quantity = parseInt(input.value) || 1;
            input.value = Math.max(1, quantity - 1); // Giảm số lượng, tối thiểu là 1
            updateCartTotal();
        });
    });

    // Khôi phục dữ liệu từ localStorage khi tải trang
    loadCartFromStorage();
});
</script>



               


        <!-- Cart Page End -->


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
                    <button type="submit">Đăng ký</button>
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
    <script src="lib/easing/easing.min.js"></script>
    <script src="/DUAN1/public/lib/waypoints/waypoints.min.js"></script>
    <script src="/DUAN1/public/lib/lightbox/js/lightbox.min.js"></script>
    <script src="/DUAN1/public/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/DUAN1/public/js/main.js"></script>
    </body>

</html>