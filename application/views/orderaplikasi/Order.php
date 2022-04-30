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
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 ml-4 mt-3 text-left">
                                <img class="card-img-top" style="width: 10rem;" src="<?= base_url() ?>uploads/<?= $aplikasi['gambar']; ?>" rel="nofollow" alt="Card image cap">
                            </div>
                            <div class="col-lg-6 text-left">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-primary">
                                                Nama Aplikasi
                                            </td>
                                            <td>
                                                :
                                            </td>
                                            <td>
                                                <?= $aplikasi['nama_aplikasi']; ?>
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
                                                <?= $aplikasi['kategori']; ?>
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
                                                <?= $aplikasi['harga']; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-header card-header-text card-header-rose">
                        <div class="card-text">
                            <h4 class="card-title">Order</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="kategori">Pilih Metode Pembayaran</label>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran2" value="BNI" checked>
                                            BNI
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="BSI" checked>
                                            BSI
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="BCA" checked>
                                            BCA
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="Mandiri" checked>
                                            Mandiri
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="pembayaran" id="pembayaran" value="BRI" checked>
                                            BRI
                                            <span class="circle">
                                                <span class="check"></span>
                                            </span>
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="catatan">Catatan</label>
                                    <input type="text" class="form-control" id="catatan" name="catatan" value="<?= set_value('catatan'); ?>">
                                    <?= form_error('catatan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Order Aplikasi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>