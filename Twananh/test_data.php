<?php
include 'db_connect.php'; // Kết nối tới cơ sở dữ liệu

// Lấy dữ liệu từ bảng Patient
$sql = "SELECT * FROM Patient";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Hiển thị dữ liệu
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["patient_id"]. " - Name: " . $row["name"]. " - Phone: " . $row["phone"] . "<br>";
    }
} else {
    echo "No data found!";
}

$conn->close(); // Đóng kết nối
?>
