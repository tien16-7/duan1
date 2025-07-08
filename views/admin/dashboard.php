<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}
$user = $_SESSION['user'];
?>
<link rel="stylesheet" href="style.css">
<h1>Chào mừng, <?php echo $user['username']; ?></h1>
<?php if ($user['is_admin']) { echo "<p>Bạn là admin</p>"; } ?>
<a href="logout.php" class="logout-btn">Đăng Xuất</a>