<?php
require_once __DIR__ . '/../../models/ProductModel.php';



if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Chuyển ID về số nguyên để tránh lỗi injection
    
    if ($id > 0) {
        deleteProduct($id);
        echo "<script>('Sản phẩm đã bị xóa!'); window.location.href='../../views/index.php';</script>";
        header("Location: /DUAN1/views/product/list.php");
        
    } else {
        echo "<script>alert('Lỗi: ID sản phẩm không hợp lệ!'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Lỗi: Không nhận được ID sản phẩm!'); window.history.back();</script>";
}
?>
