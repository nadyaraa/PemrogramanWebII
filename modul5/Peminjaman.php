<?php
require_once 'Model.php';
if (isset($_GET['id_peminjaman'])) {
    deletePeminjaman($_GET['id_peminjaman']);
    header('Location: Peminjaman.php');
    exit();
}
$peminjamans = getPeminjaman();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Peminjaman</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Daftar Peminjaman</h2>
            <div style="text-align: right;">
                <a href="FormPeminjaman.php" class="btn-add">+ Tambah Peminjaman</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Buku</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peminjamans as $p): ?>
                    <tr>
                        <td><?= htmlspecialchars($p['nama_member'] ?? 'N/A') ?></td>
                        <td><?= htmlspecialchars($p['judul_buku'] ?? 'N/A') ?></td>
                        <td><?= $p['tgl_pinjam'] ?></td>
                        <td><?= $p['tgl_kembali'] ?></td>
                        <td>
                            <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman'] ?>" class="btn-edit">Edit</a>
                            <a href="Peminjaman.php?id_peminjaman=<?= $p['id_peminjaman'] ?>" class="btn-delete" onclick="return confirm('Hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button onclick="location.href='index.php'" class="btn-back">Kembali</button>
        </div>
    </body>
</html>