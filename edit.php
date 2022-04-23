<?php 
	include "koneksi.php";

	$id = $_POST["id_100"];
	$nama = $_POST["nama_100"];
	$email = $_POST["email_100"];

	$sql = "UPDATE tbl_100 SET nama_100 = '$nama', email_100 = '$email' WHERE id_100 = '$id' ";
	$hasil = mysqli_query($koneksi,$sql);
	if (!$hasil) {
		echo "gagal";
	}
	else{
		echo "berhasil";
	}
?>