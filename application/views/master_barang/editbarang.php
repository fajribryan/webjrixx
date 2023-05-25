<br>
<br>
<h1> Edit Barang</h1>
<body>
    <div class="container py-5">
        <div class="row mt-3">
            <div class="card">
            <form action="" method="post">
                        <input type="hidden" name="kode_barang" value="<?= $kode_barang['kode_barang']; ?>">
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="kode_barang" class="col-form-label">Kode Barang</label>
                                <input type="text" id="kode_barang" name="kode_barang" class="form-control" value="<?= $kode_barang['kode_barang']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="nama_barang" class="col-form-label">Nama Barang</label>
                                <input type="text" id="Qty" name="nama_barang" class="form-control" value="<?= $kode_barang['nama_barang']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="harga" class="col-form-label">Harga</label>
                                <input type="number" id="harga" name="harga" class="form-control" value="<?= $kode_barang['harga']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="stok" class="col-form-label">Stok</label>
                                <input type="number" name="stok" class="form-control" value="<?= $kode_barang['stok']; ?>">
                            </div>

                        </div>

                        <button type="submit" name="edit" class="btn btn-primary">Submit</button>
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                    </form>
            </div>
        </div>
    </div>
</body>