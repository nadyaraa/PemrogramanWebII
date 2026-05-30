<?= $this->extend('layout'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center fade-in">
    <div class="col-md-6">
        <div class="glass-card p-0 overflow-hidden">
            <div class="p-4 text-center text-white" style="background: linear-gradient(45deg, #2575fc, #6a11cb);">
                <img src="<?= $mhs['foto'] ?>" class="profile-img rounded-circle mb-3" alt="pp">
                <h3 class="fw-bold mb-0"><?= $mhs['nama']; ?></h3>
                <p class="opacity-75"><?= $mhs['prodi'] ?></p>
            </div>

            <div class="p-4">
                <div class="mb-4">
                    <label class="text-muted small fw-bold">NIM</label>
                    <p class="fs-5 fw-medium"><i class="fas fa-id-card text-primary me-2"></i><?= $mhs['nim']; ?></p>
                </div>
                <div class="mb-4">
                    <label class="text-muted small fw-bold">HOBI</label>
                    <p class="fs-5 fw-medium"><i class="fas fa-gamepad text-primary me-2"></i><?= $mhs['hobi']; ?></p>
                </div>
                <div class="mb-4">
                    <label class="text-muted small fw-bold">MAKANAN FAVORIT</label>
                    <p class="fs-5 fw-medium"><i class="fas fa-utensils text-primary me-2"></i><?= $mhs['makan']; ?></p>
                </div>
                <div class="mb-4">
                    <label class="text-muted small fw-bold d-block mb-2">KEAHLIAN</label>
                    <?php foreach($mhs['skill'] as $s): ?>
                        <span class="badge-skill d-inline-block mb-2"><?= $s; ?></span>
                    <?php endforeach; ?>
                </div>
                <hr>
                <div class="text-center italic text-muted">
                    <small><i>"<?= $mhs['qotd']; ?>"</i></small>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="<?= base_url('/'); ?>" class="text-white text-decoration-none small"><i class="fas fa-chevron-left me-1"></i> Kembali ke Beranda </a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>