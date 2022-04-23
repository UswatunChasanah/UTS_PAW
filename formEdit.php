<!DOCTYPE html>
<html>
<head>
	<title>Form edit</title>
</head>
<body>
	<?php 
		include "koneksi.php";

			$id = $_GET["id_100"];

			$sql = "SELECT * FROM tbl_100 WHERE id_100 = '$id'";
			$hasil = mysqli_query($koneksi,$sql);

			if (!$hasil) {
				echo "Edit gagal";
			}
			
			while ($row = mysqli_fetch_array($hasil)) {
	 ?>
	<form action="edit.php" method="POST">
		<table>
			<input type="hidden" name="id_100" value="<?php echo $row["id_100"] ?>">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama_100" value="<?php echo $row["nama_100"] ?>"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email_100" value="<?php echo $row["email_100"] ?>"></td>
			</tr>
			<tr>
				<td><button type="submit">Edit</button></td>
			</tr>
		</table>
	</form>
	<?php } ?>
</body>
</html>
