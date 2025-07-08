<?php
session_start();

// Load models
require_once __DIR__ . '/../models/ProductModel.php';
require_once __DIR__ . '/../models/UserModel.php';


// Xác định action từ request
$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'home':
        $products = getAllProducts(); // Gọi model lấy danh sách sản phẩm
        include dirname(__DIR__) . '/views/index.php'; // Hiển thị trang chủ
        break;

    case 'product':
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;
        $product = getProductById($id);
        if ($product) {
            echo "<h2>{$product['name']}</h2>";
            echo "<p>Giá: " . number_format($product['price']) . " VND</p>";
            echo "<p>Mô tả: {$product['description']}</p>";
        } else {
            echo "<p>Không tìm thấy sản phẩm!</p>";
        }
        break;
         

    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $user = checkUserCredentials($username, $password);
            if ($user) {
                $_SESSION['user'] = $user;
                header('Location: index.php?action=home');
                exit;
            } else {
                $error = 'Sai tài khoản hoặc mật khẩu';
                include '../views/login.php';
            }
        } else {
            include '../views/login.php';
        }
        break;

    case 'logout':
        session_destroy();
        header('Location: index.php?action=home');
        exit;

        case 'add':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $data = [
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'price' => floatval($_POST['price']) // Chuyển đổi về kiểu số
                ];
        
                // Xử lý upload ảnh
                if (!empty($_FILES['image']['name'])) {
                    $target_dir = "uploads/";
                    $image_name = time() . "_" . basename($_FILES["image"]["name"]);
                    $target_file = $target_dir . $image_name;
        
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                        $data['image'] = $image_name;
                    } else {
                        echo "Lỗi upload ảnh!";
                        exit();
                    }
                } else {
                    $data['image'] = null; // Không có ảnh
                }
        
                if (addProduct($data)) {
                    header("Location: index.php");
                    exit();
                } else {
                    echo "Lỗi: Không thể thêm sản phẩm!";
                    exit();
                }
            }
            include 'views/product/add.php';
            break;
        
        
        

            case 'edit':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $id = $_POST['id'] ?? null;
            
                    if (!$id) {
                        echo "Lỗi: ID sản phẩm không hợp lệ!";
                        exit;
                    }
            
                    $data = [
                        'name' => $_POST['name'],
                        'description' => $_POST['description'],
                        'price' => $_POST['price']
                    ];
            
                    // Xử lý upload ảnh mới
                    if (!empty($_FILES['image']['name'])) {
                        $target_dir = "uploads/";
                        $image_name = time() . "_" . basename($_FILES["image"]["name"]);
                        $target_file = $target_dir . $image_name;
            
                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                            $data['image'] = $image_name;
                        }
                    } else {
                        // Giữ nguyên ảnh cũ
                        $existingProduct = getProductById($id);
                        $data['image'] = $existingProduct['image'] ?? null;
                    }
            
                    if (updateProduct($id, $data)) {
                        header("Location: index.php");
                        exit;
                    } else {
                        echo "Lỗi khi cập nhật sản phẩm!";
                    }
                } else {
                    // Hiển thị form sửa
                    $id = $_GET['id'] ?? null;
                    if ($id) {
                        $product = getProductById($id);
                    }
                    include '../views/product/edit.php';
                }
                break;
            
            
                case 'delete':
                    $id = $_GET['id'] ?? null;
                    
                    if ($id && deleteProduct($id)) {
                        header("Location: index.php");
                        exit;
                    } else {
                        echo "Lỗi: Không thể xóa sản phẩm!";
                        exit;
                    }
                
            

            
    default:
        include '../views/404.php';
        break;
}


// require_once "../models/ProductModel.php";
// $products = getAllProducts(); // Hàm lấy dữ liệu từ database
// require_once "../views/index.php";



require_once "../models/Product.php";

$page = $_GET['page'] ?? "list";

if ($page == "list") {
    $products = Product::getAll();
    require "views/index.php";

} elseif ($page == "form") {
    $product = isset($_GET['id']) ? Product::getById($_GET['id']) : null;
    require "views/edit.php";

} elseif ($page == "save") {
    $data = $_POST;

    // Xử lý upload ảnh nếu có
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        $image_name = time() . "_" . basename($_FILES["image"]["name"]); // Tránh trùng tên file
        $target_file = $target_dir . $image_name;

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $data['image'] = $image_name;
        } else {
            echo "Lỗi upload ảnh!";
            exit();
        }
    } elseif (isset($_POST['id'])) {
        // Nếu không chọn ảnh mới, giữ ảnh cũ
        $product = Product::getById($_POST['id']);
        $data['image'] = $product['image'] ?? '';
    }

    Product::save($data);
    header("Location: index.php");

} elseif ($page == "delete") {
    Product::delete($_GET['id']);
    header("Location: index.php");

} else {
    echo "Trang không tồn tại!";
}


?>
