<?php
include 'db_connect.php';

if (isset($_GET['id'])) {
    $appointment_id = $_GET['id'];
    $status = basename($_SERVER['SCRIPT_NAME']) == 'approve_appointment.php' ? 'Approved' : 'Rejected';

    $sql = "UPDATE Appointment SET status = ? WHERE appointment_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $status, $appointment_id);
    $stmt->execute();

    header("Location: admin_dashboard.php");
}
?>
