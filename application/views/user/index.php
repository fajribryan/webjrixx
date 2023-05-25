<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
    <!-- Navbar & Carousel Start -->
    <div class="container-fluid">

        <!-- Carousel wrapper -->
        <div id="carouselExampleControls" class="carousel slide carousel-fade">

            <!-- Inner -->
            <div class="carousel">
                <!-- Single item -->
                <!-- <div class="carousel-item active">
                    <video class="img-fluid" autoplay loop muted style="opacity: 0.8;">
                        <source src="assets/video/sea.mp4" type="video/mp4" />
                    </video>
                    <div class="carousel-caption">
                        <div style="max-width: 900px;">
                            <h1 class="display-1 animated zoomIn"> Wilujeng / Sukses </h1>
                            <div class="container">
                                <div class="row ">

                                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                                        <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">

                                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">

                                                <i class="fa fa-users text-primary"></i>
                                            </div>
                                            <div class="ps-4">
                                                <h5 class="text-white mb-0"> Mahasiswa Sehat</h5>
                                                <h1 class="text-white mb-0" data-toggle="counter-up"><?php echo $kondisisehat->kondisi; ?></h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                                        <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                                            <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                                                <i class="fa fa-award text-primary"></i>
                                            </div>
                                            <div class="ps-4">
                                                <h5 class="text-white mb-0"> Mahasiswa Sakit </h5>
                                                <h1 class="text-white mb-0" data-toggle="counter-up"><?php echo $kondisisakit->kondisi; ?></h1>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
    <!-- Navbar & Carousel End -->
    </div>


    <!-- table -->
   


    <div class="container text-center">
  <div class="row align-items-start">
    <div class="col">
    <div class="container-fluid  wow fadeInUp" data-wow-delay="0.7s">
        <div class="container">
            <div class="row g-5">
                <div class="col">
                    <div class="col" class="table-atas">
                        <table class="table table-light" id="datamahasiswa">
                            <thead>
                                <tr>
                                    <th width="50px"> No </th>
                                    <th width="200px">Nama</th>
                                    <th width="200px">Asal</th>
                                    <th width="200px">Kondisi</th>

                                </tr>
                            </thead>
                        </table>
                        <div class="scroll-text" id="data">
                            <table class="table table-sm">
                                <tbody>
                                    <?php
                                    $no = 0;
                                    foreach ($mahasiswa as $row) :
                                        if ($row['Kondisi'] == 'Sakit') {
                                            $kondisi = "table-danger";
                                        } else {
                                            $kondisi = "table-primary";
                                        }
                                        $no = $no + 1;


                                    ?>

                                        <tr class="<?php echo $kondisi;
                                                    ?>">
                                            <td width="30px"><?php echo $no ?></td>
                                            <td width="200px"><?= $row['Nama']; ?></td>
                                            <td width="200px"><?= $row['Asal']; ?></td>
                                            <td width="200px"><?= $row['Kondisi']; ?></td>

                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
<br>
  <div class="row align-items-center">
    <div class="col" style="height: 460px;">
        <div id="piechart" data-wow-delay="0.8s"></div>
    </div>
    </div>
  </div>
</div>
    <!-- table End -->

</body>
<style>
    body {
        text-align: center;
    }

    .table {
        background-color: #C04000;
        width: 1000px;
        margin: auto;
    }

    .scroll-text {
        height: 300px;
        width: 1000px;
        overflow-x: hidden;
        background-color: #fff;
        margin: auto;
    }

    .kiri,
    .tengah,
    .kanan {
        padding-top: 20px;
        height: 1200px;
        text-align: center;

    }
</style>
<!-- script auto scroll table -->
<script>
    var my_time;
    var count = 0;
    setTimeout('pageScroll()', 5000);

    function pageScroll() {
        // If condition to set repeat 
        if (count < 2) {
            var objDiv = document.getElementById("data");
            objDiv.scrollTop = objDiv.scrollTop + 1;
            if (objDiv.scrollTop == (objDiv.scrollHeight - 300)) {
                setTimeout(function() {
                    objDiv.scrollTop = 0;
                    count++;
                }, 1200);
            }
            //set scrolling time start
            my_time = setTimeout('pageScroll()', 15);
            //set scrolling time end
        }
    }
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<!-- script highchart -->
<script>
    Highcharts.chart('piechart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Asal Mahasiswa'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.0f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: [
                <?php
                if (is_array($kotaasal)) {
                    foreach ($kotaasal as $k) {
                        $kota = $k->Asal;
                        $jml = $k->Jumlah;
                        echo "{name:'$kota',y:$jml},";
                    }
                }
                ?>



            ]
        }]
    });
</script>


<!-- Back to Top -->
<!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a> -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js">
</script>
<script src="assets/lib/wow/wow.min.js"></script>
<script src="assets/lib/easing/easing.min.js"></script>
<script src="assets/lib/waypoints/waypoints.min.js"></script>
<script src="assets/lib/counterup/counterup.min.js"></script>
<script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Template Javascript -->
<script src="assets/js/main.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<!-- playground-hide -->
<script>
    const process = {
        env: {}
    };
    process.env.GOOGLE_MAPS_API_KEY =
        "AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg";
</script>
<!-- playground-hide-end -->

<link rel="stylesheet" type="text/css" href="./style.css" />
<script type="module" src="assets/ts/index.js"></script>
<script async src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
</script>
<script>
    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: -34.397,
                lng: 150.644
            },
            zoom: 8,
        });
    }

    window.initMap = initMap;
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly" defer></script>
<style>
    #map {
        height: 100%;
    }

    /* 
 * Optional: Makes the sample page fill the window. 
 */
</style>