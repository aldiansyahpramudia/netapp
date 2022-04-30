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
                        <?php foreach ($aplikasitransaksi as $apm) : ?>
                            <?php if ($apm['status'] == "Proses Pembuatan") { ?>
                                <tr>
                                    <td class="text-center"><?= $i; ?></td>
                                    <td><?= $apm['kode_aplikasi']; ?></td>
                                    <td><?= $apm['nama_aplikasi']; ?></td>
                                    <td><?= $apm['kategori']; ?></td>
                                    <td><?= $apm['pengorder']; ?></td>
                                    <td><?= date('d F Y', $apm['tgl_order']); ?></td>
                                    <td><span class="badge badge-info"><?= $apm['status']; ?></span></td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url() ?>aplikasimasuk/detail/<?= $apm['id_order']; ?>" class="btn btn-info">
                                            <i class="material-icons">view_list</i>
                                        </a>
                                        <a href="<?= base_url() ?>aplikasimasuk/selesai/<?= $apm['id_order']; ?>" class="btn btn-success">
                                            <i class="material-icons">fact_check</i>
                                        </a>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php } ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>