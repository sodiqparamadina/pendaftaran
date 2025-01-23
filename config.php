<?php


// DB_CONNECTION=mysql
// DB_HOST=lannister.c5jyb00ir1kr.ap-southeast-1.rds.amazonaws.com
// DB_PORT=3306
// DB_DATABASE=data_central_upm
// DB_USERNAME=dcu
// DB_PASSWORD=K@BP]waY&+

$host = 'lannister.c5jyb00ir1kr.ap-southeast-1.rds.amazonaws.com'; // Nama host database
$user = 'dcu';      // Username MySQL (default: root)
$pass = 'K@BP]waY&+';          // Password MySQL (kosong jika default)
$db   = 'data_central_upm'; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die('Koneksi gagal: ' . mysqli_connect_error());
}

// echo 'Koneksi berhasil!';
?>
