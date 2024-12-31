<?php
include 'db.php';

// Lấy danh sách bác sĩ
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $conn->query("SELECT * FROM Doctor");
    $doctors = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($doctors);
}

// Thêm bác sĩ
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $specialty = $_POST['specialty'];
    $available_times = $_POST['available_times'];

    $stmt = $conn->prepare("INSERT INTO Doctor (name, specialty, available_times) VALUES (?, ?, ?)");
    $stmt->execute([$name, $specialty, $available_times]);

    echo json_encode(['message' => 'Doctor added successfully']);
}
?>
