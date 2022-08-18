<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link href="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<title><?= $title; ?></title>
<meta content="Admin Dashboard" name="description" />
<meta content="Mannatthemes" name="author" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="https://i.pinimg.com/564x/6d/db/74/6ddb7400d0e54bba5f2d762cdefca565.jpg">

<link href="<?= base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" type="text/css">




<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Navigation Bar-->
<header id="topnav">

    <!-- MENU Start -->
    <div class="navbar-custom">
        <div class="container-fluid">
            <div id="navigation">
                <!-- Navigation Menu-->

                <ul class="navigation-menu">

                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="<?= base_url('assets/img/profile/') . $user['img']; ?>" class="rounded-circle">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                        <!-- item-->
                        <div class="dropdown-item noti-title">
                            <h5>Welcome <?= $user['nama']; ?></h5>
                        </div>
                        <a class="dropdown-item" href="<?= base_url(); ?>user/profile"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> My Profile</a>
                        <a class="dropdown-item" href="<?= base_url(); ?>user/editpassword"><i class="mdi mdi-account-circle m-r-5 text-muted"></i> Change Password</a>

                        <a class="dropdown-item" href="#"><span class="badge badge-success float-right">5</span><i class="mdi mdi-settings m-r-5 text-muted"></i> Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                    </div>
                    </li>
                    <li class="has-submenu">
                        <a href="<?= base_url('user'); ?>"><i class="mdi mdi-airplay"></i>Dashboard</a>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-layers"></i>Advanced UI</a>
                        <ul class="submenu">
                            <li><a href="<?= base_url(); ?>erdcontroller">Konteks Resiko</a></li>
                            <li><a href="<?= base_url(); ?>erdcontroller/erd">ERD</a></li>
                            <li><a href="<?= base_url(); ?>Siswa">Data</a></li>
                            <li><a href="">Range Slider</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-bullseye"></i>User Interface</a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="">Progress Bars</a></li>
                                    <li><a href="">Dropdowns</a></li>
                                    <li><a href="">Lightbox</a></li>
                                    <li><a href="">Navs</a></li>
                                    <li><a href="">Pagination</a></li>
                                    <li><a href="">Popover & Tooltips</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                </ul>
                <!-- End navigation menu -->
            </div> <!-- end #navigation -->
        </div> <!-- end container -->
    </div> <!-- end navbar-custom -->
</header>
<!-- End Navigation Bar-->





<!-- jQuery  -->
<script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/modernizr.min.js"></script>
<script src="<?= base_url(); ?>/assets/js/waves.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.slimscroll.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.nicescroll.js"></script>
<script src="<?= base_url(); ?>/assets/js/jquery.scrollTo.min.js"></script>

<!-- App js -->
<script src="<?= base_url(); ?>/assets/js/app.js"></script>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let filename = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(filename);
    });
</script>