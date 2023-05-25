<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href=" <?= base_url(); ?>Siswa/tambah" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <main>
        <div class="row mt-3">
            <div class="col-center">
                <h3>Data Konteks Resiko</h3>
            </div>
        </div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data Berhasil </strong><?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <table class="table table-sm table-striped">
            <thead>
                <tr>
                    <th>Konteks Resiko</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($konteks as $row) : ?>
                    <tr>
                        <td class="v-aset"><?= $row['konteks_resiko']; ?></td>
                        <td><a href="<?= base_url(); ?>erdcontroller/erd/<?= $row['kode_konteks']; ?>" class="badge text-bg-success">Details</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </main>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        + Konteks Resiko
    </button>

    <!-- Modal 1 -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konteks Resiko</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('erdcontroller/simpankonteks') ?>

                    <div class=" col-auto">
                        <label for="konteks_resiko" class=" col-form-label">Nama Konteks Resiko</label>
                        <input type="text" id="konteks_resiko" name="konteks_resiko" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="nama_pemilik" class=" col-form-label">Nama Pemilik</label>
                        <input type="text" id="nama_pemilik" name="nama_pemilik" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="periode" class="col-form-label">Periode</label>
                            <input type="date" id="periode" name="periode" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="kode_konteks" class="col-form-label">Kode Konteks</label>
                            <input type="text" id="kode_konteks" name="kode_konteks" class="form-control">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="tombolsimpan">Submit</button>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>