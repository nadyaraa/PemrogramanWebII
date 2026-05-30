<?php
require_once 'Model.php';
$res = null;
if (isset($_GET['id'])) {
    $res = getBukuById($_GET['id']);
}

if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        editBuku($_GET['id'], $_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    } else {
        addBuku($_POST['judul'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    header('Location: Buku.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Buku</title>
        <link rel="stylesheet" href="style.css">    
    </head>
    <body>
        <div class="container">
            <h2><?= isset($_GET['id']) ? 'Edit' : 'Tambah' ?> Buku</h2>
            <div class="form-box">
                <form method="POST">
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" name="judul" value="<?= $res['judul_buku'] ?? '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Penulis</label>
                        <input type="text" name="penulis" value="<?= $res['penulis'] ?? '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Penerbit</label>
                        <input type="text" name="penerbit" value="<?= $res['penerbit'] ?? '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tahun Terbit</label>
                        <input type="text" name="tahun_terbit" value="<?= $res['tahun_terbit'] ?? '' ?>" required>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn-add" style="width:100%; border:none; cursor:pointer;">Simpan</button>
                    <a href="Buku.php" class="btn-cancel">Batal</a>
                </form>
            </div>
        </div>
    </body>
</html>