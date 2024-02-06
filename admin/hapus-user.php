<?php 
	include('../acai/koneksi.php');
	
	$id_user = $_GET['id_user'];
	$queryhapus = mysqli_query($koneksi, "DELETE FROM user WHERE id_user = $id_user");

	if($queryhapus){
		header("Location:" . $_SERVER['HTTP_REFERER']);
	}else{
		echo "Maaf, data gagal dihapus..";
	}
?>