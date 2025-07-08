<?php
require_once '../../models/ProductModel.php'; // Đảm bảo đường dẫn đúng


// Lấy danh sách sản phẩm
$products = getAllProducts() ?? []; // Nếu NULL thì gán thành mảng rỗng

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        img {
            width: 150px;
        }
        body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: 20px auto;
    background: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th {
    background: #007bff;
    color: white;
    padding: 12px;
    text-align: left;
}

td {
    padding: 10px;
}

tr:nth-child(even) {
    background: #f2f2f2;
}

button {
    background: #28a745;
    color: white;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #218838;
}

    </style>
</head>
<body>

    <h2>Danh sách sản phẩm</h2>

    <?php if (empty($products)): ?>
        <p>Không có sản phẩm nào.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>STT</th>
                <th>Tên</th>
                <th>Mô tả</th>
                <th>Giá</th>
                <th>Ảnh</th>
                <th>Hành động</th>
            </tr>
            <?php 
            $stt = 1; // Bắt đầu STT từ 1
            foreach ($products as $product): ?>
                <tr>
                    <td><?= $stt++ ?></td> <!-- STT tự động -->
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['description']) ?></td>
                    <td><?= number_format($product['price']) ?> VND</td>
                    <td>
                        <?php if (!empty($product['image'])): ?>
                            <img src="/DUAN1/public/img/<?= htmlspecialchars($product['image']) ?>" width="100">
                        <?php else: ?>
                            <span>Không có ảnh</span>
                        <?php endif; ?>
                    </td>
                    <td>
                    <a href="edit.php?id=<?= $product['id'] ?>"><button type="submit">Sửa</button></a>

                   
                    <a href="delete.php?id=<?= $product['id'] ?>" onclick=""><button type="submit">Xóa</button></a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <a href="add.php?id"><button type="submit">Thêm sản phẩm</button></a>
    <a href="/DUAN1/views/index.php"><button type="submit">Quay lại</button></a>
</body>
</html>
