<?php 
	include('../acai/koneksi.php');
	
	$id_standar = $_GET['id_standar'];
	$queryhapus = mysqli_query($koneksi, "DELETE FROM standar WHERE id_standar = $id_standar");

	if($queryhapus){
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}else{
		echo "Maaf, data gagal dihapus..";
	}
?>