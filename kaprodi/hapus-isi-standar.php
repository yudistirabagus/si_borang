<?php 
	include('../acai/koneksi.php');	

	$id_isi_standar = $_GET['id_isi_standar'];
	$queryhapus = mysqli_query($koneksi, "DELETE FROM isi_standar WHERE id_isi_standar = $id_isi_standar");
	
	if($queryhapus){
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}else{
		echo "Maaf, data gagal dihapus..";
	}
?>