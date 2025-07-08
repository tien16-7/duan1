<?php
require_once "../config/data.php";

class Product {
    public static function getAll() {
        global $conn;
        return $conn->query("SELECT * FROM products")->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function getById($id) {
        global $conn;
        $stmt = $conn->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function save($data) {
        global $conn;
        if (isset($data['id'])) {
            $stmt = $conn->prepare("UPDATE products SET name=?, description=?, price=?, image=? WHERE id=?");
            return $stmt->execute([$data['name'], $data['description'], $data['price'], $data['image'], $data['id']]);
        } else {
            $stmt = $conn->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
            return $stmt->execute([$data['name'], $data['description'], $data['price'], $data['image'] ?? '']);
        }
    }

    public static function delete($id) {
        global $conn;
    
        // Lấy tên file ảnh trước khi xóa sản phẩm
        $stmt = $conn->prepare("SELECT image FROM products WHERE id = ?");
        $stmt->execute([$id]);
        $product = $stmt->fetch();
    
        if ($product && !empty($product['image'])) {
            $imagePath = "uploads/" . $product['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath); // Xóa ảnh trong thư mục uploads
            }
        }
    
        // Xóa sản phẩm khỏi database
        $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
        return $stmt->execute([$id]);
    }
    
}
?>
