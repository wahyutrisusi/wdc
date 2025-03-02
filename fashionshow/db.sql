CREATE DATABASE db_fashionshow;

USE db_fashionshow;

CREATE TABLE kategori (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    deskripsi TEXT,
    gambar VARCHAR(255)
);

CREATE TABLE produk (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kategori_id INT,
    nama VARCHAR(200) NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    deskripsi TEXT,
    gambar VARCHAR(255),
    stok INT DEFAULT 0,
    unggulan TINYINT(1) DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (kategori_id) REFERENCES kategori(id)
);

CREATE TABLE keranjang (
    id INT PRIMARY KEY AUTO_INCREMENT,
    produk_id INT,
    jumlah INT NOT NULL,
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (produk_id) REFERENCES produk(id)
);

-- Menambahkan data kategori
INSERT INTO kategori (nama, deskripsi, gambar) VALUES
('Pakaian Pria', 'Koleksi pakaian pria terbaru', 'pria.jpg'),
('Pakaian Wanita', 'Koleksi pakaian wanita terkini', 'wanita.jpg'),
('Aksesori', 'Berbagai aksesori fashion', 'aksesori.jpg'),
('Sepatu', 'Koleksi sepatu trendy', 'sepatu.jpg');

-- Menambahkan data produk
INSERT INTO produk (kategori_id, nama, harga, deskripsi, gambar, stok, unggulan) VALUES
(1, 'Kemeja Pria Casual', 299000, 'Kemeja casual nyaman untuk pria', 'kemeja-pria.jpg', 50, 1),
(2, 'Dress Wanita Elegant', 459000, 'Dress elegant untuk acara formal', 'dress-wanita.jpg', 30, 1),
(3, 'Tas Tangan Premium', 899000, 'Tas tangan premium dengan bahan berkualitas', 'tas-tangan.jpg', 20, 1),
(4, 'Sepatu Sneakers', 599000, 'Sepatu sneakers trendy dan nyaman', 'sneakers.jpg', 40, 1); 