<?php
// Sambungkan ke database
require_once 'koneksi.php';

// Mendapatkan data dari request
$data = json_decode(file_get_contents("php://input"));
if (isset($data->email) && isset($data->password)) {
    $email = $data->email;
    $password = $data->password;

    // Periksa koneksi yang sudah ada dari file koneksi.php
    if (!$conn) {
        $response = array("status" => "error", "message" => "Koneksi ke database gagal: " . mysqli_connect_error());
        echo json_encode($response);
    } else {
        // Lakukan query untuk memeriksa keberadaan email
        $query = "SELECT * FROM user WHERE email = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
            if (password_verify($password, $user['password'])) {
                // Jika password cocok, kirimkan respons berhasil dengan ID akun
                $response = array(
                    "status" => "success",
                    "message" => "Login berhasil",
                    "userId" => $user['id_user'] // Mengirimkan ID akun ke aplikasi
                );
                echo json_encode($response);
            } else {
                // Jika password tidak cocok, kirimkan respons gagal
                $response = array("status" => "error", "message" => "Email atau password salah");
                echo json_encode($response);
            }
        } else {
            // Jika email tidak ditemukan, kirimkan respons gagal
            $response = array("status" => "error", "message" => "Email atau password salah");
            echo json_encode($response);
        }

        mysqli_stmt_close($stmt);
    }
} else {
    // Jika data email dan password tidak tersedia, kirimkan respons gagal
    $response = array("status" => "error", "message" => "Email dan password harus disediakan");
    echo json_encode($response);
}
?>
