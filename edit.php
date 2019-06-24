<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = mysqli_query($db,"SELECT * FROM tbl_pemesanan WHERE id=$id");
	$makanan = mysqli_fetch_array($sql);
?>
<html>
<head>
	<title>Halaman Menu</title>
</head>
<body>
	<center><h3>..::Update Menu Makanan::..</h3></center>
	<form method="post">
		<center><table>
			<tr>
				<td>ID Makanan</td>
				<td><input type="text" name="id" value="<?php echo $makanan['id'];?>"></td>
			</tr>
			<tr>
				<td>Nama Makanan</td>
				<td><input type="text" name="nama_makanan" value="<?php echo $makanan['nama_makanan'];?>"></td>
			</tr>
			<tr>
				<td>Harga (Rp.)</td>
				<td><input type="text" name="harga" value="<?php echo $makanan['harga'];?>"></td>
			</tr>			
			<tr>
				<td><input type="submit" name="submit" value="Upda Makanan"></td>
			</tr>
		</table></center>
	</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		$nama_makanan 	= $_POST['nama_makanan'];
		$harga 			= $_POST['harga'];
		$sql = mysqli_query($db,"UPDATE tbl_pemesanan SET nama_makanan = '$nama_makanan', harga = '$harga' WHERE id='$id'");
		if ($sql) {
			header("location:daftar_pemesanan.php");
		}else{
		echo "gagal diubah coy";
		}
	}
?>