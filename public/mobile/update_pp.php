<?php
// Impor file koneksi.php
require_once 'koneksi.php';

// Periksa apakah ada parameter userId dalam permintaan POST
if(isset($_POST['userId'])) {
    $userId = $_POST['userId'];

    // Periksa apakah ada file gambar yang dikirim
    if(isset($_FILES['image'])) {
        $file = $_FILES['image'];

        // Periksa apakah tidak ada error pada file yang dikirim
        if($file['error'] === UPLOAD_ERR_OK) {
            // Tentukan direktori penyimpanan
            $uploadDir = 'images/';
            // Buat nama unik untuk file gambar
            $fileName = uniqid() . '_' . $file['name'];
            // Gabungkan direktori penyimpanan dengan nama file
            $uploadPath = $uploadDir . $fileName;

            // Pindahkan file gambar yang diunggah ke direktori penyimpanan
            if(move_uploaded_file($file['tmp_name'], $uploadPath)) {
                // Query untuk menyimpan nama file ke dalam database
                $sql = "UPDATE user SET foto_user = '$fileName' WHERE id_user = $userId";

                // Jalankan query
                if ($conn->query($sql) === TRUE) {
                    // Kirim respons berhasil
                    echo json_encode(array('status' => 'success'));
                } else {
                    // Jika query gagal dieksekusi, kirimkan respons dengan status kode 500 (Internal Server Error)
                    http_response_code(500);
                    echo json_encode(array('error' => 'Gagal menyimpan data gambar ke database'));
                }
            } else {
                // Jika gagal memindahkan file, kirimkan respons dengan status kode 500 (Internal Server Error)
                http_response_code(500);
                echo json_encode(array('error' => 'Gagal menyimpan file gambar'));
            }
        } else {
            // Jika terjadi kesalahan pada file yang diunggah, kirimkan respons dengan status kode 400 (Bad Request)
            http_response_code(400);
            echo json_encode(array('error' => 'Terjadi kesalahan pada file yang diunggah'));
        }
    } else {
        // Jika tidak ada file gambar yang dikirim, kirimkan respons dengan status kode 400 (Bad Request)
        http_response_code(400);
        echo json_encode(array('error' => 'Tidak ada file gambar yang dikirim'));
    }
} else {
    // Jika parameter userId tidak ada dalam permintaan, kirimkan respons dengan status kode 400 (Bad Request)
    http_response_code(400);
    echo json_encode(array('error' => 'Parameter userId tidak ditemukan'));
}

// Tutup koneksi ke database (optional, karena koneksi akan ditutup secara otomatis saat skrip selesai dieksekusi)
$conn->close();
?>
