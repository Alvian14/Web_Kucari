<?php
// check_email.php
require_once 'koneksi.php';  // Asumsi Anda sudah memiliki skrip koneksi database

$data = json_decode(file_get_contents("php://input"));
$email = $data->email;

$query = "SELECT COUNT(*) as count FROM user WHERE email = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row['count'] > 0) {
    echo json_encode(['isRegistered' => true]);
} else {
    echo json_encode(['isRegistered' => false]);
}

$stmt->close();
$conn->close();
?>
