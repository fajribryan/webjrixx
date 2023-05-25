<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <!-- Favicon -->
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
<br>
<br>
<br>
<h1>
    Penjualan
</h1>
<body>
    <form action="" method="post">
        <div class="form-group">
                    <div class="col-auto">
                        <label for="tgl_faktur" class="col-form-label">Tanggal Faktur</label>
                        <input type="date" id="tgl_faktur" name="tgl_faktur" class="form-control">
                    </div>

                    <div class="form-group">
                        <div class="col-auto">
                            <label for="no_faktur" class="col-form-label">No Faktur</label>
                            <input type="number" id="no_faktur" name="no_faktur" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="nama_konsumen" class="col-form-label">Nama Konsumen</label>
                            <input type="text" id="nama_konsumen" name="nama_konsumen" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="kode_barang" class="col-form-label">Kode Barang</label>
                            <select class="form-select" aria-label="Default select example" name='kode_barang'>
                                <?php foreach ($table_master as $table) : ?>
  <option value="<?= $table['kode_barang']; ?>"><?= $table['kode_barang']; ?></option>
  <?php endforeach ?>
</select>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="jumlah" class="col-form-label">Jumlah</label>
                            <input type="number" name="jumlah" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="harga" class="col-form-label">Harga</label>
                            <input type="number" id="harga" name="harga" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="harga_total" class="col-form-label">Harga Total</label>
                            <input type="number" id="harga_total" name="harga_total" class="form-control">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="tambah" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="mt-3">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </form>

</body>