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
                            <th>Pembayaran</th>
                            <th>Tanggal Order</th>
                            <th>Status</th>
                            <th class="text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($aplikasitransaksi as $tss) : ?>
                            <?php if ($tss['id_user'] == $users['id_user']) { ?>
                                <tr>
                                    <td><?= $tss['kode_aplikasi']; ?></td>
                                    <td><?= $tss['nama_aplikasi']; ?></td>
                                    <td><?= $tss['kategori']; ?></td>
                                    <td><?= $tss['pembayaran']; ?></td>
                                    <td><?= date('d F Y', $tss['tgl_order']); ?></td>
                                    <td>
                                        <?php
                                        if ($tss['status'] == 'Proses Pembayaran') {
                                        ?>
                                            <span class="badge badge-warning"><?= $tss['status']; ?></span>
                                        <?php
                                        } else if ($tss['status'] == 'Proses Pembuatan') {
                                        ?>
                                            <span class="badge badge-info"><?= $tss['status']; ?></span>
                                        <?php
                                        } else {
                                        ?>
                                            <span class="badge badge-success"><?= $tss['status']; ?></span>
                                        <?php
                                        }
                                        ?>
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="<?= base_url() ?>riwayatorder/detail/<?= $tss['id_order']; ?>" class="btn btn-info">
                                            <i class="material-icons">view_list</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>