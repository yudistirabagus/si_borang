<?php
    session_start();
    ob_start();
    
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

    <!--common style-->
    <link href="../asset/css/style.css" rel="stylesheet">
    <link href="../asset/css/style-responsive.css" rel="stylesheet">

    <script type="text/javascript" src="../asset/tinymce/tinymce.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="../asset/js/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $("input[name='hide-show']").click(function () {
                if ($("#Yes").is(":checked")) {
                    $("#tampilkan").show();
                } else {
                    $("#tampilkan").hide();
                }
            });
        });
    </script>
    <style type="text/css">
        .p-left {
            margin:.5em 0; padding-left: 2em;
        }
        .p-left-tt {
            margin-left: 2em;
        }

        .btn-lf {padding-left: 1em;}
        .sub-p {margin-left: 2em; margin-top: .5em;}

        .p-left-ttt {
            margin-left: 4em;
        }
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
                $id_soal = $_GET['id_soal'];
                
                $query = mysqli_query($koneksi, 
                    "SELECT * FROM standar 
                    INNER JOIN isi_standar 
                    INNER JOIN soal
                    WHERE standar.id_standar='$id_standar'
                    AND isi_standar.id_isi_standar='$id_isi_standar' AND soal.id_soal='$id_soal'");
                $res = mysqli_fetch_array($query);
            ?>

            <!-- page head start-->
            <div class="page-head">
                <h3>Jawab Soal</h3>
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
                                    <b><?php echo $res['isi_standar'] ?></b>
                                </div>
                                <div class="form-group p-left p-left-tt">
                                    <?php echo $res['soal_standar']; ?>
                                </div>
                                <form action="" method="POST">
                                    <input type="hidden" name="id_soal" value="<?php echo $res['id_soal']; ?>">
                                    <div class="form-group p-left p-left-ttt" id="tampilkan">
                                        <textarea class="form-control" type="text" name="jawaban"><?php echo $res['jawaban']; ?></textarea>
                                    </div>
                                    <div class="form-group p-left p-left-ttt">                                        
                                        <button type="submit" class="btn btn-info m-b-10" name="edit"><i class="fa fa-save"></i> Simpan</button>
                                        <a href="soal-standar.php?id_standar=<?php echo "$id_standar" ?>" class="btn btn-default m-b-10"><i class="fa fa-refresh"></i> Kembali</a>
                                    </div>
                                </form>
                                <?php
                                    if(isset($_POST['edit'])){
                                        $id_standar = $_GET['id_standar'];
                                        $id_soal = $_POST['id_soal'];
                                        $jawaban = $_POST['jawaban'];                                        
                                        $queryupdate = mysqli_query($koneksi, "UPDATE soal SET jawaban='$jawaban' WHERE id_soal = $id_soal");
                                            if($queryupdate){
                                                header ("location:./soal-standar.php?id_standar=$id_standar");
                                            }else{
                                                echo "<div class='alert alert-block alert-danger fade in'>
                                                <button data-dismiss='alert' class='close close-sm' type='button'><i class='fa fa-times'></i></button><strong>Maaf!</strong> anda gagal menyimpan kedalam database.</div>";
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

<!--summernote-->
<script src="../asset/js/summernote/dist/summernote.min.js"></script>

<!--common scripts for all pages-->
<script src="../asset/js/scripts.js"></script>

<script type="text/javascript">
        tinymce.init({
        selector: "textarea",
        height: 400,
        menubar: "false",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste responsivefilemanager"
        ],
        toolbar: "insertfile undo redo | bold italic | table | alignleft aligncenter alignright alignjustify | styleselect | bullist numlist outdent indent | link image | code",
        image_advtab: true,
        external_filemanager_path:"../asset/filemanager/",
        filemanager_title:"Universitas Bina Darma Palembang",
        external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
    });
</script>
</body>
</html>
<?php ob_flush(); ?>