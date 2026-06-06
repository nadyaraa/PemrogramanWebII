<?php /** @var array $daftar_buku */ ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Daftar Buku</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <style>
            .btn-blue { background-color: #00b4db; color: white; border: none; }
            .btn-blue:hover { background-color: #008eb0; color: white; }
            .btn-pink-outline { border: 2px solid #f83689; color: #f83689; background: transparent; }
            .btn-pink-outline:hover { background-color: #f83689; color: white; }
            .btn-purple-outline { border: 2px solid #764ba2; color: #764ba2; background: transparent; }
            .btn-purple-outline:hover { background-color: #764ba2; color: white; }
            .btn-logout {
                background-color: #764ba2;
                color: white;
                border: none;
                transition: 0.3s;
            }
            .btn-logout:hover {
                background-color: #5a3782;
                color: white;
                box-shadow: 0 4px 15px rgba(118, 75, 162, 0.4);
            }
        </style>
    </head>
    <body class="container py-5">
        <div class="card shadow-sm p-4">
            <div class="text-center mb-4">
                <h2 class="fw-bold text-uppercase">Koleksi Buku</h2>
            </div>

            <div class="d-flex justify-content-start mb-3">
                <a href="/buku/create" class="btn btn-blue rounded-pill px-4 shadow-sm">+ Tambah Buku Baru</a>
            </div>

            <?php if(session()->getFlashdata('success')): ?>
                <div class="alert alert-success border-0 shadow-sm text-center"><?= session()->getFlashdata('success') ?></div>
            <?php endif; ?>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr>
                            <th class="py-3 px-4">Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th class="text-center">Tahun</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($daftar_buku as $b): ?>
                        <tr>
                            <td class="px-4 fw-semibold"><?= $b['judul'] ?></td>
                            <td><?= $b['penulis'] ?></td>
                            <td><?= $b['penerbit'] ?></td>
                            <td class="text-center"><?= $b['tahun_terbit'] ?></td>
                            <td class="text-center">
                                <a href="/buku/edit/<?= $b['id'] ?>" class="btn btn-sm btn-pink-outline rounded-pill px-3">Edit</a>
                                <a href="/buku/delete/<?= $b['id'] ?>" class="btn btn-sm btn-purple-outline rounded-pill px-3" onclick="return confirm('Hapus buku ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="text-center mt-5">
                <hr class="mb-4">
                <a href="/logout" class="btn btn-logout rounded-pill px-5 shadow">Logout</a>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>