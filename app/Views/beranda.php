<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="jumbotron text-center">
    <h1>Portal Informasi Siswa</h1>
    <p>Selamat datang <b><?= session()->get('nama'); ?></b> di Portal Informasi Siswa SMA 404</p>
    <a class="btn btn-outline-primary" href="<?= base_url('info-kegiatan') ?>" role="button">Info Kegiatan</a>
    <a class="btn btn-outline-warning" href="<?= base_url('data-siswa') ?>" role="button">Data Siswa</a>
</div>

<?= $this->endSection(); ?>