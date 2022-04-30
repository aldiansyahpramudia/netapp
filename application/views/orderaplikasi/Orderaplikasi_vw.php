<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
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
                                        <a href="<?= base_url() ?>orderaplikasi/order/<?= $app['kode_aplikasi']; ?>" class="btn btn-success">
                                            <i class="material-icons">add_shopping_cart</i>
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