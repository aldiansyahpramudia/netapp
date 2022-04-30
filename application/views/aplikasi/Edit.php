<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card mt-0">
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-row p-2">
                        <div class="form-group col-md-6">
                            <label for="nama_aplikasi">Nama Aplikasi</label>
                            <input type="text" class="form-control" id="nama_aplikasi" name="nama_aplikasi" value="<?= $aplikasi['nama_aplikasi']; ?>">
                            <?= form_error('nama_aplikasi', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <div class="form-group col-md-6">
                            <label for="kategori">Kategori</label>
                            <input type="text" class="form-control" id="kategori" name="kategori" value="<?= $aplikasi['kategori']; ?>">
                            <?= form_error('kategori', '<small class="text-danger">', '</small>'); ?>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="harga">Harga</label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $aplikasi['harga']; ?>">
                            <?= form_error('harga', '<small class="text-danger">', '</small>'); ?>
                        </div>
                    </div>
                    <div class="form-row p-2">
                        <label for="gambar">Ganti Gambar Aplikasi</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                            <label class=" custom-file-label" for="gambar">Choose file</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Edit Aplikasi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>