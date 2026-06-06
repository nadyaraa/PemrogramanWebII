<?php /** @var array $buku */ ?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Edit Buku</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <style>
            body { background-color: #f4f7f6; }
            .card { border: none; border-radius: 15px; }
            .form-label { font-weight: bold; margin-left: 15px; }
            .rounded-pill { padding-left: 20px; padding-right: 20px; }
            .btn-pink { background-color: #f83689; color: white; border: none; }
            .btn-pink:hover { background-color: #d71066; color: white; }
        </style>
    </head>
    <body class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold" style="color: #f83689;">EDIT DATA BUKU</h3>
                    </div>

                    <form action="/buku/update/<?= $buku['id'] ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label text-start d-block">Judul Buku</label>
                            <input type="text" name="judul" class="form-control rounded-pill" value="<?= old('judul', $buku['judul']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-start d-block">Penulis</label>
                            <input type="text" name="penulis" class="form-control rounded-pill" value="<?= old('penulis', $buku['penulis']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-start d-block">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control rounded-pill" value="<?= old('penerbit', $buku['penerbit']) ?>" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-start d-block">Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" class="form-control rounded-pill" value="<?= old('tahun_terbit', $buku['tahun_terbit']) ?>" required>
                        </div>

                        <div class="d-grid gap-2 text-center">
                            <button type="submit" class="btn btn-pink rounded-pill fw-bold shadow-sm">PERBARUI</button>
                            <a href="/buku" class="btn btn-light rounded-pill">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>