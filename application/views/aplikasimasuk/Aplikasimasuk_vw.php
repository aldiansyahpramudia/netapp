<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header card-header-icon card-header-rose">
                <div class="card-icon">
                    <i class="material-icons">shopping_bag</i>
                </div>
            </div>
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row p-3">
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
                            <th>Pengorder</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($aplikasimasuk as $apm) : ?>
                            <tr>
                                <td class="text-center"><?= $i; ?></td>
                                <td><?= $apm['kode_aplikasi']; ?></td>
                                <td><?= $apm['nama_aplikasi']; ?></td>
                                <td><?= $apm['kategori']; ?></td>
                                <td><?= $apm['pengorder']; ?></td>
                                <td><?= $apm['tgl_order']; ?></td>
                                <td><?= $apm['status']; ?></td>
                                <td class="td-actions text-right">
                                    <a href="" class="btn btn-warning">
                                        <i class="material-icons">move_to_inbox</i>
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