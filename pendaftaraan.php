<?php
include 'connect.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$tsekolah_asal = $_POST['sekolah_asal'];

$sql = mysqli_query($conn, "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')");

if ($sql) {
    header("Location: index.php?msg=berhasil"); 
    exit; 
} else {
    echo "Error: " . mysqli_error($conn); 
    
    exit;
}
?>