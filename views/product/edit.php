<?php
require_once __DIR__ . '/../../config/data.php';
require_once __DIR__ . '/../../models/ProductModel.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Xử lý cập nhật sản phẩm
    $id = $_POST['id'] ?? null;
    if (!$id || !is_numeric($id)) {
        die("❌ Lỗi: ID không hợp lệ!");
    }

    $name = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $price = floatval($_POST['price'] ?? 0);

    $product = getProductById($id);
    if (!$product) {
        die("❌ Lỗi: Không tìm thấy sản phẩm!");
    }

    // Cập nhật sản phẩm
    $sql = "UPDATE products SET name = ?, description = ?, price = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdi", $name, $description, $price, $id);

    if ($stmt->execute()) {
        header("Location: list.php"); // Chuyển hướng về trang danh sách
        exit();
    } else {
        die("❌ Lỗi: Không thể cập nhật sản phẩm!");
    }
}

// Xử lý lấy sản phẩm để hiển thị form (nếu là GET request)
$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    die("❌ Lỗi: ID sản phẩm không hợp lệ!");
}

$product = getProductById($id);
if (!$product) {
    die("❌ Lỗi: Không tìm thấy sản phẩm!");
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa sản phẩm</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    text-align: center;
    padding: 20px;
}

h2 {
    color: #333;
}

form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    margin: auto;
}

input[type="text"], input[type="number"], textarea, input[type="file"] {
    width: calc(100% - 20px);
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
}

button:hover {
    background-color: #218838;
}

a {
    display: inline-block;
    margin-top: 15px;
    text-decoration: none;
    color: #007bff;
}

a:hover {
    text-decoration: underline;
}

img {
    margin-top: 10px;
    border-radius: 5px;
}

    </style>
</head>
<body>
    <h2>Chỉnh sửa sản phẩm</h2>
    <form action="/DUAN1/controllers/edit.php" method="POST"  enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= htmlspecialchars($product['id']) ?>">

        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($product['name'] ?? '') ?>" required>

        <label for="description">Mô tả:</label>
        <textarea name="description" required><?= htmlspecialchars($product['description'] ?? '') ?></textarea>

        <label for="price">Giá:</label>
        <input type="number" name="price" value="<?= htmlspecialchars($product['price'] ?? 0) ?>" step="0.01" required>

        <label for="price">Ảnh</label>
        <input type="file" name="image" value="<?= htmlspecialchars($product['image'] ?? '') ?>" required>

        <button type="submit">Cập nhật</button>
    </form>
    <a href="/DUAN1/views/index.php">Quay lại</a>
</body>
</html>
