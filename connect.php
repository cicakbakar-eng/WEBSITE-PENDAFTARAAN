<?php
$server = "localhost";
$user = "root"; 
$password = "";
$database = "pendaftaraan_siswa"; 

$db = mysqli_connect($server, $user, $password, $database);

if (!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error()); // 
} else {
    echo "Koneksi ke database berhasil!";
}
?>