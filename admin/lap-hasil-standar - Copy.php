<?php
	ini_set("display_errors","Off");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan - Laporan Semua Standar & SoaL</title>
	<!--right slidebar-->
    <link href="../asset/css/slidebars.css" rel="stylesheet">

    <!--switchery-->
    <link href="../asset/js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <!--common style-->
    <link href="../asset/css/style.css" rel="stylesheet">
    <link href="../asset/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    	* {margin:auto; padding:0;}
    	body {
    		background-color: #FFF;
    		color: #565656; margin-top: 1em;
    	}
        .print {
            position: absolute; right: 0;
            margin-top: -10px; margin-right: 5px;
        }
        .head-border {
            margin-bottom: .5em; margin-top: -1em;
            color: #424242;
        }
    	.cetak {
    		width:90%; height: auto;
    		padding:5px; border-radius: 3px;
    	}

        .h-title {
            display: block; margin-left: .8em;
        }
        .title-soal {
            margin-left: 2.4em;
        }
        .jawaban {
            margin-left: 5em; margin-bottom: 10px;
        }
    	@media print {
    		a {
    			display: none
    		}
    		.cetak {
    			border-color: #FFF;
    		}
    		.print, .btn {
    			display: none;
    		}
    	}
    	.err {
    		color: #FF0000; margin-left: 2.8em;
    		letter-spacing: 1px; 
    	}

        hr {
            border-color: #404040;
        }

        .footer {
            margin-top: -1.3em; margin-bottom: 1em;
            border-top: 5px solid #404040; font-size: 13px;
            padding-top: 3px; color: #424242;
        }
    </style>
</head>

<body>
<div class="print">
    <a href="javascript:window.print();" class="btn btn-info m-b-10"><i class="fa fa-print"></i></a>
</div>
<div class="cetak">
	<section class="panel">
		<header class="panel-heading head-border">
			<b>LAPORAN SEMUA STANDAR & SOAL</b>
		</header>
        <?php
            include "../acai/koneksi.php";
            $query = mysqli_query($koneksi, "SELECT * FROM isi_standar ORDER BY isi_standar ASC") or die (mysqli_error());
            if(mysqli_num_rows($query) == 0){
                echo "<div class='err' align='center'>Belum ada, isi data standar</div>";
                }else{
                    while($r=mysqli_fetch_array($query)):
                        $sub_id=$r['id_isi_standar'];
        ?>
        <div class="h-title">
            <?php echo $r['isi_standar'] ?>
        </div>
        <?php
            $query2 = mysqli_query($koneksi, "SELECT * FROM soal WHERE id_isi_standar='$sub_id'") or die (mysqli_error());
                if(mysqli_num_rows($query2) == 0){
                    echo "<p class='err'>belum ada soal</p>";
                }else{
                    while($rw=mysqli_fetch_array($query2)):
        ?>
        <div class="title-soal">
            <?php echo $rw['soal_standar']; ?>
        </div>
        <div class="jawaban">
            <b>Jawaban :</b><br>
            <?php echo $rw['jawaban']; ?>
        </div>
        <?php
            endwhile;
            }
        ?>
        <?php
            endwhile;
            }
        ?>
	</section>
    <hr>
    <div class="footer">
    <b>Borang Akreditasi Program Studi Sistem Informasi UBD - 2017</b>
</div>
</div>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../asset/js/jquery-1.10.2.min.js"></script>
<script src="../asset/js/jquery-migrate.js"></script>
<script src="../asset/js/bootstrap.min.js"></script>
<script src="../asset/js/modernizr.min.js"></script>

<!--Nice Scroll-->
<script src="../asset/js/jquery.nicescroll.js" type="text/javascript"></script>

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
</body>
</html>
<?php

ob_start();
include(dirname(__FILE__).'.lap-hasil-standar.php');
$isi = ob_get_clean();

require_once(dirname(__FILE__).'../asset/html2pdf/html2pdf.class.php');
try{
 $html2pdf = new HTML2PDF('P','A4','en');
 $html2pdf->writeHTML($isi, isset($_GET['vuehtml']));
 $html2pdf->Output('cover.pdf');
}
catch(HTML2PDF_exception $e){
 echo $e;
 exit;
}

?>