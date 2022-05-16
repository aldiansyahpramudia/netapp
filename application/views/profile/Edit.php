<div class="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <?= $this->session->flashdata('message'); ?>
                <div class="card mt-0">
                    <div class="card-body mt-4">
                        <form action="" method="post">
                            <input type="hidden" name="id_user" value="<?= $users['id_user'] ?>">
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="nama">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $users['nama']; ?>">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $users['email']; ?>">
                                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $users['alamat']; ?>">
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <label for="no_hp">No. HP</label>
                                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $users['no_hp']; ?>">
                                    <?= form_error('no_hp', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Edit Data User</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>