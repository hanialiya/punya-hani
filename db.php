<?php
$host = 'localhost'; // atau IP server database
$username = 'root'; // ganti dengan username database Anda
$password = ''; // ganti dengan password database Anda
$database = 'buku_db';

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>