<?php
require_once 'koneksi.php';

// Tangkap data yang dikirim dari Flutter
$userId = $_POST['userId'];

// Query untuk mendapatkan data pengguna termasuk URL gambar profil
$sql = "SELECT * FROM user WHERE id_user = $userId";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Jika data pengguna ditemukan
  $row = $result->fetch_assoc();

  // URL gambar profil dari database
  $imageUrl = $row['profile_image_url'];

  // Kirim URL gambar profil ke Flutter
  echo json_encode(array("imageUrl" => $imageUrl));
} else {
  // Jika data pengguna tidak ditemukan
  echo "User tidak ditemukan";
}

$conn->close();
?>
