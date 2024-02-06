<?php
    header ("Content-Type:application/msword");
    header ("Expires:0");
    header ("Cache-Control:must-revalidate, post-check=0, pre-check=0");
    header ("Content-Disposition: attachment; Filename=Cetak_Laporan_-_Soal_Standar.doc");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan - Soal Standar</title>
    <!-- right slidebar -->
    <link href="../asset/css/slidebars.css" rel="stylesheet">

    <!-- switchery -->
    <link href="../asset/js/switchery/switchery.min.css" rel="stylesheet" type="text/css" media="screen"/>

    <!-- common style -->
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
            background-color: #FFF; font-size: 12px;
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
            margin-left: 5em; margin-bottom: 11px;
        }
        .err {
            color: #FF0000; margin-left: 2.8em;
            letter-spacing: 1px; 
        }
    </style>
</head>

<body>
<?php
    include "../acai/koneksi.php";
    $id_standar = $_GET['id_standar'];
    $query = mysqli_query($koneksi, "SELECT * FROM standar WHERE id_standar='$id_standar'");
    $res = mysqli_fetch_array($query);
?>
<div class="cetak">
    <section class="panel">
        <header class="panel-heading head-border">
            <b><?php echo $res['nama_standar']; ?></b>
        </header>
        <?php
            $query1 = mysqli_query($koneksi, "SELECT * FROM isi_standar WHERE id_standar='$id_standar' ORDER BY id_isi_standar ASC") or die (mysqli_error());
            if(mysqli_num_rows($query1) == 0){
                echo "<div class='err' align='center'>Belum ada, isi data standar</div>";
                } else {
                    while($r=mysqli_fetch_array($query1)):
                        $sub_id=$r['id_isi_standar'];
        ?>
        <div class="h-title">
            <b><?php echo $r['isi_standar']; ?></b>
        </div>
        <?php
            $query2 = mysqli_query($koneksi, "SELECT * FROM soal WHERE id_isi_standar='$sub_id'") or die (mysqli_error());
                if(mysqli_num_rows($query2) == 0){
                    echo "<p class='err'>belum ada soal</p>";
                } else {
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
            endwhile;
            }
        ?>
    </section>
</div>
</div>

<!-- Placed js at the end of the document so the pages load faster -->
<script src="../asset/js/jquery-1.10.2.min.js"></script>
</body>
</html>