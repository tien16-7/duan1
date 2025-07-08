<?php
// Kết nối tới cơ sở dữ liệu
$servername = "localhost";
$username = "root"; // Thay đổi nếu cần
$password = ""; // Thay đổi nếu có mật khẩu
$dbname = "shop"; // Thay tên database của bạn

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die(json_encode(["status" => "error", "message" => "Kết nối thất bại: " . $conn->connect_error]));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Nhận mã voucher từ input người dùng nhập
    $voucherCode = isset($_POST['voucher_code']) ? trim($_POST['voucher_code']) : '';

    // Kiểm tra xem mã voucher có trống không
    if (empty($voucherCode)) {
        echo json_encode(["status" => "error", "message" => "Vui lòng nhập mã giảm giá!"]);
        exit;
    }

    // Truy vấn cơ sở dữ liệu để kiểm tra mã voucher
    $sql = "SELECT discount FROM vouchers WHERE code = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $voucherCode);
    $stmt->execute();
    $result = $stmt->get_result();

    // Kiểm tra nếu mã voucher tồn tại
    if ($result->num_rows > 0) {
        $voucher = $result->fetch_assoc();
        $discount = $voucher['discount'];
        echo json_encode(["status" => "success", "message" => "Chúc mừng! Bạn đã áp dụng mã giảm giá thành công, giảm $discount%."]);
    } else {
        echo json_encode(["status" => "error", "message" => "Mã giảm giá không hợp lệ!"]);
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();
}
?>
