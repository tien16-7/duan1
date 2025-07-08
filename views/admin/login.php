<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .wrapper {
            display: flex;
            align-items: center;
            background: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            overflow: hidden;
        }
        .banner {
            width: 300px;
            background: #001e63;
            color: white;
            text-align: center;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .banner img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        .container {
            width: 320px;
            padding: 25px;
            text-align: center;
        }
        .form {
            display: none;
            transition: opacity 0.3s ease-in-out;
        }
        .form.active {
            display: block;
            opacity: 1;
        }
        h2 {
            color: #001e63;
            margin-bottom: 15px;
        }
        input {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button {
            margin-top: 12px;
            padding: 12px;
            width: 100%;
            background: #001e63;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }
        button:hover {
            background: #003399;
        }
        p a {
            color: #001e63;
            text-decoration: none;
            font-size: 14px;
            margin: 30px;
        }
        p a:hover {
            text-decoration: underline;
        }
       
    </style>
</head>
<body>
    
        <div class="wrapper">
            <div class="banner">
                <img src="img/he-thong-pnj-gia-lai-732933.jpg" alt="Welcome Banner">
            </div>
        <div class="container">
            <div id="loginForm" class="form active">
                <h2>Login</h2>
                <form action="?action=login" method="POST">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <button type="submit">Login</button>
                </form>
                <p><a href="auth.php">Quên mật khẩu ?</a><a href="#" onclick="toggleForm()">Tạo tài khoản</a></p>
            </div>
            
            <div id="registerForm" class="form">
                <h2>Register</h2>
                <form action="?action=register" method="POST">
                    <input type="text" name="username" placeholder="Username" required><br>
                    <input type="text" name="Email" placeholder="email" required><br>
                    <input type="password" name="password" placeholder="Password" required><br>
                    <button type="submit">Register</button>
                </form>
                <p><a href="#" onclick="toggleForm()">Bạn đã có tài khoản?</a></p>
            </div>
        </div>
    </div>


    <script>
        function toggleForm() {
            document.getElementById("loginForm").classList.toggle("active");
            document.getElementById("registerForm").classList.toggle("active");
        }
    </script>

    

</body>
</html>
<?php
session_start();
include 'db.php';

$action = $_GET['action'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($action == 'register') {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = trim($_POST['username']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            
            if ($stmt->rowCount() > 0) {
                echo "Tên đăng nhập đã tồn tại.";
            } else {
            $stmt = $pdo->prepare("INSERT INTO users (username, password, is_admin) VALUES (?, ?, 0)");
                if ($stmt->execute([$username, $password])) {
                    header("Location: login.php");
                    exit;
                } else {
                    echo "Lỗi khi đăng ký.";
                }
            }
        }
    }

    if ($action == 'login') {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = trim($_POST['username']);
            $password = $_POST['password'];
            
            $stmt = $pdo->prepare("SELECT * FROM users WHERE username = ?");
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && $password === $user['password']) {

                $_SESSION['user'] = [
                    'username' => $user['username'],
                    'is_admin' => $user['is_admin']
                ];
                header("Location: ../index.php");
                exit;
            } else {
                echo "Sai tên đăng nhập hoặc mật khẩu.";
            }
        }
    }
}
if ($action == 'change_password') {
    if (!isset($_SESSION['user'])) {
        echo "Bạn cần đăng nhập để đổi mật khẩu.";
        exit;
    }

    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    $user_id = $_SESSION['user']['id']; // ID từ session người dùng

    // Lấy mật khẩu cũ từ DB
    $stmt = $pdo->prepare("SELECT password FROM users WHERE id = ?");
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    if ($user && password_verify($current_password, $user['password'])) {
        // Mật khẩu đúng, cập nhật
        $new_password_hash = password_hash($new_password, PASSWORD_BCRYPT);
        $update_stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
        $update_stmt->execute([$new_password_hash, $user_id]);

        echo "Đổi mật khẩu thành công!";
        header("Location: login.php");
    } else {
        echo "Mật khẩu hiện tại không đúng.";
    }
}
?>