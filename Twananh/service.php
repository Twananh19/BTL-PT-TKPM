<?php
include 'db.php';

// Lấy danh sách dịch vụ
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $conn->query("SELECT * FROM Service");
    $services = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($services);
}

// Thêm dịch vụ
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $service_name = $_POST['service_name'];
    $price = $_POST['price'];

    $stmt = $conn->prepare("INSERT INTO Service (service_name, price) VALUES (?, ?)");
    $stmt->execute([$service_name, $price]);

    echo json_encode(['message' => 'Service added successfully']);
}
?>
