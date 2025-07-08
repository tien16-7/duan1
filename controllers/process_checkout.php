<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Xác nhận đơn hàng</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap');

    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Quicksand', sans-serif;
      background: linear-gradient(135deg, #f0f8ff, #e0f7fa);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .confirmation-box {
      background: white;
      padding: 40px 50px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      max-width: 600px;
      width: 100%;
      animation: fadeIn 0.5s ease-in-out;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(20px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h2 {
      color: #2ecc71;
      font-size: 30px;
      margin-bottom: 20px;
    }

    p {
      color: #333;
      font-size: 16px;
      line-height: 1.6;
      margin: 10px 0;
    }

    strong {
      color: #34495e;
    }

    .btn-back {
      display: inline-block;
      margin-top: 25px;
      padding: 10px 20px;
      background-color: #2ecc71;
      color: white;
      border: none;
      border-radius: 8px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .btn-back:hover {
      background-color: #27ae60;
    }
  </style>
</head>
<body>

  <div class="confirmation-box">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $fullname = $_POST['fullname'] ?? '';
        $address = $_POST['address'] ?? '';
        $email = $_POST['email'] ?? '';
        $phone = $_POST['phone'] ?? '';
        $optional = $_POST['optional'] ?? '';

        echo "<h2>🎉 Đặt hàng thành công!</h2>";
        echo "<p>Xin cảm ơn, <strong>" . htmlspecialchars($fullname) . "</strong>, bạn đã đặt hàng tại cửa hàng của chúng tôi.</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
        echo "<p><strong>Số điện thoại:</strong> " . htmlspecialchars($phone) . "</p>";
        echo "<p><strong>Địa chỉ giao hàng:</strong> " . htmlspecialchars($address) . "</p>";
        echo "<p><strong>Ghi chú thêm:</strong> " . htmlspecialchars($optional) . "</p>";
        echo '<a href="../views/index.php" class="btn-back">🔙 Quay về trang chủ</a>';
    } else {
        header('Location: checkout.php');
        exit;
    }
    ?>
  </div>

</body>
</html>
