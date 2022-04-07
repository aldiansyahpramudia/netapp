<div class="content">
    <div class="container-fluid">
        <div class="table-responsive">
            <div class="card">
                <div class="card-body">
                    <table class="table table-shopping">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aplikasi</th>
                                <th>Nama Aplikasi</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th class="text-right">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($aplikasi as $app) : ?>
                                <tr>
                                    <td class="text-center"><?= $i; ?></td>
                                    <td>
                                        <div class="img-container">
                                            <img src="<?= base_url() ?>uploads/<?= $app['gambar']; ?>" rel="nofollow" alt="...">
                                        </div>
                                    </td>
                                    <td><?= $app['nama_aplikasi']; ?></td>
                                    <td><?= $app['kategori']; ?></td>
                                    <td><?= $app['harga']; ?></td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url() ?>suratmasuk/edit/<?= $app['kode_aplikasi']; ?>" class="btn btn-success">
                                            <i class="material-icons">edit</i>
                                        </a>
                                        <a href="<?= base_url() ?>suratmasuk/hapus/<?= $app['kode_aplikasi']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus data surat?');">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>