<?php
include 'koneksi.php';

// Mengupdate password admin
$hashedPasswordAdmin = password_hash('admin123', PASSWORD_DEFAULT);
$koneksi->query("UPDATE admin SET password='$hashedPasswordAdmin' WHERE username='admin1'");

// Mengupdate password user
$hashedPasswordUser = password_hash('user123', PASSWORD_DEFAULT);
$koneksi->query("UPDATE user SET password='$hashedPasswordUser' WHERE username='user1'");

echo "Password berhasil diupdate.";
?>
