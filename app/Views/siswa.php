<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<?php if (session()->get('role') == 'admin') : ?>
    <div class="container">
        <h3>Data Siswa</h3>
        <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal" data-target="#addModal">Tambah Siswa</button>

        <?php
        if (!empty(session()->getFlashdata('success'))) { ?>

            <div class="alert alert-success">
                <?php echo session()->getFlashdata('success'); ?>
            </div>

        <?php } ?>
        <?php if (!empty(session()->getFlashdata('info'))) { ?>

            <div class="alert alert-info">
                <?php echo session()->getFlashdata('info'); ?>
            </div>

        <?php } ?>

        <?php if (!empty(session()->getFlashdata('warning'))) { ?>

            <div class="alert alert-warning">
                <?php echo session()->getFlashdata('warning'); ?>
            </div>

        <?php } ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>NIS</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $no = 1;
                foreach ($siswa as $row) : ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row->nama; ?></td>
                        <td><?= $row->nis; ?></td>
                        <td><?= $row->email; ?></td>
                        <td>



                            <a href="#" class="btn btn-outline-success  mr-2" data-toggle="modal" data-target="#detailModal<?= $row->id; ?>">Detail</a>
                            <a href="#" class="btn btn-outline-info  mr-2" data-toggle="modal" data-target="#editModal<?= $row->id; ?>">Edit</a>
                            <a href="#" class="btn btn-outline-danger mr-2" data-toggle="modal" data-target="#deleteModal<?= $row->id; ?>">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Modal Add Siswa-->
    <form action="/SiswaController/save" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa Baru</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama...">
                        </div>

                        <div class="form-group">
                            <label>NIS</label>
                            <input type="text" class="form-control" name="nis" placeholder="Masukan NIS...">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Masukan Email...">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Add Siswa-->


    <?php foreach ($siswa as $es) : ?>
        <!-- Modal Edit Siswa-->
        <form action="/SiswaController/update" method="post">
            <div class="modal fade" id="detailModal<?= $es->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Detail Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">


                            <div class="card-body">
                                <div class="row">
                                    <h5>Nama : <?= $es->nama; ?></h4>
                                        <h5>NIS : <?= $es->nis; ?></h4>
                                            <h5>Email : <?= $es->email; ?></h4>
                                </div>


                            </div>


                        </div>
                        <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div> -->
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Edit Siswa-->

    <?php endforeach; ?>
    <?php foreach ($siswa as $es) : ?>
        <!-- Modal Edit Siswa-->
        <form action="/SiswaController/update" method="post">
            <div class="modal fade" id="editModal<?= $es->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" class="form-control" name="id" value="<?= $es->id; ?>" placeholder="Masukkan Nama...">
                                <input type="text" class="form-control" name="nama" value="<?= $es->nama; ?>" placeholder="Masukkan Nama...">
                            </div>

                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" class="form-control" name="nis" value="<?= $es->nis; ?>" placeholder="Masukan NIS...">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?= $es->email; ?>" placeholder="Masukan Email...">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="Siswa_id" class="Siswa_id">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Edit Siswa-->

    <?php endforeach; ?>

    <?php foreach ($siswa as $es) : ?>
        <!-- Modal Delete Siswa-->
        <form action="/SiswaController/delete" method="post">
            <div class="modal fade" id="deleteModal<?= $es->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Siswa</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <h5>Apakah anda yakin ingin hapus data siswa ini?</h>

                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" class="form-control" value="<?= $es->id; ?>">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Delete Siswa-->

    <?php endforeach; ?>
<?php elseif (session()->get('role') == 'siswa') : ?>

    <div class="container">
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                Detail Siswa
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Nama : <?= $nama; ?></li>
                <li class="list-group-item">NIS : <?= $nis; ?> </li>
                <li class="list-group-item">Email : <?= $email; ?></li>
            </ul>
        </div>
    </div>


<?php else : ?>
    <div class="alert alert-warning" role="alert">

        <div class="p-3 mb-2 bg-warning text-dark">Area terbatas, silahkan login terlebih dahulu</div>
    </div>
<?php endif; ?>
<?= $this->endSection(); ?>