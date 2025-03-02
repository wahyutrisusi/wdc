<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Show</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Fashion Show</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Beranda</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kategori</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/kategori/pria">Pakaian Pria</a></li>
                                <li><a class="dropdown-item" href="/kategori/wanita">Pakaian Wanita</a></li>
                                <li><a class="dropdown-item" href="/kategori/aksesori">Aksesori</a></li>
                                <li><a class="dropdown-item" href="/kategori/sepatu">Sepatu</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="/keranjang">
                            Keranjang <span class="badge bg-danger"><?= isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0 ?></span>
                        </a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main> 