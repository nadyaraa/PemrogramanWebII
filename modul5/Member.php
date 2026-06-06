<?php
require_once 'Model.php';
if (isset($_GET['id_member'])) {
    deleteMember($_GET['id_member']);
    header('Location: Member.php');
    exit();
}
$members = getMember();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Member</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Daftar Member</h2>
            <div style="text-align: right;">
                <a href="FormMember.php" class="btn-add">+ Tambah Member</a>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Nomor keanggotaan</th>
                        <th>Alamat</th>
                        <th>Tanggal Daftar</th>
                        <th>Tanggal Bayar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($members as $m): ?>
                    <tr>
                        <td><?= htmlspecialchars($m['nama_member']) ?></td>
                        <td><?= htmlspecialchars($m['nomor_member']) ?></td>
                        <td><?= htmlspecialchars($m['alamat']) ?></td>
                        <td><?= $m['tgl_mendaftar'] ?></td>
                        <td><?= $m['tgl_terakhir_bayar'] ?></td>
                        <td>
                            <a href="FormMember.php?id=<?= $m['id_member'] ?>" class="btn-edit">Edit</a>
                            <a href="Member.php?id_member=<?= $m['id_member'] ?>" class="btn-delete" onclick="return confirm('Hapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button onclick="location.href='index.php'" class="btn-back">Kembali</button>
        </div>
    </body>
</html>