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
               <img src="/DUAN1/public/img/logoxin.png" style="height: 50px;" alt="">
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
<br>
<br><br>
  <!-- Chi tiết sản phẩm -->
  <div class="max-w-6xl mx-auto p-6 grid grid-cols-1 md:grid-cols-2 gap-8">
    <!-- Hình ảnh sản phẩm -->
    <div>
      <img id="main-img" src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" alt="Sản phẩm" class="rounded-lg shadow-lg w-full">
      <div class="flex gap-4 mt-4">
        <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="thumb w-20 cursor-pointer border-2 border-gray-300 rounded-md" onclick="changeImage(this)">
        <img src="/DUAN1/public/img/sp-gnxmxmw005485-nhan-vang-10k-dinh-da-ecz-pnj-1.png" class="thumb w-20 cursor-pointer border-2 border-gray-300 rounded-md" onclick="changeImage(this)">
        <img src="/DUAN1/public/img/sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png" class="thumb w-20 cursor-pointer border-2 border-gray-300 rounded-md" onclick="changeImage(this)">
      </div>
    </div>

    <!-- Thông tin sản phẩm -->
    <form action="../controllers/mua.php" method="POST">
  <div>
    <h1 class="text-3xl font-bold mb-2">Vỏ Nhẫn Kim Cương Tự Nhiên</h1>
    <p class="text-red-500 text-2xl font-semibold">
      14.750.400đ <span class="text-gray-500 line-through">17.500.000đ</span> (-16%)
    </p>
    <p class="text-gray-600 my-4">Giá trên là giá vỏ trang sức, chưa bao gồm viên chủ.</p>

    <label class="block font-semibold mt-4">Kiểu dáng viên:</label>
    <select name="shape" class="w-full p-2 border rounded-md" required>
      <option>Round</option>
      <option>Princess</option>
      <option>Oval</option>
    </select>

    <label class="block font-semibold mt-4">Màu kim loại:</label>
    <select name="metal_color" class="w-full p-2 border rounded-md" required>
      <option>Vàng Trắng</option>
      <option>Vàng Hồng</option>
      <option>Vàng 24K</option>
    </select>

    <label class="block font-semibold mt-4">Chọn Size:</label>
    <input type="number" name="size" class="w-full p-2 border rounded-md" placeholder="Nhập kích thước nhẫn" required>

    <!-- Hidden dữ liệu sản phẩm -->
    <input type="hidden" name="id" value="001">
    <input type="hidden" name="name" value="Vỏ Nhẫn Kim Cương Tự Nhiên">
    <input type="hidden" name="price" value="14750400">
    <input type="hidden" name="description" value="Vỏ nhẫn kim cương tự nhiên, chưa bao gồm viên chủ">
    <input type="hidden" name="image" value="your_image_filename.jpg">

    <div class="flex space-x-4 mt-6">
      <button type="submit" onclick="addToCart()" style="background-color: #001e63; color:#fff; border-radius:20px; width: 180px; height:40px;">
        Thêm vào giỏ hàng
      </button>
      <button type="submit" style="background-color: #001e63; color:#fff; border-radius:20px; width: 115px; height:40px;">
        Mua ngay
      </button>
    </div>
  </div>
</form>

  </div>

  <!-- Thông tin chi tiết sản phẩm -->
  <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h2 class="text-2xl font-semibold mb-4">Chi tiết sản phẩm</h2>
    <p class="text-gray-700">
      Vỏ nhẫn kim cương được chế tác từ vàng 18K cao cấp, mang lại độ bền và độ sáng bóng hoàn hảo.
      Thiết kế tinh tế với các viên đá nhỏ xung quanh giúp tăng thêm sự lấp lánh. Phù hợp làm quà tặng hoặc nhẫn cưới.
    </p>
    <ul class="mt-4 list-disc list-inside text-gray-700">
      <li>Chất liệu: Vàng 18K</li>
      <li>Màu sắc: Vàng Trắng / Vàng Hồng</li>
      <li>Bảo hành trọn đời</li>
      <li>Hỗ trợ đổi trả trong 7 ngày</li>
      <li>Giao hàng toàn quốc</li>
    </ul>
  </div>

  <!-- Sản phẩm gợi ý -->
  <div class="max-w-6xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
    <h2 class="text-2xl font-semibold mb-4">Sản phẩm gợi ý</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <div class="text-center">
        <img src="/DUAN1/public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="rounded-lg mx-auto">
        <p class="mt-2 font-semibold">Nhẫn Kim Cương 1</p>
        <p class="text-red-500">12.500.000đ</p>
      </div>
      <div class="text-center">
        <img src="/DUAN1/public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="rounded-lg mx-auto">
        <p class="mt-2 font-semibold">Nhẫn Kim Cương 2</p>
        <p class="text-red-500">14.000.000đ</p>
      </div>
      <div class="text-center">
        <img src="/DUAN1/public/img/sp-gd0000y000241-day-chuyen-vang-18k-pnj-1.png" class="rounded-lg mx-auto">
        <p class="mt-2 font-semibold">Nhẫn Kim Cương 3</p>
        <p class="text-red-500">16.500.000đ</p>
      </div>
      <div class="text-center">
        <img src="/DUAN1/public/img/sp-wmoraj00s41.0338-dong-ho-orient-star-nam-re-av0125s00b-day-kim-loai-41-mm-1.png" class="rounded-lg mx-auto">
        <p class="mt-2 font-semibold">Nhẫn Kim Cương 4</p>
        <a href=""><p class="text-red-500">18.000.000đ</p></a>
      </div>
    </div>
  </div>

  <script>
    function changeImage(img) {
      document.getElementById("main-img").src = img.src;
    }

    let cartCount = 0;

    function addToCart() {
      cartCount++;
      document.getElementById("cart-count").innerText = cartCount;
      alert("Sản phẩm đã thêm vào giỏ hàng!");
    }

    function buyNow() {
      alert("Bạn đã mua ngay sản phẩm này!");
    }
  </script>

    

        <!-- Tastimonial End -->

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
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

    
</body>
</html>
