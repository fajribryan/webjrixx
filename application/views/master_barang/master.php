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
<h1> Pengelolaan Master Barang</h1>
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah">
        Tambah Barang
        </button>
            <a href=" <?= base_url(); ?>penjualan" class="btn btn-primary"> Jual Barang </a>        
            <a href=" <?= base_url(); ?>pembelian" class="btn btn-primary"> Restok Barang </a>        
        </div>
    </div>
</div>
<br>
<div class="col" class="scroll-blk" id="mytable">
        <table class="table table-sm table-striped" id="datamahasiswa">
            <thead>
                <tr>
                    <th >Kode Barang</th>
                    <th >Nama Barang</th>
                    <th >Harga </th>
                    <th>Stok</th>
                    <th>...</th>
                </tr>
            </thead>
            <?php foreach ($table_master as $table) :        
            ?> 
                <tbody>
                    <tr>
                        <td ><?= $table['kode_barang']; ?></td>
                        <td><?= $table['nama_barang']; ?></td>
                        <td ><?= $table['harga']; ?></td>
                        <td ><?= $table['stok']; ?></td>
                        <td >
                            <a href="<?= base_url(); ?>master_barang/editbarang/<?= $table['kode_barang']; ?>" class="badge text-bg-success">Edit</a>
                            <a href="<?= base_url(); ?>master_barang/deletebarang/<?= $table['kode_barang']; ?>" class="badge text-bg-danger" onclick="return confirm('anda yakin?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
        </table>
    </div>
    <!-- modal tambah -->
    <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Barang</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart('master_barang/simpanbarang') ?>

                    <div class=" col-auto">
                        <label for="kode_barang" class=" col-form-label">Kode Barang</label>
                        <input type="text" id="kode_barang" name="kode_barang" class="form-control">
                    </div>

                    <div class="col-auto">
                        <label for="nama_barang" class=" col-form-label">Nama Barang</label>
                        <input type="text" id="nama_barang" name="nama_barang" class="form-control">
                    </div>
                    <div class="col-auto">
                        <label for="harga" class=" col-form-label">Harga Barang</label>
                        <input type="text" id="harga" name="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="col-auto">
                            <label for="stok" class="col-form-label">Stok</label>
                            <input type="text" id="stok" name="stok" class="form-control">
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

</body>