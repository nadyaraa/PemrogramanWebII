<?php
require_once 'Model.php';
$members = getMember();
$books = getBuku();
$res = isset($_GET['id']) ? getPeminjamanById($_GET['id']) : null;

if (isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        editPeminjaman($_GET['id'], $_POST['tgl_p'], $_POST['tgl_k'], $_POST['id_member'], $_POST['id_buku']);
    } else {
        addPeminjaman($_POST['tgl_p'], $_POST['tgl_k'], $_POST['id_member'], $_POST['id_buku']);
    }
    header('Location: Peminjaman.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Form Peminjaman</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2><?= isset($_GET['id']) ? 'Edit' : 'Tambah' ?> Peminjaman</h2>
            <div class="form-box">
                <form method="POST">
                    <div class="form-group">
                        <label>Member</label>
                        <select name="id_member" required>
                            <option value="">-- Pilih Member --</option>
                            <?php foreach($members as $m): ?>
                                <option value="<?= $m['id_member'] ?>" <?= isset($res) && $res['id_member'] == $m['id_member'] ? 'selected' : '' ?>><?= $m['nama_member'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Buku</label>
                        <select name="id_buku" required>
                            <option value="">-- Pilih Buku --</option>
                            <?php foreach($books as $b): ?>
                                <option value="<?= $b['id_buku'] ?>" <?= isset($res) && $res['id_buku'] == $b['id_buku'] ? 'selected' : '' ?>><?= $b['judul_buku'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Pinjam</label>
                        <input type="date" name="tgl_p" value="<?= $res['tgl_pinjam'] ?? '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Kembali</label>
                        <input type="date" name="tgl_k" value="<?= $res['tgl_kembali'] ?? '' ?>" required>
                    </div>
                    <br>
                    <button type="submit" name="submit" class="btn-add" style="width:100%; border:none; cursor:pointer;">Simpan</button>
                    <a href="Peminjaman.php" class="btn-cancel">Batal</a>
                </form>
            </div>
        </div>
    </body>
</html>