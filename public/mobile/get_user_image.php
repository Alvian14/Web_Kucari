<?php
require_once 'koneksi.php';

if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];

    // Query untuk mendapatkan nama file gambar dari database
    $sql = "SELECT foto_user FROM user WHERE id_user = $userId";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fileName = $row['foto_user'];

        // Tentukan path lengkap ke gambar
        $filePath = "images/" . $fileName;

        // Cek apakah file gambar ada di server
        if (file_exists($filePath)) {
            // Membuat URL lengkap
            $fullUrl = "http://172.16.103.230/kucari_web/public/mobile/" . $filePath;
            echo json_encode(array('fileName' => $fullUrl));
        } else {
            http_response_code(404);
            echo json_encode(array('error' => 'File not found'));
        }
    } else {
        http_response_code(404);
        echo json_encode(array('error' => 'User image not found'));
    }
} else {
    http_response_code(400);
    echo json_encode(array('error' => 'Parameter userId not found'));
}

$conn->close();
?>
