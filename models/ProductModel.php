<?php
// models/ProductModel.php

// Kết nối database
require_once __DIR__ . '/../config/data.php';

// Hàm lấy tất cả sản phẩm
function getAllProducts() {
    global $conn;
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    
    $products = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
    return $products;
}

// Hàm lấy sản phẩm theo ID
function getProductById($id) {
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc(); // Trả về mảng hoặc null nếu không có dữ liệu
}

function addProduct($data) {
    global $conn; // Sử dụng biến kết nối database

    $sql = "INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if (!$stmt) {
        die("Lỗi SQL: " . $conn->error);
    }

    // Dùng 'd' cho giá float (decimal)
    $stmt->bind_param("ssds", $data['name'], $data['description'], $data['price'], $data['image']);
    
    if ($stmt->execute()) {
        return true;
    } else {
        die("Lỗi thêm sản phẩm: " . $stmt->error);
    }
}



function deleteProduct($id) {
    global $conn; // Sử dụng biến kết nối từ config/data.php

    $sql = "DELETE FROM products WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id); // "i" là kiểu số nguyên
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "Sản phẩm có ID $id đã bị xóa.";
    } else {
        echo "Lỗi: Không tìm thấy sản phẩm có ID $id.";
    }

    $stmt->close();
}
function updateProduct($id, $data) {
    global $conn;
    
    $sql = "UPDATE products SET name = ?, description = ?, price = ?";
    if (isset($data['image'])) {
        $sql .= ", image = ?";
    }
    $sql .= " WHERE id = ?";

    $stmt = $conn->prepare($sql);
    
    if (isset($data['image'])) {
        $stmt->bind_param("ssdsi", $data['name'], $data['description'], $data['price'], $data['image'], $id);
    } else {
        $stmt->bind_param("ssdi", $data['name'], $data['description'], $data['price'], $id);
    }

    return $stmt->execute();
}




