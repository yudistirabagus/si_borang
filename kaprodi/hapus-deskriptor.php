<?php
	include('../acai/koneksi.php');
	
	$id_deskriptor = $_GET['id_deskriptor'];
	$queryhapus = mysqli_query($koneksi, "DELETE FROM deskriptor WHERE id_deskriptor = $id_deskriptor");
	
	if($queryhapus){
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}else{
		echo "Maaf, data gagal dihapus..";
	}
?>