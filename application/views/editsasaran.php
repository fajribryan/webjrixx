<body>
    <div class="container py-5">
        <div class="row mt-3">
            <div class="card">
                <form class="form-horizontal" action="<?php echo base_url('erdcontroller/editsasaran') ?>" method="post" enctype="multipart/form-data" role="form">
                    <h5 class="card-header">Konteks Resiko</h5>
                    <div class="card-body">
                        <input type="hidden" name="id_sasaran" id="id_sasaran" value="<?= $sasaran1['id_sasaran']; ?>">
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="sasaran" class="col-form-label">Sasaran</label>
                                <input type="text" id="sasaran" name="sasaran" class="form-control" value="<?= $sasaran1['sasaran']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="Qty" class="col-form-label">Kode </label>
                                <input type="text" id="kode" name="kode" class="form-control" value="<?= $sasaran1['kode']; ?>" disabled>
                                <input type="text" id="kode" name="kode" class="form-control" value="<?= $sasaran1['kode']; ?>" hidden>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="edit" name="edit">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>