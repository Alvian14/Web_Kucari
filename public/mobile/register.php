<?php
// Sambungkan ke database
require_once 'koneksi.php';

// Mendapatkan data dari request
$data = json_decode(file_get_contents("php://input"));
if (isset($data->nama_user, $data->email, $data->no_wa, $data->password, $data->confirmPassword)) {
    $name = $data->nama_user;
    $email = $data->email;
    $phone = $data->no_wa;
    $password = $data->password;
    $confirmPassword = $data->confirmPassword;

    // Periksa koneksi yang sudah ada dari file koneksi.php
    if (!$conn) {
        $response = array("status" => "error", "message" => "Koneksi ke database gagal: " . mysqli_connect_error());
        echo json_encode($response);
        exit();
    }

    // Validasi input
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response = array("status" => "error", "message" => "Format email tidak valid");
        echo json_encode($response);
        exit();
    }

    if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
        $response = array("status" => "error", "message" => "Format nomor telepon tidak valid");
        echo json_encode($response);
        exit();
    }

    if ($password !== $confirmPassword) {
        $response = array("status" => "error", "message" => "Password dan Konfirmasi Password tidak cocok");
        echo json_encode($response);
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Lakukan query untuk menambahkan user
    $query = "INSERT INTO user (nama_user, email, no_wa, password, foto_user, level) VALUES (?, ?, ?, ?, 'default.jpg', 'user')";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $phone, $hashedPassword);

    if (mysqli_stmt_execute($stmt)) {
        $response = array("status" => "success", "message" => "User berhasil terdaftar");
        echo json_encode($response);
    } else {
        $response = array("status" => "error", "message" => "Gagal mendaftarkan user");
        echo json_encode($response);
    }

    mysqli_stmt_close($stmt);
} else {
    // Jika data yang diperlukan tidak tersedia, kirimkan respons gagal
    $response = array("status" => "error", "message" => "Semua field harus diisi");
    echo json_encode($response);
}
?>
