<!DOCTYPE html>
<html lang="id">
    <head>
        <title>Tambah Buku</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <style>
            body { background-color: #f4f7f6; }
            .card { border: none; border-radius: 15px; }
            .form-label { font-weight: bold; margin-left: 15px; }
            .rounded-pill { padding-left: 20px; padding-right: 20px; }
            .btn-blue { background-color: #00b4db; color: white; border: none; }
            .btn-blue:hover { background-color: #008eb0; color: white; }
        </style>
    </head>
    <body class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow p-4">
                    <div class="text-center mb-4">
                        <h3 class="fw-bold" style="color: #00b4db;">TAMBAH DATA BUKU</h3>
                    </div>

                    <form action="/buku/store" method="post">
                        <div class="mb-3">
                            <label class="form-label text-start d-block">Judul Buku</label>
                            <input type="text" name="judul" class="form-control rounded-pill <?= (validation_show_error('judul')) ? 'is-invalid' : '' ?>" value="<?= old('judul') ?>" placeholder="Judul Buku" required>
                            <div class="invalid-feedback ms-3"><?= validation_show_error('judul') ?></div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-start d-block">Penulis</label>
                            <input type="text" name="penulis" class="form-control rounded-pill" value="<?= old('penulis') ?>" placeholder="Nama Penulis" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label text-start d-block">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control rounded-pill" value="<?= old('penerbit') ?>" placeholder="Nama Penerbit" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label text-start d-block">Tahun Terbit</label>
                            <input type="number" name="tahun_terbit" class="form-control rounded-pill <?= (validation_show_error('tahun_terbit')) ? 'is-invalid' : '' ?>" value="<?= old('tahun_terbit') ?>" placeholder="Contoh: 2023" required>
                            <div class="invalid-feedback ms-3"><?= validation_show_error('tahun_terbit') ?></div>
                        </div>

                        <div class="d-grid gap-2 text-center">
                            <button type="submit" class="btn btn-blue rounded-pill fw-bold shadow-sm">SIMPAN</button>
                            <a href="/buku" class="btn btn-light rounded-pill">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>