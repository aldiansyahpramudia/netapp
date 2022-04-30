<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">grid_view</i>
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-primary">
                                        Kode Aplikasi
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['kode_aplikasi']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Nama Aplikasi
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['nama_aplikasi']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Kategori
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['kategori']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Harga
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['harga']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Pengorder
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['pengorder']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Tanggal Order
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['tgl_order']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Pembayaran
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['pembayaran']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Nomor Hp
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['no_hp']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Catatan
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['catatan']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Status
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $aplikasitransaksi['status']; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <a href="<?= base_url() ?>aplikasimasuk" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>