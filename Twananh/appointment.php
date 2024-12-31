<?php
include 'db.php';

// Đặt lịch hẹn
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $appointment_date = $_POST['appointment_date'];
    $appointment_time = $_POST['appointment_time'];
    $patient_id = $_POST['patient_id'];
    $doctor_id = $_POST['doctor_id'];
    $service_id = $_POST['service_id'];

    $stmt = $conn->prepare("INSERT INTO Appointment (appointment_date, appointment_time, patient_id, doctor_id, service_id) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$appointment_date, $appointment_time, $patient_id, $doctor_id, $service_id]);

    echo json_encode(['message' => 'Appointment booked successfully']);
}

// Lấy danh sách lịch hẹn
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $conn->query("SELECT * FROM Appointment");
    $appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($appointments);
}
?>
