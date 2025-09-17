<?php
$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "satgas";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
