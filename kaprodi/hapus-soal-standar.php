<?php
	include('../acai/koneksi.php');
	
	$id_soal = $_GET['id_soal'];
	$queryhapus = mysqli_query($koneksi, "DELETE FROM soal WHERE id_soal = $id_soal");
	
	if($queryhapus){
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}else{
		echo "Maaf, data gagal dihapus..";
	}
?>