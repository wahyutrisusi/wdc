<form action="upload_product.php" method="POST" enctype="multipart/form-data">
    <label>Nama Produk:</label>
    <input type="text" name="nama_produk" required><br>

    <label>Harga:</label>
    <input type="number" name="harga" required><br>

    <label>Kategori:</label>
    <select name="kategori">
        <option value="Office Wear">Office Wear</option>
        <option value="Street Wear">Street Wear</option>
        <option value="Cold Wear">Cold Wear</option>
    </select><br>

    <label>Deskripsi:</label>
    <textarea name="deskripsi"></textarea><br>

    <label>Stok:</label>
    <input type="number" name="stok" required><br>

    <label>Upload Gambar:</label>
    <input type="file" name="gambar" accept="image/*" required><br>

    <button type="submit" name="submit">Tambah Produk</button>
</form>
