<?php
ob_start(); // Bắt đầu buffer để tránh output trước header

session_start();
session_destroy();

// Chuyển hướng về trang chủ
header("Location: ../index.php");
exit;


?>
