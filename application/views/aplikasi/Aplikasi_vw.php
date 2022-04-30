<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">widgets</i>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row p-3">
                        <div class="col-9">
                            <a href="<?= base_url() ?>aplikasi/tambah" class="btn btn-primary">
                                <i class="material-icons">post_add</i>
                                Tambah Aplikasi
                            </a>
                        </div>
                        <div class="col-3">
                            <form class="navbar-form">
                                <div class="input-group no-border">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                        <i class="material-icons">search</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Kode Aplikasi</th>
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
                                <td><?= $app['kode_aplikasi']; ?></td>
                                <td><?= $app['nama_aplikasi']; ?></td>
                                <td><?= $app['kategori']; ?></td>
                                <td><?= $app['harga']; ?></td>
                                <td class="td-actions text-right">
                                    <a href="<?= base_url() ?>aplikasi/edit/<?= $app['kode_aplikasi']; ?>" class="btn btn-success">
                                        <i class="material-icons">edit</i>
                                    </a>
                                    <a href="<?= base_url() ?>aplikasi/detail/<?= $app['kode_aplikasi']; ?>" class="btn btn-info">
                                        <i class="material-icons">view_list</i>
                                    </a>
                                    <a href="<?= base_url() ?>aplikasi/hapus/<?= $app['kode_aplikasi']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus aplikasi?');">
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