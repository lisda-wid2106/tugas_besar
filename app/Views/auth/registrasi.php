<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6 mx-auto">
      <h1 class="text-center">Form Registrasi</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6 mx-auto">
      <?php if (session()->getFlashdata('registrasi_sukses')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <?= session()->getFlashdata('registrasi_sukses'); ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <?php endif; ?>
        </div>
    </div>
  </div>

  <div class="row mt-3">
    <div class="col-lg-6 mx-auto">
      <form action="<?= base_url('registrasi/simpan-registrasi') ?>" method="post"> <?= csrf_field() ?>
        <div class="form-group row">
          <label for="nama" class="col-sm-4 col-form-label">Nama</label>
          <div class="col-sm-8">
            <input type="text" class="form-control <?php if ($validation->hasError('nama')) echo 'is-invalid' ?>" id="nama" name="nama" value="<?= old('nama') ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('nama') ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-4 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control <?php if ($validation->hasError('email')) echo 'is-invalid' ?>" id="email" name="email" value="<?= old('email') ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('email') ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="password" class="col-sm-4 col-form-label">Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control <?php if ($validation->hasError('password')) echo 'is-invalid' ?>" id="password" name="password" value="<?= old('password') ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('password') ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="konfirmasi_password" class="col-sm-4 col-form-label">Konfirmasi Password</label>
          <div class="col-sm-8">
            <input type="password" class="form-control <?php if ($validation->hasError('konfirmasi_password')) echo 'is-invalid' ?>" id="konfirmasi_password" name="konfirmasi_password" value="<?= old('konfirmasi_password') ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('konfirmasi_password') ?>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-8 offset-4">
            <button type="submit" class="btn btn-primary">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>