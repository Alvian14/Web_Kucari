<?php
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_user'])) {
    $id_user = $_POST['id_user'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $alamat = $_POST['alamat'];
    $lokasi = $_POST['lokasi'];
    $tanggal_postingan = $_POST['tanggal_postingan'];
    $jam_postingan = $_POST['jam_postingan'];
    $foto_nama = null; // Default null jika tidak ada gambar

    if (isset($_FILES['foto_postingan']) && $_FILES['foto_postingan']['error'] === UPLOAD_ERR_OK) {
        // Mengambil nama file asli
        $originalFileName = pathinfo($_FILES['foto_postingan']['name'], PATHINFO_FILENAME);
        // Mengambil ekstensi file
        $extension = pathinfo($_FILES['foto_postingan']['name'], PATHINFO_EXTENSION);

        // Membuat nama file unik dengan timestamp
        $foto_nama = $originalFileName . '_' . time() . '.' . $extension;
        
        $foto_tmp_name = $_FILES['foto_postingan']['tmp_name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($foto_nama);

        // Pindahkan file ke direktori target
        if (!move_uploaded_file($foto_tmp_name, $target_file)) {
            echo json_encode(['error' => 'Gagal menyimpan file gambar']);
            exit;
        }
    }

    // Persiapan SQL statement
    if ($foto_nama) {
        $sql = "INSERT INTO postingan (kategori, deskripsi, alamat, lokasi, tanggal_postingan, jam_postingan, foto_postingan, id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    } else {
        $sql = "INSERT INTO postingan (kategori, deskripsi, alamat, lokasi, tanggal_postingan, jam_postingan, id_user) VALUES (?, ?, ?, ?, ?, ?, ?)";
    }

    if ($stmt = $conn->prepare($sql)) {
        if ($foto_nama) {
            $stmt->bind_param("sssssssi", $kategori, $deskripsi, $alamat, $lokasi, $tanggal_postingan, $jam_postingan, $foto_nama, $id_user);
        } else {
            $stmt->bind_param("ssssssi", $kategori, $deskripsi, $alamat, $lokasi, $tanggal_postingan, $jam_postingan, $id_user);
        }

        if ($stmt->execute()) {
            echo json_encode(['success' => 'Postingan berhasil ditambahkan']);
        } else {
            echo json_encode(['error' => 'Gagal menambahkan postingan']);
        }

        $stmt->close();
    } else {
        echo json_encode(['error' => 'Gagal menyiapkan statement SQL']);
    }
} else {
    echo json_encode(['error' => 'Invalid request method or missing user ID. Only POST is allowed with user ID']);
}

$conn->close();

?>
