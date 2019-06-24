<html>
<head>
	<title>Halaman Menu</title>
</head>
<body>
	<center><h3>..::Tambah Menu Makanan::..</h3></center>
	<form method="post">
		<center><table>
			<tr>
				<td>ID Makanan</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Nama Makanan</td>
				<td><input type="text" name="nama_makanan"></td>
			</tr>
			<tr>
				<td>Harga (Rp.)</td>
				<td><input type="text" name="harga"></td>
			</tr>			
			<tr>
				<td><input type="submit" name="submit" value="Tambah Makanan"></td>
			</tr>
		</table></center>
	</form>
</body>
</html>
<?php
include 'koneksi.php';
	if (isset($_POST['submit'])) {
		$id 			= $_POST['id'];
		$nama_makanan 	= $_POST['nama_makanan'];
		$harga 			= $_POST['harga'];
		$sql = mysqli_query($db,"INSERT INTO tbl_pemesanan VALUES ('$id','$nama_makanan','$harga')");
		if ($sql) {
			header("location:daftar_pemesanan.php");
		}else{
		echo "gagal disimpan coy";
		}
	}
?>