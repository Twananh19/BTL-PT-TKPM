<?php  
include 'db.php';  

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    $username = $_POST['username'];  
    $password = $_POST['password'];  

    // Truy vấn để kiểm tra thông tin người dùng  
    $sql = "SELECT * FROM users WHERE username = ?";  
    $stmt = $conn->prepare($sql);  
    $stmt->execute([$username]);  
    $user = $stmt->fetch();  

    // Kiểm tra mật khẩu  
    if ($user && password_verify($password, $user['password'])) {  
        echo "Đăng nhập thành công! Chào, " . htmlspecialchars($username);  
    } else {  
        echo "Sai tên người dùng hoặc mật khẩu!";  
    }  
}  
?>  
<a href="login.php">Quay lại</a>