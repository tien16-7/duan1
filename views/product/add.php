<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm sản phẩm</title>
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
    <h2>Thêm sản phẩm</h2>
    <form action="/DUAN1/controllers/add.php" method="post" enctype="multipart/form-data">
        
        <input type="text" name="name" placeholder="Tên sản phẩm" required><br>
        <textarea name="description" placeholder="Mô tả"></textarea><br>
        <input type="number" name="price" placeholder="Giá" required><br>

        <!-- Upload ảnh -->
        <input type="file" name="image"><br>

        <a href="/DUAN1/views/product/list.php"></a><button type="submit" >Lưu</button></a>
    </form>
    <a href="/DUAN1/views/index.php">Quay lại</a>
</body>
</html>
