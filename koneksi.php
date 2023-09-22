<?php
// Konfigurasi database
$server = "hosting"; // Lokasi server database (biasanya localhost)
$username = "root"; // Username MySQL (biasanya root)
$password = ""; // Password MySQL (biarkan kosong jika tidak ada)
$database = "test1"; // Nama database yang ingin Anda hubungkan

// Membuat koneksi ke database
$conn = new mysqli($server, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}