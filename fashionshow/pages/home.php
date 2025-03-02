<?php include '../config/database.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDC Fashion - Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    .hero-section {
        background: linear-gradient(rgb(25, 121, 105), rgba(93, 206, 197, 0.71)), url('https://www.pngmart.com/files/13/Abstract-Graphic-Design-PNG-Picture.png');
        background-size: cover;
        background-position: center;
        height: 60vh;
        display: flex;
        align-items: center;
    }
</style>
<body class="bg-green-50">
    
    <!-- Header -->
    <header class="bg-green-100 py-4 px-6 flex justify-between items-center shadow-md">
        <div class="text-xl font-bold">WDC Fashion</div>
        <input type="text" placeholder="Search" class="px-4 py-2 rounded-lg border w-1/3">
        <nav>
            <a href="#" class="mx-1">Women</a>
            <a href="#" class="mx-1">Men</a>
            <a href="#" class="mx-1">Kid</a>
            <a href="#" class="mx-1">Second</a>
        </nav>
        <a href="login.php" class="bg-green-600 text-white px-4 py-2 rounded-lg">Login</a>
    </header>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container mx-auto text-white text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">casual terbaik sepanjang masa</h1>
            <p class="text-lg md:text-xl mb-4">baju murah yang cocok untuk lebaran</p>
            <a href="pemesanan.php" class="bg-green-600 text-white px-5 py-3 rounded-lg text-lg">
                <i class="fas fa-calendar-check mr-2"></i>Pesan Sekarang
            </a>
        </div>
    </section>
    
    <!-- Hot Items -->
    <section class="py-10 px-6">
        <h2 class="text-2xl font-bold text-green-700 mb-4">Hot Items</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <?php 
            $query = mysqli_query($conn, "SELECT * FROM products LIMIT 8");
            while ($row = mysqli_fetch_assoc($query)) { ?>
                <div class="bg-white p-4 rounded-lg shadow">
                    <img src="assets/images/<?php echo $row['gambar']; ?>" class="w-full h-40 object-cover rounded">
                    <h3 class="text-lg font-semibold mt-2">Rp <?php echo number_format($row['harga']); ?></h3>
                    <p class="text-gray-600 text-sm"> <?php echo $row['nama_produk']; ?> </p>
                    <a href="product-detail.php?id=<?php echo $row['id']; ?>" class="block mt-2 bg-green-600 text-white text-center py-1 rounded">Lihat Detail</a>
                </div>
            <?php } ?>
        </div>
    </section>
    
    <!-- Collection -->
    <section class="py-10 px-6">
        <h2 class="text-2xl font-bold text-green-700 mb-4">Collection</h2>
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img src="https://www.pngmart.com/files/13/Abstract-Graphic-Design-PNG-Picture.png" class="w-full h-40 object-cover rounded">
                <h3 class="mt-2 font-semibold">Office Wear</h3>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img src="https://www.pngmart.com/files/13/Abstract-Graphic-Design-PNG-Picture.png" class="w-full h-40 object-cover rounded">
                <h3 class="mt-2 font-semibold">Street Wear</h3>
            </div>
            <div class="bg-white p-4 rounded-lg shadow text-center">
                <img src="https://www.pngmart.com/files/13/Abstract-Graphic-Design-PNG-Picture.png" class="w-full h-40 object-cover rounded">
                <h3 class="mt-2 font-semibold">Cold Wear</h3>
            </div>
        </div>
    </section>
    
    <!-- environmentally friendly -->
    <section class="py-10 bg-green-50">
        <div class="container mx-auto px-6">
            <h2 class="text-2xl font-bold text-green-700 text-center mb-6">Environmentally Friendly</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <i class="fas fa-award text-green-600 mb-4" style="font-size: 2.5rem;"></i>
                    <h3 class="text-lg font-semibold mb-2">Swap</h3>
                    <p class="text-gray-600">Gaya baru, tanpa limbah tukar pakaianmu hari ini</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <i class="fas fa-tags text-green-600 mb-4" style="font-size: 2.5rem;"></i>
                    <h3 class="text-lg font-semibold mb-2">Second</h3>
                    <p class="text-gray-600">Pakaian lama cerita baru temukan gaya berkelanjutan</p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow text-center">
                    <i class="fas fa-bolt text-green-600 mb-4" style="font-size: 2.5rem;"></i>
                    <h3 class="text-lg font-semibold mb-2">Rent</h3>
                    <p class="text-gray-600">Tampil staylist tanpa boros</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Footer -->
    <footer class="bg-green-700 text-white py-10">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-3">Hubungi Kami</h3>
                    <p><i class="fas fa-phone mr-2"></i>089528424676</p>
                    <p><i class="fas fa-envelope mr-2"></i>info@amanahwash.com</p>
                    <p><i class="fas fa-map-marker-alt mr-2"></i>Jl.Sutojayan, kec.pakisaji, Kab.Malang</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-3">Jam Operasional</h3>
                    <p><i class="fas fa-clock mr-2"></i>Senin - Jumat: 08.00 - 17.00</p>
                    <p><i class="fas fa-clock mr-2"></i>Sabtu - Minggu: 08.00 - 17.00</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-3">Ikuti Kami</h3>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/wahyutr_i/" class="text-white"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.facebook.com/wahyu.tri.7" class="text-white"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-twitter fa-2x"></i></a>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-green-500">
            <div class="text-center">
                <p class="mb-0">&copy; 2024 Amanah Wash. All rights reserved. NIN.</p>
            </div>
        </div>
    </footer>

</body>
</html>
