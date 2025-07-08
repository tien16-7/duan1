<?php
// Điểm vào chính của ứng dụng

// Chuyển hướng tất cả request đến controller
require_once 'controllers/controller.php';

// Kiểm tra tham số 'page' trên URL
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page == "save") {
    $data = $_POST;

    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $data['image'] = $image_name;
        } else {
            echo "Lỗi upload ảnh!";
            exit();
        }
    } 

    require_once "models/Product.php"; // Gọi model xử lý dữ liệu
    Product::save($data);
    header("Location: index.php");
    exit();
}
