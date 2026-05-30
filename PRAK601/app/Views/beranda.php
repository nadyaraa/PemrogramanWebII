<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center fade-in">
    <div class="col-md-8 text-center text-white mt-5">
        <h1 class="display-3 fw-bold mb-3">Selamat Datang</h1>
        <p class="fs-5 opacity-75">Implementasi MVC (Model-View-Controller) menggunakan CodeIgniter 4</p>

        <div class="glass-card p-5 mt-5 text-dark">
            <h2 class="mb-4 fw-bold">Biodata Praktikan</h2>
            <div class="row">
                <div class="col-6 border-end">
                    <p class="text-muted mb-0 small uppercase">NAMA LENGKAP</p>
                    <h4 class="fw-semibold"><?= $mhs['nama']; ?></h4>
                </div>
                <div class="col-6">
                    <p class="text-muted mb-0 small">NIM</p>
                    <h4 class="fw-semibold"><?= $mhs['nim']; ?></h4>
                </div>
            </div>
            <div class="mt-4">
                <a href="<?= base_url('/profil'); ?>" class="btn btn-modern"> Lihat Biodata Lengkap <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>