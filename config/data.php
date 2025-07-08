<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$database = "products";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Lỗi kết nối database: " . mysqli_connect_error());
}
?>