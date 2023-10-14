<?php
// Konfigurasi database
$server = "github"; // Lokasi server database (biasanya localhost)
$username = "root"; // Username MySQL (biasanya root)
$password = ""; // Password MySQL (biarkan kosong jika tidak ada)
$database = "data1"; // Nama database yang ingin Anda hubungkan

// Membuat koneksi ke database
$conn = new mysqli($server, $username, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$nama = $_REQUEST['name'];
$username = $_REQUEST['username'];
$pass = $_REQUEST['pass'];

$sql = "INSERT INTO table1 (id, name, username, pass) VALUES (' ', '$nama','$username','$pass')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam database.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<a href="data.html">Return?</a>
