<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href=" <?= base_url(); ?>Siswa/tambah" class="btn btn-primary">Tambah</a>
        </div>
    </div>
    <br>
    <br>


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


    <?php foreach ($data_aset as $mhs) :


        $today = date('Y-m-d');
        $expired = $mhs['Expired'];
        // $onemonth = new \DateTime('1 month');
        // $one=strtotime("+1 Months");
        $firstReminderAt = date('Y-m-d', strtotime('+2 months'));


        if ($today < $expired & $expired < $firstReminderAt) {
            echo " <div class='col-md-6'><div class='alert alert-success alert-dismissible fade show' role='alert'><strong>" . ' Aset ' . $mhs['Aset'] . ' Expired Tanggal ' . $mhs['Expired'] . "</strong><button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            
            </div>";
        } else {
            $bgColor = 'table-info';
        }

    ?>
    <?php endforeach; ?>
    <div class="row mt-3">
        <div class="col-center">
            <h3>Data Aset</h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-9">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data Aset...." name="cari">
                    <button class="btn btn-primary" type="suvmit">Search</button>
                    <div class="col">
                        <a href=" <?= base_url(); ?>Siswa/tambah" class="btn btn-primary">Tambah</a>
                    </div>
                </div>
        </div>
    </div>
    <div class="col" class="scroll-blk" id="mytable">
        <table class="table table-sm table-striped" id="datamahasiswa">
            <thead>
                <tr>
                    <th width="50px">No</th>
                    <th width="300px">Aset</th>
                    <th width="50px">Qty </th>
                    <th width="150px">Expired</th>
                    <th width="200px">Supplier</th>
                    <!-- <th width="200px">No Handphone</th> -->
                    <th width="200px">Cost</th>
                    <th width="200px">Action</th>
                    <th></th>
                </tr>
            </thead>
            <?php foreach ($data_aset as $mhs) :
                $today = date('Y-m-d');
                $expired = $mhs['Expired'];
                // $onemonth = new \DateTime('1 month');
                // $one=strtotime("+1 Months");
                $firstReminderAt =  date('Y-m-d', strtotime('+2 months'));


                if ($today < $expired & $expired < $firstReminderAt) {
                    $bgColor = 'table-danger';
                } else {
                    $bgColor = 'table-info';
                }

            ?>
                <tbody>

                    <tr class="<?php echo $bgColor ?>">
                        <td width="30px"><?= $mhs['No']; ?></td>
                        <td width="300px"><?= $mhs['Aset']; ?></td>
                        <td width="30px"><?= $mhs['Qty']; ?></td>
                        <td width="150px"><?= $mhs['Expired']; ?></td>
                        <td width="200px"><?= $mhs['Supplier']; ?></td>
                        <!-- <td width="200px"><?= $mhs['nohp']; ?></td> -->
                        <td width="200px"><?= $mhs['Cost']; ?></td>
                        <td><?= $firstReminderAt; ?></td>
                        <td width="200px">
                            <a href="<?= base_url(); ?>Siswa/edit/<?= $mhs['No']; ?>" class="badge text-bg-success" onclick="return confirm('anda yakin?')">Edit</a>
                            <a href="<?= base_url(); ?>Siswa/hapus/<?= $mhs['No']; ?>" class="badge text-bg-danger" onclick="return confirm('anda yakin?')">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
        </table>

    </div>
</div>
<?php echo (date('Y-m-d')); ?>
</div>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    body {
        text-align: center;
    }

    .scroll-blk {
        background-color: #C04000;
    }

    /* .scroll-text {
        height: 400px;
        overflow-x: hidden;
        background-color: #fff;

    } */
</style>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>