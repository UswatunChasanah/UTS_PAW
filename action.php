<?php 
	include "koneksi.php";

	$nama = $_POST["nama_100"];
	$email = $_POST["email_100"];

	$sql = "INSERT INTO tbl_100 VALUES (NULL, '$nama', '$email')";
	$hasil = mysqli_query($koneksi,$sql);

	if (!$hasil) {
		echo "Data gagal ditambahkan";
	}
	else{
		echo "Data berhasil ditambahkan";
	}
 ?>