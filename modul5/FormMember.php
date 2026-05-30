<?php
require_once 'Model.php';
$res = null;
if (isset($_GET['id'])) {
    $res = getMemberById($_GET['id']);
}

if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        editMember($_GET['id'], $_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_daftar'], $_POST['tgl_bayar']);
    } else {
        addMember($_POST['nama'], $_POST['nomor'], $_POST['alamat'], $_POST['tgl_daftar'], $_POST['tgl_bayar']);
    }
    header('Location: Member.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Member</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2><?= isset($_GET['id']) ? 'Edit' : 'Tambah' ?> Member</h2>
            <div class="form-box">
                <form method="POST">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" value="<?= $res['nama_member'] ?? '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor</label>
                        <input type="text" name="nomor" value="<?= $res['nomor_member'] ?? '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat"><?= $res['alamat'] ?? '' ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Daftar</label>
                        <input type="datetime-local" name="tgl_daftar" value="<?= isset($res) ? str_replace(' ', 'T', $res['tgl_mendaftar']) : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Bayar</label>
                        <input type="date" name="tgl_bayar" value="<?= isset($res) ? str_replace(' ', 'T', $res['tgl_terakhir_bayar']) : '' ?>" required>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn-add" style="width: 100%; border: none; cursor: pointer;">Simpan</button>
                    <a href="Member.php" class="btn-cancel">Batal</a>
                </form>
            </div> 
        </div>
    </body>
</html>