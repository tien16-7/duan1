<?php
require_once __DIR__ . '/../config/data.php';
require_once __DIR__ . '/../models/ProductModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price']
    ];

    // Kiểm tra và xử lý upload ảnh
    $target_dir = __DIR__ . '/../public/img/'; // Sửa đường dẫn

    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }

    if (!empty($_FILES['image']['name'])) {
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $data['image'] = $image_name;
        } else {
            die("❌ Lỗi upload ảnh!");
        }
    } else {
        $data['image'] = null;
    }

    if (addProduct($data)) {
        header("Location: ../views/product/list.php");
        exit();
    } else {
        die("❌ Lỗi: Không thể thêm sản phẩm!");
    }
}

include '../views/product/add.php';
