<!DOCTYPE html>
<html>
<head>
	<title>data</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Action</th>
		</tr>
		<?php 
			include "koneksi.php";

			$sql = "SELECT * FROM tbl_100";
			$hasil = mysqli_query($koneksi,$sql);

			while ($row = mysqli_fetch_array($hasil)) {
		 ?>
		 <tr>
		 	<td><?php echo $row["id_100"] ?></td>
		 	<td><?php echo $row["nama_100"] ?></td>
		 	<td><?php echo $row["email_100"] ?></td>
		 	<td>
		 		<a href="formEdit.php?id_100= <?php echo $row["id_100"] ?>">Edit</a>
		 		<a href="delete.php?id_100= <?php echo $row["id_100"] ?>">Delete</a>
		 	</td>
		 </tr>
		<?php } ?>
	</table>
</body>
</html>