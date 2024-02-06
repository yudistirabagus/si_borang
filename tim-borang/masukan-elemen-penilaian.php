<?php
    session_start();
    
    if(empty($_SESSION)){
        header("Location: ../");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="slick, flat, dashboard, bootstrap, admin, template, theme, responsive, fluid, retina">
    <link rel="shortcut icon" href="javascript:;" type="image/png">

    <title>Home</title>

    <!--right slidebar-->
    <link href="../asset/css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="../asset/js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--Data Table-->
    <link href="../asset/js/data-table/css/jquery.dataTables.css" rel="stylesheet">
    <link href="../asset/js/data-table/css/dataTables.tableTools.css" rel="stylesheet">
    <link href="../asset/js/data-table/css/dataTables.colVis.min.css" rel="stylesheet">
    <link href="../asset/js/data-table/css/dataTables.responsive.css" rel="stylesheet">
    <link href="../asset/js/data-table/css/dataTables.scroller.css" rel="stylesheet">
    <!-- Base Styles -->

    <!--common style-->
    <link href="../asset/css/style.css" rel="stylesheet">
    <link href="../asset/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
        .p-left {
            margin:.5em 0; padding-left: -1em;
        }
        .p-left-tt {
            margin-left: 2em;
        }
        .nm_standar {
            margin-bottom: -10px; margin-top: -1em;
        }
        
        .btn-lf {padding-left: 1em;}
        .sub-p {margin-left: 2em; margin-top: .5em;}

        .tt {
            padding: 5px 0px; border:thin solid #FFF;
        }
        .btn-isi {
            float: right;
        }
        .err-text {
            color: #FF0000; margin-top: -3px;
        }
        .f-left {
            float: right; margin-top: -2em;
        }
        .logo-pt {
            margin-left: 3em; margin-top: 1em;
        }
        .logo-pt img {
            width: 150px;
        }
        .nm_des {
            margin-bottom: 10px;
        }
    </style>
</head>

<body class="sticky-header">
    <section>
        <!-- sidebar left start-->
        <div class="sidebar-left">
            <!--responsive view logo start-->
            <div class="logo dark-logo-bg visible-xs-* visible-sm-*">
                <a href="./">
                    <img src="../asset/img/logo-icon.png" alt="">
                    <!--<i class="fa fa-maxcdn"></i>-->
                    <span class="brand-name">Bina Darma</span>
                </a>
            </div>
            <!--responsive view logo end-->

            <div class="sidebar-left-info">
                <!-- visible small devices start-->
                <div class=" search-field"></div>
                <!-- visible small devices end-->

                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked side-navigation">
                    <li>
                        <h3 class="navigation-title">Menu Utama Tim Borang</h3>
                    </li>
                    <li><a href="./"><i class="fa fa-home"></i> <span>Home</span></a></li>
                    <li>
                        <h3 class="navigation-title">Menu Standar</h3>
                    </li>
                    <li><a href="./standar.php"><i class="fa fa-file-text-o"></i> <span>Standar</span></a></li>
                    <li>
                        <h3 class="navigation-title">Menu Lainnya</h3>
                    </li>
                    <li><a href="../logout.php" onclick="return confirm('Yakin ingin Logout?')"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
                    <div class="logo-pt">
                        <img src="../asset/img/Ban-PT.png">
                    </div>
                </ul>
                <!--sidebar nav end-->
            </div>
        </div>
        <!-- sidebar left end-->

        <!-- body content start-->
        <div class="body-content" style="min-height: 1200px;">
            <!-- header section start-->
            <div class="header-section">

                <!--logo and logo icon start-->
                <div class="logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="./">
                        <img src="../asset/img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                        <span class="brand-name">Bina Darma</span>
                    </a>
                </div>

                <div class="icon-logo dark-logo-bg hidden-xs hidden-sm">
                    <a href="./">
                        <img src="../asset/img/logo-icon.png" alt="">
                        <!--<i class="fa fa-maxcdn"></i>-->
                    </a>
                </div>
                <!--logo and logo icon end-->

                <!--toggle button start-->
                <a class="toggle-btn"><i class="fa fa-outdent"></i></a>
                <!--toggle button end-->

                 <!--mega menu start-->
                <div id="navbar-collapse-1" class="navbar-collapse collapse yamm mega-menu">
                    <ul class="nav navbar-nav">
                        <!-- Classic list -->
                        <li><a href="./"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="./standar.php"><i class="fa fa-file-text-o"></i> Standar</a></li>
                    </ul>
                </div>
                <!--mega menu end-->

                <!--mega menu end-->
                <div class="notification-wrap">
                    <!--right notification start-->
                    <div class="right-notification">
                        <ul class="notification-menu">
                            <li>
                                <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                    <img src="../asset/img/avatar-mini.jpg" alt=""><?php echo $_SESSION['username']; ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu purple pull-right">
                                    <li><a href="../logout.php" onclick="return confirm('Yakin ingin Logout?')"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--right notification end-->
                </div>
            </div>
            <!-- header section end-->

            <?php
                include "../acai/koneksi.php";
                $id_standar = $_GET['id_standar'];
                $query = mysqli_query($koneksi, "SELECT * FROM standar WHERE id_standar = '$id_standar'");
                $res = mysqli_fetch_array($query);
            ?>

            <!-- page head start-->
            <div class="page-head">
                <h3>Masukan Elemen Penilaian</h3>
                <span class="sub-title">Sistem Informasi Borang Akreditasi Program Sarjana</span>
            </div>
            <!-- page head end-->
            
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading"><b><?php echo $res['nama_standar']; ?></b></header>                                
                            <div class="panel-body">
                                <?php
                                    $query1 = mysqli_query($koneksi, "SELECT * FROM isi_standar WHERE id_standar='$id_standar' ORDER BY id_isi_standar ASC") or die (mysqli_error());
                                        if(mysqli_num_rows($query1) == 0){
                                            echo "<div class='form-group err-text' align='center'>Belum ada, isi data standar!!</div>";
                                        }else{
                                            while($r=mysqli_fetch_array($query1)):
                                                $sub_id=$r['id_isi_standar'];
                                ?>
                                <div class="form-group p-left">
                                    <div class="col-sm-12 nm_standar">
                                        <b><?php echo $r['isi_standar']; ?></b>                                   
                                    </div>
                                    <div class="col-sm-12 p-left">
                                        <?php
                                            $query2 = mysqli_query($koneksi, "SELECT * FROM deskriptor WHERE id_isi_standar='$sub_id'") or die (mysqli_error());
                                                if(mysqli_num_rows($query2) == 0){
                                                    echo "<p class='sub-p err-text'>Belum ada elemen penilaian!!</p>";
                                                }else{
                                                    while($rw=mysqli_fetch_array($query2)):
                                        ?>
                                        <div class="p-left-tt">
                                            <div class="nm_des"><?php echo $rw['nama_deskriptor']; ?></div>
                                            <div class="f-left">
                                                <a href="./elemen-penilaian.php?id_standar=<?php echo $res['id_standar']; ?>&id_isi_standar=<?php echo $r['id_isi_standar']; ?>&id_deskriptor=<?php echo $rw['id_deskriptor']; ?>" class="btn btn-primary m-b-10 btn-xs"><i class="fa fa-file-text-o"></i> Element Penilaian</a>
                                            </div>
                                        </div>
                                        <?php
                                            endwhile;
                                            }
                                        ?>
                                    </div>
                                </div>
                                <?php
                                    endwhile;
                                    }
                                ?>                                
                            </div>
                            <div class="form-group p-left-tt" align="center">
                                <a href="./soal-standar.php?id_standar=<?php echo "$id_standar" ?>" class="btn btn-danger m-b-10"><i class="fa fa-arrow-left"></i> Kembali</a>
                                <a href="./lihat-nilai.php?id_standar=<?php echo "$id_standar" ?>" class="btn btn-warning m-b-10"><i class="fa fa-file-text-o"></i> Lihat Nilai</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <!--body wrapper end-->

            <!--footer section start-->
            <footer>
                2017 &copy; Universitas Bina Darma Palembang.
            </footer>
            <!--footer section end-->
        </div>
        <!-- body content end-->
    </section>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../asset/js/jquery-1.10.2.min.js"></script>
<script src="../asset/js/jquery-migrate.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
<script src="../asset/js/modernizr.min.js"></script>

<!--right slidebar-->
<script src="../asset/js/slidebars.min.js"></script>

<!--switchery-->
<script src="../asset/js/switchery/switchery.min.js"></script>
<script src="../asset/js/switchery/switchery-init.js"></script>

<!--Sparkline Chart-->
<script src="../asset/js/sparkline/jquery.sparkline.js"></script>
<script src="../asset/js/sparkline/sparkline-init.js"></script>

<!--Data Table-->
<script src="../asset/js/data-table/js/jquery.dataTables.min.js"></script>
<script src="../asset/js/data-table/js/dataTables.tableTools.min.js"></script>
<script src="../asset/js/data-table/js/bootstrap-dataTable.js"></script>
<script src="../asset/js/data-table/js/dataTables.colVis.min.js"></script>
<script src="../asset/js/data-table/js/dataTables.responsive.min.js"></script>
<script src="../asset/js/data-table/js/dataTables.scroller.min.js"></script>

<!--data table init-->
<script src="../asset/js/data-table-init.js"></script>

<!--common scripts for all pages-->
<script src="../asset/js/scripts.js"></script>
</body>
</html>