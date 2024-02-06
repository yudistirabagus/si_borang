<?php
	include('../acai/koneksi.php');
	
	$id_nilai_standar = $_GET['id_nilai_standar'];
	$queryhapus = mysqli_query($koneksi, "DELETE FROM nilai_standar WHERE id_nilai_standar = $id_nilai_standar");
	
	if($queryhapus){
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}else{
		echo "Maaf, data gagal dihapus..";
	}
?>