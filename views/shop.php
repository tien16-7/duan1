<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Fruitables - Vegetable Website Template</title>
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
        <link href="./public/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="./public/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="/DUAN1/public/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/DUAN1/public/css/style.css" rel="stylesheet">
    </head>

    <body>

      
        <!-- Spinner End -->


        <!-- Navbar start -->
       
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

        <!-- Modal Search End -->


        <!-- Single Page Header start -->
      
        <!-- Single Page Header End -->


        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <h1 class="mb-4">DIAMOND Shop</h1>
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="row g-4">
                            <div class="col-xl-3">
                                <div class="input-group w-100 mx-auto d-flex">
                                    <input type="search" class="form-control p-3" placeholder="Tìm kiếm sản phẩm" aria-describedby="search-icon-1">
                                    <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                                </div>
                            </div>
                            <div class="col-6"></div>
                            <div class="col-xl-3">
                                <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                    <label for="fruits">Sắp xếp:</label>
                                    <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                        <option value="volvo">Mặc định</option>
                                        <option value="saab">Giá từ A -> Z</option>
                                        <option value="opel">Giá từ Z -> A</option>
                                        <option value="audi">Sản phẩm mới</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-3">
                                <div class="row g-4">
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Danh mục</h4>
                                            <ul class="list-unstyled fruite-categorie">
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Trang sức nam</a>
                                                        <span>(79)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Trang sức nữ</a>
                                                        <span>(83)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Trang sức vàng</a>
                                                        <span>(86)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Trang sức bạc</a>
                                                        <span>(34)</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex justify-content-between fruite-name">
                                                        <a href="#">Nhẫn cưới</a>
                                                        <span>(62)</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4 class="mb-2">Giá thành</h4>
                                            <input type="range" class="form-range w-100" id="rangeInput" name="rangeInput" min="0" max="500" value="0" oninput="amount.value=rangeInput.value">
                                            <output id="amount" name="amount" min-velue="0" max-value="500" for="rangeInput">0</output>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb-3">
                                            <h4>Additional</h4>
                                            <div class="mb-2">
                                                <!-- <input type="radio" class="me-2" id="Categories-1" name="Categories-1" value="Beverages"> -->
                                                <label for="Categories-1"></label>
                                            </div>
                                            <div class="mb-2">
                                                <!-- <input type="radio" class="me-2" id="Categories-2" name="Categories-1" value="Beverages"> -->
                                                <label for="Categories-2"></label>
                                            </div>
                                            <div class="mb-2">
                                                <!-- <input type="radio" class="me-2" id="Categories-3" name="Categories-1" value="Beverages"> -->
                                                <label for="Categories-3"></label>
                                            </div>
                                            <div class="mb-2">
                                                <!-- <input type="radio" class="me-2" id="Categories-4" name="Categories-1" value="Beverages"> -->
                                                <label for="Categories-4"></label>
                                            </div>
                                            <div class="mb-2">
                                                <!-- <input type="radio" class="me-2" id="Categories-5" name="Categories-1" value="Beverages"> -->
                                                <label for="Categories-5"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h4 class="mb-3">Sản phẩm giảm giá</h4>
                                       
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="img/featur-2.jpg" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Đồng hồ Disney & Marvel Nam M-9062RGB Dây Da 42 mm</h6>
                                                <div class="fruite-img">
                                                <img src="../public/img/sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                                <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">4.950.000 ₫</h5>
                                                    <h5 class="text-danger text-decoration-line-through">5.950.000 ₫</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-start">
                                            <div class="rounded me-4" style="width: 100px; height: 100px;">
                                                <img src="img/featur-3.jpg" class="img-fluid rounded" alt="">
                                            </div>
                                            <div>
                                                <h6 class="mb-2">Đồng hồ Disney & Marvel Nam M-9062RGB Dây Da 42 mm</h6>
                                                <div class="fruite-img">
                                                    <img src="../public/img/sp-wmdiqf00p52.0038-dong-ho-disney-marvel-nam-m-5040w-day-da-52-mm-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                                <div class="d-flex mb-2">
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star text-secondary"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="d-flex mb-2">
                                                    <h5 class="fw-bold me-2">4.950.000 ₫</h5>
                                                    <h5 class="text-danger text-decoration-line-through">5.950.000 ₫</h5>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center my-4">
                                            <a href="#" class="btn border border-secondary px-4 py-3 rounded-pill text-primary w-100">Xem thêm</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="position-relative">
                                            <img src="" class="img-fluid w-100 rounded" alt="">
                                            <div class="position-absolute" style="top: 50%; right: 10px; transform: translateY(-50%);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="row g-4 justify-content-center">
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                            <div class="fruite-img">
                                               <a href="http://127.0.0.1:5501/test%20chitiet/chitiet.html"><img src="../public/img/sp-gixm00y000177-hat-charm-vang-18k-dinh-da-cz-pnj-1.png" class="img-fluid w-100 rounded-top" alt=""></a>
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Nhẫn Vàng 14K Đính đá Sapphire PNJ Peter Pan</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">4.950.000 ₫</p>
                                                    <a href="http://127.0.0.1:5501/test%20chitiet/chitiet.html" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                                <img src="../public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Nhẫn Vàng 14K Đính đá CZ PNJ XMXMY014991</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">4.950.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                                <img src="../public/img/sp-gcxmxmw000485-day-co-vang-14k-dinh-da-ecz-pnj-1.png  " class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Bông tai Vàng 14K Đính đá CZ PNJ XMXMY009298</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">7.439.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                                <img src="../public/img/gbztmxw000016-bong-tai-vang-trang-14k-dinh-da-synthetic-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Nhẫn Vàng 14K Đính đá CZ PNJ XMXMY014990</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">9.667.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                                <img src="../public/img/gd0000w000072-day-chuyen-vang-trang-10k-pnj-01.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Nhẫn Vàng Trắng 10K Đính đá ECZ PNJ XMXMW005973</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">7.119.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                                <img src="../public/img/sp-gnxmxmw005485-nhan-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Nhẫn Vàng Trắng 10K Đính đá ECZ PNJ XMXMW005972</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">6.934.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                                <img src="../public/img/sp-gnxm00w001718-nhan-nam-vang-10k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Bông tai Vàng Trắng 10K Đính đá ECZ PNJ XMXMW003131</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">7.461.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                            <img src="../public/img/sp-gbxmxmw003084-bong-tai-vang-trang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Bông tai Vàng trắng 14K Đính đá CZ PNJ XMXMY009297</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">7.005.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6 col-xl-4">
                                        <div class="rounded position-relative fruite-item">
                                        <div class="fruite-img">
                                                <img src="../public/img/sp-gcxmxmw000485-day-co-vang-14k-dinh-da-ecz-pnj-1.png" class="img-fluid w-100 rounded-top" alt="">
                                            </div>
                                            <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Trang sức</div>
                                            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                <h6>Bông tai Vàng Trắng 10K Đính đá ECZ PNJ XMXMW003132</h6>
                                                <p>...</p>
                                                <div class="d-flex justify-content-between flex-lg-wrap">
                                                    <p class="text-dark fs-5 fw-bold mb-0">4.950.000 ₫</p>
                                                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i>Thêm vào giỏ hàng</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="pagination d-flex justify-content-center mt-5">
                                            <a href="#" class="rounded">&laquo;</a>
                                            <a href="#" class="active rounded">1</a>
                                            <a href="#" class="rounded">2</a>
                                            <a href="#" class="rounded">3</a>
                                            <a href="#" class="rounded">4</a>
                                            <a href="#" class="rounded">5</a>
                                            <a href="#" class="rounded">6</a>
                                            <a href="#" class="rounded">&raquo;</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trang sức Shop End-->


        

        <!-- Tastimonial End -->

        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

<footer class="footer">
    <div class="container">
        <div class="footer-top">
            <div class="logo">
                <img src="../public/img/logoxin.png" alt="Diamond Shop">
            </div>
            <p class="tagline">Nơi tỏa sáng vẻ đẹp của bạn</p>
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
    /* background: linear-gradient(to bottom, #001e63, #02153b);     */
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
    color: #f4b400;
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
    background: #f4b400;
    color: #111;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
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



    <script src="/DUAN1/public/js/main.js"></script>

    </body>

</html>