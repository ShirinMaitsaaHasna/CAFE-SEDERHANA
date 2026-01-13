<?php
//koneksi php
$host   = 'localhost';
$user   = 'root'; //ganti sesuai username database kamu
$pass   = '';     //ganti dengan password datbase kamu
$db_name = 'kopi_kita';

$koneksi = new mysqli($host, $user, $pass, $db_name);

if ($koneksi->connect_error) {
    die("koneksi gagal:" . $koneksi->connect_error);
} 

// data admin sederhana ( untuk keprluan tutorial )
// di lingkungan produksi, gunakan tabel user dan hashing password!
define('ADMIN_USER','admin');
define('ADMIN_PASS','230494'); //ganti dengan password yang lebih kuat!
?>