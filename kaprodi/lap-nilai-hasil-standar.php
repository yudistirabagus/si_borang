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
            <table class="table" width="100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="30%">No. Butir Penilaian</th>
                        <th width="30%">Informasi Dari Borang Ps</th>
                        <th width="20%">Bobot</th>
                        <th width="20%">Nilai</th>
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
                        <td align="center"><?php echo $rw['no_butir_penilaian'] ?></td>
                        <td align="center"><?php echo $rw['info_borang_ps'] ?></td>
                        <td align="center"><?php echo $rw['bobot'] ?></td>
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
                    </tr>
                     <?php
                        @$skor =$total*75/100;
                    ?>
                    <tr>
                        <td colspan="4" align="center"><b>Skor Akhir Borang Program Studi</b></td>
                        <td align="center"><b><?php echo "$skor"; ?></b></td>
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