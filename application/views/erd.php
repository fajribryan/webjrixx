<div class="container py-4">

    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Konteks Resiko</h1>
        <p class="col-md-8 fs-4">
        <div class="card m-b-30">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Konteks Resiko</th>
                        <th scope="col">Nama Pemilik</th>
                        <th scope="col">Periode</th>
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th><?= $konteks['konteks_resiko']; ?></th>
                        <th><?= $konteks['nama_pemilik']; ?></th>
                        <th><?= $konteks['periode']; ?></th>
                    </tr>
                </tbody>
            </table>
            <!-- <button class="btn btn-primary btn-lg" type="button">Example button</button> -->

        </div>
        <div class="col-md-12 mt-2 ">
            <div class="card m-b-30">
                <div class="card-body">
                    <!-- Nav tabs -->
                    <ul class="nav nav-pills nav-justified" role="tablist">
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link " data-toggle="tab" href="#home-1" role="tab" aria-selected="false">Sasaran</a>
                        </li>
                        <li class="nav-item waves-effect waves-light">
                            <a class="nav-link" data-toggle="tab" href="#profile-1" role="tab" aria-selected="false">Inisiatif</a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane p-3" id="home-1" role="tabpanel">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>Kode</th>
                                        <th>Sasaran</th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahsasaran">
                                                Tambah Sasaran
                                            </button>
                                        </th>
                                </thead>
                                <tbody>
                                    <?php foreach ($sasaran as $row) : ?>
                                        <tr>
                                            <th><?= $row['kode']; ?></th>
                                            <th><?= $row['sasaran']; ?></th>
                                            <th>
                                                <a href="<?= base_url(); ?>erdcontroller/editsasaranbyid/<?= $row['id_sasaran']; ?>" class="btn btn-success">
                                                    Edit Sasaran
                                                </a>
                                                <a href="<?= base_url(); ?>erdcontroller/deletesasaran/<?= $row['id_sasaran']; ?>" class="btn btn-danger">
                                                    Hapus
                                                </a>
                                            </th>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane p-3" id="profile-1" role="tabpanel">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>Kode</th>
                                        <th>Inisiatif</th>
                                        <th>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#inisiatif">
                                                Tambah Inisiatif
                                            </button>

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($inisiatif as $row) : ?>
                                        <tr>

                                            <th><?= $row['kode']; ?></th>
                                            <th><?= $row['inisiatif']; ?></th>
                                            <th>
                                                <a href="<?= base_url(); ?>erdcontroller/editinisiatifbyid/<?= $row['id_inisiatif']; ?>" class="btn btn-success">
                                                    Edit Inisiatif
                                                </a>
                                                <a href="<?= base_url(); ?>erdcontroller/deleteinisiatif/<?= $row['id_inisiatif']; ?>" class="btn btn-danger">
                                                    Hapus
                                                </a>
                                            </th>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal tambah sasaran -->
<?php echo form_open_multipart('erdcontroller/simpansasaran') ?>
<div class="modal fade" id="tambahsasaran" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="sasaran">Konteks Resiko</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-auto">
                        <label for="sasaran" class="col-form-label">Sasaran</label>
                        <input type="text" id="sasaran" name="sasaran" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-auto">
                        <label for="kode" class="col-form-label">Kode </label>
                        <input type="text" id="kode" name="kode" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-auto">
                        <label for="kode_konteks" class="col-form-label">Kode Konteks</label>
                        <select id="kode_konteks" name="kode_konteks" class="form-control" disabled>
                            <?php foreach ($kontekss as $k) : ?>
                                <option value="<?= $k; ?>"><?= $k; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select id="kode_konteks" name="kode_konteks" class="form-control" hidden>
                            <?php foreach ($kontekss as $k) : ?>
                                <option value="<?= $k; ?>"><?= $k; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="edit" name="edit">Submit</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>

<!-- modal tambah inisiatif -->
<?php echo form_open_multipart('erdcontroller/simpaninisiatif') ?>
<div class="modal fade" id="inisiatif" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inisiatif">Konteks Resiko</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="col-auto">
                        <label for="inisiatif" class="col-form-label">Inisiatif</label>
                        <input type="text" id="inisiatif" name="inisiatif" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-auto">
                        <label for="kode" class="col-form-label">Kode </label>
                        <input type="text" id="kode" name="kode" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-auto">
                        <label for="kode_konteks" class="col-form-label">Kode Konteks</label>
                        <select id="kode_konteks" name="kode_konteks" class="form-control" disabled>
                            <?php foreach ($kontekss as $k) : ?>
                                <option value="<?= $k; ?>"><?= $k; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <select id="kode_konteks" name="kode_konteks" class="form-control" hidden>
                            <?php foreach ($kontekss as $k) : ?>
                                <option value="<?= $k; ?>"><?= $k; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="edit" name="edit">Submit</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>