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
                <input type="text" placeholder="Nama" id="nama" name="nama" required>

                <label for="alamat"><b>ALAMAT</b></label>
                <input type="text" placeholder="Alamat" id="alamat" name="alamat" required>

                <label for="jenis_kelamin"><b>JENIS KELAMIN</b></label>
                <input type="text" placeholder="Jenis Kelamin" id="jenis_kelamin" name="jenis_kelamin" required>

                <label for="agama"><b>AGAMA</b></label>
                <input type="text" placeholder="Agama" id="agama" name="agama" required>

                <label for="sekolah_asal"><b>SEKOLAH ASAL</b></label>
                <input type="text" placeholder="Sekolah asal" id="sekolah_asal" name="sekolah_asal" required>

                <button type="submit">DAFTAR</button>
            </div>
        </form>
    </div>
</body>
</html>