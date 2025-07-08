<?php
// models/UserModel.php

// Kết nối database
require_once __DIR__ . '/../config/data.php';

// Hàm kiểm tra thông tin đăng nhập
function checkUserCredentials($username, $password) {
    global $conn;
    $query = "SELECT * FROM users WHERE username = ? LIMIT 1";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $user = mysqli_fetch_assoc($result);
    
    // Kiểm tra mật khẩu
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    }
    return false;
}

// Hàm tạo tài khoản mới
function createUser($username, $password, $email) {
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, 'sss', $username, $hashedPassword, $email);
    return mysqli_stmt_execute($stmt);
}
