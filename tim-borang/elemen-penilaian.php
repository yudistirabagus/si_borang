<?php
    session_start();
    ob_start();
    ini_set("display_errors","Off");  

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
    <script type="text/javascript" src="../asset/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function (){
            $('input[type="checkbox"]').click(function (){
                if ($(this).attr("value")=="elemen1"){
                    $(".elemen1").toggle();
                }if ($(this).attr("value")=="elemen2"){
                    $(".elemen2").toggle();
                }if ($(this).attr("value")=="elemen3"){
                    $(".elemen3").toggle();
                }if ($(this).attr("value")=="elemen4"){
                    $(".elemen4").toggle();
                }if ($(this).attr("value")=="elemen5"){
                    $(".elemen5").toggle();
                }
            });
        });
    </script>

    <style type="text/css">
        .p-left {
            margin:.5em 0; padding-left: 1em;
        }
        .p-left-tt {
            margin-left: 2.5em;
        }
        .btn-lf {padding-left: 1em;}
        .sub-p {margin-left: 2em; margin-top: .5em;}

        .p-left-tt h3 {
            font-size: 22px; text-align: center;
            border: thin solid #E6E6E6; font-size: 18px;
            margin-top: 0em; padding: 10px 0 15px;
        }
        .contt {
            width: 100%; padding: 10px 0 15px 1em;
            border: thin solid #E6E6E6;
        }
        .checkbox {
            border: thin solid #E6E6E6; display: block; clear: both;
            padding-bottom: 10px; float:right; margin-top: .1em;
        }
        .checkbox p {
            float: left; margin-left: 2em; margin-bottom: -10px; font-weight: bold;
            margin-top: 10px; margin-right: .5em; margin-left:.5em;
        }
        .checkbox-custom {float: left;}
        .clear {clear: both;}
        .radio-custom {
            display: none;
        }
        .p-left-ta {
            margin-left: 2.5em;
        }
        .box {
            margin-left: 0em;
        }
        .logo-pt {
            margin-left: 3em; margin-top: 1em;
        }
        .logo-pt img {
            width: 150px;
        }
        .has-success {
            margin-top: -10px;
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
                $id_isi_standar = $_GET['id_isi_standar'];
                $id_deskriptor = $_GET['id_deskriptor'];
                $query = mysqli_query($koneksi, "SELECT * FROM standar INNER JOIN isi_standar INNER JOIN deskriptor WHERE standar.id_standar='$id_standar' AND isi_standar.id_isi_standar='$id_isi_standar' AND deskriptor.id_deskriptor='$id_deskriptor'");
                $res = mysqli_fetch_array($query);
            ?>

            <!-- page head start-->
            <div class="page-head">
                <h3>Standar</h3>
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
                                <div class="form-group p-left">
                                    <?php echo $res['isi_standar'] ?>
                                </div>
                                <div class="form-group p-left-ta">
                                    <?php echo $res['nama_deskriptor'] ?>
                                </div>
                                <div class="form-group p-left-ta has-success">
                                    <label>No. Butir Penilaian</label>
                                    <form action="" method="POST">
                                    <input type="text" class="form-control" name="no_butir_penilaian" placeholder="Masukan No Butir Penilaian">
                                    </form>
                                </div>
                                <div class="form-group p-left-tt checkbox">
                                    <p>Sembunyikan Elemen</p>
                                    <label class="checkbox-custom check-info">
                                        <input type="checkbox" id="elemen1" name="elemen1" value="elemen1"> <label for="elemen1">Sangat Baik</label>
                                    </label>
                                    <label class="checkbox-custom check-success">
                                        <input type="checkbox" id="elemen2" name="elemen2" value="elemen2"> <label for="elemen2">Baik</label>
                                    </label>
                                    <label class="checkbox-custom check-warning">
                                        <input type="checkbox" id="elemen3" name="elemen3" value="elemen3"> <label for="elemen3">Cukup</label>
                                    </label>
                                    <label class="checkbox-custom check-primary">
                                        <input type="checkbox" id="elemen4" name="elemen4" value="elemen4"> <label for="elemen4">Kurang</label>
                                    </label>
                                    <label class="checkbox-custom check-danger">
                                        <input type="checkbox" id="elemen5" name="elemen5" value="elemen5"> <label for="elemen5">Sangat Kurang</label>
                                    </label>
                                </div>
                                <div class="clear"></div>
                                <form action="" method="POST">
                                    <input type="hidden" name="bobot" value="<?php echo $res['bobot'] ?>">                                    
                                    <div class="form-group p-left-tt">
                                        <h3>Jawaban Soal <?php echo $no_butir_penilaian = $_POST['no_butir_penilaian']; ?></h3>
                                        <div class="contt">
                                            Elemen Penilaian <?php echo $no_butir_penilaian; ?>
                                            <input type="hidden" name="no_butir_penilaian" value="<?php echo $no_butir_penilaian; ?>">
                                            <div class="radio-custom radio-info p-left-tt elemen1 box" style="display: block;">
                                                <input type="radio" value="4" name="info_borang_ps" id="4" required>
                                                <label for="4"><?php echo $res['sangat_baik'] ?></label>
                                            </div>
                                            <div class="radio-custom radio-success p-left-tt elemen2 box" style="display: block;">
                                                <input type="radio" value="3" name="info_borang_ps" id="3" required>
                                                <label for="3"><?php echo $res['baik'] ?></label>
                                            </div>
                                            <div class="radio-custom radio-warning p-left-tt elemen3 box" style="display: block;">
                                                <input type="radio" value="2" name="info_borang_ps" id="2" required>
                                                <label for="2"><?php echo $res['cukup'] ?></label>
                                            </div>
                                            <div class="radio-custom radio-primary p-left-tt elemen4 box" style="display: block;">
                                                <input type="radio" value="1" name="info_borang_ps" id="1" required>
                                                <label for="1"><?php echo $res['kurang'] ?></label>
                                            </div>
                                            <div class="radio-custom radio-danger p-left-tt elemen5 box" style="display: block;">
                                                <input type="radio" value="0" name="info_borang_ps" id="0" required>
                                                <label for="0"><?php echo $res['sangat_kurang'] ?></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group p-left-tt">            
                                        <button type="submit" class="btn btn-info m-b-10" name="simpan"><i class="fa fa-save"></i> Simpan</button>
                                        <a href="./masukan-elemen-penilaian.php?id_standar=<?php echo "$id_standar" ?>" class="btn btn-default m-b-10"><i class="fa fa-refresh"></i> Batal</a>
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST['simpan'])){
                                        $id_standar = $_GET['id_standar'];
                                        $no_butir_penilaian = $_POST['no_butir_penilaian'];
                                        $info_borang_ps = $_POST['info_borang_ps'];
                                        $bobot = $_POST['bobot'];

                                        // menjumlahkan info borang ps dengan bobot
                                        $nilai_angka = $info_borang_ps*$bobot;

                                        $querysimpan = mysqli_query($koneksi, "INSERT INTO nilai_standar VALUES(NULL,'$id_standar','$no_butir_penilaian','$info_borang_ps','$bobot','$nilai_angka')");
                                        if($querysimpan){
                                                header("location:./masukan-elemen-penilaian.php?id_standar=$id_standar");
                                            }else{
                                                echo "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'><i class='fa fa-times'></i></button><strong>Maaf!</strong> anda gagal menyimpan kedalam database.</div>";
                                        }
                                    }
                                ?>
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

<!--data table init-->
<script src="../asset/js/data-table-init.js"></script>

<!--common scripts for all pages-->
<script src="../asset/js/scripts.js"></script>
</body>
</html>
<?php ob_flush(); ?>