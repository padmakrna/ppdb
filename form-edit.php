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

    <h4>Formulir Edit PPDB</h4>
    <?php
    include_once("config.php");
    $id = $_GET['id'];
    $sql = "SELECT * FROM calon_siswa WHERE id = $id";
    $query = mysqli_query($db, $sql);
    $r = mysqli_fetch_assoc($query);
    ?>
    <div>
        <form action="proses-edit.php" method="POST">
            <div>
                <label for="">Nama Lengkap</label>
                <input type="text" name="nama"  value="<?= $r['nama']; ?>"require>
            </div>
            <div>
                <label for="">alamat lengkap</label>
                <textarea name="alamat"  cols="30" rows="10"><?= $r['alamat']; ?></textarea>
            </div>
            <div>
                <label for="">jenis kelamin</label>
                <input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($r == 'laki-laki') ? "checked": "" ?>> Laki-laki
                <input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($r == 'perempuan') ? "checked": "" ?>> Perempuan
            </div>
            <div>
                <label for="">agama</label>
                <select name="agama">
                <option <?php echo ($r == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?php echo ($r == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?php echo ($r == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?php echo ($r == 'Budha') ? "selected": "" ?>>Budha</option>
                <option <?php echo ($r == 'Atheis') ? "selected": "" ?>>Atheis</option>
                </select>
            </div>
            <div>
                <label for="">sekolah asal</label>
                <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $r['sekolah_asal'] ?>" />
            </div>
            <div>
                <input type="hidden" name="id" value="<?php echo $r['id'] ?>" />
                <input type="reset">
                <input type="submit" name= "update" value="update">
            </div>
        </form>
    </div>



    <foother>
    <hr>
    <i>Dibuat dengan semangat &copy;by <b>std progweb</b></i>
    </footer>
</body>
</html>
