<div class="container">
    <br>
    <br>
    <br>
    <main>

        <div class="container">
            <div class="main-body">
                <h3>Change Password</h3>
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?= base_url('assets/img/profile/') . $user['img']; ?>" width="100" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4><?= $user['nama']; ?></h4>
                                        <p class="text-secondary mb-1"><?= $user['email']; ?></p>
                                        <p class="text-muted font-size-sm"><small class="text-muted">Member since</small><?= date('d F Y', $user['date_created']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <?= $this->session->flashdata('message'); ?>
                                <form action="<?= base_url('user/editpassword'); ?>" method="POST">
                                    <div class="row">
                                        <hr>
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Full Name</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" disabled class="form-control" value="<?= $user['nama']; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row mb-3">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Email</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="text" disabled class="form-control" value="<?= $user['email']; ?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> Current Password</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" id="currentpassword" name="currentpassword" class="form-control">
                                            <input type="checkbox" onclick="myFunction()" id="show-password1"> Show Password
                                            <?= form_error('currentpassword', '<small class="text-danger">',); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> New Password</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" id="newpassword1" name="newpassword1" class="form-control">
                                            <input type="checkbox" onclick="myFunction()" id="show-password2"> Show Password
                                            <?= form_error('newpassword1', '<small class="text-danger">',); ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> Repeat Password</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="password" id="newpassword2" name="newpassword2" class="form-control">
                                            <input type="checkbox" onclick="myFunction()" id="show-password3"> Show Password
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info ">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <?= form_open_multipart('user/editprofile'); ?>
                            <div class="row">
                                <hr>
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" name="nama" id="nama" class="form-control" value="<?= $user['nama']; ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <input type="text" disabled class="form-control" value="<?= $user['email']; ?>">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0"> Change Photo Profile</h6>
                                </div>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control" id="img" name="img">
                                </div>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>

    </main>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('#show-password1').click(function() {
            if ($(this).is(':checked')) {
                $('#currentpassword').attr('type', 'text');
            } else {
                $('#currentpassword').attr('type', 'password');
            }
        });
    });
    $(document).ready(function() {
        $('#show-password2').click(function() {
            if ($(this).is(':checked')) {
                $('#newpassword1').attr('type', 'text');
            } else {
                $('#newpassword1').attr('type', 'password');
            }
        });
    });
    $(document).ready(function() {
        $('#show-password3').click(function() {
            if ($(this).is(':checked')) {
                $('#newpassword2').attr('type', 'text');
            } else {
                $('#newpassword2').attr('type', 'password');
            }
        });
    });
</script>