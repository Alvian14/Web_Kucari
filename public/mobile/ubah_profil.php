<?php
require_once 'koneksi.php';

// Tangkap data yang dikirim dari Flutter
$userId = $_POST['userId'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$whatsApp = $_POST['whatsapp'];

// Cek apakah nilai yang dikirimkan kosong atau tidak
if(empty($nama) || empty($email) || empty($whatsApp)) {
  // Ambil data dari database untuk dijadikan nilai default
  $sql = "SELECT * FROM user WHERE id_user=$userId";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      // Gunakan nilai dari database sebagai nilai default
      $nama = empty($nama) ? $row['nama_user'] : $nama;
      $email = empty($email) ? $row['email'] : $email;
      $whatsApp = empty($whatsApp) ? $row['no_wa'] : $whatsApp;
    }
  }
}

// Query untuk update profil
$sql = "UPDATE user SET nama_user='$nama', email='$email', no_wa='$whatsApp' WHERE id_user=$userId";

if ($conn->query($sql) === TRUE) {
  // Jika query berhasil dijalankan
  echo "Profil berhasil diperbarui";
} else {
  // Jika terjadi kesalahan dalam query
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
