<?php
    $nama_file='Laporan_Nilai_Standar'; // nama file PDF hasil.
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
    <title>Cetak Laporan - Laporan Semua Nilai Standar</title>
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
            width:90%; height: auto;
            padding:5px; border-radius: 3px;
        }
        .tb-nilai {
            margin-top: 1.5em;
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
            <b>LAPORAN SEMUA NILAI STANDAR</b>
        </header>
        <div class="tb-nilai">
            <table class="table">
                <thead>
                    <tr>
                        <th width="4%">No</th>
                        <th>No. Butir Penilaian</th>
                        <th>Informasi Dari Borang Ps</th>
                        <th width="15%">Bobot</th>
                        <th width="10%">Nilai</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include "../acai/koneksi.php";

                        $query2 = mysqli_query($koneksi, "SELECT * FROM nilai_standar ORDER BY id_standar ASC") or die (mysqli_error());
                        if(mysqli_num_rows($query2) == 0){
                            echo "<tr><td colspan='6' align='center'>Belum ada nilai yang masuk</td></tr>";
                        }else{
                            $no=0; // Nomor Urutan
                            while($rw=mysqli_fetch_array($query2)):
                                $no++;
                    ?>
                    <tr>
                        <td align="center"><?php echo $no; ?></td>
                        <td><?php echo $rw['no_butir_penilaian'] ?></td>
                        <td><?php echo $rw['info_borang_ps'] ?></td>
                        <td><?php echo $rw['bobot'] ?></td>
                        <td align="center"><?php echo $rw['nilai_angka'] ?></td>
                    </tr>
                    <?php
                        @$total += $rw['nilai_angka'];
                        endwhile;
                        }  
                    ?>
                    <tr>
                        <td colspan="4" align="center"><b>Total</b></td>
                        <td align="center"><b><?php echo "$total"; ?></b></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>
</div>

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