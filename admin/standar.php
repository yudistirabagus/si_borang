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
        .admin, .kaprodi, .tim-borang {
            padding: 2px 10px 3px; color: #FFF;
            border-radius: 3px;
        }
        .admin {background: #549AD0;}
        .kaprodi {background: #FFC554;}
        .tim-borang {background: #CF67ED;}
        .logo-pt {
            margin-left: 3em; margin-top: 1em;
        }
        .logo-pt img {
            width: 150px;
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
                        <h3 class="navigation-title">Menu Utama Admin</h3>
                    </li>
                    <li><a href="./"><i class="fa fa-home"></i> <span>Home</span></a></li>
                    <li>
                        <h3 class="navigation-title">Menu Standar</h3>
                    </li>
                    <li><a href="./standar.php"><i class="fa fa-file-text-o"></i> <span>Standar</span></a></li>
                    <li>
                        <h3 class="navigation-title">Menu User</h3>
                    </li>
                    <li><a href="./data-user.php"><i class="fa fa-user"></i> <span>Data User</span></a></li>
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
                        <li><a href="./data-user.php"><i class="fa fa-user"></i> Data User</a></li>
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

            <!-- page head start-->
            <div class="page-head">
                <h3>Standar</h3>
                <span class="sub-title">Sistem Informasi Borang Akreditasi Program Sarjana</span>
                <div class="state-information">
                    <a href="./tambah-standar.php"><button type="button" class="btn btn-primary m-b-10"><i class="fa fa-pencil-square-o"></i> Tambah Standar</button></a>
                </div>
            </div>
            <!-- page head end-->

            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <header class="panel-heading ">
                                Data Table Standar
                                <span class="tools pull-right">
                                    <a class="fa fa-repeat box-refresh" href="javascript:;"></a>
                                    <a class="t-close fa fa-times" href="javascript:;"></a>
                                </span>
                            </header>
                            <table class="table responsive-data-table data-table">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Jenis Standar</th>
                                        <th>Hak Akses User</th>
                                        <th width="15%">Level User</th>
                                        <th width="15%">Aksi</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php
                                        include "../acai/koneksi.php";
                                        $query = mysqli_query($koneksi,
                                            "SELECT * FROM user INNER JOIN standar
                                            WHERE user.id_user=standar.id_user") or die (mysqli_error());
                                        if(mysqli_num_rows($query) == 0){
                                            echo "<tr><td colspan='4' align='center'>Belum ada data yang tersedia!!</td></tr>";
                                        }else{
                                            $no=0; // Nomor Urutan
                                            while($r=mysqli_fetch_array($query)):
                                                $no++;
                                    ?>                                
                                    <tr>
                                        <td align="center"><?php echo $no; ?></td>
                                        <td><a href="./soal-standar.php?id_standar=<?php echo $r['id_standar']; ?>"><?php echo $r['nama_standar']; ?></a></td>
                                        <td align="center"><span class="<?php echo $r['username']; ?>"><?php echo $r['username']; ?></span></td>
                                        <td align="center"><span class="<?php echo $r['level']; ?>"><?php echo $r['level']; ?></span></td>
                                        <td align="center">
                                            <a href="./edit-standar.php?id_standar=<?php echo $r['id_standar'] ?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                                            <a href="./hapus-standar.php?id_standar=<?php echo $r['id_standar'] ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin, ingin menghapus data ini?')"><i class="fa fa-trash-o"></i> Hapus</a>
                                        </td>
                                    </tr>
                                    <?php
                                        endwhile;
                                            }
                                    ?>
                                </tbody>
                            </table>
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