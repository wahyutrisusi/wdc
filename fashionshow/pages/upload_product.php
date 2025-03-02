<?php
include 'config/database.php';  // Koneksi ke database

if (isset($_POST['submit'])) {
    $nama_produk = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    // Proses upload gambar
    $target_dir = "uploads/"; // Folder penyimpanan gambar
    $file_name = basename($_FILES["gambar"]["name"]);
    $target_file = $target_dir . time() . "_" . $file_name; // Rename dengan timestamp

    // Validasi jenis file
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed_types = ['jpg', 'jpeg', 'png', 'gif'];

    if (in_array($imageFileType, $allowed_types)) {
        if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
            // Simpan data ke database
            $sql = "INSERT INTO products (nama_produk, harga, kategori, gambar, deskripsi, stok) 
                    VALUES ('$nama_produk', '$harga', '$kategori', '$target_file', '$deskripsi', '$stok')";

            if (mysqli_query($conn, $sql)) {
                echo "Produk berhasil ditambahkan!";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Gagal mengupload gambar.";
        }
    } else {
        echo "Hanya file JPG, JPEG, PNG, dan GIF yang diperbolehkan.";
    }
}
?>
