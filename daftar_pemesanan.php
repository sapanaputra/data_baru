<?php
include "koneksi.php";
?>
<html>
<head>
	<title>Halaman Menu</title>
</head>
<body>
	<center><h3>..::Selamat datang dihalaman utama::..</h3></center>
	
	<center>
	<a href="tambah.php">+ Tambah Makanan</a>
		<table border="1">
			<tr>
				<td>ID Makanan</td>
				<td>Nama Makanan</td>
				<td>Harga</td>
				<td>Keterangan</td>
			</tr>
	<?php
	$sql = mysqli_query($db,"SELECT * FROM tbl_pemesanan");
	while($makanan = mysqli_fetch_array($sql)){
		echo "<tr>";
		echo "<td>".$makanan['id']."</td>";
		echo "<td>".$makanan['nama_makanan']."</td>";
		echo "<td>Rp ".$makanan['harga']."</td>";
		echo "<td><a href=hapus.php?id=$makanan[id]>Hapus</a> | 
		<a href=edit.php?id=$makanan[id]>Edit</a></td>";
	}
	?>
		</table></center>
</body>
</html>