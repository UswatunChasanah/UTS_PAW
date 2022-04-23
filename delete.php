<?php 
	include "koneksi.php";

	$id = $_GET["id_100"];

	$sql = "DELETE FROM tbl_100 WHERE id_100 = '$id'";
	$hasil = mysqli_query($koneksi,$sql);

	if (!$hasil) {
		echo "gagal";
	}
	else{
		echo "berhasil";
	}
?>