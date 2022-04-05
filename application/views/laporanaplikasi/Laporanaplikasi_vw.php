<div class="content">
    <div class="container-fluid">
        <?= $this->session->flashdata('message'); ?>
        <div class="card">
            <div class="card-header card-header-text card-header-primary">
                <div class="card-text">
                    <h4 class="card-title">Aplikasi Dalam Proses</h4>
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
                            <th>Kode Aplikasi</th>
                            <th>Nama Aplikasi</th>
                            <th>Kategori</th>
                            <th>Pengorder</th>
                            <th>Status</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aplikasi as $lap) : ?>
                            <?php if ($lap['status'] == "Sedang Diproses") { ?>
                                <tr>
                                    <td><?= $lap['kode_aplikasi']; ?></td>
                                    <td><?= $lap['nama_aplikasi']; ?></td>
                                    <td><?= $lap['kategori']; ?></td>
                                    <td><?= $lap['pengorder']; ?></td>
                                    <td><span class="badge badge-warning"><?= $lap['status']; ?></span></td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url() ?>laporanaplikasi/proses/<?= $lap['id_pengajuan']; ?>" class="btn btn-success">
                                            <i class="material-icons">fact_check</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>