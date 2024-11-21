<?php
$host = 'localhost';       // Nama host database
$user = 'root';            // Username database, sesuaikan jika berbeda
$password = '';            // Password database, sesuaikan jika ada
$database = 'multi_role_login';  // Nama database yang tadi dibuat

// Membuat koneksi
$koneksi = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
