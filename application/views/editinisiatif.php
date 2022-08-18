<body>
    <div class="container py-5">
        <div class="row mt-3">
            <div class="card">
                <form class="form-horizontal" action="<?php echo base_url('erdcontroller/editinisiatif') ?>" method="post" enctype="multipart/form-data" role="form">
                    <h5 class="card-header">Konteks Resiko</h5>
                    <div class="card-body">
                        <input type="hidden" name="id_inisiatif" id="id_inisiatif" value="<?= $inisiatif1['id_inisiatif']; ?>">
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="inisiatif" class="col-form-label">Sasaran</label>
                                <input type="text" id="inisiatif" name="inisiatif" class="form-control" value="<?= $inisiatif1['inisiatif']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="Qty" class="col-form-label">Kode </label>
                                <input type="text" id="kode" name="kode" class="form-control" value="<?= $inisiatif1['kode']; ?>" disabled>
                                <input type="text" id="kode" name="kode" class="form-control" value="<?= $inisiatif1['kode']; ?>" hidden>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary" id="edit" name="edit">Submit</button>
            </div>
        </div>
        </form>
    </div>
</body>