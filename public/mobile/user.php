<?php
// Impor file koneksi.php
require_once 'koneksi.php';

// Periksa apakah ada parameter userId dalam permintaan GET
if(isset($_GET['userId'])) {
    $userId = $_GET['userId'];

    // Query untuk mengambil data pengguna berdasarkan ID pengguna
    $sql = "SELECT nama_user, email, no_wa FROM user WHERE id_user = $userId";

    $result = $conn->query($sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Periksa apakah ada baris hasil
        if ($result->num_rows > 0) {
            // Ambil data pengguna dari baris pertama
            $row = $result->fetch_assoc();
            $userData = array(
                'username' => $row['nama_user'], // Menggunakan 'nama_user' sesuai dengan nama kolom di database
                'email' => $row['email'],
                'whatsapp' => $row['no_wa'],
            );
            // Konversi data pengguna ke format JSON dan kirimkan sebagai respons
            echo json_encode($userData);
        } else {
            // Jika tidak ada baris hasil, kirimkan respons kosong
            echo json_encode(array());
        }
    } else {
        // Jika query gagal dieksekusi, kirimkan respons dengan status kode 500 (Internal Server Error)
        http_response_code(500);
        echo json_encode(array('error' => 'Gagal mengambil data pengguna dari database'));
    }
} else {
    // Jika parameter userId tidak ada dalam permintaan, kirimkan respons dengan status kode 400 (Bad Request)
    http_response_code(400);
    echo json_encode(array('error' => 'Parameter userId tidak ditemukan'));
}

// Tutup koneksi ke database (optional, karena koneksi akan ditutup secara otomatis saat skrip selesai dieksekusi)
$conn->close();
?>
