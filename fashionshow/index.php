<?php
require_once 'config/database.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$page = rtrim($page, '/');
$parts = explode('/', $page);

switch($parts[0]) {
    case 'home':
        include 'pages/home.php';
        break;
    case 'kategori':
        $kategori = isset($parts[1]) ? $parts[1] : '';
        include 'pages/kategori.php';
        break;
    case 'produk':
        $id = isset($parts[1]) ? $parts[1] : '';
        include 'pages/produk.php';
        break;
    case 'keranjang':
        include 'pages/keranjang.php';
        break;
    default:
        include 'pages/404.php';
}
?> 