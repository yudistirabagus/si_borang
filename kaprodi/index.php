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

    <!--bootstrap-wysihtml5-->
    <link rel="stylesheet" type="text/css" href="js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

    <!--common style-->
    <link href="../asset/css/style.css" rel="stylesheet">
    <link href="../asset/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
        .panel-body {
            letter-spacing: 1px;
        }
        .panel-body ol {
            margin-left: -1.5em;
        }
        .visi {
            margin-bottom: -0em;
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
                        <h3 class="navigation-title">Menu Utama Kaprodi</h3>
                    </li>
                    <li><a href="./"><i class="fa fa-home"></i> <span>Home</span></a></li>
                    <li>
                        <h3 class="navigation-title">Menu Standar</h3>
                    </li>
                    <li><a href="./standar.php"><i class="fa fa-file-text-o"></i> <span>Standar</span></a></li>
                    <li><a href="./hasil-standar.php"><i class="fa fa-files-o"></i> <span>Hasil Standar</span></a></li>
                    <li>
                        <h3 class="navigation-title">Menu Laporan</h3>
                    </li>
                    <li><a href="./lap-nilai-hasil-standar.php" target="_blank"><i class="fa fa-file-o"></i> <span>Semua Nilai Standar</span></a></li>
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
                        <!-- Classic dropdown -->
                        <li class="dropdown"><a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-align-left"></i> Menu Standar <b class="fa fa-angle-down"></b></a>
                            <ul role="menu" class="dropdown-menu language-switch">
                                <li><a tabindex="-1" href="./standar.php"><i class="fa fa-file-text-o"></i> Standar</a></li>
                                <li><a tabindex="-1" href="./hasil-standar.php"><i class="fa fa-files-o"></i> Hasil Standar</a></li>
                            </ul>
                        </li>
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
                                    <li><a href="../logout.php" onclick="return confirm('Yakin ingin keluar?')"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
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
                <h3>Home</h3>
                <span class="sub-title">Sistem Informasi Borang Akreditasi Program Sarjana</span>
                <div class="state-information">
                    <div class="state-graph">
                        <div id="balance" class="chart"></div>
                        <div class="info">Statistik Nilai</div>
                    </div>
                </div>
            </div>
            <!-- page head end-->
            
            <!--body wrapper start-->
            <div class="wrapper">
                <div class="row">
                    <div class="col-sm-12">
                        <section class="panel">
                            <div class="panel-body">
                                <h3 align="center" class="visi">Visi dan Misi Universitas Bina Darma</h3>
                                <b>Visi</b>
                                <p>Menjadi Universitas Berstandar Internasional Berbasis Teknologi Informasi Pada Tahun 2025.</p>
                                <b>Misi</b>
                                <ol>
                                    <li>Menyelenggarakan program pendidikan yang berstandar internasional,</li>
                                    <li>Menyelenggarakan proses pembelajaran yang berstandar internasional melalui pemanfaatan teknologi informasi,</li>
                                    <li>Membangun komunitas intelektual yang berkualitas,</li>
                                    <li>Melakukan penelitian yang berstandar internasional,</li>
                                    <li>Melakukan pengabdian guna meningkatkan kemandirian masyarakat,</li>
                                    <li>Menyelenggarakan kerjasama dengan pihak lain yang saling menguntungkan.</li>
                                </ol>
                                <b>Struktur Organisasi Universitas Bina Darma Palembang</b>
                                <p>Struktur organisasi dan organisasi merupakan hubungan erat untuk menciptakan suatu organisasi terlebih dahulu harus disusun struktur organisasi.</p>

                                <center><img src="../asset/img/lain-lain.png"><br>
                                <span>Struktur Organisasi Universitas Bina Darma</span></center>

                                <h3 class="visi">Uraian Tugas dan Tanggung Jawab</h3>
                                <p>Berdasarkan struktur organisasi yang diterapkan pada CV. Auto Plaza Palembang ini maka dapat dikemukakan pula pembagian tugas yang ada dalam perusahaan ini menurut peraturan yang dibuat adalah :</p>
                                <ol>
                                    <li>Rektor adalah pimpinan Universitas.</li>
                                    <li>Wakil Rektor I adalah pembantu pimpinan Universitas di bidang akademik.</li>
                                    <li>Wakil Rektor II adalah pembantu pimpinan Universitas di bidang administrasi dan keuangan.</li>
                                    <li>Lembaga kode etik bertugas memberikan pertimbangan kepada Universitas, apabila terjadi pelanggaran kode etik moral dan akademik yang dilakukan oleh civitas akademika.</li>
                                    <li>Dewan Pertimbangan bertugas memberikan pertimbangan kepada Universitas di bidang non akademik.</li>
                                    <li>Biro Penjaminan Mutu (BPM) : Badan internal Universitas Bina Darma (UBD) yang berfungsi membangun sistem penjaminan mutu akademik di UBD pada setiap sektor di UBD mulai dari program studi, fakultas, pusat pengembangan hingga unit kerja di lingkungan UBD.</li>
                                    <li>SENAT merupakan badan perwakilan tertinggi pada Universitas Bina Darma.</li>
                                    <li>PM Akademik dan SIM merupakan Badan internal Universitas Bina Darma (UBD) yang berfungsi membangun sistem penjaminan mutu akademik di UBD pada setiap sektor di UBD mulai dari program studi, fakultas, pusat pengembangan hingga unit kerja di lingkungan Universitas Bina Darma.</li>
                                    <li>Biro Umum adalah biro yang bertanggung jawab terhadap terciptanya tertib administrasi baik dalam hal perencanaan, pelaksanaan maupun pengendalian seluruh administrasi di Universitas dan terciptanya perencanaan kegiatan di lingkungan Biro Umum.</li>
                                    <li>Biro Umum – bagian administrasi adalah bagian yang bertanggung jawab terhadap ketata usahaan dan pusat pelayanan mahasiswa.</li>
                                    <li>Biro Umum – bagian akreditasi adalah bagian yang bertanggung jawab terhadap dokumentasi, proses dan penjadwalan akreditasi prodi maupun institusi.</li>
                                    <li>Biro Umum – bagian kemahasiswaan bertanggung jawab memonitoring semua kegiatan organisasi kemahasiswaan dan bertanggung jawab terhadap seluruh kegiatan kemahasiswan di Universitas Bina Darma.</li>
                                    <li>Biro Umum – bagian Pengadaan, sarana dan prasarana bertanggung jawab terhadap pengadaan infrastruktur dan sarana prasarana untuk mendukung kegiatan perkuliahan.</li>
                                    <li>Biro Umum – bagian pemasaran bertanggung jawab membuat sistem mekanisme promosi dan rekrutmen mahasiswa baru.</li>
                                    <li>Biro Kerjasama bertanggung jawab terhadap terjalinnya kerjasama dengan pihak eksternal baik dari lokal maupun internasional sehingga dapat meningkatkan pengembangan bagi institusi.</li>
                                    <li>Biro SDM bertugas melaksanakan dan mengkoordinasikan penyiapan pembinaan dan pengelolaan sumber daya manusia.</li>
                                    <li>Biro SDM – Perencanaan dan Pengadaan bertugas melaksanakan dan mengkoordinasikan penyiapan pembinaan dan pengelolaan sumber daya manusia.</li>
                                    <li>Biro SDM – Pengembangan dan Manajemen bertugas melaksanakan dan mengkoordinasikan sistem aplikasi kepegawaian dan dokumentasi kepegawaian.</li>
                                    <li>Biro SDM – Mutasi dan Kepangkatan bertugas melaksanakan dan mengkoordinasikan penyiapan mutasi, kepangkatan dan jenjang akademik.</li>
                                    <li>Biro SDM – Penegakkan Bagian Disiplin, Pensiun dan Penghargaan bertugas melaksanakan dan mengkoordinasikan mengenai penegakan disiplin, pengurusan pensiun dan penghargaan</li>
                                    <li>P3AI bertanggung jawab dalam pengembangan sistem pembelajaran, penelitian dan pengembangannya serta sarana dan media pembelajaran.</li>
                                    <li>BDCTC bertugas mengkoordinasi seluruh kegiatan yang berhubungan dengan training, bursa kerja dan treasure alumni.</li>
                                    <li>Lembaga Penelitian dan Pengabdian Kepada Masyarakat (LPPM) universitas adalah unsur pelaksana akademik yang melaksanakan sebagian tugas pokok dan fungsi universitas di bidang Penelitian dan Pengabdian Kepada Masyarakat.</li>
                                    <li>Unit Program Belajar Jarak Jauh (UPBJJ) adalah unit pelaksana teknis yang bertanggung jawab menyelenggarakan PJJ pada prodi tertentu di UBD.</li>
                                    <li>ELC bertugas menyelenggarakan proses kegiatan belajar mengajar khusus Bahasa Ingrris, menyelenggarakan kursus dan test TOEFL.</li>
                                    <li>BDEC bertugas melaksanakan program dan kegiatan yang terkait dengan pengembangan minat dan budaya kewirausahaan bagi mahasiswa dan alumni sehingga mampu mendorong dan menciptakan wirausaha-wirausaha dari kalangan mahasiswa dan alumni.</li>
                                    <li>BIPA (Bahasa Indonesia bagi Penutur Asing) adalah biro yang menangani program pembelajaran bahasa Indonesia yang dikhususkan untuk warga negara asing di Universitas Bina Darma.</li>
                                    <li>Jurnal Ilmiah (JIT) bertugas mengelola dan mendorong terbitkan majalah berkala yang ada di Universitas Bina Darma.</li>
                                    <li>Fakultas Ilmu Komputer bertugas memimpin Fakultas Ilmu Komputer/ Program Studi Sistem Informasi.</li>
                                    <li>Program Studi Sistem Informasi bertugas memimpin pelaksanaan pendidikan, penelitian, pengabdian kepada masyarakat, kerjasama dan membina sivitas akademika di lingkungan prodi, terutama prodi Sistem Informasi.</li>
                                    <li>Sekretariat bertugas membantu direktur Program dalam hal administrasi, sarana dan prasarana pembelajaran dan informasi akademik.</li>
                                </ol>
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

<!--common scripts for all pages-->
<script src="../asset/js/scripts.js"></script>

<script>
    jQuery(document).ready(function(){
        $('.wysihtml5').wysihtml5();

        $('.summernote').summernote({
            height: 200,                 // set editor height

            minHeight: null,             // set minimum height of editor
            maxHeight: null,             // set maximum height of editor

            focus: true                 // set focus to editable area after initializing summernote
        });
    });
</script>
</body>
</html>