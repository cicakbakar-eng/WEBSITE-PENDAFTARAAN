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
        <!--AWAL CODE NAVBAR-->
        <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="https://www.bing.com/ck/a?!&&p=dbc4f67ad9eb27fa294abcf60c9c9ee060689d7b4667d1525eb81ae702662b13JmltdHM9MTc0MTM5MjAwMA&ptn=3&ver=2&hsh=4&fclid=0065715c-2396-6909-13e9-643b22c068d9&psq=logo+skanifo&u=a1aHR0cHM6Ly9zbWtuNGtlbmRhbC5zY2guaWQv&ntb=1">
                <div style="width: 50px; margin-right: 10px;"><img src="FOTO/logo.png" alt="Logo Sekolah" width="100%" height="auto"></div>
                <span>SMK NEGERI 4 KENDAL</span>
            </a>
        </div>
    </nav>
    </body>
    <!--AKHIR CODE NAVBAR-->
<!--AWAL CODE FORM-->
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
    <!--AKHIR CODE FORM-->
</body>
</html>