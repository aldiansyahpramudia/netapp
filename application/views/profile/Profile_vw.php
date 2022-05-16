<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">person</i>
                        </div>
                    </div>
                    <div class="card-body text-left">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="text-primary">
                                        Nama
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $users['nama']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Email
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $users['email']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Alamat
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $users['alamat']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        No. Hp
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $users['no_hp']; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-primary">
                                        Role ID
                                    </td>
                                    <td>
                                        :
                                    </td>
                                    <td>
                                        <?= $users['role_id']; ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="modal-footer">
                            <a href="<?= base_url() ?>profile/edit/<?= $users['id_user']; ?>" class="btn btn-primary">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>