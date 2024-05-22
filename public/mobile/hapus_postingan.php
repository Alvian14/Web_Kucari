<?php
require_once 'koneksi.php';  // Menggunakan require_once untuk memastikan file koneksi ada

$response = array();

if (isset($_POST['id_postingan'])) {
    $id_postingan = $_POST['id_postingan'];

    // Menghapus postingan dari database
    if ($stmt = $conn->prepare("DELETE FROM postingan WHERE id_postingan = ?")) {
        $stmt->bind_param('i', $id_postingan);
        if ($stmt->execute()) {
            // Jika penghapusan berhasil
            $response['success'] = true;
            $response['message'] = "Postingan berhasil dihapus";
            http_response_code(200); // OK
        } else {
            // Jika terjadi kesalahan saat execute
            $response['success'] = false;
            $response['message'] = "Gagal menghapus postingan";
            http_response_code(500); // Internal Server Error
        }
        $stmt->close();
    } else {
        // Jika terjadi kesalahan saat prepare statement
        $response['success'] = false;
        $response['message'] = "Kesalahan dalam persiapan penghapusan";
        http_response_code(500); // Internal Server Error
    }
} else {
    $response['success'] = false;
    $response['message'] = "ID postingan tidak tersedia";
    http_response_code(400); // Bad Request
}

echo json_encode($response);
?>
