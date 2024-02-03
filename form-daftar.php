<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi ppdb by programming</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="images/WebPro10.png" type="image/x-icon">
</head>
<body>
    <header>
        <h1>webro</h1>
        <h2>Penerimaan peserta didik baru</h2>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">daftar baru</a></li>
            <li><a href="list-siswa.php">pendaftar</a></li>
        </ul>
    </nav>

    <h4>Formulir ppdb</h4>
    <div>
        <form action="proses-pendaftaran.php" method="POST">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama" require>
            </div>
            <div>
                <label for="">alamat lengkap</label>
                <textarea name="alamat"  cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="">jenis kelamin</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki">laki laki
                <input type="radio" name="jenis_kelamin" value="perempuan">perempuan
            </div>
            <div>
                <label for="">agama</label>
                <select name="agama">
                <option value="islam">islam</option>
                <option value="kristen">kristen</option>
                <option value="katholik">katholik</option>
                <option value="hindu">hindu</option>
                <option value="buddha">buddha</option>
                <option value="kongkucu">konghucu</option>
                </select>
            </div>
            <div>
                <label for="">sekolah asal</label>
                <input type="text" name="sekolah asal">
            </div>
            <div>
                <input type="reset">
                <input type="submit" name="daftar" value="simpan">
            </div>
        </form>
    </div>



    <foother>
    <hr>
    <i>Dibuat dengan semangat &copy;by <b>std progweb</b></i>
    </footer>
</body>
</html>
         