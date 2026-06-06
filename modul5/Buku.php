<?php
require_once 'Model.php';
if (isset($_GET['id_buku'])) {
    deleteBuku($_GET['id_buku']);
    header('Location: Buku.php');
    exit();
}
$books = getBuku();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Buku</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Koleksi Buku</h2>
            <div style="text-align: right;">
                <a href="FormBuku.php" class="btn-add">+ Tambah Buku</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($books as $b): ?>
                    <tr>
                        <td><?= htmlspecialchars($b['judul_buku']) ?></td>
                        <td><?= htmlspecialchars($b['penulis']) ?></td>
                        <td><?= htmlspecialchars($b['penerbit']) ?></td>
                        <td><?= htmlspecialchars($b['tahun_terbit']) ?></td>
                        <td>
                            <a href="FormBuku.php?id=<?= $b['id_buku'] ?>" class="btn-edit">Edit</a>
                            <a href="Buku.php?id_buku=<?= $b['id_buku'] ?>" class="btn-delete" onclick="return confirm('Hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button onclick="location.href='index.php'" class="btn-back">Kembali</button>
        </div>
    </body>
</html>