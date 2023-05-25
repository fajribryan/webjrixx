<br>
<br>
<br>
<br>


<body>
    <?php echo form_open_multipart('Siswa/kirim') ?>
    <form action="" method="post">
        <div class="form-group">
            <div class="col-auto">
                <label for="Aset" class="col-form-label">Aset</label>
                <input type="text" id="Aset" name="Aset" class="form-control">
            </div>
            <div class="form-group">
                <div class="col-auto">
                    <label for="Expired" class="col-form-label">Expired</label>
                    <input type="date" id="Expired" name="Expired" class="form-control">
                </div>
            </div>
            <div class="col-auto">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <?php echo form_close() ?>
            </div>
        </div>
    </form>
</body>