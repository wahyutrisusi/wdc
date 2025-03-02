<?php
$host = "localhost";
$user = "root";
$pass = ""; // Jika XAMPP default, kosongkan password
$db   = "fashionshow";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>
