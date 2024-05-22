<?php
require_once 'koneksi.php';

// Periksa apakah ada parameter userId dalam permintaan GET
if (isset($_GET['userId'])) {
    $userId = $_GET['userId'];

    // Memodifikasi query untuk mengambil id_postingan juga
    $sql = "SELECT id_postingan, kategori, deskripsi, DATE_FORMAT(tanggal_postingan, '%d/%m/%Y') AS tanggal_postingan, TIME_FORMAT(jam_postingan, '%H:%i') AS jam_postingan, foto_postingan FROM postingan WHERE id_user = $userId";

    $result = $conn->query($sql);

    // Periksa apakah query berhasil dieksekusi
    if ($result) {
        // Periksa apakah ada baris hasil
        if ($result->num_rows > 0) {
            // Inisialisasi array untuk menyimpan data postingan
            $postinganData = array();

            // Loop melalui setiap baris hasil dan tambahkan ke array data postingan
            while ($row = $result->fetch_assoc()) {
                $postingan = array(
                    'id_postingan' => $row['id_postingan'], // Menambahkan id_postingan ke array
                    'kategori' => $row['kategori'],
                    'deskripsi' => $row['deskripsi'],
                    'tanggal_postingan' => $row['tanggal_postingan'],
                    'jam_postingan' => $row['jam_postingan'],
                    'foto_postingan' => $row['foto_postingan']
                );
                $postinganData[] = $postingan;
            }

            // Konversi data postingan ke format JSON dan kirimkan sebagai respons
            echo json_encode($postinganData);
        } else {
            // Jika tidak ada baris hasil, kirimkan respons kosong
            echo json_encode(array());
        }
    } else {
        // Jika query gagal dieksekusi, kirimkan respons dengan status kode 500 (Internal Server Error)
        http_response_code(500);
        echo json_encode(array('error' => 'Gagal mengambil data postingan dari database'));
    }
} else {
    // Jika parameter userId tidak ada dalam permintaan, kirimkan respons dengan status kode 400 (Bad Request)
    http_response_code(400);
    echo json_encode(array('error' => 'Parameter userId tidak ditemukan'));
}

// Tutup koneksi ke database (opsional, karena koneksi akan ditutup secara otomatis saat skrip selesai dieksekusi)
$conn->close();
?>
