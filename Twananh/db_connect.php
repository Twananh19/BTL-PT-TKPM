<?php
$servername = "127.0.0.1"; // hoặc "localhost"
$username = "root"; // Tên người dùng MySQL (mặc định là "root")
$password = ""; // Mật khẩu MySQL (để trống nếu chưa thiết lập)
$dbname = "clinic_registration"; // Tên cơ sở dữ liệu của bạn
$port = 3307; // Cổng bạn đã cấu hình trong XAMPP

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully!";
?>

