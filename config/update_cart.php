<?php
session_start();
require_once '../models/ProductModel.php'; 

// Kiểm tra nếu có dữ liệu gửi đến từ AJAX
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'], $_POST['quantity'])) {
    $product_id = intval($_POST['product_id']);
    $quantity = intval($_POST['quantity']);

    // Nếu số lượng nhỏ hơn 1, đặt về 1
    if ($quantity < 1) {
        $quantity = 1;
    }

    // Lấy thông tin sản phẩm từ database
    $product = getProductById($product_id); // Hàm lấy sản phẩm từ DB

    if ($product) {
        // Cập nhật số lượng trong SESSION (giả sử dùng session để lưu giỏ hàng)
        $_SESSION['cart'][$product_id] = [
            'name' => $product['name'],
            'price' => $product['price'],
            'image' => $product['image'],
            'quantity' => $quantity
        ];

        // Tính tổng tiền sản phẩm
        $total_price = $product['price'] * $quantity;

        // Tính tổng tiền giỏ hàng
        $total_cart_price = 0;
        foreach ($_SESSION['cart'] as $item) {
            $total_cart_price += $item['price'] * $item['quantity'];
        }

        // Phí vận chuyển cố định
        $shipping_fee = 100000;
        $grand_total = $total_cart_price + $shipping_fee;

        // Trả kết quả về AJAX
        echo json_encode([
            'status' => 'success',
            'quantity' => $quantity,
            'total_price' => number_format($total_price) . 'đ',
            'total_cart_price' => number_format($total_cart_price) . 'đ',
            'grand_total' => number_format($grand_total) . 'đ'
        ]);
        exit();
    }
}

// Nếu có lỗi, trả kết quả lỗi
echo json_encode(['status' => 'error']);
exit();
?>
