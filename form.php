<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleform.css">
    <link rel="stylesheet" href="stylelandingpage.css">
    <title>PENDAFTARAAN ONLINE.com</title>
</head>
<body>
    <div class="FORM">
        <h1>FORM PENDAFTARAAN</h1>
        <form action="pendaftaraan.php" method="POST">
            <div class="container">
                <label for="nama"><b>NAMA</b></label>
                <input type="text" placeholder="Nama" id="nama" name="nama" >

                <label for="alamat"><b>ALAMAT</b></label>
                <input type="text" placeholder="Alamat" id="alamat" name="alamat" >

                <label for="jenis_kelamin"><b>JENIS KELAMIN</b></label>
                <input type="text" placeholder="Jenis Kelamin" id="jenis_kelamin" name="jenis_kelamin" >

                <label for="agama"><b>AGAMA</b></label>
                <input type="text" placeholder="Agama" id="agama" name="agama" >

                <label for="sekolah_asal"><b>SEKOLAH ASAL</b></label>
                <input type="text" placeholder="Sekolah asal" id="sekolah_asal" name="sekolah_asal" >

                <button type="submit">DAFTAR</button>
                <a href="index.php" target="_blank" rel="noopener noreferrer"><button type="submit">KEMBALI</button></a>
            </div>
        </form>
    </div>
</body>
</html>