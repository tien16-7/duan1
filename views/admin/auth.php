<?php
session_start();
include 'db.php'; 

$action = $_GET['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action === 'reset') {
        $username = $_POST['username'] ?? '';
        $newPasswordRaw = $_POST['new_password'] ?? '';

        if (!empty($username) && !empty($newPasswordRaw)) {
            $newPassword = password_hash($newPasswordRaw, PASSWORD_BCRYPT);

            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);

            if ($stmt->rowCount() > 0) {
                $update = $pdo->prepare("UPDATE users SET password = ? WHERE username = ?");
                $result = $update->execute([$newPassword, $username]);

                if ($result) {
                    echo "✅ Mật khẩu đã đổi thành công.";

                    exit;
                } else {
                    echo "❌ Lỗi khi cập nhật mật khẩu.";
                }
            } else {
                echo "❌ Người dùng không tồn tại.";
            }
        } else {
            echo "⚠️ Vui lòng nhập đầy đủ.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Đổi mật khẩu</title>
</head>
<body>
<form action="auth.php?action=reset" method="post">

    <input type="text" name="username" placeholder="Tên đăng nhập" required>
    <input type="password" name="new_password" placeholder="Mật khẩu mới" required>
    <button type="submit">Đổi mật khẩu</button>
</form>

</body>
</html>
