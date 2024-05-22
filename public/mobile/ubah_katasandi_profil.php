<?php
require_once 'koneksi.php';

// Tangkap data yang dikirim dari Flutter
$userId = $_POST['userId'];
$oldPassword = $_POST['oldPassword'];
$newPassword = $_POST['newPassword'];

// Query untuk mendapatkan kata sandi yang telah di-hash dari database
$sql = "SELECT password FROM user WHERE id_user=$userId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Jika data user ditemukan
    $row = $result->fetch_assoc();
    $hashedPasswordFromDB = $row['password'];

    // Periksa apakah kata sandi lama yang dimasukkan oleh pengguna sesuai dengan yang ada di database
    if (password_verify($oldPassword, $hashedPasswordFromDB)) {
        // Jika kata sandi lama sesuai, hash kata sandi baru sebelum menyimpannya ke database
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        
        // Query untuk memperbarui kata sandi baru yang telah di-hash
        $updateSql = "UPDATE user SET password ='$hashedNewPassword' WHERE id_user=$userId";

        if ($conn->query($updateSql) === TRUE) {
            // Jika query berhasil dijalankan
            echo json_encode(array("message" => "Kata sandi berhasil diperbarui"));
        } else {
            // Jika terjadi kesalahan dalam query
            echo json_encode(array("message" => "Error: " . $updateSql . "<br>" . $conn->error));
        }
    } else {
        // Jika kata sandi lama yang dimasukkan salah
        echo json_encode(array("message" => "Kata sandi lama salah. Silakan coba lagi"));
    }
} else {
    // Jika data user tidak ditemukan
    echo json_encode(array("message" => "User tidak ditemukan"));
}

$conn->close();
?>
