<?php
require_once __DIR__ . '/../config/data.php';
require_once __DIR__ . '/../models/ProductModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'] ?? null;
    if (!$id || !is_numeric($id)) {
        die("❌ Lỗi: ID không hợp lệ!");
    }

    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = number_format((float)$_POST['price'], 2, '.', '');

    // Xử lý ảnh nếu có upload mới
    $imagePath = $_POST['old_image'] ?? ''; // fallback ảnh cũ
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $imageName = basename($_FILES['image']['name']);
        $targetDir = __DIR__ . '/../uploads/';
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $targetFile = $targetDir . $imageName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $imagePath = './' . $imageName;
        }
    }

    // Update vào DB
    $sql = "UPDATE products SET name = ?, description = ?, price = ?, image = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("❌ Lỗi prepare: " . $conn->error);
    }

    // ⚠️ Dòng này là gốc của vấn đề nếu bạn truyền sai
    if (!$stmt->bind_param("ssdsi", $name, $description, $price, $imagePath, $id)) {
        die("❌ Lỗi bind_param: " . $stmt->error);
    }

    if ($stmt->execute()) {
        header("Location: /DUAN1/views/product/list.php");
        exit();
    } else {
        die("❌ Lỗi execute: " . $stmt->error);
    }
}
?>
