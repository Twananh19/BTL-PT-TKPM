<?php
session_start();
include 'db_connect.php';

if (!isset($_SESSION['admin_id'])) {
    header("Location: admin_login.php");
    exit();
}

$sql = "SELECT * FROM Appointment JOIN Patient ON Appointment.patient_id = Patient.patient_id";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Tên bệnh nhân: " . $row['name'] . "<br>";
    echo "Ngày hẹn: " . $row['appointment_date'] . "<br>";
    echo "Thời gian: " . $row['appointment_time'] . "<br>";
    echo "Trạng thái: " . $row['status'] . "<br>";
    echo "<a href='approve_appointment.php?id=" . $row['appointment_id'] . "'>Duyệt</a> | ";
    echo "<a href='reject_appointment.php?id=" . $row['appointment_id'] . "'>Từ chối</a><br><br>";
}
?>
