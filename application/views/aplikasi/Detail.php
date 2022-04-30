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
                                                Kode Aplikasi
                                            </td>
                                            <td>
                                                :
                                            </td>
                                            <td>
                                                <?= $aplikasi['kode_aplikasi']; ?>
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
                                <div class="modal-footer">
                                    <a href="<?= base_url() ?>aplikasi" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>