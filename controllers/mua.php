<?php
require_once __DIR__ . '/../config/data.php';
require_once __DIR__ . '/../models/ProductModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the image path and prepend '/DUAN1/public/img/'
    $data = [
        'id' => $_POST['id'],
        'name' => $_POST['name'],
        'description' => $_POST['description'],
        'price' => $_POST['price'],
        'image' => $_POST['image'] // Prepend '/DUAN1/public/img/'
    ];
    

    
    // Add the product to the database
    if (addProduct($data)) {
        // Redirect to the cart page after success
        header("Location: ../views/cart.php");
        exit();
    } else {
        die("❌ Lỗi: Không thể thêm sản phẩm!");
    }

}

// Display the form for adding a product (already included in the form above)
include '../views/product/add.php';
?>
