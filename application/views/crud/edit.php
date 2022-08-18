<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Edit
                </div>
                <div class="card-body">

                    <form action="" method="post">
                        <input type="hidden" name="No" value="<?= $data_aset['No']; ?>">
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="Aset" class="col-form-label">Aset</label>
                                <input type="text" id="Aset" name="Aset" class="form-control" value="<?= $data_aset['Aset']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="Qty" class="col-form-label">Qty</label>
                                <input type="number" id="Qty" name="Qty" class="form-control" value="<?= $data_aset['Qty']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="Expired" class="col-form-label">Expired</label>
                                <input type="date" id="Expired" name="Expired" class="form-control" value="<?= $data_aset['Expired']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="Supplier" class="col-form-label">Supplier</label>
                                <input type="text" name="Supplier" class="form-control" value="<?= $data_aset['Supplier']; ?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-auto">
                                <label for="Cost" class="col-form-label">Cost</label>
                                <input type="number" id="Cost" name="Cost" class="form-control" value="<?= $data_aset['Cost']; ?>">
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
    </div>
</div>
<script type="text/javascript" src="C:\xampp\htdocs\ci3_1\datepicker\modul\date_picker_bootstrap/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>

<script type="text/javascript" src="C:\xampp\htdocs\ci3_1\datepicker\modul\date_picker_bootstrap/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="C:\xampp\htdocs\ci3_1\datepicker\modul\date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>

<script type="text/javascript" src="C:\xampp\htdocs\ci3_1\datepicker\modul\date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>

<script type="text/javascript">
    $('.form_date').datetimepicker({

        language: 'id',

        weekStart: 1,

        todayBtn: 1,

        autoclose: 1,

        todayHighlight: 1,

        startView: 2,

        minView: 2,

        forceParse: 0

    });
</script>