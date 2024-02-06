<?php
    $nama_file='Laporan_Semua_Standar_dan_Soal'; // nama file PDF hasil.
    define('_MPDF_PATH','../asset/MPDF57/');
    include(_MPDF_PATH . "mpdf.php");

    $mpdf=new mPDF('utf-8', 'A4');
    ob_start(); 

    $mpdf->useGraphs = true;

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
    		background-color: #FFF; font-size: 11px;
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
    		width:95%; height: auto;
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
            border-top: 5px solid #404040; font-size: 10px;
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
            $query = mysqli_query($koneksi, "SELECT * FROM isi_standar ORDER BY id_standar ASC") or die (mysqli_error());
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
</div>
</div>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../asset/js/jquery-1.10.2.min.js"></script>

<?php
    $html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
    ob_end_clean();

    //Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
    $mpdf->WriteHTML(utf8_encode($html));
    $mpdf->Output($nama_dokumen.".pdf" ,'I');
    exit;
?>
</body>
</html>